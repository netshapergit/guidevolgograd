import {apiService} from '../apiService.js'
import {debounce} from '../utils.js'

export const inputOptionParentPage = {
	props: {
		item: {
            required: true
        },
        layouts: {
            default: () => ([])
        }
	},
	data() {
        return {
            isOpened: false,
            pages: [],
            pagination: null,
            queryParams: {
                query: '',
                layout: ''
            },
            layoutsQuery: '',
            newParentPage: null
        }
    },
    computed: {
        options() {
            return this.item.selects
        },
        filteredLayouts() {
            let items = this.item.layouts.filter(e => e.structure == '1')

            if(this.layoutsQuery) {
                items = items.filter(e => 
                    e.name.toLowerCase().includes(this.layoutsQuery.toLowerCase()) ||
                    e.id.includes(this.layoutsQuery.toLowerCase())   
                )
            }

            return items
        }
    },
    watch: {
        queryParams: {
            deep: true,
            handler(v) {
                const url = new URL(location)
                console.log(this.queryParams)
                const paramsObj = Qs.stringify(this.queryParams, { 
                    skipNulls: true,
                    encode: false
                })
                url.search = paramsObj
                this.pagination = null
                //history.pushState({}, "", url);
                this.fetchPages()
            }
        },
    },
    methods: {
        onSearchInputChange: debounce(async function(evt) {
            console.log(evt.target.value)
            //this.fetchPages(evt.target.value)
            this.queryParams.query = evt.target.value
        }, 1000),
        onChange(evt) {
            console.log(evt.target.value)
        },
        setOption(option) {
            this.$emit('input', this.item.alias, option.id)
            this.newParentPage = option
        },
        async fetchPages() {
            try {
                const params = {
                    page: this.pagination ? this.pagination.current_page + 1 : 1,
                    select: 'id,alias,field_header',
                    structure: '1'
                }
                let action = '/admin/pages-list'
                //if(query.length > 2) {
                //    this.queryParams.query = query
                //}

                const paramsObj = Qs.stringify(Object.assign(this.queryParams, params), { 
                    skipNulls: true,
                    encode: false
                })

                const url = new URL(location.origin + action)
                const searchParams = new URLSearchParams(paramsObj).toString()
                url.search = paramsObj

                console.log(url)

                const res = await fetch(url, {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                if(!res.ok) throw new Error('Error')
                const { data, ...pagination } = await res.json()
                if(pagination.current_page == 1) {
                    this.pages = data
                } else {
                    this.pages.push(...data)
                }
                this.pagination = pagination
                console.log(this.pages)
                
            } catch(err) {
                console.log(err)
            }
        }
    },
    template: `
<div class="av2-input">
    <div class="dd">
        <div class="dd-header form-control input-sm" @click.stop="isOpened = !isOpened">
        <template v-if="newParentPage">
            {{newParentPage.id}}. {{newParentPage.field_header}}
        </template>
        <template v-else>
            <template v-if="item.parent_page">
                {{item.parent_page.id}}. {{item.parent_page.field_header}}
            </template>
            <template v-else>
                {{item.name}}
            </template>
        </template>
        </div>
        <div class="dd-content" style="min-width: 400px; min-height: 100px;" :class="{'dd-content--active': isOpened}">
            <div class="dd-content__filters dd-content__filters--g2">
                <div class="dd-content__filter">
                    <input class="form-control input-sm" type="text" :value="queryParams.query" @input="onSearchInputChange" placeholder="Заголовок, id, алиас">
                </div>
                <div class="dd-content__filter">
                    <select class="form-control input-sm" v-model="queryParams.layout">
                        <option value="">Макет</option>
                        <option v-for="option in filteredLayouts" :value="option.id">{{option.name}}</option>
                    </select>
                </div>
            </div>
            <div class="dd-content__list">
                <div class="dd-content__list-item" v-for="option in pages" @click.stop="setOption(option)">
                    {{option.id}}. {{option.field_header}}
                </div>
            </div>
        </div>
    </div>
</div>
    `
}