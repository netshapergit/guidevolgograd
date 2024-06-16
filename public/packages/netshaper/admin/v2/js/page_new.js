import { inputString } from './ui/input.string.js'
import { inputHtml } from './ui/input.html.js'
import { inputImage } from './ui/input.image.js'
import { inputFile } from './ui/input.file.js'
import { inputText } from './ui/input.text.js'
import { inputCheckbox } from './ui/input.checkbox.js'
import { inputOption } from './ui/input.option.js'
import { inputOptionParentPage } from './ui/input.option.parent_page.js'
import { inputOptionLayout } from './ui/input.option.layout.js'


import {apiService} from './apiService.js'

document.addEventListener('DOMContentLoaded', function() {

    Vue.use(Toasted)
    //Vue.use(Vue2Editor)
    Vue.use(vue2Dropzone)
 
    const app = new Vue({
        el: '#app',
        data() {
            return {
                page: {
                    layout_id: ''
                },
                user: null,
                queryParams: {
					query: '',
                    cat: '',
                    layout: ''
				},
                layouts: [],
                isLoaded: false,
                updatedFields: []
            }
        },
        components: {
            'input-string': inputString,
            'input-html': inputHtml,
            'input-image': inputImage,
            'input-file': inputFile,
            'input-text': inputText,
            'input-checkbox': inputCheckbox,
            'input-option': inputOption,
            'input-option-pp': inputOptionParentPage,
            'input-option-layout': inputOptionLayout
        },
        computed: {
            selectedLayout() {
                if(!this.layouts || !this.page) return null
                return this.layouts.find(e => e.id == this.page.layout_id)
            },
            sortedLayouts() {
                return this.layouts.sort((a, b) => a.name.localeCompare(b.name));
            },
            additionalFields() {
                if(!this.selectedLayout) return []
                return this.selectedLayout.fields.reduce((a,b) => {
                    const obj = {
                        alias: 'field_' + b.alias,
                        content: this.page['field_' + b.alias],
                        type: b.field_type.alias,
                        name: b.name
                    }
                    if(obj.type == 'option') {
                        obj.selects = b.selects && b.selects.length ? b.selects[0].options : []
                    }
                    a.push(obj)
                    return a
                }, [])
            },
            commonFields() {
                if(!this.page) return []
                return [
                    //{alias: 'id', content: this.page.id, type: 'string', name: 'ID'},
                    
                    {group: 'pp_layout', alias: 'parent_page_id', content: this.page.parent_page_id, type: 'option-pp', layouts: this.layouts, parent_page: this.page.parent_page, name: 'Родительская страница'},
                    {group: 'pp_layout', alias: 'layout_id', content: this.page.layout_id, type: 'option-layout', layout_id: this.page.layout_id, layouts: this.layouts, name: 'Макет'},
                    
                    {alias: 'alias', content: this.page.alias, type: 'string', name: 'Алиас'},
                    {alias: 'title', content: this.page.title, type: 'string', name: 'Заголовок окна'},
                    {alias: 'keywords', content: this.page.keywords, type: 'text', name: 'Keywords'},
                    {alias: 'description', content: this.page.description, type: 'text', name: 'Description'},
                ]
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
					//history.pushState({}, "", url);
                    //this.fetchPage()
				}
			},
            page: {
                deep: true,
                handler(v) {
                    if(v && this.isLoaded) {
                        console.log(v)
                    }
                }
            }
        },
        methods: {
            onSearchInputChange: debounce(async function(evt) {
                console.log(evt.target.value)
                this.queryParams.query = evt.target.value
            }, 1000),
            async savePage() {
                try {
                    const data = this.updatedFields.reduce((a,b) => {
                        Object.assign(a, b)
                        return a
                    }, {})
                    
                    const res = await apiService.pages.create(data)
                    window.location.href = window.location.origin + '/admin/pages-list/' + res.id
                    this.$toasted.info('Сохранено', {
                        duration: 3000
                    })
                } catch(err) {
                    console.log(err)
                    this.$toasted.error('Ошибка', {
                        duration: 3000
                    })
                }
            },
            async deletePage(itemId) {
                console.log('deletePage')
                let isConfirm = confirm("Удалить страницу?")
				if(isConfirm) {
                    try {
                        const action = '/admin/pages/' + itemId
                        const url = new URL(location.origin + action)

                        const res = await fetch(url, {
                            headers: {
                                'Accept': 'application/json'
                            },
                            method: 'DELETE'
                        })
                        
                        const data = await res.json()
                        console.log(data)
                        this.$toasted.info('Страница удалена', {
                            duration: 3000
                        })
                        this.fetchPages()
                    } catch(err) {

                    }
				}
            },
            updateField(alias, value) {
                this.page[alias] = value
                this.updatedFields.push({
                    [alias]: value
                })
                console.log(this.updatedFields)
            },
            async fetchPage() {
                try {
                    
                    let action = '/admin/pages-list/new'
                    
					const url = new URL(location.origin + action)

                    const res = await fetch(url, {
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                    if(!res.ok) throw new Error('Error')
                    const data = await res.json()
                    this.page = data
                    this.$nextTick().then(() => this.isLoaded = true)
                    console.log(this.page)
                    
                } catch(err) {
                    console.log(err)
                }
            },
            async fetchLayouts() {
                try {
                    const params = {
                        page: this.pagination ? this.pagination.current_page + 1 : 1,
                        fields: '1'
                    }

                    let action = '/admin/page-layouts'

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
                    const data = await res.json()
                    
                    this.layouts = data
                    
                } catch(err) {
                    console.log(err)
                }
            },
        },
        mounted() {
            
            try {
                //this.user = parseJSON(this.$el.dataset.user)
                //this.fetchPage()
                this.fetchLayouts()
            } catch(err) {
                console.log(err)
            }
        }
    })
})

function getLastPath(url) {
  url = new URL(url);
  const pathname = url.pathname; 
  const paths = pathname.split("/"); 
  return paths.pop() || paths.pop();
}

function parseJSON(s, d = {}) {
    try {
        if(!s) throw new Error('Empty input')
        return JSON.parse(s)
    } catch(err) {
        console.log(err)
        return d
    }
}

function debounce(fn, wait){
    let timer;
    return function(...args) {
        if(timer) {
            clearTimeout(timer);
        }
        const context = this;
        timer = setTimeout(() => {
            fn.apply(context, args);
        }, wait);
    }
}