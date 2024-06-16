import { apiService } from './apiservice.js'
console.log('vux init')

export const vux = { 
	state: {
		route: {
			id: null,
			planItems: [],
			routeItems: [],
			startPoint: null,
			dates: {
				start: null,
				end: null
			},
			title: 'Маршрут'
		},
		selectedCity: null,
		user: null,
		cities: []
	},
	setMyRouteTitle(newTitle) {
		if(newTitle) {
			this.state.route.title = newTitle
			updateLS()
		}
	},
	setMyRouteDates({start, end}) {
		this.state.route.dates.start = start
		this.state.route.dates.end = end
		updateLS()
	},
	setRoute(days) { //[[],[]]
		console.log(days)
		const dates = {start: null, end: null}
		const newDays = days.map((day, i) => {
			
			const D = new Date()
			D.setDate(D.getDate() + i)
			
			if(i == 0) dates.start = D
			if(i == days.length - 1) dates.end = D
			
			const dayObj = {
				date: D,
				date_id: D.toLocaleDateString(),
				items: day,
				budget: [
					{
						category: 'tickets',
						price: 0,
						text: 'Билеты',
						isBlocked: true
					}
				]
			}
			return dayObj 
		})
		
		this.state.route.routeItems.splice(0, this.state.route.routeItems.length)
		this.state.route.routeItems.push(...newDays)
		this.setMyRouteDates(dates)
		console.log(this.state.route)
		updateLS()
		
	},
	setMyRouteDaysObj(days, isFullReset = false) {
		
		
		const newDays = Array(days)
		  	.fill()
		  	.map((_, i) => {
				const D = new Date(this.state.route.dates.start)
				D.setDate(D.getDate() + i)
				const dayObj = {
					date: D,
					date_id: D.toLocaleDateString(),
					items: [],
					budget: [
						{
							category: 'tickets',
							price: 0,
							text: 'Билеты',
							isBlocked: true
						}
					]
				}
				return dayObj 
		  	})
		console.log({newDays})
		console.log('routeItems', this.state.route.routeItems)
		
		if(!isFullReset) {
			if(this.state.route.routeItems.length) {
				newDays.forEach((e,i) => {
					if(this.state.route.routeItems[i]) {
						e.items = this.state.route.routeItems[i].items
					}
				})
			}

			if(this.state.route.routeItems.length > newDays.length) {
				//console.log({rl: this.state.route.routeItems.length, nl: newDays.length})
				const uItems = this.state.route.routeItems.splice(newDays.length, this.state.route.routeItems.length - 1)
				if(uItems.length) {
					uItems.forEach(u => {
						this.state.route.planItems.push(...u.items)
					})
				}
				//console.log(newDays.length - 1, uItems)
			}
		}
		/*
		this.state.route.routeItems.forEach((e, i) => {
			newDays[i].items.push(...e.items)
			console.log({e, ndi: newDays[i].items})
		})
		*/
		console.log({newDays})
		this.state.route.routeItems.splice(0, this.state.route.routeItems.length)
		this.state.route.routeItems.push(...newDays)
																						   
		console.log(this.state.route.routeItems)
		updateLS()
	},
	setMyRouteDays(days) {
		console.log('setMyRouteDays', days)
		if(this.state.route.items.length < days) {
			const newDays = days - this.state.route.items.length
			for(let i = 0; i < newDays; i++) {
				this.state.route.items.push([])
			}
		} else if(this.state.route.items.length > days) {
			console.log('fawwfwwfa')
			this.state.route.items.length = days
		}
		updateLS()
	},
	addRoutePlanItem(objectId) {
		let itemInMyRoute = this.state.route.planItems.find(e => e === objectId)
		if(itemInMyRoute) {
			alert('Уже добавлено в маршрут')
		} else {
			this.state.route.planItems.push(objectId)
			updateLS()
		}
	},
	removeRoutePlanItem(objectId) {
		//console.log(objectId)
		let itemIndex = this.state.route.planItems.findIndex(e => e == objectId)
		if(itemIndex !== -1) {
			console.log('removeItemFromMyRoutePlanByID')
			this.state.route.planItems.splice(itemIndex, 1)
			updateLS()
		}
	},
	moveItemToDay(item, fromDay, dayId) {
		let fromDayObj = this.state.route.routeItems.find(e => e.date_id == fromDay)
		let dayItems = this.state.route.routeItems.find(e => e.date_id == dayId)
		if(dayItems) {
			/*
			if(item.field_gallery && !Array.isArray(item.field_gallery)) {
				let gl = item.field_gallery
				let regex = /\/medium\/(.*?)\.(jpg|png)/g;
				let matches_imgs = gl.match(regex);

				let items = []
				if(matches_imgs) {
					items = matches_imgs.map(m => m.replace('/medium/', ''))
				}
				item.field_gallery = items
			}
			*/
			dayItems.items.push(item)
			const itemToDeleteIndex = fromDayObj.items.findIndex(e => e.objectId == item.objectId)
			if(itemToDeleteIndex != -1) {
				fromDayObj.items.splice(itemToDeleteIndex, 1)
			}
			updateLS()
		}
		
	},
	addItemToMyRouteForced(item, dayId) {
		const itemInMyRoute = this.state.route.routeItems.find(e => e.items.find(x => x.id == item.id))
		const itemInMyRoutePlan = this.state.route.planItems.find(e => e.id == item.id)

		if(itemInMyRoute) {
			alert('Уже добавлено в маршрут')
		} else {
			let dayItems = this.state.route.routeItems.find(e => e.date_id == dayId)
			if(dayItems) {
				if(item.field_gallery && !Array.isArray(item.field_gallery)) {
					let gl = item.field_gallery
					let regex = /\/medium\/(.*?)\.(jpg|png)/g;
					let matches_imgs = gl.match(regex);

					let items = []
					if(matches_imgs) {
						items = matches_imgs.map(m => m.replace('/medium/', ''))
					}
					item.field_gallery = items
				}
				dayItems.items.push(item)
			} else {
				this.setMyRouteDates({start: new Date(), end: new Date()})
				this.setMyRouteDaysObj(1)
				this.state.route.routeItems[0].items.push(item)
			}
			if(itemInMyRoutePlan) this.removeItemFromMyRoutePlanByID(item.id)
			updateLS()
		}
	},
	addItemToRouteFromPlan(item, dayId) {
		let dayItems = this.state.route.routeItems.find(e => e.date_id == dayId)
		const newItem = {
			objectId: item,
			object: null,
			description: {
				text: '',
				audio: ''
			}
		}
		if(dayItems) {
			dayItems.items.push(newItem)
		} else {
			//this.setMyRouteDaysObj(1)
			console.log('no dates')
			this.setMyRouteDates({start: new Date(), end: new Date()})
			this.setMyRouteDaysObj(1)
			console.log(this.state.route.routeItems)
			this.state.route.routeItems[0].items.push(newItem)
		}

		this.removeRoutePlanItem(item)
		updateLS()
	},
	addItemToMyRouteFromPlan2(item, dayId) {
		const itemInMyRoute = this.state.route.routeItems.find(e => e.items.find(x => x.id == item.id))
		const itemInMyRoutePlan = false//this.state.route.planItems.find(e => e.id == item.id)
		console.log({itemInMyRoute, itemInMyRoutePlan})
		if(itemInMyRoute || itemInMyRoutePlan) {
			alert('Уже добавлено в маршрут')
		} else {
			//this.state.route.routeItems
			const newItem = item
			console.log(itemInMyRoute)
			let dayItems = this.state.route.routeItems.find(e => e.date_id == dayId)
			if(dayItems) {
				dayItems.items.push(newItem)
			} else {
				//this.setMyRouteDaysObj(1)
				console.log('no dates')
				this.setMyRouteDates({start: new Date(), end: new Date()})
				this.setMyRouteDaysObj(1)
				console.log(this.state.route.routeItems)
				this.state.route.routeItems[0].items.push(newItem)
			}
			
			this.removeItemFromMyRoutePlanByID(newItem.id)
			updateLS()
		}
	},
	addItemToMyRoute(item) {
		//return 
		let itemInMyRoute = this.state.route.items.find(e => e.id === item.id)
		if(itemInMyRoute) {
			alert('Уже добавлено в маршрут')
		} else {
			if(this.state.route.items.length) {
				this.state.route.items[0].push(item)
			} else {
				this.state.route.items.push([item])
			}
			
			updateLS()
		}
	},
	removeItemFromMyRouteByID(id) {
		let dayIndex = this.state.route.routeItems.findIndex(e => e.items.find(x => x.id == id))
		console.log(id, dayIndex)
		if(dayIndex !== -1) {
			let itemIndex = this.state.route.routeItems[dayIndex].items.findIndex(e => e.id == id)
			console.log({itemIndex})
			if(itemIndex !== -1) {
				const removedItem = this.state.route.routeItems[dayIndex].items.splice(itemIndex, 1)
				this.state.route.planItems.push(removedItem[0])
				updateLS()
			}
			//
			//
		}
	},
	removeItemFromRouteById(id) {
		let dayIndex = this.state.route.routeItems.findIndex(e => e.items.find(x => x.objectId == id))
		console.log(id, dayIndex)
		if(dayIndex !== -1) {
			let itemIndex = this.state.route.routeItems[dayIndex].items.findIndex(e => e.objectId == id)
			console.log({itemIndex})
			if(itemIndex !== -1) {
				const removedItem = this.state.route.routeItems[dayIndex].items.splice(itemIndex, 1)
				this.state.route.planItems.push(removedItem[0].objectId)
				updateLS()
			}
			//
			//
		}
	},
	replaceMyRouteItems(items = []) {
		//this.state.route.items.slice(0, this.state.route.items.length)
		this.state.route.items.length = 0
		this.state.route.items.push(...items.map(e => {
			if(!Array.isArray(e.field_gallery)) {
				let gl = e.field_gallery ? e.field_gallery : ''
				let regex = /\/medium\/(.*?)\.(jpg|png)/g;
				let matches_imgs = gl.match(regex);

				let items = []
				if(matches_imgs) {
					items = matches_imgs.map(m => m.replace('/medium/', ''))
				}
				e.field_gallery = items
			}
			return e
		}))
		updateLS()
	},
	setMyRouteItems(items = []) {
		//console.log(items)
		this.state.route.items = items
		updateLS()
	},
	setRoute(route) {
		this.state.route = route
		updateLS()
	},
	setMyRouteStartPoint(point) {
		this.state.route.startPoint = point
		updateLS()
	},
	setUser(user) {
		this.state.user = user
		updateLS()
	},
	async updateUser() {
		try {
			const user = await apiService.user.me()
			this.setUser(user)
		} catch(err) {
			console.log(err)
			this.setUser(null)
		}
	},
	async updateCities() {
		try {
			const {data} = await apiService.cities.data()
			this.setCities(data)
		} catch(err) {
			console.log(err)
			this.setCities([])
		}
	},
	setSelectedCity(data) {
		this.state.selectedCity = data
		updateLS()
	},
	setCities(data) {
		this.state.cities = data
	},
	setState(state) {
		this.state = state
	},
	updateLS() {
		updateLS()
	}
}

const LS = window.localStorage

if(LS.getItem('vux')) {
	vux.setState(JSON.parse(LS.getItem('vux')))
}

function updateLS() {
	console.log('vux updated', vux.state)
	LS.setItem('vux', JSON.stringify(vux.state))
}

window.addEventListener('storage', function(e) {
	//console.log(e)
})

function createRouteItem(object) {
	return {
		object: object,
		id: object.id,
		description: {
			text: '',
			audio: ''
		}
	}
}

function createGallery(e) {
	console.log(e)
	let gl = e.field_gallery
	let regex = /\/medium\/(.*?)\.jpg/g;
	let matches_imgs = gl.match(regex);

	let items = []
	if(matches_imgs) {
		items = matches_imgs.map(m => m.replace('/medium/', ''))
	}
	return Object.assign(e, {field_gallery: items})
}