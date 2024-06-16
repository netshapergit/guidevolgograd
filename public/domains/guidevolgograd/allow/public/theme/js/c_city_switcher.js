export const citySwitcher = {
	props: {
		selectedCity: {},
		cities: {
			default: () => ([])
		}
	},
	data() {
		return {
			citySwitcherActive: false,
			searchQuery: ''
		}
	},
	watch: {
		
	},
	computed: {
		filteredCities() {
			let items = this.cities
			if(this.searchQuery) {
				items = items.filter(e => e.field_header.toLowerCase().includes(this.searchQuery))
			}
			return items
		} 
	},
	methods: {
		setSelectedCity(city) {
			this.$emit('set-item', city)
			this.citySwitcherActive = false
		},
		close() {
			this.citySwitcherActive = false
		}
	},
	mounted() {
		
	},
	template: `
<div class="citysw">
	<div class="citysw-trigger" @click.stop="citySwitcherActive = !citySwitcherActive">
		<template v-if="selectedCity">{{selectedCity.field_header}}</template>
		<template v-else>Все города</template>
	</div>
	<div class="citysw-content" :class="{'citysw-content--active': citySwitcherActive}" v-click-outside="close">
		<div class="citysw-search" v-show="cities.length > 10">
			<input class="citysw-search__input" type="text" v-model="searchQuery" placeholder="Поиск">
		</div>
		<div class="citysw-list">
			<div class="citysw-list__item" :class="{'citysw-list__item--active': !selectedCity}" @click.stop="setSelectedCity(false)">Все города</div>
			<div class="citysw-list__item" 
				 :class="{'citysw-list__item--active': selectedCity && selectedCity.id == city.id}" 
				 @click.stop="setSelectedCity(city)" 
				 v-for="city in filteredCities" 
				 :key="city.id">{{city.field_header}}
			</div>
		</div>
	</div>
</div>
`
}