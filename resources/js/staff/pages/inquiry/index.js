const { default: axios } = require("axios");
const { forEach } = require("lodash");

// script for orders
module.exports = function(data) {
    var _data = {
        config: null,
        validate_error: false,
        errors: [],
        cc_details_display: false,
        hh_id_search: '',
        non_emv: {
            id: '',
            card_number: '',
            last_name: '',
            first_name: '',
            middle_name: '',
        },
        grantee_list: {
            id: '',
            region: '',
            province: '',
            municipality: '',
            barangay: '',
            purok: '',
            address: '',
            hh_id: '',
            entryid: '',
            lastname: '',
            firstname: '',
            middlename: '',
            extensionname: '',
            birthday: '',
            age: '',
            clientstatus: '',
            member_status: '',
            registrationstatus: '',
            sex: '',
            relationship_to_hh_head: '',
            ipaffiliation: '',
            hh_set: '',
            group: '',
            mothers_maiden: '',
            date_of_enumeration: '',
            lbp_account_number: '',
            mode_of_payment: '',
            date_tagged_hhstatus: '',
            tagged_by: '',
            date_registered: '',
            created_at: '',
            updated_at: '',
            upload_history_id: '',
        }
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
                            console.log("start");
                            // console.log( response['payroll'] );
                            // console.log( response);
                            console.log("end");

                            var data = Object.values(response);
                            // check if there is data add condition later
                            var payroll = data[0];
                            var granteelist = data[1];
                            
                            vm.grantee_list = granteelist;

                            console.log(data);
                        }
                    }
                });

            },
            clearSearch(){
                let vm = this;
                vm.cc_details_display = false;
                vm.hh_id_search = '';
            }
        },
        beforeMount(){
        },
        updated() {
            
        }
    }
};