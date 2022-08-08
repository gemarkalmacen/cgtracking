// script for emv database
module.exports = function(data) {
    var _data = {
        config: null
    };
    return {
        data: (() => Object.assign({}, data, _data)),
        mounted() {
            this.init();
        },
        methods: {
            init() {
                var vm = this;
                var t;
                $(document).ready(function() {
                    vm.$toaster.init();
                    vm.setConfig();
                });
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
                            {data: 'id'},
                            {data: 'full_name'},
                            {data: 'hh_id'},
                            {data: 'client_status'},
                            {data: 'address'},
                            {data: 'sex'},
                            {data: 'hh_set_group'},
                            {data: 'lbp_account'},

                        ],
                        columnDefs: [
                            {
                                targets: [0],
                                visible: false,
                                searchable: false
                            },
                            {
                                targets: [1],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },                            
                            {
                                targets: [2],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [3],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [4],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [5],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [6],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                        ]
                    },
                    url: {
                        list: vm.$route('staff.ajax.emvmonitoring.listing'),
                    },
                    notifications: {
                        delete: vm.$t('staff/notifications.emvmonitoring_deleted_successfully')
                    }
                };
            }
        }
    }
};
