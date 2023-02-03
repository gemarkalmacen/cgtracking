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
            exportData(){
                let vm = this;
                $.ajax({
                    // url: vm.$route('staff.ajax.emvvalidationdetails.export_user'),
                    url: vm.$route('export_user'),
                    type: 'GET',
                    success: function (response) {
                        if (response) {        
                            // console.log(response[0].barangay);                  
                           
                            
                        }
                    },

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
                            columns: [
                                {data: 'image'},
                                {data: 'card_image'},
                                {data: 'image_additional'},
                                {data: 'hh_id'},
                                {data: 'first_name'},
                                {data: 'middle_name'},
                                {data: 'last_name'},
                                {data: 'ext_name'},
                                {data: 'card_number_inputted'},
                                {data: 'set'},
                                {data: 'hh_id'},
                            ],
                            columnDefs: [
                                {
                                    targets: 0,
                                    title: 'Card',
                                    render: function(data, type, full, meta) {
                                        var output;
                                            var stateNo = KTUtil.getRandomInt(0, 7);
                                            var states = [
                                                'success',
                                                'light',
                                                'danger',
                                                'success',
                                                'warning',
                                                'dark',
                                                'primary',
                                                'info'];
                                            var state = states[stateNo];
                                            if (data==null){
                                                output = `<div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 symbol-light-${state}" flex-shrink-0" >
                                                    <img src="${app_url}/staff/assets/media/users/default.jpg" style="width:45px" alt="photo" >
                                                </div>&nbsp&nbsp
                                              </div>`;
                                            }
                                            else{
                                                output = `
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50 symbol-light-${state}" flex-shrink-0">
                                                            <img src="${app_url}/storage/images/validations/` + data + `" style="width:45px"  alt="photo">
                                                        </div>
                                                    </div>`;
                                            }
                                        return output;
                                    },
                                },
                                {
                                    targets: 1,
                                    title: 'Grantee',
                                    render: function(data, type, full, meta) {
                                        var output;
                                        var stateNo = KTUtil.getRandomInt(0, 7);
                                        var states = [
                                            'success',
                                            'light',
                                            'danger',
                                            'success',
                                            'warning',
                                            'dark',
                                            'primary',
                                            'info'];
                                        var state = states[stateNo];
                                        if (data==null){
                                            output = `<div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light-${state}" flex-shrink-0" >
                                                <img src="${app_url}/staff/assets/media/users/default.jpg" style="width:45px" alt="photo" >
                                            </div>&nbsp&nbsp
                                          </div>`;
                                        }
                                        else{
                                            output = `
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-${state}" flex-shrink-0">
                                                        <img src="${app_url}/storage/images/validations/` + data + `" style="width:45px"  alt="photo">
                                                    </div>
                                                </div>`;
                                        }
                                    return output;
                                    },
                                },
                                {
                                    targets: 2,
                                    title: 'Additional ID',
                                    render: function(data, type, full, meta) {
                                        var output;
                                        var stateNo = KTUtil.getRandomInt(0, 7);
                                        var states = [
                                            'success',
                                            'light',
                                            'danger',
                                            'success',
                                            'warning',
                                            'dark',
                                            'primary',
                                            'info'];
                                        var state = states[stateNo];
                                        if (data==null){
                                            output = `<div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light-${state}" flex-shrink-0" >
                                                <img src="${app_url}/staff/assets/media/users/default.jpg" style="width:45px" alt="photo" >
                                            </div>&nbsp&nbsp
                                          </div>`;
                                        }
                                        else{
                                            output = `
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-${state}" flex-shrink-0">
                                                    <img src="${app_url}/storage/images/validations/` + data + `" style="width:45px"  alt="photo">
                                                    </div>
                                                </div>`;
                                        }
                                    return output;
                                    },
                                },
                                {
                                    targets: -1,
                                    title: 'Details',
                                    orderable: false,
                                    render: function(data, type, full, meta) {
                                        
                                        return `
                                            <div class="dropdown dropdown-inline">\
                                                <a href="${vm.$route('staff.emvvalidationdetails.show')}?id=${data}" class="btn btn-sm btn-clean btn-icon">\    
                                                    <i class="far fa-eye"></i>\
                                                </a>\
                                            </div>`;

                                    },
                                },
                                {
                                    targets: [3],
                                    render: function(data) {
                                       var element = data;
                                        return element;
                                    }
                                },
                                {
                                    targets: 4,
                                    render: function(data, type, full, meta) {
                                        var status = {
                                            1: {'title': 'Pending', 'class': 'label-light-primary'},
                                            2: {'title': 'Delivered', 'class': ' label-light-danger'},
                                            3: {'title': 'Canceled', 'class': ' label-light-primary'},
                                            4: {'title': 'Success', 'class': ' label-light-success'},
                                            5: {'title': 'Info', 'class': ' label-light-info'},
                                            6: {'title': 'Danger', 'class': ' label-light-danger'},
                                            7: {'title': 'Warning', 'class': ' label-light-warning'},
                                        };
                                        if (typeof status[data] === 'undefined') {
                                            return data;
                                        }
                                        return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                                    },
                                },
                                {
                                    targets: 5,
                                    render: function(data, type, full, meta) {
                                        var status = {
                                            1: {'title': 'Online', 'state': 'danger'},
                                            2: {'title': 'Retail', 'state': 'primary'},
                                            3: {'title': 'Direct', 'state': 'success'},
                                        };
                                        if (typeof status[data] === 'undefined') {
                                            return data;
                                        }
                                        return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
                                            '<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
                                    },
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
                            ]
                        },
                        url: {
                            list: vm.$route('staff.ajax.emvvalidationdetails.listing'),
                            // delete: 'staff.users.destroy'
                        },
                        notifications: {
                            delete: vm.$t('staff/notifications.emvdatabase_deleted_successfully')
                        }
                    }   
            }
        }
    }
};
