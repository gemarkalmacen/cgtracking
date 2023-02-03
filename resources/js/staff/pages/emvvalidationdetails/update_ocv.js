// script for emv database
module.exports = function(data) {
    var _data = {
        config: null,
        n: 1,
        emvdetailsdata: Object,
        card_holder_name: null
    };
    return {
        data: (() => Object.assign({}, data, _data)),
        props: {
            data_object: Object,
        },
        mounted() {
            this.init();
        },
        methods: {
            init() {
                var vm = this;
                var t;
                $(document).ready(function() {
                    vm.$toaster.init();
                    vm.emvupdateDetails();
                    // vm.emvupdateOcv();
                });

                $('#kt_sweetalert_demo_88').click(function (e) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!'
                    }).then(function (result) {
                        if (result.value) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    });
                });
            },

            emvupdateDetails(){
                var vm = this;
                const objt = JSON.parse(data);
                console.log(objt);
                // console.log(objt[0].card_holder_name);
                vm.emvdetailsdata = objt;
                // console.log("Pagsure oi");
            },
            

            emvupdateOcv(){

                
                
                alert(this.card_holder_name);
                // console.log("Pagsure oi");
            },
            firstpage(link){
                if(link){
                    var vm = this;
                    $.ajax({
                        url: link,
                        type: 'GET',
                        success: function (response) {
                            if (response) {
                                vm.emvdetailsdata = response;
                            }
                        },
                    });
                }
            },
            lastpage(link){
                if(link){
                    var vm = this;
                    $.ajax({
                        url: link,
                        type: 'GET',
                        success: function (response) {
                            if (response) {
                                vm.emvdetailsdata = response;
                            }
                        },
                    });
                }
            },
            nextpage(link){
                if(link){
                    var vm = this;
                    $.ajax({
                        url: link,
                        type: 'GET',
                        success: function (response) {
                            if (response) {
                                vm.emvdetailsdata = response;
                            }
                        },
                    });
                }
            },
            prevpage(link){
                if(link){
                    var vm = this;
                    $.ajax({
                        url: link,
                        type: 'GET',
                        success: function (response) {
                            if (response) {
                                vm.emvdetailsdata = response;
                            }
                        },
                    });
                }
            },
        },
        computed: {
        },
    }
};
