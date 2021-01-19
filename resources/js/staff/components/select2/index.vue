<template>
    <div class="__select2-wrapper" :id="wrapperId">
        <div class="__select2-component" :class="ControlClass">
            <select :id="id" :name="name" class="form-control" ref="select" :multiple="multiple">
                <option v-if="placeholder"></option>
            </select>
        </div>
        <div class="invalid-feedback" v-if="error">{{ error }}</div>
    </div>
</template>

<script>
export default {
    props: {
        id: {
            type: String,
            default: null
        },
        wrapperId: {
            type: String,
            default: null
        },
        value: {
            type: [String, Array, Number],
            default: null
        },
        initial: {
            type: [String, Array, Number],
            default: null
        },
        options: {
            type: Array,
            default: null
        },
        initialOptions: {
            type: Array,
            default: null
        },
        placeholder: {
            type: String,
            default: null
        },
        name: {
            type: String,
            default: null
        },
        error: {
            type: String,
            default: null
        },
        multiple: {
            type: Boolean,
            default: false
        }
    },

    data() {
        return {
            defaultSelected: this.initial ?? this.value
        }
    },

   mounted: function() {
        var vm = this;
        $(document).ready(function() {
            $(vm.$refs.select)
                .on("select2:select", function() {
                    vm.$emit('select', this);
                })
                .on("change", function() {
                    vm.selected = $(this).val();
                    vm.$emit('change', this);
                });

            var select = $(vm.$refs.select)
                .select2({
                    placeholder: vm.placeholder,
                    data: vm.options,
                    width: 'resolve'
                });
            if (vm.hasValue(vm.selected)) {
                vm.setValue(vm.selected);
            }
            vm.handleInitialOptions();
            vm.handleInitialValue();
        });
    },

    watch: {
        value: function(value) {
            // update value
            this.setValue(value);
        },
        options: function(options) {
            // update options
            var value = this.defaultSelected ?? this.defaultValue;
            $(this.$refs.select)
                .empty()
                .append($('<option />'))
                .select2({
                    placeholder: this.placeholder,
                    data: options
                }).val(value).trigger('change');
            if(this.defaultSelected) this.defaultSelected = null;
        }
    },

    computed: {
        ControlClass() {
            return { 'is-invalid': this.error };
        },

        selected: {
            get() {
                return this.value;
            },
            set(value) {
                this.$emit('input', value);
            }
        },

        defaultValue() {
            return this.multiple ? [] : ''
        }
    },

    methods: {
        hasValue(value) {
            var vm = this;
            return this.options.some(function(option) {
                return vm.multiple ? value.includes(option.id) : option.id == value;
            });
        },

        setValue(value) {
            if (this.hasValue(value) || value == this.defaultValue) {
                if ($(this.$refs.select).val() != value) {
                    $(this.$refs.select).val(value).trigger('change');
                }
            } else {
                if (value) {
                    this.defaultSelected = value;
                }
            }
        },

        handleInitialOptions() {
            var vm = this;
            if (vm.initialOptions && vm.initialOptions.length > 0) {
                vm.$emit('update:options', vm.initialOptions);
            }
        },

        handleInitialValue() {
            var vm = this;
            if(vm.options.length > 0 && vm.defaultSelected) {
                vm.selected = vm.defaultSelected;
                vm.defaultSelected = null;
            }
        }
    },

    destroyed: function() {
        $(this.$refs.select)
            .off()
            .select2("destroy");
    }
}
</script>

<style lang="scss" scoped>
.__select2-component.is-invalid {
    & ~ .invalid-feedback {
        display: block;
    }
}
</style>
