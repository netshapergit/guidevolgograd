import {vux} from './vux.js'
import { apiService } from './apiservice.js'
import { parseObject } from './utils.js'
import { vSelectMove } from './c_vselect_move.js'
import { planObjectCard } from './c_plan_object_card.js'
import { routeObjectCard } from './c_route_object_card.js'
document.addEventListener('DOMContentLoaded', init)

function init() {

	const App = new Vue({
		el: '#v-search-root',
		name: 'Constructor',
		data() {
			return {
				dragHandler: '',
				drag: false,
				tag: '',
				tags: [],
				shared: vux.state,
				autocompleteItems: [], //!!!
				isAppLoaded: true,
				isFullWidthLayout: false,
				isSearchShowlist: true,
				myRouteDates: vux.state.route.dates,
				pageItems: [],
				myRouteTitle: vux.state.route.title,
				myRoutePlanItems: vux.state.route.planItems,//[],
				//myRouteItems: [],
				myRouteSelectedDay: null,
				myRouteRecommendations: [],
				activeRoute: {
					paths: [],
					common: {
						duration: '',
						distance: ''
					}
				},
				myRouteStartPointsList: [],//myRouteStartPointsList,
				isMyRouteStartPointsListActive: false,
				myRouteStartPoint: vux.state.route.startPoint || null,
				myRouteCurrentDay: 0,
				isPageItemsLoaded: false,				
				mapRouteMode: 'pedestrian',
				isGenerateRouteQuizShowed: false,
				generateRouteQuizQuestions: [], //!!!
				generateRouteQuizSelectedOptions: {
					stime: {type: 'or', items: []},
					paid: {type: 'or', items: []},
					count: {type: 'or', items: []},
					tags: {type: 'and', items: []},
					food: {type: 'or', items: []},
					inoutdoor: {type: 'or', items: []},
					price: {
						min: 0,
						max: 50000,
						range: [0, 50000],
						format: '{value} ₽'
					},
					dates: {
						start: new Date(),
						end: new Date()
					},
					city: null
				},
				dayRouteItems: [],
				isSearchMapLoaded: false,
				recsOptions: {
					radius: {
						min: 500,
						max: 20000,
						range: 500
					},
					prefs: {
						selected: 0,
						newPrefs: [],
						isEnabled: false,
						userPrefs: ''
					}
				},
				isRecsOptionsDropdownShowed: false,
				selectedObject: null,
				userRoutes: [],
				selectedUserRoute: null,
				route: {
					planItems: [],
					routeItems: []
				},
				routeObjects: []
			}
		},
		components: {
			'vselect-move': vSelectMove,
			'plan-card': planObjectCard,
			'route-card': routeObjectCard
		},
		watch: {
			selectedUserRoute(v) {
				if(v) {
					vux.setRoute(v.data)
				} else {
					vux.setRoute(v)
				}
			},
			'shared.route': {
				deep: true,
				handler(v) {
					if(v) {
						console.log('shared.route')
						this.fetchRouteData()
					}
				}
			}
		},
		computed: {
			myRouteItems() {
				return this.currentRoute.routeItems
			},
			currentRoute() {
				
				const route = JSON.parse(JSON.stringify(this.shared.route))
				if(!this.routeObjects.length) return route
				
				route.planItems = route.planItems.map(e => {
					const item = this.routeObjects.find(r => r.id == e)
					if(item) e = item
					return e
				})
				
				/*
				route.routeItems = route.routeItems.map(e => {
					const item = this.routeObjects.find(r => r.id == e)
					if(item) e = item
					return e
				})
				*/
				
				return route
				
			},
			myRoutePlanItemsList() {
				return this.currentRoute.planItems
			},
		  	gqzTagsList() {
				return this.generateRouteQuizQuestions.find(e => e.id == 'tags').variants
			},
			getMyRouteRecommendations() {
				const planRecsIds = this.myRoutePlanItems.reduce((a, b) => {
					if(b.field_recommendations) {
						const bRecs = b.field_recommendations.split(',').map(e => e.trim())
						if(bRecs.length) a.push(...bRecs)
					}
					return a
				}, [])
				
				const myRouteObjects = this.myRouteItems.reduce((a, b) => {
					a.push(...b.items)
					return a
				}, [])
				
				const myRouteRecsIds = myRouteObjects.reduce((a, b) => {
					if(b.field_recommendations) {
						const bRecs = b.field_recommendations.split(',').map(e => e.trim())
						if(bRecs.length) a.push(...bRecs)
					}
					return a
				}, [])
				
				const uniqueRecsIds = Array.from(new Set([...planRecsIds, ...myRouteRecsIds]))
				
				const myRouteObjectsIds = myRouteObjects.map(e => e.id)
				const planObjectsIds = this.myRoutePlanItems.map(e => e.id)
				const combinedObjectsIds = [...myRouteObjectsIds, ...planObjectsIds]
				
				
				
				const filteredUniqueRecsIds = uniqueRecsIds.filter(e => {
					if(combinedObjectsIds.includes(e)) return false
					return true
				})
				
				//console.log({combinedObjectsIds, filteredUniqueRecsIds})
				
				//console.log({planRecsIds, myRouteObjects})
				
				const recsItems = window.SEARCH_ITEMS.filter(e => {
					return filteredUniqueRecsIds.includes(e.item_data.id)
				}).map(e => e.item_data)
				
				//console.log('getMyRouteRecommendations', recsItems)
				
				if(recsItems.length) {
					return recsItems
				}
				return []
			},
			getMyRouteNearRecommendations() {
				if(!this.isSearchMapLoaded) return []
				const radius = this.recsOptions.radius.range
				//console.log({radius})
 				const recsIds = this.calcNearRecs(radius)
				
				const serviceRecs = this.getMyRouteRecommendations
				const serviceRecsIds = serviceRecs.map(e => e.id)
				
				const filteredRecsIds = recsIds.filter(e => !serviceRecsIds.includes(e)) 
				
				const recs = window.SEARCH_ITEMS.filter(e => {
					return filteredRecsIds.includes(e.item_data.id) && e.item_data.layout_id != '17'
				}).map(e => e.item_data)
				
				let combinedRecs = [...this.getMyRouteRecommendations, ...recs]
				
				if(this.recsOptions.prefs.isEnabled) {
					if(this.recsOptions.prefs.selected == 1 && this.recsOptions.prefs.newPrefs.length) {
						combinedRecs = combinedRecs.filter(e => {
							return e.field_tags.split(',').map(t => t.trim().toLowerCase()).some(x => {
								return this.recsOptions.prefs.newPrefs.map(a => {
									return a.trim().toLowerCase()
								}).includes(x)
							})
						})
					} else {
						if(this.recsOptions.prefs.userPrefs.length) {
							combinedRecs = combinedRecs.filter(e => {
								return e.field_tags.split(',').map(t => t.trim().toLowerCase()).some(x => {
									return this.recsOptions.prefs.userPrefs.map(a => {
										return a.trim().toLowerCase()
									}).includes(x)
								})
							})
						}
					}
				}
				
				//console.log({combinedRecs})
				return combinedRecs
			},
		  	myRouteTitleInputSize() {
				//console.log(this.myRouteTitle)
				return this.myRouteTitle ? this.myRouteTitle.length : 5
			},
			totalBudget() {
				return this.myRouteItems.reduce((a, b) => {
					const budget = b.budget.reduce((ba, bb) => {
						ba += bb.price ? Number(bb.price) : 0
						return ba
					}, 0)
					const tickets = b.items.reduce((ba, bb) => {
						ba += bb.field_prices ? Number(bb.field_prices) : 0
						return ba
					}, 0)
					a += tickets + budget
					return a
				}, 0)
			},
		  	itemsToWatch() {
				return this.myRouteItems.map(e => ({items: e.items, date_id: e.date_id}))
			},
		    itemsToDraw() {
				let myRouteItems = this.myRouteItems
				if(this.myRouteSelectedDay !== null) {
					myRouteItems = myRouteItems.filter((e,i) => i == this.myRouteSelectedDay)
				}
				return myRouteItems.reduce((a,b) => {
					a.push(...b.items)
					return a
				}, [])
			},
			filteredTags() {
				return this.autocompleteItems.filter(i => {
					return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
				})
			},
			isRouteGenerationEnabled() {
				return true
				if(this.generateRouteQuizSelectedOptions.stime.items.length && this.generateRouteQuizSelectedOptions.tags.items.length > 0) return true
				return false
			},
			myRouteFullDurationText() {
				const myRouteItemsDuration = this.pageItems.reduce((a, b) => a + (b.field_event_duration ? Number(b.field_event_duration) : 0), 0)
				if(this.activeRoute.common.duration.value) {
					const fullTime = (myRouteItemsDuration * 60 * 60 + this.activeRoute.common.duration.value) / 60 / 60
					const hours = Math.trunc(fullTime)
					const minutes = Math.round(((fullTime - hours) % 1) * 60)
					return `${hours}ч ${minutes}мин` 
				}
				return myRouteItemsDuration
			},
			myRoutePaidItems() {
				return this.pageItems.filter(e => e.field_prices > 0)
			},
			myRoutePaidLink() {
				if(this.myRoutePaidItems.length > 0) {
					const baseURL = 'https://vdnh.ru/selections/kupit-bilet/?show_ticket_widget=Y&tickets='
					const ticketsIDs = this.myRoutePaidItems.map(e => e.field_vdnh_tickets).join()
					return baseURL + ticketsIDs
				}
				return '#'
			},
			myRouteStartPointText() {
				if(this.myRouteStartPoint) return this.myRouteStartPoint.name
				return 'Откуда построить маршрут?'
			},
			myRoutePointsCountText() {
				let count = this.pageItems.length
				if(count == 1) {
					return count + ' точка'
				}
				if(count > 1 && count < 5) {
					return count + ' точки'
				}
				if(count > 4) {
					return count + ' точек'
				}
				return count
			},
			pointList: {
				get() {
					//console.log(qstore.state.myRoute.items)
					//return qstore.state.myRoute.items
				},
				set(value) {
					//console.log(value.map(e => e.field_header))
					//qstore.setMyRouteItems(value)
				}
			}
		},
		methods: {
			moveItem({item, dayId}) {
				console.log(item, dayId)
			},
			removeRouteItem(id) {
				vux.removeItemFromRouteById(id)
			},
			removeItemFromMyRouteByID(itemId) {
				console.log(itemId)
			},
			moveItemToDay(item, fromDay, toDay) {
				vux.moveItemToDay(item, fromDay, toDay)
			},
			addItemToMyRouteFromPlan({itemId, dayId}) {
				//console.log(itemId, dayId)
				vux.addItemToRouteFromPlan(itemId, dayId)
			},
			myRouteItemWorkloadClass() {
				return ''
			},
			getDayRouteInfo() {
				return ''
			},
			async createOrUpdateRoute() {
				try {
					console.log('createOrUpdateRoute', this.shared.route)
					const data = await apiService.routes.createOrUpdate({data: this.shared.route})
					const routeData = parseObject(data.data, {})
					routeData.id = data.id
					console.log(routeData)
					vux.setRoute(routeData)
					noti(true, 'Сохранено')
				} catch(err) {
					console.log(err)
					noti(false, 'Ошибка')
				}
			},
			async fetchMyRoutes() {
				try {
					
					const data = await apiService.user.routes()
					console.log('user routes', data)
					this.userRoutes = data.map(e => {
						e.data = parseObject(e.data, {})
						return e
					})
					//noti(true, 'Сохранено')
				} catch(err) {
					console.log(err)
					//noti(false, 'Ошибка')
				}
			},
			onMyRoutePlanItemsAdd() {
				
			},
			isMyRouteItemHasImg() {},
			myRouteItemImgSrc() {},
			getItemObjectType() {},
			/*
			setMyRouteTitle: debounce(function(evt) {
				qstore.setMyRouteTitle(evt.target.value)
			},1000),
			*/
			setMyRouteDays() {
				if(!this.myRouteDates.start || !this.myRouteDates.end) return
				const diffInMs = new Date(this.myRouteDates.end) - new Date(this.myRouteDates.start)
				const diffInDays = diffInMs / (1000 * 60 * 60 * 24)
				//console.log(diffInDays + 1)
				vux.setMyRouteDates(this.myRouteDates)
				vux.setMyRouteDaysObj(diffInDays + 1)
			},
			scrollToList() {
				return false
			},
			setMyRouteTitle() {
				return false
			},
			getDateText(date) {
				return new Date(date).toLocaleString('default', { month: 'long', day: 'numeric' })
			},
			removeItemFromMyRoutePlanByID(itemId) {
				console.log(itemId)
				vux.removeRoutePlanItem(itemId)
			},
			async fetchRouteData() {
				try {
					if(this.shared.route) {
						//console.log()
						const items = this.shared.route.planItems
						const ids = items.join(',')
						const params = {
							'filter': {
								'id': ids
							},
							'select': 'id,alias,field_image,field_header,parent_page_id,field_gallery,field_coords'
						}
						const data = await apiService.pages.get(params)
						console.log('fetchRouteData', data)
						this.routeObjects = data.data
					}
				} catch(err) {
					console.log(err)
				}
			}
		},
		mounted() {
			console.log('mounted')
			this.fetchMyRoutes()
			this.fetchRouteData()
			//vux.setRoute(null)
		}
	})
	
}