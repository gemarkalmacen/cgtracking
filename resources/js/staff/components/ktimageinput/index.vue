<template>
    <div class="image-input image-input-outline" id="kt_image_1">
        <div class="image-input-wrapper" style="background-image: url(assets/media/users/blank.png)"></div>

        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
            <i class="fa fa-pen icon-sm text-muted"></i>
            <input type="file" name="profile_avatar" accept=".jpeg"/>
            <input type="hidden" name="profile_avatar_remove"/>
        </label>

        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
            <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
    </div>
</template>

<script>
export default {
    props: {
        config: {
            type: Object,
            default: () => {}
        },
        initial: {
            type: String,
            default: null
        },
        value: {
            type: String,
            default: null
        },
        error: {
            type: String,
            default: null
        },
        names: {
            type: Array,
            default: () => [
                'mobile'            
            ]
        }
    },

    data: function() {
        return {            
        }
    },

   
    mounted() {
        var vm = this;
        $(document).ready(function() {
            var avatar5 = new KTImageInput('kt_image_5');

            avatar5.on('cancel', function(imageInput) {
                swal.fire({
                    title: 'Image successfully changed !',
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonText: 'Awesome!',
                    confirmButtonClass: 'btn btn-primary font-weight-bold'
                });
            });

            avatar5.on('change', function(imageInput) {
                swal.fire({
                    title: 'Image successfully changed !',
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonText: 'Awesome!',
                    confirmButtonClass: 'btn btn-primary font-weight-bold'
                });
            });

            avatar5.on('remove', function(imageInput) {
                swal.fire({
                    title: 'Image successfully removed !',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonText: 'Got it!',
                    confirmButtonClass: 'btn btn-primary font-weight-bold'
                });
            });
        });
    },

    watch: {
        value(value) {
            this.iti.setNumber(value);
        }
    },

    methods: {       
    },
    
}
</script>