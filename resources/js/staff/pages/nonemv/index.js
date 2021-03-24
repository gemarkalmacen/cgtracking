// script for grantee list
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
                            {data: 'row_id'},
                            {data: 'card_number'},
                            {data: 'last_name'},
                            {data: 'first_name'},
                            {data: 'middle_name'},
                            {data: 'naa_address'},
                            {data: 'cif_permanent_address'},
                            {data: 'cif_present_address'},
                            {data: 'nationality_cif_tel_no'},
                            {data: 'entry_number'},
                            {data: 'household_number'},
                            {data: 'birthday'},
                            {data: 'balance_as_of'},
                            {data: 'account_balance'},
                            {data: 'hh_id'},
                            {data: 'region'},
                            {data: 'province'},
                            {data: 'municipality'},
                            {data: 'barangay'},
                            {data: 'hh_first_name'},
                            {data: 'hh_middle_name'},
                            {data: 'hh_last_name'},
                            {data: 'hh_ext_name'},
                            {data: 'hh_birthdate'},
                            {data: 'entry_id'},
                            {data: 'mothers_maiden_name'},
                            {data: 'client_status'},
                            {data: 'payment_mode'},
                            {data: 'hh_set'},
                            {data: 'set_group'},
                            {data: 'hh_card_number'},
                            {data: 'kyc_remarks'},
                            {data: 'account_number_remarks'},
                            {data: 'age_bracket'},
                            {data: 'amount_bracket'},
                            {data: 'nma_remarks'},
                            {data: 'nma_remarks_reason'},
                            {data: 'nma_recommended_action'},
                            {data: 'upload_history_id'},
                            {data: 'created_at'},
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
                            {
                                targets: [7],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [8],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [9],
                                render: function(data) {
                                   var element = data;
                                    return element.toUpperCase();
                                }
                            },
                            {
                                targets: [10],
                                render: function(data) {
                                   var element = data;
                                    return element.toUpperCase();
                                }
                            },
                            {
                                targets: [11],
                                render: function(data) {
                                   var element = data;
                                    return element.toUpperCase();
                                }
                            },
                            {
                                targets: [12],
                                render: function(data) {
                                   var element = data;
                                    return element.toUpperCase();
                                }
                            },
                            {
                                targets: [13],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [14],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [15],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [16],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [17],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [18],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [19],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [20],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [21],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [22],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [23],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [24],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [25],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [26],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [27],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [28],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [29],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [30],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [31],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [32],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [33],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [34],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [35],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [36],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [37],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [38],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [39],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [40],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                        ]
                    },
                    url: {
                        list: vm.$route('staff.ajax.nonemv.listing'),
                        // delete: 'staff.users.destroy'
                    },
                    notifications: {
                        delete: vm.$t('staff/notifications.nonemv_deleted_successfully')
                    }
                };
            }
        }
    }
};
