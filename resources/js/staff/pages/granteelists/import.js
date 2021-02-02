// script for categories
module.exports = function(data) {
    var _data = {
        config: null,        
    };
    return {
        data: (() => Object.assign({}, JSON.parse(data), _data)),
        mounted() {
            this.init();
        },
        methods: {
            init() {
                var vm = this;
                $(document).ready(function() {
                    vm.$toaster.init();                   
                });
            },
        },
    }
};
