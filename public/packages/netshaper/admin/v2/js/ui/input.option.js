export const inputOption = {
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
        onChange(evt) {
            this.$emit('input', this.item.alias, evt.target.value)
        }
    },
    computed: {
        options() {
            return this.item.selects
        }
    },
    template: `
<div class="av2-input">
    <select @change="onChange" :value="item.content">
        <option value="">{{ this.item.name }}</option>
        <option :value="option.id" v-for="option in options">{{ option.name }}</option>
    </select>
</div>
    `
}