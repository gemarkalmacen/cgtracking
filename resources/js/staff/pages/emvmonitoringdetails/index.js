// script for emv database
module.exports = function(data) {
    var _data = {
        config: null,
        // object: {
        //     emvmonitoringdetails: 'emvmonitoringdetails',
        // }
        // emvmonitoringdetails: Object,
        n: 1,
        emvdetailsdata: Object,
        search_value: '',
    };
    return {
        data: (() => Object.assign({}, data, _data)),
        // props: {
        //     data_object: Object,
        // },
        mounted() {
            this.init();
            
            // console.log(this.emvmonitoringdetails);
        },
        methods: {
            init() {
                var vm = this;
                var t;
                $(document).ready(function() {
                    vm.$toaster.init();
                    vm.getEmvdatabasedetailsList();
                });
            },
            clearData(){
                var vm = this;
                vm.search_value = "";
                vm.search();
            },
            search(){
                var vm = this;

                $.ajax({
                    url: vm.$route('staff.ajax.emvmonitoringdetails.listing') + '/?filter='+vm.search_value,
                    type: 'GET',
                    success: function (response) {
                        if (response) {                            
                            vm.emvdetailsdata = response;
                        }
                    },
                });
            },
            getEmvdatabasedetailsList(){
                var vm = this;
                $.ajax({
                    url: vm.$route('staff.ajax.emvmonitoringdetails.listing') + '/?filter='+vm.search_value,
                    type: 'GET',
                    success: function (response) {
                        if (response) {                            
                            vm.emvdetailsdata = response;
                        }
                    },
                });
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
