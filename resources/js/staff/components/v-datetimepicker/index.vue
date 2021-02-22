<template>
    <div>
        <input type="hidden" :name="name" :value="realValue"/>
        <div class="input-group">
            <input type="text" class="form-control" ref="datetimepicker" data-provide="datetimepicker" :placeholder="placeholder"/>
            <div class="input-group-append"><span class="input-group-text"><i class="fas fa-calendar-alt"></i></span></div>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        id: {
            type: String,
            default: null
        },
        value: {
            type: [String, Array, Number],
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
        initial: {
            type: String,
            default: null
        },
    },
    data() {
        return {
            config: {
                todayHighlight : true,
                autoclose: true,
                showMeridian: true,
                format: 'dd/mm/yyyy HH:mm',
            },
            format: {
                from: 'DD/MM/YYYY HH:mm',
                to: 'YYYY-MM-DD hh:mm:ss'
            },
            realValue: null,
        }
    },
    mounted: function() {
        var vm = this;
        $(document).ready(function() {
            $(vm.$refs.datetimepicker).datetimepicker(vm.config)
                .on('changeDate', function(e) {
                    var datetime = vm.toRealValue(e.date);
                    vm.realValue = datetime;
                    vm.$emit('value', datetime);
                })
                .on('blur', function(e) {
                    var datetime = vm.toRealValue(e.currentTarget.value);
                    if(!vm.$helper.isNotNull(e.currentTarget.value)){
                        datetime = vm.toRealValue(new Date());
                        vm.setValue(datetime);
                    }
                    vm.realValue = datetime;
                    vm.$emit('value', datetime);
                });

            var realValue = vm.toRealValue($(vm.$refs.datetimepicker).data('datetimepicker').initialDate);
            if(vm.$helper.isNotNull(vm.initial)){
                realValue = vm.initial
            }
            vm.realValue = realValue;
            vm.setValue(vm.realValue);
        });
    },
    watch: {
        value(value) {
            this.setValue(value);   
        },
    },
    methods: {
        setValue(value) {
            var vm = this;
            var datetime = (vm.config.showMeridian) ? moment(value, vm.format.to).format(vm.format.from) : value;
            $(vm.$refs.datetimepicker).datetimepicker()[0].value = datetime;
        },
        toRealValue(value) {
            var vm = this;
            return (vm.config.showMeridian) ? moment(value, vm.format.from).format(vm.format.to) : value;
        }
    },
}
</script>