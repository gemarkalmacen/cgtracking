// script for roles
module.exports = function(data) {
    var _data = {
        config: null,
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
                    $(".pcheck").on('click', function (e) {                        
                        if($(this).is(":checked")) {
                            if ($(this).attr('data-parent') == 0) {
                                var id = $(this).attr('id');
                                $(":checkbox[data-parent=" + id + "]").attr('checked','checked');
        
                            }
                        }else{
                            if ($(this).attr('data-parent') == 0) {
                                var id = $(this).attr('id');
                                $(":checkbox[data-parent=" + id + "]").removeAttr('checked');
        
                            }
                        }                        
                    });
                    vm.$toaster.init();
                });
            },
        }
    }
};
