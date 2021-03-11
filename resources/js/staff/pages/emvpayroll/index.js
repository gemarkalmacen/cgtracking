// script for emv payroll
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
                            {data: 'period'},
                            {data: 'year'},
                            {data: 'payroll_type'},
                            {data: 'region'},
                            {data: 'province'},
                            {data: 'municipality'},
                            {data: 'barangay'},
                            {data: 'address_psgc'},
                            {data: 'lastname'},
                            {data: 'firstname'},
                            {data: 'middlename'},
                            {data: 'household_id'},
                            {data: 'hhset'},
                            {data: 'mop'},
                            {data: 'card'},
                            {data: 'payroll_date'},
                            {data: 'educ_dc_elem'},
                            {data: 'educ_jr_hs'},
                            {data: 'educ_sr_hs'},
                            {data: 'educ_total_hs'},
                            {data: 'total_educ'},
                            {data: 'health'},
                            {data: 'rice'},
                            {data: 'total_amount'},
                            {data: 'set'},   
                            {data: 'set_group'},

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
                                    return element;
                                }
                            },
                            {
                                targets: [10],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [11],
                                render: function(data) {
                                   var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [12],
                                render: function(data) {
                                   var element = data;
                                    return element;
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
                        ]
                    },
                    url: {
                        list: vm.$route('staff.ajax.emvpayroll.listing'),
                        // delete: 'staff.users.destroy'
                    },
                    notifications: {
                        delete: vm.$t('staff/notifications.emvpayroll_deleted_successfully')
                    }
                };
            }
        }
    }
};
