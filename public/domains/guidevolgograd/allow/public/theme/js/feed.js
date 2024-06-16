import { feedItem } from './component_feed_item.js'
import { citySwitcher } from './c_city_switcher.js'
import { getCurrentCity, setCurrentCity } from './utils.js'
import { vueUseClickOutside } from './vue_click_outside.js'
	
document.addEventListener('DOMContentLoaded', init)

function init() {
	
	vueUseClickOutside()
	
	const app = new Vue({
		el: '#feed',
		name: 'FEED',
		data() {
			return {
				shared: qstore.state,
				posts: [],
				cities: [],
				citySwitcherActive: false,
				selectedCity: null,
				selectedPost: false,
				search: '',
				filters: {
					dates: null,
					isDatesFilterShowed: false,
					tags: {
						isShowed: false,
						items: [],
						search: ''
					}
				},
				pageNumber: 1
			}
		},
		components: {
			'feed-item': feedItem,
			'city-switcher': citySwitcher
		},
		watch: {
			sharedSelectedCity(v) {
				this.fetchData()
			},
			async selectedPost(v) {
				if(v) {
					if(v.field_address && !v.object) {
						await this.setSelectedPostMapPoint()
					} 
					if(v.object) {
						const coords = v.object.field_coords.split(',').map(n => Number(n.trim()))
						if(coords.length == 2) {
							this.$nextTick().then(() => {
								this.createPostViewMap(coords)			  
							})
						}
					}
				} else {
					if(window.postViewMap) {
						window.postViewMap.destroy()
						window.postViewMap = null
					}
				}
			}
		},
		computed: {
			sharedSelectedCity() {
				return this.shared.selectedCity
			},
			isItemAlreadyInRouteOrPlan() {
				if(!this.selectedPost) return false;
				if(!this.selectedPost.object) return false;
				const planItems = this.shared.myRoute.planItems
				const routeItems = this.shared.myRoute.routeItems.reduce((a, b) => {
					a.push(...b.items)
					return a
				}, [])
				const combinedItems = [...planItems, ...routeItems]
				const combinedItemsIds = combinedItems.map(e => e.id)
				return combinedItemsIds.includes(this.selectedPost.object.id)
			},
			feedDateFormat() {
				if(!this.filters.dates) return ''
				/*
				const dateStr = '23.10.2023 20:00'
				const [date, time] = dateStr.split(' ')
				const dateArr = date.split('.')
				const timeArr = time.split(':')
				
				const parsedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], timeArr[0], timeArr[1])
				
				const parsedDateText = parsedDate.toLocaleString('default', {month: 'long', day: 'numeric', hour12: false, hour: 'numeric', minute: 'numeric'})
				console.log(parsedDateText)
				*/
				return this.filters.dates.toLocaleString('default', { month: 'long', day: 'numeric', weekday: 'long' })
			},
			filteredPosts() {
				let items = this.posts;
				
				if(this.filters.dates) {
					items = items.filter(e => e.field_event_date && sameDay(new Date(e.field_event_date), this.filters.dates))
				}
				
				if(this.filters.tags.items.length) {
					items = items.filter(e => e.field_tags.split(',').map(t => t.trim()).some(t => this.filters.tags.items.includes(t)) || this.filters.tags.items.includes(e.field_header))
				}
				
				if(this.search) {
					items = items.filter(e => e.field_header && e.field_header.toLowerCase().includes(this.search.toLowerCase()))
				}
				
				 return items
			},
			paginatedPosts() {
				const perPage = 8
				
				return this.filteredPosts.slice(0, this.pageNumber * perPage)
			},
			postsPagesLength() {
				return Math.ceil(this.filteredPosts.length / 8)
			},
			tags() {
				let tags = Array.from(new Set(this.posts.map(e => (e.field_tags.split(',').map(t => t.trim())).concat(e.field_header)).flat()))
				if(this.filters.tags.search) {
					tags = tags.filter(e => e.toLowerCase().includes(this.filters.tags.search.toLowerCase()))
				}
				return tags
			},
			isSelectedPostFavorite() {
				if(!this.selectedPost) return false
				if(!this.shared.user) return false
				return this.shared.user.user_favorites.find(e => e.id == this.selectedPost.id)
			}
		},
		methods: {
			setTag(tag) {
				if(this.filters.tags.items.includes(tag)) {
					this.filters.tags.items = this.filters.tags.items.filter(e => e != tag)
				} else {
					this.filters.tags.items.push(tag)
				}
			},
			feedLoadMore() {
				if(this.pageNumber <= this.postsPagesLength) {
					this.pageNumber++
				}
			},
			async setSelectedPostMapPoint() {
				const address = await geocodeOrderAddress(this.selectedPost.field_address)
				if(!address) return;
				const coords = address.geometry.getCoordinates()
				this.$nextTick().then(() => {
					this.createPostViewMap(coords)
				})
			},
			closeDatesFilterDropdown() {
				if(this.filters.isDatesFilterShowed) this.filters.isDatesFilterShowed = false
			},
			closeTagsFilterDropdown() {
				if(this.filters.tags.isShowed) this.filters.tags.isShowed = false
			},
			removeSelectedPostObjectFromMyRoutePlanById(itemId = false) {
				if(!this.selectedPost) return;
				if(!this.selectedPost.object) return false;
				qstore.removeItemFromMyRoutePlanByID(itemId ? itemId : this.selectedPost.object.id)
			},
			addSelectedPostObjectToPlanById(itemId = false) {
				if(!this.selectedPost) return;
				if(!this.selectedPost.object) return false;
				
				const itemToAdd = window.SEARCH_ITEMS.find(e => e.item_data.id == this.selectedPost.object.id)
				if(itemToAdd) {
					console.log(this.selectedPost.object.id)
					qstore.addItemToMyRoutePlan(itemId ? itemId : itemToAdd.item_data)
				}
			},
			async createPostViewMap(coords) {
				await ymaps.ready()
				initMap(coords)
			},
			closeSelectedPostView() {
				if(this.selectedPost) this.selectedPost = null
			},
			setFeedDateFilter(payload) {
				console.log(payload)
			},
			setSelectedCity(city) {
				/*
				if(!city) {
					this.selectedCity = null
				} else {
					this.selectedCity = city
				}
				*/
				qstore.setSelectedCity(city)
				//setCurrentCity(this.selectedCity)
				this.citySwitcherActive = false
			},
			setFilter(filterArr, item) {
				const itemIndex = filterArr.findIndex(e => e == item)
				if(itemIndex != -1) {
					filterArr.splice(itemIndex, 1)
				} else {
					filterArr.push(item)
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
					//console.log(res)
				} catch(err) {
					console.log(err)
				}
			},
			async fetchData() {
				try {
					const url = new URL(location.origin + '/api/posts');
			
					//const params = new URLSearchParams(url.search);
					if(this.sharedSelectedCity) {
						url.searchParams.append('city', this.sharedSelectedCity.id);
						//params.set("city", this.selectedCity.id);
					}
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const {items, cities} = await req.json()
					//console.log(data)
					this.posts = items
					this.cities = cities
				} catch(err) {
					console.log(err)
				}
			},
		},
		mounted() {
			this.selectedCity = getCurrentCity()
			this.fetchData()
		}
	})
}

