// script for emv database
module.exports = function(data) {
    var _data = {
        config: null,
        n: 1,
        emvdetailsdata: Object,
        emvrelationshipgrantee: Object,
        emvclientstatus: Object,
        emvpsgc: Object,
        emvreasonunclaimed: Object,
        other_extname: Object,
        emvpsgc_province:Object,
        card_holder_name: null,
        other_ext_name: '',
        other_contact_name: ''

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
                    vm.emvGetDetails();
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

            emvGetDetails(){
                var vm = this;
                const objt = JSON.parse(data);
                this.emvdetailsdata = objt["emv"];
                this.emvclientstatus = objt["clientstatus"];
                this.emvrelationshipgrantee = objt["relationshiptograntee"];
                this.emvpsgc_province = objt["psgc"];
                this.emvreasonunclaimed = objt["reasonunclaimed"];
                var psgc_code = objt["emv"][0].municipality_code;


                var extension =objt["emv"][0].ext_name;
                var contact_of =objt["emv"][0].contact_no_of;

                
                if (extension != "Jr." && extension != "Sr." && extension != "I" && extension != "II" && extension != "IIIa" && extension != "IV" && extension != "V" && extension != "Jra.") {
                    vm.emvdetailsdata[0].ext_name = "Others";
                    vm.other_ext_name=extension;  
                }

                vm.emvdetailsdata[0].hh_status = "1 - Active"

                if(contact_of !="Others"){
                    vm.emvdetailsdata[0].contact_no_of = "Others";
                    vm.other_contact_name = contact_of;
                }

                console.log(objt["emv"].hh_status);

                console.log(objt);
                psgc_code = String(psgc_code).substring(0, 5);
                vm.emvpsgc_municipality = objt["psgc"].filter(o => o.correspondence_code.includes(psgc_code) && o.geographic_level == 'municipality');
                vm.emvpsgc_barangay = objt["psgc"].filter(o => o.correspondence_code.includes(psgc_code) && o.geographic_level == 'barangay');
            },

            provinceChange(event){
                var vm = this;
                const objt = JSON.parse(data);
                var value = event.target.value;
                value = String(value).substring(0, 5);
                vm.emvpsgc_municipality = objt["psgc"].filter(o => o.correspondence_code.includes(value) && o.geographic_level == 'municipality');
                vm.emvpsgc_barangay = [];
            },
            municipalityChange(event){
                var vm = this;
                const objt = JSON.parse(data);
                var value = event.target.value;
                value = String(value).substring(0, 7);
                vm.emvpsgc_barangay = objt["psgc"].filter(o => o.correspondence_code.includes(value) && o.geographic_level == 'barangay');

            },
            intervieweeDropdown(){
                var vm = this;
                vm.emvdetailsdata[0].relationship_to_grantee = "";
                vm.emvdetailsdata[0].representative_name = "";
            },
            contactnoOfDropdown(){
                var vm = this;
                vm.emvdetailsdata[0].others_name = "";

            },
            distributionStatus(){
                var vm = this;
                vm.emvdetailsdata[0].card_physically_presented = "";
                vm.emvdetailsdata[0].cvd_card_release_place = "";
                vm.emvdetailsdata[0].release_by = "";
                vm.emvdetailsdata[0].cvd_card_release_date_actual = "";
                vm.emvdetailsdata[0].card_pin_is_attached = "";
                vm.emvdetailsdata[0].reason_unclaimed = "";


            },
            pawned(){
                var vm = this;
                vm.emvdetailsdata[0].status = "";
                vm.emvdetailsdata[0].lender_name = "";
                vm.emvdetailsdata[0].date_pawned = "";
                vm.emvdetailsdata[0].loan_amount = "";
                vm.emvdetailsdata[0].lender_address = "";
                vm.emvdetailsdata[0].date_retrieved = "";
                vm.emvdetailsdata[0].interest = "";
                vm.emvdetailsdata[0].offense_date = "";
                vm.emvdetailsdata[0].pvd_remarks = "";
                vm.emvdetailsdata[0].staff_intervention = "";
                vm.emvdetailsdata[0].other_details = "";
                vm.emvdetailsdata[0].pv_reason = "";
                vm.emvdetailsdata[0].offense_history = "";
            },
            updateMain(){
                
                let vm = this;
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, update it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: vm.$route('staff.ajax.emvvalidationdetails.updatemain'),
                            type: 'POST',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: { emvdetailsdata: vm.emvdetailsdata[0], other_ext_name: vm.other_ext_name, other_contact_name: vm.other_contact_name },
                            success: function (response) {
                                if (response) {
                                    vm.emvdetailsdata = response;
        
                                    Swal.fire(
                                        'Update Successfully!',
                                        'Your data has been updated.',
                                        'success'
                                    )
                                }
                            },
                        });
                        document.getElementById("EditForm").submit();
                    }
                });
            },

            updateCancelCard(){

            },

            physicalCashcardPresented(){
                var vm = this;
                vm.emvdetailsdata[0].card_pin_is_attached = "";
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
