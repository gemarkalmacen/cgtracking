// script for topup
module.exports = function(data) {
    var _data = {
        config: null,
        isLoading: false,
        fullPage: true         
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
            loadingEvent(){
                this.isLoading= true;
            },
            onCancel() {
                this.loading= false;
            }
        },
    }
};
