import { USER, uploadFile, uploadImage, parseObject } from './utils.js'
	
document.addEventListener('DOMContentLoaded', init)

function init() {
	/*
	Vue.use(Toasted, {
		duration: 3000
	})
	*/
	const app = new Vue({
		el: '.lk',
		name: 'LK',
		data() {
			return {
				user: USER,
				isPasswordChangeFieldsShowed: false,
				isUserDataChanged: false
			}
		},
		watch: {
			user: {
				deep: true,
				handler(v) {
					this.isUserDataChanged = true
				}
			}
		},
		computed: {
			
		},
		methods: {
			onSaveChangesButtonClick() {
				this.$refs['save-changes-form-button'].click()
			},
			async saveChanges() {
				const _this = this
				try {
					const form = jQuery(this.$refs['js-opage-form'])
					const action = form.attr('data-action')
					const data = form.serialize()
					//console.log({action: location.origin + action, data})
					//const fd = new FormData(this.$refs['js-opage-form'])
					//console.log({fd})
					
					//const formData = new FormData(document.querySelector('.js-user-edit-form'));
					const req = await fetch(action, {
						method: 'PUT',
						headers: {
							'Content-Type': 'application/x-www-form-urlencoded'
						},
						body: data
					})
					console.log(req)
					if(!req.ok) throw new Error()
					const res = await req.json()
					console.log(res)
					noti(true, 'Сохранено')
					/*
					$.post(action, data)
						.done(function() {
							//_this.$toasted.info('Сохранено')
							noti(true, 'Сохранено')
						})
						.fail(function(err) {
							noti(false, 'Ошибка')
							console.log(err)
						})
					*/
				} catch(err) {
					console.log(err)
					noti(false, 'Ошибка')
					//this.$toasted.error('Ошибка: ' + err.message)
				}
			},
			onAddFileClick(refId) {
				this.$refs[refId].click()
			},
			async onImageUpload(e) {
				try {
					const res = await uploadImage(e)
					console.log(res)
					this.user.field_image = res
				} catch(err) {
					console.log(err)
					this.$toast.error('Ошибка: ' + err.message)
				}
			},
		},
		mounted() {
			console.log(this.user)
		}
	})
}