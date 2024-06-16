//import { feedItem } from './component_feed_item.js'
import { apiService } from './apiservice.js'
import { objectCard } from './c_object_card.js'
import { getCurrentCity, setCurrentCity, parseObject } from './utils.js'
import { vueUseClickOutside } from './vue_click_outside.js'
	
document.addEventListener('DOMContentLoaded', init)

function init() {
	
	vueUseClickOutside()
	
	const app = new Vue({
		el: '#objects-block',
		name: 'OBJECTS_BLOCK',
		data() {
			return {
				shared: qstore.state,
				items: [],
				requestData: [],
				objects: []
			}
		},
		components: {
			'object-card': objectCard
		},
		watch: {
			
		},
		computed: {
			myRoutePlanItems() {
				return this.shared.myRoute.planItems
			},
			isItemAlreadyInRouteOrPlan() {
				return false
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
			}
		},
		methods: {
			createObjects() {
				this.objects = this.requestData.map(e => {
					e.items = e.items.map(arr => {
						const itemsArr = arr.map(arrItem => {
							return this.items.find(d => d.id == arrItem)
						}).filter(Boolean)
						return itemsArr
					})
					return e
				})
			},
			addItemToMyRoutePlan(item) {
				qstore.addItemToMyRoutePlan(item)
			},
			removeItemFromMyRoutePlanByID(itemId) {
				qstore.removeItemFromMyRoutePlanByID(itemId)
			},
			showOnMap() {},
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
					const url = new URL(location.origin + '/api/pages');
			
					//const params = new URLSearchParams(url.search);
					if(this.selectedCity) {
						url.searchParams.append('city', this.selectedCity.id);
						//params.set("city", this.selectedCity.id);
					}
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const {items, cities} = await req.json()
					//console.log(data)
					this.items = data.data
					
				} catch(err) {
					console.log(err)
				}
			},
			async fetchIds() {
				try {
					const ids = this.requestData.reduce((a,b) => {
						a.push(...b.items.flat())
						return a
					}, []).join()
					const params = {
						'filter': {
							'id': ids
						}
					}
					let data = await apiService.pages.get(params)
					return data
				} catch(err) {
					console.log(err)
				}
			},
			setRoute(items) {
				qstore.setRoute(items)
			}
		},
		async mounted() {
			this.requestData = parseObject(this.$el.dataset.objects, [])
			console.log(this.requestData)
			if(this.requestData.length) {
				const data = await this.fetchIds()
				this.items = data.data.map(e => createGallery(e))
				this.createObjects()
			}
		}
	})
}

function createGallery(e) {
	let gl = e.field_gallery ?? ''
	let regex = /\/(medium|small|large)\/(.*?)\.(jpg|png)/g;
	let matches_imgs = gl.match(regex);

	let items = []
	
	if(matches_imgs) {
		items = matches_imgs.map(m => m.replace(/\/(medium|small|large)\//, ''))
	}
	
	return Object.assign(e, {field_gallery: items})
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