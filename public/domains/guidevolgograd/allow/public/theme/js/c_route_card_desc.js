export const routeCardDesc = {
	name: 'routeCardDesc',
	props: {
		desc: {
			required: true
		}
	},
	data() {
		return {
			isTextOpened: false,
			textElem: null
		}
	},
	components: {
		
	},
	computed: {
		numberOfTextLines() {
			if(!this.textElem) return false
			const textLines = this.textElem.offsetHeight / 19
			if(textLines > 3) return true
			return false
		},
		textFormatted() {
			return ''
		}
	},
	methods: {
		onClickOpenText() {
			this.isTextOpened = !this.isTextOpened
		}
	},
	mounted() {
		this.textElem = this.$refs.vcdt
	},
	template: `
<div
	class="vcard-description"
>
	<div class="vcard-description__wrapper">
		<div class="vcard-description-audio">
			<div class="vcard-description-audio__inner">
<audio controls :src="desc.audio" :id="desc.audio"></audio>
			</div>
		</div>
		<div class="vcard-description-text" :class="{'vcard-description-text--active': isTextOpened || !textElem}" ref="vcdt">
			{{desc.text}}

			<button 
				v-show="numberOfTextLines"
				@click.stop="onClickOpenText" 
				class="vcard-description-text__button" 
				:class="{'vcard-description-text__button--active': isTextOpened}">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
					<path d="M9.0058 9.00915L15.0125 3.00248C15.1453 2.87078 15.2506 2.7141 15.3226 2.54146C15.3945 2.36883 15.4315 2.18366 15.4315 1.99665C15.4315 1.80963 15.3945 1.62446 15.3226 1.45183C15.2506 1.2792 15.1453 1.12251 15.0125 0.990813C14.747 0.726958 14.388 0.578857 14.0137 0.578857C13.6395 0.578857 13.2804 0.726958 13.015 0.990813L7.99997 6.00581L2.98497 0.990813C2.71954 0.726957 2.36048 0.578857 1.98622 0.578857C1.61196 0.578857 1.2529 0.726957 0.98747 0.990813C0.856171 1.12319 0.752294 1.28018 0.681794 1.45278C0.611295 1.62538 0.57556 1.8102 0.576637 1.99665C0.57556 2.18309 0.611295 2.36791 0.681794 2.54051C0.752293 2.71312 0.856171 2.87011 0.98747 3.00248L6.99414 9.00915C7.12584 9.14193 7.28252 9.24732 7.45515 9.31924C7.62779 9.39116 7.81295 9.42819 7.99997 9.42819C8.18699 9.42819 8.37215 9.39116 8.54479 9.31924C8.71742 9.24732 8.87411 9.14193 9.0058 9.00915Z" fill="black"/>
				</svg>
			</button>
		</div>
	</div>
</div>
`
}