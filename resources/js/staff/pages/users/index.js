const { defaultsDeep } = require("lodash");

// script for users
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
                $(document).ready(function() {
                    vm.$toaster.init();
                    vm.setConfig();
                });
            },
            setConfig() {
                var vm = this;
                vm.config = {
                    options: {
                        order: [[ 1, "asc" ]],
                        columns: [
                            {data: 'user_id'},
                            {data: 'fullname'},                            
                            {data: 'mobile'},
                            {data: 'email'},
                            {data: 'roles'},
                            {data: 'is_active'},                            
                            {data: 'user_id', responsivePriority: -1},
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
                                orderable: false,
                                render: function(data) {
                                    var element = '';                                    
                                    if (vm.$helper.isNotNull(data)) {                                        
                                        $.each(data,function(item,val){                                            
                                            element = element + '<div><span class="label label-inline label-rounded label-info">' + val.name + '</span></div>';
                                        });                                        
                                    }
                                    return element;
                                }
                            },
                            {
                                targets: [5],
                                render: function(data) {
                                    var element = '';
                                    if (vm.$helper.isNotNull(data)) {
                                        element = '<div><span class="label label-inline label-rounded label-'+ ( data == 1 ? 'success' : 'danger' )+'">' + vm.$t('staff/tables.users_is_active_'+data) + '</span></div>';
                                    }
                                    return element;
                                }
                            },
                            {
                                targets: [6],
                                orderable: false,
                                render: function(data, type, row) {
                                    var actions = "";
                                    var permissions = [
                                        {
                                            name: 'users-view',
                                            callback: () => { actions += "<a href='"+vm.$route('staff.users.show', data)+"' class='dropdown-item'><i class='fa fa-eye p-2 m-1 fa-lg align-middle'></i> " + vm.$t('staff/buttons.view') + "</a>"; }
                                        },
                                        {
                                            name: 'users-edit',
                                            callback: () => { actions += "<a href='"+vm.$route('staff.users.edit', data)+"' class='dropdown-item'><i class='fa fa-edit p-2 m-1 fa-lg'></i> " + vm.$t('staff/buttons.edit') + "</a>"; }
                                        },
                                        {
                                            name: 'users-delete',
                                            callback: () => { actions += "<button class='icon-button dropdown-item btn-delete' data-item='["+data+"]'><i class='fa fa-trash-alt p-2 m-1 fa-lg'></i> " + vm.$t('staff/buttons.delete') + "</button>"; }
                                        }
                                    ];
                                    // generate action buttons
                                    permissions.forEach(function(permission) {
                                        if (vm.$permission.has(permission.name)) {
                                            permission.callback();
                                        }
                                    });
                                    // if no action buttons
                                    if (actions === "") {
                                        actions += "<i>No permission to take any action.</i>";
                                    }
                                    return "<div class='dropdown'>" +
                                            "<button class='btn btn-primary dropdown-toggle btn-sm mr-2' type='button' id='dropdownMenuButton-" + data + "' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+vm.$t('staff/buttons.actions')+"</button>" +
                                            "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton-" + data + "' x-placement='bottom-start' style='position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);'>" +
                                                "<div>" + actions + "</div>" +
                                            "</div>" +
                                        "</div>";
                                }
                            }
                        ]
                    },
                    url: {
                        list: vm.$route('staff.ajax.users.listing'),
                        delete: 'staff.users.destroy'
                    },
                    notifications: {
                        delete: vm.$t('staff/notifications.users_deleted_successfully')
                    }
                };
            }
        }
    }
};
