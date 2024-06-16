export const postView = {
	props: {
		item: {
			required: true
		},
		tags: {},
		favorites: {
			default: () => ([])
		},
		shared: {}
	},
	data() {
		return {
					
		}
	},
	watch: {
		async item(v) {
			if(v) {
				if(this.isItemHaveMap) {
					await this.setSelectedPostMapPoint()
				}
				/*
				if(v.field_address && !v.object) {
					await this.setSelectedPostMapPoint()
				} 
				if(v.object) {
					const coords = v.object.field_coords.split(',').map(n => Number(n.trim()))
					if(this.isItemHaveMap) {
						console.log('isItemHaveMap')
						this.$nextTick().then(() => {
							this.createPostViewMap(coords)			  
						})
					}
				}
				*/
			}	else {
				if(window.postViewMap) {
					window.postViewMap.destroy()
					window.postViewMap = null
				}
			}
		}
	},
	computed: {
		isItemAlreadyInRouteOrPlan() {
			if(!this.item) return false
			
			if(this.isPost && !this.item.object) return false
			const objectId = this.isPost ? this.item.object.id : this.item.id
			const planItems = this.shared.myRoute.planItems
			const routeItems = this.shared.myRoute.routeItems.reduce((a, b) => {
				a.push(...b.items)
				return a
			}, [])
			const combinedItems = [...planItems, ...routeItems]
			const combinedItemsIds = combinedItems.map(e => e.id)
			console.log({combinedItems})
			return combinedItemsIds.includes(objectId)
		},
		isItemFavorite() {
			if(!this.item) return false
			return this.favorites.find(e => e.id == this.item.id)
		},
		isPost() {
			return this.item.layout_id == '56'
		},
		isItemHaveMap() {
			return (this.item.object ? this.item.object.field_address : this.item.field_address) || (this.item.object ? this.item.object.field_coords : this.item.field_coords)
		}
	},
	methods: {
		async setSelectedPostMapPoint() {
			let address = await geocodeOrderAddress(this.item.object ? this.item.object.field_address : this.item.field_address)
			//console.log(address)
			let coords = []
			let isCheck = true
			if(address) {
				coords = address.geometry.getCoordinates()
			} else {
				address = this.item.object ? this.item.object.field_coords : this.item.field_coords
				
				coords = address.split(',').map(e => Number(e.trim()))
				if(!Array.isArray(coords) || coords.length != 2) isCheck = false
			}
			console.log(coords)
			if(isCheck) {
				this.$nextTick().then(() => {
					this.createPostViewMap(coords)
				})
			}
		},
		async createPostViewMap(coords) {
			await ymaps.ready()
			initMap(coords)
		},
		addRemoveFav() {
			this.$emit('add-remove-fav', this.item.id)
		},
		closeView() {
			this.$emit('close-view')
		},
		removeSelectedPostObjectFromMyRoutePlanById() {
			this.$emit('remove-item-routeplan', this.item.id)
		},
		addSelectedPostObjectToPlanById() {
			this.$emit('add-item-routeplan', this.item.id)
		}
	},
	mounted() {
		
	},
	template: `
<div class="modale modale--vue modale--post" v-if="item">
	<div class="modale__wrapper">
		<div class="modale__inner" v-click-outside="closeView">
			<div class="modale__closer rbtn rbtn--flat" @click.stop="closeView">
				<svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none"><path d="M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z" fill="#000"></path></svg>
			</div>
			<div class="modale__main">
				<div class="modale__content">
					<div class="post-view">
						<div class="post-view__block post-view__block--image">
							<div class="post-view__image">
								<img :src="'/site/data/images/large/' + item.field_image">
							</div>
						</div>
						<div class="post-view__block post-view__block--main">
							<div class="post-view__content">
								<div class="post-view__title">{{item.field_header}}</div>
								<div class="post-view__desc" v-html="item.field_content"></div>
								<div class="post-view__actions">
									<a :href="item.field_tickets_link" target="_blank" class="rbtn rbtn--text rbtn--color-yellow" v-if="item.field_tickets_link">
										<svg xmlns="http://www.w3.org/2000/svg" width="29" height="19" viewBox="0 0 29 19" fill="none">
											<mask id="path-1-inside-1_244_846" fill="white">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 2.23858 2.23858 0 5 0H23.913C26.6745 0 28.913 2.23858 28.913 5V6.63798C27.5119 6.8384 26.4348 8.04341 26.4348 9.5C26.4348 10.9566 27.5119 12.1616 28.913 12.362V14C28.913 16.7614 26.6745 19 23.913 19H5C2.23858 19 0 16.7614 0 14V12.362C1.40116 12.1616 2.47826 10.9566 2.47826 9.5C2.47826 8.04341 1.40116 6.8384 0 6.63798V5Z"/>
											</mask>
											<path d="M28.913 6.63798L29.1962 8.61782L30.913 8.37226V6.63798H28.913ZM28.913 12.362H30.913V10.6277L29.1962 10.3822L28.913 12.362ZM0 12.362L-0.283196 10.3822L-2 10.6277V12.362H0ZM0 6.63798H-2V8.37225L-0.283195 8.61782L0 6.63798ZM5 -2C1.13401 -2 -2 1.13401 -2 5H2C2 3.34315 3.34315 2 5 2V-2ZM23.913 -2H5V2H23.913V-2ZM30.913 5C30.913 1.13401 27.779 -2 23.913 -2V2C25.5699 2 26.913 3.34315 26.913 5H30.913ZM30.913 6.63798V5H26.913V6.63798H30.913ZM28.4348 9.5C28.4348 9.0527 28.7662 8.67934 29.1962 8.61782L28.6299 4.65813C26.2576 4.99745 24.4348 7.03413 24.4348 9.5H28.4348ZM29.1962 10.3822C28.7662 10.3207 28.4348 9.9473 28.4348 9.5H24.4348C24.4348 11.9659 26.2576 14.0025 28.6299 14.3419L29.1962 10.3822ZM30.913 14V12.362H26.913V14H30.913ZM23.913 21C27.779 21 30.913 17.866 30.913 14H26.913C26.913 15.6569 25.5699 17 23.913 17V21ZM5 21H23.913V17H5V21ZM-2 14C-2 17.866 1.13401 21 5 21V17C3.34315 17 2 15.6569 2 14H-2ZM-2 12.362V14H2V12.362H-2ZM0.478261 9.5C0.478261 9.9473 0.146872 10.3207 -0.283196 10.3822L0.283196 14.3419C2.65546 14.0025 4.47826 11.9659 4.47826 9.5H0.478261ZM-0.283195 8.61782C0.146871 8.67934 0.478261 9.0527 0.478261 9.5H4.47826C4.47826 7.03413 2.65546 4.99745 0.283195 4.65813L-0.283195 8.61782ZM-2 5V6.63798H2V5H-2Z" fill="black" mask="url(#path-1-inside-1_244_846)"/>
											<path d="M7.43457 7.02173H12.8041" stroke="black" stroke-width="2" stroke-linecap="round"/>
											<path d="M7.43457 11.9783H16.5215" stroke="black" stroke-width="2" stroke-linecap="round"/>
											<path d="M21.0654 5.78259V13.6304" stroke="black" stroke-width="2" stroke-linecap="round"/>
										</svg>
										Билеты
									</a>
									<button href="#" class="rbtn rbtn--text" @click.stop="addRemoveFav" :class="{'rbtn--color-pink': isItemFavorite}">
										<svg xmlns="http://www.w3.org/2000/svg" width="17" height="21" viewBox="0 0 17 21" fill="none">
											<path d="M14.7857 2.28568H1.64286V18.2265L7.07199 13.0156L8.21428 11.9246L9.35658 13.0156L14.7857 18.2265V2.28568ZM14.9397 0.642822C15.1365 0.642822 15.3248 0.681327 15.5045 0.758336C15.7868 0.869571 16.0114 1.04498 16.1783 1.28456C16.3451 1.52415 16.4286 1.7894 16.4286 2.08032V18.6244C16.4286 18.9153 16.3451 19.1806 16.1783 19.4202C16.0114 19.6598 15.7868 19.8352 15.5045 19.9464C15.3419 20.0148 15.1536 20.0491 14.9397 20.0491C14.529 20.0491 14.1739 19.9122 13.8744 19.6384L8.21428 14.1964L2.55413 19.6384C2.24609 19.9207 1.891 20.0619 1.48884 20.0619C1.29204 20.0619 1.10379 20.0234 0.924107 19.9464C0.641741 19.8352 0.417132 19.6598 0.250279 19.4202C0.0834263 19.1806 0 18.9153 0 18.6244V2.08032C0 1.7894 0.0834263 1.52415 0.250279 1.28456C0.417132 1.04498 0.641741 0.869571 0.924107 0.758336C1.10379 0.681327 1.29204 0.642822 1.48884 0.642822H14.9397Z" fill="black"/>
										</svg>
										<template v-if="isItemFavorite">
											В избранном
										</template>
										<template v-else>
											В избранное
										</template>
									</button>
								</div>
								<div class="post-view-object" v-if="isItemHaveMap">
									<div class="post-view-object__header">
										<div class="post-view-object__header-block" v-if="isPost && item.object">
											<div class="post-view-object__header-title">{{item.object.field_header}}</div>
											<div class="post-view-object__header-address">{{item.object.field_address}}</div>
										</div>
										<div class="post-view-object__header-block" v-else>
											<div class="post-view-object__header-title">{{item.field_header}}</div>
											<div class="post-view-object__header-address">{{item.field_address}}</div>
										</div>
										<div class="post-view-object__header-block post-view-object__header-block--actions">
											<div class="post-view-object__actions">
												<template v-if="isItemAlreadyInRouteOrPlan">
													<button title="Удалить из моего маршрута" class="ibtn ibtn--added ibtn--iconleft" @click.stop="removeSelectedPostObjectFromMyRoutePlanById">
														<svg width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.7 23.4262C14.0401 23.6324 13.409 24.0429 12.9835 24.6747L11.5002 26.8767L10.0171 24.6749C9.59149 24.043 8.96041 23.6325 8.30039 23.4263C4.0537 22.0996 1 18.2118 1 13.6462C1 7.99621 5.68146 3.38098 11.5 3.38098C17.3185 3.38098 22 7.99621 22 13.6462C22 18.2116 18.9465 22.0993 14.7 23.4262Z" stroke="#E85768" stroke-width="2"/>
															<path class="svg-plus" d="M11.1199 20.241C10.9665 20.241 10.8362 20.195 10.7289 20.103C10.6369 19.9957 10.5909 19.8653 10.5909 19.712V14.928H5.87586C5.72253 14.928 5.59219 14.882 5.48486 14.79C5.39286 14.6827 5.34686 14.5523 5.34686 14.399V13.663C5.34686 13.5097 5.39286 13.387 5.48486 13.295C5.59219 13.1877 5.72253 13.134 5.87586 13.134H10.5909V8.488C10.5909 8.33467 10.6369 8.212 10.7289 8.12C10.8362 8.01267 10.9665 7.959 11.1199 7.959H11.9249C12.0782 7.959 12.2009 8.01267 12.2929 8.12C12.4002 8.212 12.4539 8.33467 12.4539 8.488V13.134H17.1919C17.3452 13.134 17.4679 13.1877 17.5599 13.295C17.6672 13.387 17.7209 13.5097 17.7209 13.663V14.399C17.7209 14.5523 17.6672 14.6827 17.5599 14.79C17.4679 14.882 17.3452 14.928 17.1919 14.928H12.4539V19.712C12.4539 19.8653 12.4002 19.9957 12.2929 20.103C12.2009 20.195 12.0782 20.241 11.9249 20.241H11.1199Z" fill="#E85768"/>
														</svg>
														<span>Добавлено</span>
													</button>
												</template>
												<template v-else>
													<button title="Добавить в мой маршрут" class="ibtn ibtn--iconleft" @click.stop="addSelectedPostObjectToPlanById">
														<svg width="23" height="29" viewBox="0 0 23 29" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.7 23.4262C14.0401 23.6324 13.409 24.0429 12.9835 24.6747L11.5002 26.8767L10.0171 24.6749C9.59149 24.043 8.96041 23.6325 8.30039 23.4263C4.0537 22.0996 1 18.2118 1 13.6462C1 7.99621 5.68146 3.38098 11.5 3.38098C17.3185 3.38098 22 7.99621 22 13.6462C22 18.2116 18.9465 22.0993 14.7 23.4262Z" stroke="#000000" stroke-width="2"/>
															<path d="M11.1199 20.241C10.9665 20.241 10.8362 20.195 10.7289 20.103C10.6369 19.9957 10.5909 19.8653 10.5909 19.712V14.928H5.87586C5.72253 14.928 5.59219 14.882 5.48486 14.79C5.39286 14.6827 5.34686 14.5523 5.34686 14.399V13.663C5.34686 13.5097 5.39286 13.387 5.48486 13.295C5.59219 13.1877 5.72253 13.134 5.87586 13.134H10.5909V8.488C10.5909 8.33467 10.6369 8.212 10.7289 8.12C10.8362 8.01267 10.9665 7.959 11.1199 7.959H11.9249C12.0782 7.959 12.2009 8.01267 12.2929 8.12C12.4002 8.212 12.4539 8.33467 12.4539 8.488V13.134H17.1919C17.3452 13.134 17.4679 13.1877 17.5599 13.295C17.6672 13.387 17.7209 13.5097 17.7209 13.663V14.399C17.7209 14.5523 17.6672 14.6827 17.5599 14.79C17.4679 14.882 17.3452 14.928 17.1919 14.928H12.4539V19.712C12.4539 19.8653 12.4002 19.9957 12.2929 20.103C12.2009 20.195 12.0782 20.241 11.9249 20.241H11.1199Z" fill="#000000"/>
														</svg>
														<span>В маршрут</span>
													</button>
												</template>
											</div>
										</div>
									</div>
									<div class="post-view-object__map">
										<div id="post-view-map"></div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
`
}