function geocodeCheckAddress(res) {
	var obj = res.geoObjects.get(0),
		error, hint;

	if (obj) {
		//console.log(obj)
		// Об оценке точности ответа геокодера можно прочитать тут: https://tech.yandex.ru/maps/doc/geocoder/desc/reference/precision-docpage/
		switch (obj.properties.get('metaDataProperty.GeocoderMetaData.precision')) {
			case 'exact':
				break;
			case 'number':
			case 'near':
			case 'range':
				error = 'Неточный адрес, требуется уточнение';
				hint = 'Уточните номер дома';
				break;
			case 'street':
				error = 'Неполный адрес, требуется уточнение';
				hint = 'Уточните номер дома';
				break;
			case 'other':
			default:
				error = 'Неточный адрес, требуется уточнение';
				hint = 'Уточните адрес';
		}
	} else {
		error = 'Адрес не найден';
		hint = 'Уточните адрес';
	}

	// Если геокодер возвращает пустой массив или неточный результат, то показываем ошибку.
	if (error) {
		console.log(error)
	} else {
		return obj
		//showResult(obj);
	}
}

async function settingsGeocodeAddress(address = '') {
	try {
		console.log(address)

		var request = $('#settingssuggest').val();
		console.log(request)
		// Геокодируем введённые данные.
		let obj = await ymaps.geocode(request)
		let result = geocodeCheckAddress(obj)

		if(result) return result
		throw new Error('')

	} catch(e) {
		console.log(e)
		return []
	}
}

async function geocodeOrderAddress(str = '') {
	try {
		const request = str
		let obj = await ymaps.geocode(request)
		let result = geocodeCheckAddress(obj)
		if(result) return result
		throw new Error('geocode error')
	} catch(e) {
		console.log(e)
		return false
	}
}

async function initMap(center = [55.830572, 37.631125]) {
	
	window.postViewMap = new ymaps.Map('post-view-map', {
		center,
		zoom: 15,
		controls: ['zoomControl']
	}, {
		buttonMaxWidth: 300
	})
	
	const myGeoObject = new ymaps.GeoObject({
		geometry: {
			type: "Point",
			coordinates: center
		}
	})

	postViewMap.geoObjects.add(myGeoObject)
}

function sameDay(d1, d2) {
  return d1.getFullYear() === d2.getFullYear() &&
    d1.getMonth() === d2.getMonth() &&
    d1.getDate() === d2.getDate();
}

function formatDate(date) {
    let diff = new Date() - date; // разница в миллисекундах

    if (diff < 1000) { // меньше 1 секунды
        return 'прямо сейчас';
    }

    let sec = Math.floor(diff / 1000); // преобразовать разницу в секунды

    if (sec < 60) {
        return sec + ' сек. назад';
    }

    let min = Math.floor(diff / 60000); // преобразовать разницу в минуты
    if (min < 60) {
        return min + ' мин. назад';
    }

    // отформатировать дату
    // добавить ведущие нули к единственной цифре дню/месяцу/часам/минутам
    let d = date;
    d = [
        '0' + d.getDate(),
        '0' + (d.getMonth() + 1),
        '' + d.getFullYear(),
        '0' + d.getHours(),
        '0' + d.getMinutes()
    ].map(component => component.slice(-2)); // взять последние 2 цифры из каждой компоненты

    // соединить компоненты в дату
    return d.slice(0, 3).join('.') + ' ' + d.slice(3).join(':');
}