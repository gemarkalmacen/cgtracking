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
            getEmvdatabasedetailsList(){
                var vm = this;
                $.ajax({
                    // url: vm.$route('staff.ajax.emvmonitoring.listing') + '?id='+vm.hh_id_search,
                    url: vm.$route('staff.ajax.emvmonitoringdetails.listing'),
                    type: 'GET',
                    success: function (response) {
                        if (response) {                          
                            // var data = Object.values(response);
                            // var payroll = data[0];
                            // var granteelist = data[1];
                            // var nonemv = data[2];
                            // var emv = data[3];
                            
                            vm.emvdetailsdata = response;

                            console.log(vm.emvmonitoringdetails);
                        }
                    },
                    // error: function(){
                    // }
                });
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
