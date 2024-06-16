export const inputText = {
	props: {
		item: {
            required: true
        }
	},
	data() {
        return {

        }
    },
    methods: {
        
    },
    template: `
<div class="av2-input">
    <textarea 
        class="form-control input-sm"
        :value="item.content" 
        @input="$emit('input', item.alias, $event.target.value)"></textarea>
</div>
    `
}