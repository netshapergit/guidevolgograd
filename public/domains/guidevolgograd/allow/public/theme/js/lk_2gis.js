import { apiService } from './apiservice.js'
import { feedItem } from './component_feed_item.js'
import { postView } from './c_post_view.js'
import { TEMPLATES } from './enums.js'
import { citySwitcher } from './c_city_switcher.js'
	
document.addEventListener('DOMContentLoaded', init)

function init() {
	
	const app = new Vue({
		el: '.lk',
		name: 'LK_2GIS',
		data() {
			return {
				shared: qstore.state,
				items: [],
				totalItems: 0,
				cities: [],
				selectedCity: false,
				citySwitcherActive: false,
				TEMPLATES,
				selectedTemplate: null,
				tplSwitcherActive: false,
				layoutSwitcherActive: false,
				selectedLayout: null,
				searchQuery: '',
				pagination: {
					current_page: 1
				},
				lastCreatingResults: null,
				selectedItems: []
			}
		},
		components: {
			'city-switcher': citySwitcher
		},
		computed: {
			citiesList() {
				return this.citiesData
			},
			pagesLength() {
				return Math.ceil(this.totalItems / 10)
			}
		},
		methods: {
			selectAll() {
				if(this.selectedItems.length == this.items.length) {
					this.selectedItems = []
				} else {
					this.selectedItems = this.items
				}
			},
			setPage(pageNumber) {
				this.pagination.current_page = pageNumber
				this.fetchData()
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
			async fetchData() {
				if(!this.searchQuery || !this.selectedCity) return;
				try {
					const query = this.selectedCity.city + ' ' + this.searchQuery
					const req = await fetch(location.origin + '/api/2gis/search?search=' + query + '&page=' + this.pagination.current_page)
					const data = await req.json()
					console.log(data)
					if(data.meta.error) throw new Error(data.meta.error.message)
					this.items = data.result.items
					this.totalItems = data.result.total
				} catch(err) {
					console.log(err)
				}
			},
			async create(event, item = false) {
				if(!this.selectedCity || !this.selectedTemplate || !this.selectedLayout) return;
				try {
					const reg = /[^a-zA-Zа-яА-Я0-9 ]+/g
					const data = {
						parent_page_id: this.selectedTemplate.id,
						layout_id: this.selectedLayout.id,
						items: []
					}
					
					if(item) {
						data.items.push({
							field_header: item.name,
							alias: item.alias ? item.alias.replaceAll('_', '-') : cyrillicToTranslit().transform(item.name.replace(reg, ''), '-').toLowerCase(),
							field_2gis_id: item.id,
							field_coords: Object.values(item.point).join(),
							field_address: (item.full_address_name ? item.full_address_name : item.address_name) || '',
							field_summary: item.description ? item.description : '',
							field_schedule: item.schedule ? JSON.stringify(item.schedule) : '',
							field_cities_ids: this.selectedCity.id,
							field_object_category_id: this.selectedLayout.cat_id,
						})
					} else {
						data.items.push(...this.selectedItems.map(e => {
							const obj = {
								field_header: e.name,
								alias: e.alias ? e.alias.replaceAll('_', '-') : cyrillicToTranslit().transform(e.name.replace(reg, ''), '-').toLowerCase(),
								field_2gis_id: e.id,
								field_coords: Object.values(e.point).join(),
								field_address: (e.full_address_name ? e.full_address_name : e.address_name) || '',
								field_summary: e.description ? e.description : '',
								field_schedule: e.schedule ? JSON.stringify(e.schedule) : '',
								field_cities_ids: this.selectedCity.id,
								field_object_category_id: this.selectedLayout.cat_id,
							}
							return obj
						}))
					}
					console.log('create', data.items)
					//return;
					const req = await fetch(location.origin + '/api/2gis', {
						method: 'POST',
						headers: {
							'Accept': 'application/json',
							'Content-Type': 'application/json'
						},
						body: JSON.stringify(data)
					})
					const res = await req.json()
					if(res.error) throw new Error(res.error.message);
					console.log(res)
					window.noti(true, 'Выполнено')
					this.lastCreatingResults = res
				} catch(err) {
					console.log(err)
					window.noti(false, err.message ? err.message : err)
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
			this.fetchCities()
		}
	})
}