// script for emv database
module.exports = function(data) {
    var _data = {
        config: null,
        n: 1,
        emvdetailsdata: Object,
        emv_hh_id: null
    };
    return {
        data: (() => Object.assign({}, data, _data)),
        props: {
            data_object: Object,
        },
        mounted() {
            this.init();
        },
        methods: {
            init() {
                var vm = this;
                var t;
                
                $(document).ready(function() {
                    

                    vm.$toaster.init();
                    vm.emvvalidationDetails();
                });
            },

            emvvalidationDetails(){
                var vm = this;
                const objt = JSON.parse(data);
                console.log(objt);
                console.log(objt[0].image_additional);
                
                vm.emvdetailsdata = objt;
            },

            firstpage(link){
                if(link){
                    var vm = this;
                    $.ajax({
                        url: link,
                        type: 'GET',
                        success: function (response) {
                            if (response) {
                                vm.emvdetailsdata = response;
                            }
                        },
                    });
                }
            },
            lastpage(link){
                if(link){
                    var vm = this;
                    $.ajax({
                        url: link,
                        type: 'GET',
                        success: function (response) {
                            if (response) {
                                vm.emvdetailsdata = response;
                            }
                        },
                    });
                }
            },
            nextpage(link){
                if(link){
                    var vm = this;
                    $.ajax({
                        url: link,
                        type: 'GET',
                        success: function (response) {
                            if (response) {
                                vm.emvdetailsdata = response;
                            }
                        },
                    });
                }
            },
            prevpage(link){
                if(link){
                    var vm = this;
                    $.ajax({
                        url: link,
                        type: 'GET',
                        success: function (response) {
                            if (response) {
                                vm.emvdetailsdata = response;
                            }
                        },
                    });
                }
            },
        },
        computed: {
            // groupedEmvData() {
                // return _.chunk(this.emvdetailsdata.data, 3);
                // returns a nested array: 
                // [[article, article, article], [article, article, article], ...]
            // },
        },
    }
};
