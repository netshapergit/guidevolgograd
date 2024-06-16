export const inputCheckbox = {
	props: {
		item: {
            required: true
        }
	},
	data() {
        return {

        }
    },
    computed: {
        isChecked() {
            return !!Number(this.item.content)
        }
    },
    methods: {
        onChange() {
            this.$emit('input', this.item.alias, this.isChecked ? '0' : '1')
        }
    },
    template: `
<div class="av2-input">
    <input type="checkbox" :checked="isChecked" @change="onChange">
</div>
    `
}