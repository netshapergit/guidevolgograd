import {apiService} from './apiService.js'

export const pagesTree = {
    name: 'pages-tree',
	props: {
		item: {
            required: true
        }
	},
	data() {
        return {
            isSubpagesShowed: true,
            pagination: null,
            isSelectedToRemove: false
        }
    },
    computed: {
        activeStatus() {
            return !!Number(this.item.active)
        }
    },
    methods: {
        async changeActiveStatus(event) {
            if(this.activeStatus) {
                this.item.active = '0'
            } else {
                this.item.active = '1'
            }
            try {
                await apiService.pages.update(this.item.id, {
                    active: this.item.active
                })
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
        removePage(_, itemId = null) {
            this.$emit('remove-page', itemId ? itemId : this.item.id)
        },
        showHideSubPages() {
            if(this.item.sub_pages) {
                this.isSubpagesShowed = !this.isSubpagesShowed
            } else {
                if(this.item.sub_pages_count) {
                    this.fetchSubPages()
                }
            }
        },
        async fetchSubPages() {
            try {
                const params = {
                    id: this.item.id,
                    page: this.pagination ? this.pagination.current_page + 1 : 1
                }
                let action = '/admin/page-subpages'

                const paramsObj = Qs.stringify(params, { 
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
                const {data, ...pagination} = await res.json()
                //const currentPage = data.find(e => e.id == this.item.id)
                this.pagination = pagination
                if(this.item.sub_pages) {
                    this.item.sub_pages.push(...data)
                } else {
                    this.$set(this.item, 'sub_pages', data)
                }
            } catch(err) {
                console.log(err)
            }
        }
    },
    template: `
<div class="av2-page-item">
    <div class="av2-page-card" :class="{'av2-page-card--toremove': isSelectedToRemove}">
        <div class="av2-page-card__block av2-page-card__block--id">
            <button class="av2-page-card__spbtn" @click.stop="showHideSubPages" v-show="item.sub_pages_count">v</button>
            {{ item.id }}
        </div>
        <div class="av2-page-card__block av2-page-card__block--title">
            <a :href="'/admin/pages-list/' + item.id">{{ item.field_header }}</a>
        </div>
        <div class="av2-page-card__block av2-page-card__block--layout">
            {{ item.layout.name }}
        </div>
        <div class="av2-page-card__block av2-page-card__block--activity">
            <div class="edit-form-item--checkbox">
                <input type="checkbox" :id="item.id + 'as'" :checked="activeStatus" @change="changeActiveStatus">
                <label :for="item.id + 'as'">
                    <span class="checkbox-switcher"></span>
                </label>
            </div>
        </div>
        <div class="av2-page-card__block av2-page-card__block--actions">
            <a :href="'/admin/pages-list/' + item.id">Редактировать</a>
            <button class="av2-page-card__delete" @click.stop="removePage">
                <svg xmlns="http://www.w3.org/2000/svg" height="448pt" viewBox="-69 0 448 448.00446" width="448pt"><path d="m283.429688 45.714844h-73.140626v-18.285156c0-15.125-12.304687-27.429688-27.429687-27.429688h-54.855469c-15.125 0-27.429687 12.304688-27.429687 27.429688v18.285156h-73.144531c-15.125 0-27.42578175 12.304687-27.42578175 27.429687v45.710938h18.28515575v301.71875c0 15.125 12.300782 27.429687 27.425782 27.429687h219.429687c15.125 0 27.429688-12.304687 27.429688-27.429687v-301.71875h18.285156v-45.710938c0-15.125-12.304687-27.429687-27.429687-27.429687zm-164.570313-18.285156c0-5.042969 4.097656-9.144532 9.144531-9.144532h54.855469c5.046875 0 9.144531 4.101563 9.144531 9.144532v18.285156h-73.144531zm155.429687 393.144531c0 5.046875-4.097656 9.144531-9.144531 9.144531h-219.429687c-5.042969 0-9.140625-4.097656-9.140625-9.144531v-301.71875h237.714843zm18.285157-320.003907h-274.285157v-27.425781c0-5.042969 4.097657-9.144531 9.140626-9.144531h256c5.046874 0 9.144531 4.101562 9.144531 9.144531zm0 0"></path><path d="m210.289062 384.003906c5.054688 0 9.140626-4.089844 9.140626-9.140625v-201.148437c0-5.050782-4.085938-9.144532-9.140626-9.144532-5.054687 0-9.144531 4.09375-9.144531 9.144532v201.148437c0 5.050781 4.089844 9.140625 9.144531 9.140625zm0 0"></path><path d="m155.429688 384.003906c5.054687 0 9.144531-4.089844 9.144531-9.140625v-201.148437c0-5.050782-4.089844-9.144532-9.144531-9.144532-5.050782 0-9.140626 4.09375-9.140626 9.144532v201.148437c0 5.050781 4.089844 9.140625 9.140626 9.140625zm0 0"></path><path d="m100.574219 384.003906c5.054687 0 9.140625-4.089844 9.140625-9.140625v-201.148437c0-5.050782-4.085938-9.144532-9.140625-9.144532-5.054688 0-9.144531 4.09375-9.144531 9.144532v201.148437c0 5.050781 4.089843 9.140625 9.144531 9.140625zm0 0"></path></svg>
            </button>
        </div>
    </div>
    <div class="av2-page-subpages" v-if="item.sub_pages && item.sub_pages.length" v-show="isSubpagesShowed">
        <pages-tree 
            :item="subpage" 
            v-for="subpage in item.sub_pages" 
            :key="subpage.id"
            @remove-page="removePage($event, subpage.id)"
            ></pages-tree>
        <button class="btn btn-xs btn-primary btn-block" v-if="this.pagination && this.pagination.current_page < this.pagination.last_page" @click.stop="fetchSubPages">Загрузить еще</button>
    </div>
</div>
    `
}