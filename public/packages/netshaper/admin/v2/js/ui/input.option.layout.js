import {apiService} from '../apiService.js'
import {debounce} from '../utils.js'

export const inputOptionLayout = {
	props: {
		item: {
            required: true
        }
	},
	data() {
        return {
            isOpened: false,
            filters: {
                query: ''
            }
        }
    },
    computed: {
        filteredLayouts() {
            let items = this.item.layouts

            if(this.filters.query) {
                items = items.filter(e => 
                    e.name.toLowerCase().includes(this.filters.query.toLowerCase()) ||
                    e.id.includes(this.filters.query.toLowerCase())   
                )
            }

            return items
        },
        selectedLayout() {
            if(!this.item.layouts) return false
            //console.log(this.item.layout_id)
            return this.item.layouts.find(e => e.id == this.item.layout_id)
        }
    },
    methods: {
        setOption(option) {
            this.$emit('input', this.item.alias, option.id)
        }
    },
    template: `
<div class="av2-input">
    <div class="dd">
        <div class="dd-header form-control input-sm" @click.stop="isOpened = !isOpened">
            <template v-if="selectedLayout">
                {{selectedLayout.id}}. {{selectedLayout.name}}
            </template>
            <template v-else>
                Макет
            </template>
        </div>
        <div class="dd-content" :class="{'dd-content--active': isOpened}">
            <div class="dd-content__filters">
                <div class="dd-content__filter">
                    <input class="form-control input-sm" type="text" v-model="filters.query" placeholder="Название, id">
                </div>
            </div>
            <div class="dd-content__list">
                <div class="dd-content__list-item" 
                    :class="{'dd-content__list-item--selected': option.id == selectedLayout && selectedLayout.id}"
                    v-for="option in filteredLayouts" @click.stop="setOption(option)">
                    {{option.id}}. {{option.name}}
                </div>
            </div>
        </div>
    </div>
</div>
    `
}