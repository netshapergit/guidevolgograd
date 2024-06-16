import { pagesTree } from './pages.tree.js'

document.addEventListener('DOMContentLoaded', function() {

    Vue.use(Toasted)
 
    const app = new Vue({
        el: '#app',
        data() {
            return {
                pages: [],
                categories: [],
                user: null,
                queryParams: {
					query: '',
                    cat: '',
                    layout: ''
				},
                pagination: null,
                layouts: []
            }
        },
        components: {
            'pages-tree': pagesTree
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
            setPage(pageNumber) {
				if(pageNumber == this.pagination.current_page) return;
				this.queryParams.page = pageNumber
				//this.fetchCatalog()
			},
            onSearchInputChange: debounce(async function(evt) {
                console.log(evt.target.value)
                //this.fetchPages(evt.target.value)
                this.queryParams.query = evt.target.value
            }, 1000),
            async deletePage(itemId) {
                console.log('deletePage')
                let isConfirm = confirm(`Удалить страницу id:${itemId} ?`)
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
            async fetchPages() {
                try {
                    const params = {
                        page: this.pagination ? this.pagination.current_page + 1 : 1
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
            },
            async fetchLayouts() {
                try {
                    const params = {
                        page: this.pagination ? this.pagination.current_page + 1 : 1
                    }
                    let action = '/admin/page-layouts'
                    //if(query.length > 2) {
                    //    this.queryParams.query = query
                    //}

                    const paramsObj = Qs.stringify(Object.assign(this.queryParams, params), { 
						skipNulls: true,
						encode: false
					})

					const url = new URL(location.origin + action)
					const searchParams = new URLSearchParams(paramsObj).toString()
					//url.search = paramsObj

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
			setQueryParams() {
				//console.log(new URLSearchParams(location.search).toString())
				const initialQueryParams = Qs.parse(new URLSearchParams(location.search).toString())
				console.log(initialQueryParams)
				for(let key in initialQueryParams) {
					if(this.queryParams.hasOwnProperty(key)) {
						//console.log(key)
						this.queryParams[key] = initialQueryParams[key]
					}
				}  
			}
        },
        computed: {
            newPageCat() {
                return this.queryParams.cat
            },
            sortedLayouts() {
                return this.layouts.sort((a, b) => a.name.localeCompare(b.name));
            }
        },
        mounted() {
            this.setQueryParams()
            try {
                //this.user = parseJSON(this.$el.dataset.user)
                this.fetchPages()
                this.fetchLayouts()
            } catch(err) {
                console.log(err)
            }
        }
    })
})

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