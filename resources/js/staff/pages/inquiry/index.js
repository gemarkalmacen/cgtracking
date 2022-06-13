const { default: axios } = require("axios");
const { forEach } = require("lodash");

// script for orders
module.exports = function(data) {
    var _data = {
        config: null,
        validate_error: false,
        errors: [],
        cc_details_display: false,
        cc_details_empty: false,
        hh_id_search: '',
        granteelists: Object,
        nonemvs: Object,
        emvs: Object,
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
                    // vm.searchHouseHold();
                });
            },
            searchHouseHold(){
                let vm = this;
                let data_parse = '';
                // const params = new URLSearchParams([['id', 5]]);
                

                console.log("searching . . .");
                // var data = {
                //     _token: window.token,
                //     // household_id: vm.hh_id_search
                //     household_id: 123
                // };
                // $.get(vm.$route("staff.ajax.inquiry.search"),data).done(
                //     function(data) {
                //         console.log("DONEEEEE--->");
                //         console.log(data);
                //     }
                // );
                
                // url = '/staff/ajax/inquiry/search/' + vm.hh_id_search;
                // url = vm.$route("staff.ajax.inquiry.search") + '/?id='+vm.hh_id_search;
                // console.log('url: ' + url);
                // console.log('url: ' + url2);
                // url = vm.$route("staff.ajax.inquiry.search");
                // console.log(url);
                // const res = axios.get(url, { params: {ID:1} });
                // console.log(res);

                // axios
                // .get(url)
                // .then(res => {
                //     const {data:{data}} = res;
                //     data_parse = JSON.parse(res.data);
                //     // vm.patients.ocular_history.annual_visit = data_parse.annual_visit;
                //     console.log(data_parse);
                // })
                // .catch(err => {
                //     console.log("ERORR: +++ " + err);
                // })

                vm.cc_details_display = true;
            
                $.ajax({
                    url: vm.$route('staff.ajax.inquiry.search') + '/?id='+vm.hh_id_search,
                    type: 'GET',
                    // data: {
                    //     _token: window.token,
                    //     category_id:vm.category.value
                    // },
                    // dataType: 'JSON',
                    success: function (response) {
                        if (response) {                            
                            var data = Object.values(response);
                            var payroll = data[0];
                            var granteelist = data[1];
                            var nonemv = data[2];
                            var emv = data[3];
                            
                            if(Object.keys(granteelist).length === 0 && Object.keys(nonemv).length === 0 && Object.keys(nonemv).length === 0){
                                // display "record not found"
                                vm.cc_details_empty = true;
                            } else {
                                if(Object.keys(granteelist).length !== 0){
                                    vm.granteelists = granteelist;
                                }
                                if(Object.keys(nonemv).length !== 0){
                                    vm.nonemvs = nonemv;
                                }
                                if(Object.keys(nonemv).length !== 0){
                                    vm.emvs = emv;
                                }
                            }
                            vm.setConfig();
                        }
                    },
                    // error: function(){
                    // }
                });

            },
            clearSearch(){
                let vm = this;
                vm.cc_details_display = false;
                vm.hh_id_search = '';
                vm.emvs = {};
                vm.nonemvs = {};
                vm.granteelists = {};
            },
            setConfig() {
                var vm = this;
                vm.config = {
                    options: {
                        responsive: false,
                        scrollY: "600px",
                        scrollX: true,
                        fixedHeader: true,
                        order: [[ 1, 'asc' ]],
                        columns: [
                            {data: 'payroll_type'},
                            {data: 'year'},
                            {data: 'period'},
                            {data: 'mop'},
                            {data: 'card'},
                            {data: 'gross_amount'},
                            {data: 'gross_amount'},
                        ],
                        columnDefs: [
                            {
                                targets: [6],
                                render: function(data) {
                                   return null;
                                 }
                            },
                        ]
                    },
                    url: {
                        list: vm.$route('staff.ajax.inquiry.listing'),
                        ext_post: {hh_id: vm.hh_id_search}
                        // delete: 'staff.users.destroy'
                    },
                };
            }
        },
        beforeMount(){
        },
        updated() {
            
        }
    }
};