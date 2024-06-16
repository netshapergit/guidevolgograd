//import Vue2Editor from './lib/editor.js'
//import EditorJS from "./lib/editor.js";
//import Header from "./lib/editor.js";
//import Paragraph from "./lib/editor.js";
//import List from "./lib/editor.js";

export const inputHtml = {
	props: {
		item: {
            required: true
        }
	},
	data() {
        return {

        }
    },
    components: {
        //'vue-editor': Vue2Editor
    },
    methods: {
        onTextChange(editor) {
            console.log(editor)
        },
        handleImageAdded(editor) {
            console.log(editor)
        },
        initEditor() {
            jQuery('#' + this.item.alias + '-editor').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 120,
                code: this.item.content,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            })
        }
    },
    mounted() {
        //this.initEditor()
    },
    template: `
<div class="av2-input">
    <textarea class="form-control input-sm" :value="item.content" @input="$emit('input', item.alias, $event.target.value)"></textarea>
    <!--vue-editor 
        useCustomImageHandler 
        :id="item.alias + '-editor'"
        @text-change="onTextChange"
        @image-added="handleImageAdded"
        v-model="item.content" /-->
    <div class="vue-editor" :id="item.alias + '-editor'"></div>
</div>
    `
}