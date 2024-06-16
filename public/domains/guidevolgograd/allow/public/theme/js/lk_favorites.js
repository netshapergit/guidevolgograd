import { apiService } from './apiservice.js'
import { feedItem } from './component_feed_item.js'
import { citySwitcher } from './c_city_switcher.js'
import { postView } from './c_post_view.js'
import { TEMPLATES } from './enums.js'
	
document.addEventListener('DOMContentLoaded', init)

function init() {
	
	const app = new Vue({
		el: '.lk',
		name: 'LK_FAVORITES',
		data() {
			return {
				shared: qstore.state,
				items: [],
				selectedItem: null,
				cities: [],
				selectedCity: false,
				citySwitcherActive: false,
				//TEMPLATES,
				filters: {
					templates: {
						items: []
					},
					tags: {
						items: []
					}
				},
				selectedPost: null
			}
		},
		components: {
			'feed-item': feedItem,
			'post-view': postView,
			'city-switcher': citySwitcher
		},
		computed: {
			favCities() {
				const userUniqueFavCities =  this.items.map(e => {
					return e.cities
				}).flat().filter((e, i, a) => i == a.indexOf(e))
				return this.cities.filter(e => userUniqueFavCities.includes(e.id))
			},
			filteredItems() {
				let items = this.items
				
				if(this.selectedCity) {
					items = items.filter(e => e.cities.includes(this.selectedCity.id))
				}
				
				if(this.filters.templates.items.length) {
					items = items.filter(e => this.filters.templates.items.map(e => String(e.id)).includes(e.layout_id))
				}
				
				return items
			},
			userFavTemplates() {
				return TEMPLATES.filter(e => {
					return Array.from(new Set(this.items.map(e => e.layout_id))).includes(e.id)
				})
			}
		},
		methods: {
			removeSelectedPostObjectFromMyRoutePlanById(itemId = false) {
				if(!this.selectedPost) return;
				const objectId = itemId ? itemId : (this.selectedPost.object ? this.selectedPost.object.id : false)
				if(!objectId) return false;
				qstore.removeItemFromMyRoutePlanByID(objectId)
			},
			addSelectedPostObjectToPlanById(itemId = false) {
				if(!this.selectedPost) return;
				const objectId = itemId ? itemId : (this.selectedPost.object ? this.selectedPost.object.id : false)
				if(!objectId) return;
				const itemToAdd = window.SEARCH_ITEMS.find(e => e.item_data.id == objectId)
				if(itemToAdd) {
					qstore.addItemToMyRoutePlan(itemToAdd.item_data)
				}
			},
			setFilter(filterArr, item) {
				const itemIndex = filterArr.findIndex(e => e == item)
				if(itemIndex != -1) {
					filterArr.splice(itemIndex, 1)
				} else {
					filterArr.push(item)
				}
			},
			setSelectedCity(city) {
				this.selectedCity = city
				this.citySwitcherActive = false
			},
			setTag(tag) {
				if(this.filters.tags.items.includes(tag)) {
					this.filters.tags.items = this.filters.tags.items.filter(e => e != tag)
				} else {
					this.filters.tags.items.push(tag)
				}
			},
			async addRemoveFav(pageId) {
				if(!this.shared.user) {
					window.openModale('auth')
					return
				}
				try {
					const url = new URL(location.origin + '/api/users/me/favorites');
					const data = {
						page_id: pageId
					}
					const req = await fetch(url, {
						method: 'POST',
						headers: {
							'Accept': 'application/json',
							'Content-Type': 'application/json'
						},
						body: JSON.stringify(data)
					})
					if(!req.ok) throw new Error('')
					const res = await req.json()
					window.qstore.setUser(res)
					this.fetchData()
					//this.items = this.items.filter(e => this.shared.user.user_favorites.map(f => f.id).includes(e.id))
				} catch(err) {
					console.log(err)
				}
			},
			async fetchData() {
				const _this = this
				try {
					let data = await apiService.user.favorites()
					data = data.map(e => {
						e.cities = []
						if(e.parent_page && e.parent_page.parent_page && e.parent_page.parent_page.layout_id == '7') {
							e.cities.push(e.parent_page.parent_page.id)
						} else if(e.field_cities_ids.length) {
							e.cities = e.field_cities_ids
						}
						return e
					})
					//console.log(_this)
					_this.items = data
					//console.log(this.items)
				} catch(err) {
					console.log(err)
				}
			},
			async fetchCities() {
				try {
					const params = {
						'filter': {
							'layout_id': 7
						},
						'select': 'id, alias, field_header, field_image'
					}
					let data = await apiService.pages.get(params)
					this.cities = data.data
				} catch(err) {
					console.log(err)
				}
			}
		},
		async mounted () {
			this.fetchData()
			this.fetchCities()
		}
	})
}