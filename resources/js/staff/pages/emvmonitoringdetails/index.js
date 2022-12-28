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

            searchEmvdatabaseList(){
                let vm = this;
                console.log("cleared . . .");
                console.log("searching . . .");
                // vm.isLoading= true;
                // vm.cc_details_display = true;
                $.ajax({
                    url: vm.$route('staff.ajax.emvvalidationdetails.search') + '?id='+vm.emv_hh_id,
                    type: 'GET',
                    success: function (response) {
                        if (response) {        
                            console.log(response);                  
                            vm.emvdetailsdata = response;
                            
                        }
                    },

                });
            },


            getEmvdatabasedetailsList(){
                // var vm = this;
                // $.ajax({
                //     // url: vm.$route('staff.ajax.emvmonitoring.listing') + '?id='+vm.hh_id_search,
                //     url: vm.$route('staff.ajax.emvmonitoringdetails.listing'),
                //     type: 'GET',
                //     success: function (response) {
                //         if (response) {                          
                //             // var data = Object.values(response);
                //             // var payroll = data[0];
                //             // var granteelist = data[1];
                //             // var nonemv = data[2];
                //             // var emv = data[3];
                            
                //             vm.emvdetailsdata = response;

                //             console.log(vm.emvmonitoringdetails);
                //         }
                //     },
                //     // error: function(){
                //     // }
                // });
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
