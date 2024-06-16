export const vSelectMove = {
	props: {
		items: {
			default: () => ([])
		},
		day_id: {}
	},
	data: function () {
		return {
			isListOpen: false,
			//myRouteItems: this.items
		}
	},
	template: `
	<div class="vselect vselect--move">
		<div v-if="items.length" class="vselect-trigger vselect-trigger--move" @click.stop="isListOpen = true">
			<div class="vselect-trigger__icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
					<path d="M11.0123 12.0038V3.40579L9.71929 4.70679C9.62704 4.8023 9.5167 4.87848 9.39469 4.93089C9.27269 4.9833 9.14147 5.01088 9.00869 5.01204C8.87591 5.01319 8.74423 4.98789 8.62133 4.93761C8.49844 4.88733 8.38679 4.81307 8.29289 4.71918C8.199 4.62529 8.12475 4.51364 8.07447 4.39074C8.02419 4.26784 7.99888 4.13616 8.00004 4.00339C8.00119 3.87061 8.02878 3.73939 8.08119 3.61738C8.1336 3.49538 8.20978 3.38503 8.30529 3.29279L11.3053 0.292787C11.4928 0.105316 11.7471 0 12.0123 0C12.2775 0 12.5318 0.105316 12.7193 0.292787L15.7193 3.29279C15.9014 3.48139 16.0022 3.73399 16 3.99619C15.9977 4.25838 15.8925 4.5092 15.7071 4.6946C15.5217 4.88001 15.2709 4.98518 15.0087 4.98746C14.7465 4.98974 14.4939 4.88894 14.3053 4.70679L13.0123 3.40679V12.0038C13.0123 12.269 12.9069 12.5234 12.7194 12.7109C12.5319 12.8984 12.2775 13.0038 12.0123 13.0038C11.7471 13.0038 11.4927 12.8984 11.3052 12.7109C11.1176 12.5234 11.0123 12.269 11.0123 12.0038ZM3.01229 3.99579C3.01229 3.73057 3.11765 3.47622 3.30518 3.28868C3.49272 3.10114 3.74707 2.99579 4.01229 2.99579C4.2775 2.99579 4.53186 3.10114 4.71939 3.28868C4.90693 3.47622 5.01229 3.73057 5.01229 3.99579V12.5938L6.30529 11.2928C6.49389 11.1106 6.74649 11.0098 7.00869 11.0121C7.27089 11.0144 7.5217 11.1196 7.70711 11.305C7.89251 11.4904 7.99768 11.7412 7.99996 12.0034C8.00224 12.2656 7.90145 12.5182 7.71929 12.7068L4.71929 15.7068C4.53176 15.8943 4.27745 15.9996 4.01229 15.9996C3.74712 15.9996 3.49282 15.8943 3.30529 15.7068L0.305288 12.7068C0.209778 12.6145 0.133596 12.5042 0.0811869 12.3822C0.0287779 12.2602 0.00119157 12.129 3.77571e-05 11.9962C-0.00111606 11.8634 0.0241854 11.7317 0.0744663 11.6088C0.124747 11.4859 0.199 11.3743 0.292893 11.2804C0.386786 11.1865 0.498438 11.1122 0.621334 11.062C0.744231 11.0117 0.87591 10.9864 1.00869 10.9875C1.14147 10.9887 1.27269 11.0163 1.39469 11.0687C1.5167 11.1211 1.62704 11.1973 1.71929 11.2928L3.01229 12.5928V3.99679V3.99579Z" fill="black"/>
				</svg>
			</div>
		</div>
		<div v-else class="vselect-trigger vselect-trigger--move" @click.stop="addItemToMyRouteFromPlan">
			<div class="vselect-trigger__icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
					<path d="M11.0123 12.0038V3.40579L9.71929 4.70679C9.62704 4.8023 9.5167 4.87848 9.39469 4.93089C9.27269 4.9833 9.14147 5.01088 9.00869 5.01204C8.87591 5.01319 8.74423 4.98789 8.62133 4.93761C8.49844 4.88733 8.38679 4.81307 8.29289 4.71918C8.199 4.62529 8.12475 4.51364 8.07447 4.39074C8.02419 4.26784 7.99888 4.13616 8.00004 4.00339C8.00119 3.87061 8.02878 3.73939 8.08119 3.61738C8.1336 3.49538 8.20978 3.38503 8.30529 3.29279L11.3053 0.292787C11.4928 0.105316 11.7471 0 12.0123 0C12.2775 0 12.5318 0.105316 12.7193 0.292787L15.7193 3.29279C15.9014 3.48139 16.0022 3.73399 16 3.99619C15.9977 4.25838 15.8925 4.5092 15.7071 4.6946C15.5217 4.88001 15.2709 4.98518 15.0087 4.98746C14.7465 4.98974 14.4939 4.88894 14.3053 4.70679L13.0123 3.40679V12.0038C13.0123 12.269 12.9069 12.5234 12.7194 12.7109C12.5319 12.8984 12.2775 13.0038 12.0123 13.0038C11.7471 13.0038 11.4927 12.8984 11.3052 12.7109C11.1176 12.5234 11.0123 12.269 11.0123 12.0038ZM3.01229 3.99579C3.01229 3.73057 3.11765 3.47622 3.30518 3.28868C3.49272 3.10114 3.74707 2.99579 4.01229 2.99579C4.2775 2.99579 4.53186 3.10114 4.71939 3.28868C4.90693 3.47622 5.01229 3.73057 5.01229 3.99579V12.5938L6.30529 11.2928C6.49389 11.1106 6.74649 11.0098 7.00869 11.0121C7.27089 11.0144 7.5217 11.1196 7.70711 11.305C7.89251 11.4904 7.99768 11.7412 7.99996 12.0034C8.00224 12.2656 7.90145 12.5182 7.71929 12.7068L4.71929 15.7068C4.53176 15.8943 4.27745 15.9996 4.01229 15.9996C3.74712 15.9996 3.49282 15.8943 3.30529 15.7068L0.305288 12.7068C0.209778 12.6145 0.133596 12.5042 0.0811869 12.3822C0.0287779 12.2602 0.00119157 12.129 3.77571e-05 11.9962C-0.00111606 11.8634 0.0241854 11.7317 0.0744663 11.6088C0.124747 11.4859 0.199 11.3743 0.292893 11.2804C0.386786 11.1865 0.498438 11.1122 0.621334 11.062C0.744231 11.0117 0.87591 10.9864 1.00869 10.9875C1.14147 10.9887 1.27269 11.0163 1.39469 11.0687C1.5167 11.1211 1.62704 11.1973 1.71929 11.2928L3.01229 12.5928V3.99679V3.99579Z" fill="black"/>
				</svg>
			</div>
		</div>
		<div class="vselect-list" :class="{'vselect-list--active': isListOpen}" v-click-outside="closeList">
			<div class="vselect-list__item" v-for="day in datesList" :key="day.date_id" @click.stop="addItemToMyRouteFromPlan(day.date_id)">
				{{ getDayDate(day.date) }}
			</div>
		</div>
	</div>
	`,
	methods: {
		closeList() {
			this.isListOpen = false
		},
		addItemToMyRouteFromPlan(dayId = false) {
			console.log('vselect addItemToMyRouteFromPlan')
			this.$emit('move-item', dayId)
			this.isListOpen = false
		},
		getDayDate(date) {
			return new Date(date).toLocaleString('default', { month: 'long', day: 'numeric' })
		}
	},
	computed: {
		datesList() {
			if(this.day_id) return this.items.filter(e => e.date_id != this.day_id)
			return this.items
		}
	}
}