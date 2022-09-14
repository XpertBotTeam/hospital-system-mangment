"use strict";

// Class definition
var KTUserProfile = function () {
	// Base elements
	var avatar;
	var offcanvas;

	// Private functions
	var initAside = function () {
		// Mobile offcanvas for mobile mode
		offcanvas = new KTOffcanvas('kt_user_profile_aside', {
            overlay: true,  
            baseClass: 'kt-app__aside',
            closeBy: 'kt_user_profile_aside_close',
            toggleBy: 'kt_subheader_mobile_toggle'
        }); 
	}

	var initUserForm = function() {
		avatar = new KTAvatar('kt_user_avatar');
	}

	return {
		// public functions
		init: function() {
			initAside();
			initUserForm();
		}
	};
}();

KTUtil.ready(function() {	
	KTUserProfile.init();
});