async function initMap(center = [55.830572, 37.631125]) {
	try {
		window.postViewMap = new ymaps.Map('post-view-map', {
			center,
			zoom: 15,
			controls: ['zoomControl']
		}, {
			buttonMaxWidth: 300
		})

		const myGeoObject = new ymaps.GeoObject({
			geometry: {
				type: "Point",
				coordinates: center
			}
		})


		postViewMap.geoObjects.add(myGeoObject)
	} catch(err) {
		console.log(err)
	}
}

function geocodeCheckAddress(res) {
	var obj = res.geoObjects.get(0),
		error, hint;

	if (obj) {
		//console.log(obj)
		// Об оценке точности ответа геокодера можно прочитать тут: https://tech.yandex.ru/maps/doc/geocoder/desc/reference/precision-docpage/
		switch (obj.properties.get('metaDataProperty.GeocoderMetaData.precision')) {
			case 'exact':
				break;
			case 'number':
			case 'near':
			case 'range':
				error = 'Неточный адрес, требуется уточнение';
				hint = 'Уточните номер дома';
				break;
			case 'street':
				error = 'Неполный адрес, требуется уточнение';
				hint = 'Уточните номер дома';
				break;
			case 'other':
			default:
				error = 'Неточный адрес, требуется уточнение';
				hint = 'Уточните адрес';
		}
	} else {
		error = 'Адрес не найден';
		hint = 'Уточните адрес';
	}

	// Если геокодер возвращает пустой массив или неточный результат, то показываем ошибку.
	if (error) {
		console.log(error)
	} else {
		return obj
		//showResult(obj);
	}
}

async function geocodeOrderAddress(str = '') {
	try {
		const request = str
		let obj = await ymaps.geocode(request)
		let result = geocodeCheckAddress(obj)
		if(result) return result
		throw new Error('geocode error')
	} catch(e) {
		console.log(e)
		return false
	}
}