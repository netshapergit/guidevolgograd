export const inputString = {
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
    <input 
        class="form-control input-sm"
        type="text" 
        :value="item.content" 
        @input="$emit('input', item.alias, $event.target.value)">
</div>
    `
}