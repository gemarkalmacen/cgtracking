"use strict";

// Class definition
var KTProfile = function () {
	// Elements
	var avatar;
	var avatar2;
	var avatar3;
	var offcanvas;

	// Private functions
	var _initAside = function () {
		// Mobile offcanvas for mobile mode
		offcanvas = new KTOffcanvas('kt_profile_aside', {
            overlay: true,
            baseClass: 'offcanvas-mobile',
            //closeBy: 'kt_user_profile_aside_close',
            toggleBy: 'kt_subheader_mobile_toggle'
        });
	}

	var _initForm = function() {
		avatar = new KTImageInput('kt_profile_avatar');
		avatar2 = new KTImageInput('kt_profile_avatar_2');
		avatar3 = new KTImageInput('kt_profile_avatar_3');
	}

	return {
		// public functions
		init: function() {
			_initAside();
			_initForm();
		}
	};
}();

// jQuery(document).ready(function() {
	KTProfile.init();
// });
