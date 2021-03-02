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
                            {data: 'province'},
                            {data: 'municipality'},
                            {data: 'barangay'},
                            // {data: 'address'},
                            {data: 'hh_id'},
                            {data: 'entryid'},
                            {data: 'lastname'},
                            {data: 'firstname'},
                            {data: 'middlename'},
                            {data: 'extensionname'},
                            {data: 'birthday'},
                            {data: 'age'},
                            {data: 'clientstatus'},
                            {data: 'member_status'},
                            // {data: 'registrationstatus'},
                            {data: 'sex'},
                            {data: 'relationship_to_hh_head'},
                            {data: 'hh_set'},
                            {data: 'group'},
                            {data: 'mothers_maiden'},
                            // {data: 'date_of_enumeration'},
                            {data: 'lbp_account_number'},
                            {data: 'mode_of_payment'},
                            // {data: 'date_tagged_hhstatus'},
                            // {data: 'tagged_by'},
                            // {data: 'date_registered'},
                            // {data: 'id', responsivePriority: -1},
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
                            // {
                            //     targets: [21],
                            //     visible: true,
                            //     render: function(data) {
                            //        var element = data;
                            //         return element;
                            //     }
                            // },
                            // {
                            //     targets: [29],
                            //     render: function(data) {
                            //         var element = '';
                            //         if (vm.$helper.isNotNull(data)) {
                            //             element = '<div><span class="label label-inline label-rounded label-'+ ( data == 1 ? 'success' : 'danger' )+'">' + vm.$t('staff/tables.users_is_active_'+data) + '</span></div>';
                            //         }
                            //         return element;
                            //     }
                            // },
                            // {
                            //     targets: [21],
                            //     orderable: false,
                            //     render: function(data, type, row) {
                            //         var actions = "";
                            //         var permissions = [
                            //             {
                            //                 name: 'users-view',
                            //                 callback: () => { actions += "<a href='"+vm.$route('staff.users.show', data)+"' class='dropdown-item'><i class='fa fa-eye p-2 m-1 fa-lg align-middle'></i> " + vm.$t('staff/buttons.view') + "</a>"; }
                            //             },
                            //             {
                            //                 name: 'users-edit',
                            //                 callback: () => { actions += "<a href='"+vm.$route('staff.users.edit', data)+"' class='dropdown-item'><i class='fa fa-edit p-2 m-1 fa-lg'></i> " + vm.$t('staff/buttons.edit') + "</a>"; }
                            //             },
                            //             {
                            //                 name: 'users-delete',
                            //                 callback: () => { actions += "<button class='icon-button dropdown-item btn-delete' data-item='["+data+"]'><i class='fa fa-trash-alt p-2 m-1 fa-lg'></i> " + vm.$t('staff/buttons.delete') + "</button>"; }
                            //             }
                            //         ];
                            //         // generate action buttons
                            //         permissions.forEach(function(permission) {
                            //             if (vm.$permission.has(permission.name)) {
                            //                 permission.callback();
                            //             }
                            //         });
                            //         // if no action buttons
                            //         if (actions === "") {
                            //             actions += "<i>No permission to take any action.</i>";
                            //         }
                            //         return "<div class='dropdown'>" +
                            //                 "<button class='btn btn-primary dropdown-toggle btn-sm mr-2' type='button' id='dropdownMenuButton-" + data + "' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+vm.$t('staff/buttons.actions')+"</button>" +
                            //                 "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton-" + data + "' x-placement='bottom-start' style='position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);'>" +
                            //                     "<div>" + actions + "</div>" +
                            //                 "</div>" +
                            //             "</div>";
                            //     }
                            // }
                        ]
                    },
                    url: {
                        list: vm.$route('staff.ajax.granteelists.listing'),
                        // delete: 'staff.users.destroy'
                    },
                    notifications: {
                        delete: vm.$t('staff/notifications.granteelist_deleted_successfully')
                    }
                };
            }
        }
    }
};
