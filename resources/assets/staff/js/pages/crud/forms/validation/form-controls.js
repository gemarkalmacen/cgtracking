// Class definition
var KTFormControls = function () {
	// Private functions
	var _initDemo2 = function () {
		FormValidation.formValidation(
			document.getElementById('kt_form_2'),
			{
				fields: {
					card_holder_name: {
						validators: {
							notEmpty: {
								message: 'Card Holder Name is required'
							}
						}
					},
					card_holder_name: {
						validators: {
							notEmpty: {
								message: 'Credit card number is required'
							},
							creditCard: {
								message: 'The credit card number is not valid'
							}
						}
					},
					card_physically_presented: {
						validators: {
							notEmpty: {
								message: 'Card detail is required'
							}
						}
					},
					card_pin: {
						validators: {
							notEmpty: {
								message: 'Card Pin is required'
							}
						}
					},
					card_replacement_requests: {
						validators: {
							notEmpty: {
								message: 'Card Replacement Requests is required'
							}
						}
					},

					billing_address_1: {
						validators: {
							notEmpty: {
								message: 'Address 1 is required'
							}
						}
					},
					billing_city: {
						validators: {
							notEmpty: {
								message: 'City 1 is required'
							}
						}
					},
					billing_state: {
						validators: {
							notEmpty: {
								message: 'State 1 is required'
							}
						}
					},
					billing_zip: {
						validators: {
							notEmpty: {
								message: 'Zip Code is required'
							},
							zipCode: {
								country: 'US',
								message: 'The Zip Code value is invalid'
							}
						}
					},

					billing_delivery: {
						validators: {
							choice: {
								min:1,
								message: 'Please kindly select delivery type'
							}
						}
					},
					package: {
						validators: {
							choice: {
								min:1,
								message: 'Please kindly select package type'
							}
						}
					}
				},

				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Validate fields when clicking the Submit button
					submitButton: new FormValidation.plugins.SubmitButton(),
            		// Submit the form when all fields are valid
            		defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		);
	}

	return {
		// public functions
		init: function() {
			_initDemo2();
		}
	};
}();




jQuery(document).ready(function() {
	KTFormControls.init();
});
