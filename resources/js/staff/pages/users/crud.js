// script for products
module.exports = function(data) {
    var _data = {
        config: null,
        isActive: {
            options: {
                '1': true,
                '0': false
            },
            value: '1'
        },
        isStaff: {
            options: {
                '1': true,
                '0': false
            },
            value: '0'
        },
        role: {
            loading: false,
            options: [],
            value: ''
        },
        // mobile: {
        //     config: {
        //         utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.1.0/js/utils.js',
        //         initialCountry: "auto",
        //         placeholderNumberType: "FIXED_LINE",
        //         hiddenInput: "phone",
        //         geoIpLookup: function(success, failure) {
        //             $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //                 var countryCode = (resp && resp.country) ? resp.country : "";
        //                 success(countryCode);
        //             });
        //         }
        //     },
        //     value: '',
        //     details: {
        //         isValid: true,
        //         message: null
        //     }
        // },
    };
    return {
        data: (() => Object.assign({}, data, _data)),
        mounted() {
            this.init();
            this.getRoles();
        },
        methods: {
            init() {
                var vm = this;
                $(document).ready(function() {
                    vm.$toaster.init();
                });
            },
            // Get list of roles
            getRoles() {
                var vm = this;
                vm.role.loading = true;
                $.ajax({
                    url: vm.$route('staff.ajax.roles'),
                    type: 'GET',
                    dataType: 'JSON',
                    success: function (response) {
                        vm.role.loading = false;
                        if (response) {
                            var options = [];
                            response.forEach(function(item) {
                                options.push({
                                    id: item.name,
                                    text: item.name
                                });
                            });
                            vm.role.options = options;
                        }
                    }
                });
            },
            // onPhoneChange(number, details) {
            //     this.mobile.details = details;
            // },
        }
    }
};
