import { vSelectMove } from './c_vselect_move.js'

export const planObjectCard = {
	name: 'planObjectCard',
	props: {
		item: {
			required: true
		},
		myRouteItems: {
			default: () => ([])
		}
	},
	data() {
		return {
			
		}
	},
	components: {
		'vselect-move': vSelectMove
	},
	computed: {
		myRouteItemImgSrc() {
			return this.item.field_image ? '/site/data/images/medium/' + this.item.field_image : false
		},
		itemObjectType() {
			return 'aaa'
		}
	},
	methods: {
		onClickObject() {
		
		},
		addItemToMyRouteFromPlan(itemId, dayId) {
			this.$emit('add-item-to-route', {itemId, dayId})
		},
		removeItemFromMyRoutePlanByID() {
			
		}
	},
	template: `
<div
	class="vcard vcard--draggable"
>
	<div class="vcard__wrapper">
		<div class="vcard__left">
			<div class="vcard__top">
				<div class="vcard__img" :class="{'vcard__img--noimg': !myRouteItemImgSrc}" @click.stop="onClickObject">
					<img :src="myRouteItemImgSrc">
				</div>
				<div class="vcard__main">
					<div class="vcard__main-inner">
						<div class="vcard__main-inner__content" @click.stop="onClickObject">
							<div class="vcard__main-hat">
								<div class="vcard__main-hat__type">{{ itemObjectType }}</div>
							</div>
							<div class="vcard__header">
								<div class="vcard__title">{{item.field_header}}</div>
							</div>
						</div>
						<div class="vcard__main-inner__actions">
							<div class="vcard-move">
								<vselect-move :items="myRouteItems" @move-item="(dayId) => addItemToMyRouteFromPlan(item.id, dayId)"></vselect-move>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vcard__desc">
				<div class="vcard__text">

				</div>
			</div>
		</div>
		<div class="vcard__right">
			<div class="vcard-remove__button" @click.stop="removeItemFromMyRoutePlanByID">
				<svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
					<path d="M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z" fill="#E85768"/>
				</svg>
			</div>
		</div>
	</div>
</div>
`
}