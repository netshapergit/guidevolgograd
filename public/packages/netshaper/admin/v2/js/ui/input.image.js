import { uploadImage } from '../utils.js'
import { apiService } from '../apiService.js'

export const inputImage = {
	props: {
		item: {
            required: true
        }
	},
	data() {
        return {
            dropzoneOptions: {
                url: 'https://httpbin.org/post',
                thumbnailWidth: 200,
                addRemoveLinks: true
            },
        }
    },
    components: {
        'vue-dropzone': vue2Dropzone
    },
    methods: {
        async upload(evt) {
            const fileName = await uploadImage(evt)
            //console.log(fileName)
            this.$emit('input', this.item.alias, fileName)
        },
        onAdd() {
            this.$refs[this.item.alias + 'image'].click()
        },
        async deleteImage() {
            if(!confirm('Удалить изображение?')) return;
            try {
                const data = await apiService.images.delete(this.item.content)
                this.$emit('input', this.item.alias, '')
            } catch(err) {
                console.log(err)
                this.$emit('input', this.item.alias, '')
            }
        }
    },
    template: `
<div class="av2-input av2-input--image">
    <input type="file" class="hidden" :ref="item.alias + 'image'" @change="upload">
    <input type="text" class="hidden" :value="item.content">
    <div class="av2-images">
        <div class="av2-image" v-if="item.content">
            <img :src="'/site/data/images/medium/' + item.content">
            <button @click.stop="deleteImage">x</button>
        </div>
        <div class="av2-image av2-image--add" @click.stop="onAdd" v-else>
            +
        </div>
    </div>
</div>
    `
}