const { forEach } = require("lodash");

// script for orders
module.exports = function(data) {
    var _data = {
        config: null,
        validate_error: false,
        errors: [],
        cc_details_display: false,

    };
    return {
        data: (() => Object.assign({}, JSON.parse(data), _data)),
        mounted() {
            this.init();
        },
        computed: {
        },
        methods: {
            init() {
                var vm = this;
                $(document).ready(function() {
                    vm.$toaster.init();
                });
            },
            searchHouseHold(){
                let vm = this;
                vm.cc_details_display = true;
                console.log("asd");
            },
            clearSearch(){
                let vm = this;
                vm.cc_details_display = false;
            }
        },
        beforeMount(){
        },
        updated() {
            
        }
    }
};