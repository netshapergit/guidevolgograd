import { uploadFile } from '../utils.js'
import { apiService } from '../apiService.js'

export const inputFile = {
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
            const fileName = await uploadFile(evt)
            //console.log(fileName)
            this.$emit('input', this.item.alias, fileName)
        },
        onAdd() {
            this.$refs[this.item.alias + 'file'].click()
        },
        async deleteFile() {
            if(!confirm('Удалить файл?')) return;
            try {
                const data = await apiService.files.delete(this.item.content)
                this.$emit('input', this.item.alias, '')
            } catch(err) {
                console.log(err)
                this.$emit('input', this.item.alias, '')
            }
        }
    },
    template: `
<div class="av2-input av2-input--image">
    <input type="file" class="hidden" :ref="item.alias + 'file'" @change="upload">
    <input type="text" class="hidden" :value="item.content">
    <div class="av2-images">
        <div class="av2-image" v-if="item.content">
            <a :href="'/site/data/files/' + item.content" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="32" viewBox="0 0 18 22" id="file"><g fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><g stroke="#000" stroke-width="2" transform="translate(-1442 -1629)"><g transform="translate(1443 1630)"><path d="M10 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6l-6-6z"></path><path d="M10 0v6h6M12 11H4M12 15H4M6 7H4"></path></g></g></g></svg>
            </a>
            <button @click.stop="deleteFile">x</button>
        </div>
        <div class="av2-image av2-image--add" @click.stop="onAdd" v-else>
            +
        </div>
    </div>
</div>
    `
}