export const feedItem = {
	props: {
		item: {
			required: true
		},
		tags: {},
		favorites: {
			default: () => ([])
		}
	},
	data() {
		return {
			isOpen: false
		}
	},
	computed: {
		isFavorite() {
			return this.favorites.find(e => e.id == this.item.id)
		},
		itemImgSrc() {
			let imgName = null
			if(this.item.field_image) {
				imgName = this.item.field_image
			} else {
				if(this.item.object && this.item.object.field_image) imgName = this.item.object.field_image
			}
			if(!imgName) return false
			return `/site/data/images/medium/${imgName}`
		},
		itemTags() {
			return this.item.field_tags.split(',').map(e => e.trim())
		},
		bgStyle() {
			return `background: url(${this.itemImgSrc}) no-repeat center / cover;`
		},
		isImgBg() {
			return !!Number(this.item.field_is_img_bg) || this.item.layout_id != '56'
		},
		dateFormatted() {
			if(!this.item.field_event_date) return ''
			const parsedDateText = new Date(this.item.field_event_date).toLocaleString('default', {month: 'long', day: 'numeric', hour12: false, hour: 'numeric', minute: 'numeric'})
			return parsedDateText
		}
	},
	methods: {
		selectPost() {
			this.$emit('select-post', this.item)
		},
		setTag(tag) {
			this.$emit('set-tag', tag)
		},
		isTagSelected(tag) {
			return this.tags.includes(tag)
		},
		addOrRemoveFavorite() {
			this.$emit('add-remove-fav', this.item.id)
		},
	},
	template: `
<div class="feed-item">
	<div class="feed-item__top" @click.stop="selectPost">
		<div class="feed-item__img" v-if="itemImgSrc" :class="{'feed-item__img--nobg': isImgBg}">
			<div class="feed-item__img-bg" :style="bgStyle" v-if="!isImgBg"></div>
			<img :src="itemImgSrc" alt="Путешествия по России">
		</div>
		<div class="feed-item__img feed-item__img--bg" v-else></div>
	</div>
	<div class="feed-item__main">
		<div class="feed-item__header">
			<div class="feed-item__title" @click.stop="selectPost">
				{{item.field_header}}
				<span class="feed-item__date" v-if="item.field_event_date">{{dateFormatted}}</span>
			</div>
			<div class="feed-item__actions">
				<button class="i-btn" @click.stop="addOrRemoveFavorite" :class="{'i-btn--active': isFavorite}">
					<svg xmlns="http://www.w3.org/2000/svg" width="17" height="21" viewBox="0 0 17 21" fill="none">
						<path d="M14.7857 2.28568H1.64286V18.2265L7.07199 13.0156L8.21428 11.9246L9.35658 13.0156L14.7857 18.2265V2.28568ZM14.9397 0.642822C15.1365 0.642822 15.3248 0.681327 15.5045 0.758336C15.7868 0.869571 16.0114 1.04498 16.1783 1.28456C16.3451 1.52415 16.4286 1.7894 16.4286 2.08032V18.6244C16.4286 18.9153 16.3451 19.1806 16.1783 19.4202C16.0114 19.6598 15.7868 19.8352 15.5045 19.9464C15.3419 20.0148 15.1536 20.0491 14.9397 20.0491C14.529 20.0491 14.1739 19.9122 13.8744 19.6384L8.21428 14.1964L2.55413 19.6384C2.24609 19.9207 1.891 20.0619 1.48884 20.0619C1.29204 20.0619 1.10379 20.0234 0.924107 19.9464C0.641741 19.8352 0.417132 19.6598 0.250279 19.4202C0.0834263 19.1806 0 18.9153 0 18.6244V2.08032C0 1.7894 0.0834263 1.52415 0.250279 1.28456C0.417132 1.04498 0.641741 0.869571 0.924107 0.758336C1.10379 0.681327 1.29204 0.642822 1.48884 0.642822H14.9397Z" fill="black"/>
					</svg>
				</button>
			</div>
		</div>

		<div class="feed-item__desc" @click.stop="selectPost" v-html="item.field_content"></div>
		<div class="feed-item__tags">
			<div class="feed-item__tag" 
				:class="{'feed-item__tag--selected': isTagSelected(tag)}"
				v-for="tag in itemTags" 
				@click.stop="setTag(tag)"
			>{{tag}}</div>
		</div>
	</div>
</div>
`
}