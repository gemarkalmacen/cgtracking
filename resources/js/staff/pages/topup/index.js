// script for top-up
module.exports = function (data) {
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
                $(document).ready(function () {
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
                        order: [[1, 'asc']],
                        columns: [
                            { data: 'id' },
                            { data: 'account_number' },
                            { data: 'account_name' },
                            { data: 'amount' },
                            { data: 'transaction_sequence' },
                            { data: 'top_up_date' },
                            { data: 'lcc_top_up_batch_num' },
                            { data: 'cct_type' },
                            { data: 'payroll_type' },
                            { data: 'region' },
                            { data: 'hh_id' },
                            { data: 'period_covered' },
                            { data: 'lbp_top_up_status_report' },
                            { data: 'lbp_reject_reason' },

                        ],
                        columnDefs: [
                            {
                                targets: [0],
                                visible: true,
                                searchable: false
                            },
                            {
                                targets: [1],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [2],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [3],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [4],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [5],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [6],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [7],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [8],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [9],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [10],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [11],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [12],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [13],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                            {
                                targets: [14],
                                render: function (data) {
                                    var element = data;
                                    return element;
                                }
                            },
                        ]
                    },
                    url: {
                        list: vm.$route('staff.ajax.topup.listing'),
                        // delete: 'staff.users.destroy'
                    },
                    notifications: {
                        delete: vm.$t('staff/notifications.topup_deleted_successfully')
                    }
                };
            }
        }
    }
};
