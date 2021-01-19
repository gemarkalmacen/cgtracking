<template>
    <div class=" __mobile-wrapper">
        <div class="__mobile-component" :class="ControlClass">
            <input type="tel" class="form-control" :name="names[0]" ref="mobile" :class="ControlClass" />
            <input type="hidden" class="__mobile-code" :name="names[1]" v-model="code">
            <span class="__mobile-valid kt-font-success" v-if="isValid">✓ Valid</span>
            <span class="__mobile-error kt-font-danger" v-if="isInvalid">{{ $t('staff/validations.custom.phone.inline_' + validation.message) }}</span>
        </div>
        <div class="invalid-feedback" v-if="error">{{ error }}</div>
    </div>
</template>

<script>
export default {
    props: {
        config: {
            type: Object,
            default: () => {}
        },
        initial: {
            type: String,
            default: null
        },
        value: {
            type: String,
            default: null
        },
        error: {
            type: String,
            default: null
        },
        names: {
            type: Array,
            default: () => [
                'mobile',
                'code'
            ]
        }
    },

    data: function() {
        return {
            code: null,
            iti: null,
            validation: {
                bags: [],
                message: '',
                fail: false
            }
        }
    },

    computed: {
        ControlClass() {
            return { 'is-invalid': this.error || this.isInvalid };
        },

        isValid() {
            return this.$helper.isNotNull(this.value) && !this.validation.fail
        },

        isInvalid() {
            return this.$helper.isNotNull(this.value) && this.validation.fail
        }
    },

    created() {
        this.validation.bags = [
            'invalid_number',
            'invalid_country_code',
            'too_short',
            'too_long',
            'invalid_number'
        ];
    },

    mounted() {
        var vm = this;
        $(document).ready(function() {
            var input = vm.$refs.mobile;
            var initialValue = vm.$helper.isNotNull(vm.initial) ? vm.initial : vm.value;
            vm.iti = window.intlTelInput(input, vm.config);

            vm.iti.setNumber(initialValue);
            vm.iti.promise.then(function() {
                vm.setEvents(input);
                vm.update();
                vm.countryChange();
            });
        });
    },

    watch: {
        value(value) {
            this.iti.setNumber(value);
        }
    },

    methods: {
        setEvents(input) {
            var vm = this;
            input.addEventListener("countrychange", function() {
                vm.countryChange();
            });
            input.addEventListener("blur", function() {
                vm.update();
            });
            input.addEventListener('change', function() {
                vm.update();
            });
            input.addEventListener('keyup', function() {
                vm.update();
            });
        },

        update() {
            this.apply();
        },

        countryChange() {
            var data = this.iti.getSelectedCountryData();
            this.code = data.dialCode;
            this.$emit('countrychange', data);
        },

        apply() {
            var number = this.iti.getNumber();
            var isValid = this.iti.isValidNumber();
            isValid = !this.$helper.isNotNull(number) && !isValid ? true : isValid;

            var message = null;
            if (!isValid) {
                var index = this.iti.getValidationError()
                if (!this.validation.bags[index]) {
                    index = 0;
                }
                message = this.validation.bags[index];

            }

            this.$emit('input', number);
            this.$emit('change', number, { isValid, message });

            this.validation.fail = !isValid;
            this.validation.message = message;
        }
    },

    destroyed() {
        this.iti.destroy();
    }
}
</script>

<style lang="scss" scoped>
.__mobile-component.is-invalid {
    & ~ .invalid-feedback {
        display: block;
    }
}
</style>
