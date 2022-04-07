const { forEach } = require("lodash");

// script for orders
module.exports = function(data) {
    var _data = {
        config: null,
        validate_error: false,
        errors: [],
        cashcardDetails: false,
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
                vm.cashcardDetails = true;
                console.log("asd");
            },
            clearSearch(){
                let vm = this;
                vm.cashcardDetails = false;
            }
        },
        beforeMount(){
        },
        updated() {
            
        }
    }
};