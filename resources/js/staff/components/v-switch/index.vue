<template>
    <div>
        <input type="hidden" :name="name" :value="value">
        <span class="switch switch-icon">
            <label>
                <input type="checkbox" v-model="realValue" />
                <span></span>
            </label>
        </span>
    </div>
</template>

<script>
export default {
    props: [
        "value",
        "initial",
        "name",
        "options",
    ],

    data() {
        return {
            realValue: false,
            values: {
                'true': true,
                'false': false
            }
        }
    },

    created() {
        if (this.options) {
            this.values = this.options;
        }
    },

    mounted: function() {
        var vm = this;
        $(document).ready(function() {
            if (vm.hasValue(vm.initial)) {
                if (vm.getValue(vm.initial) != vm.realValue) {
                    vm.setRealValue(vm.initial);
                } else {
                    if (vm.initial != vm.value) {
                        vm.emitValue(vm.getValue(vm.initial));
                    }
                }
            } else if (vm.hasValue(vm.value)) {
                if (vm.getValue(vm.value) != vm.realValue) {
                    vm.setRealValue(vm.value);
                } 
            } else {
                vm.emitValue(vm.realValue);
            }
        });
    },

    watch: {
        realValue(value) {
            this.emitValue(value);
        },

        value(value) {
            this.setRealValue(value);
        }
    },

    methods: {
        setRealValue(value) {
            this.realValue = this.hasValue(value) ? this.getValue(value) : false;
        },

        getValue(value) {
            return this.values[value.toString()];
        },

        hasValue(value) {
            return this.$helper.isNotNull(value) && this.values.hasOwnProperty(value.toString());
        },

        getKeyByValue(value) {
            return this.$helper.getKeyByValue(this.values, value);
        },

        emitValue(value) {
            this.$emit('input', this.getKeyByValue(value));
        }
    }
}
</script>