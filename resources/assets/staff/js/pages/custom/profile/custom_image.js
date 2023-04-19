"use strict";

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#card_image_1')
				.attr('src', e.target.result)
				.width(120)
				.height(120);
		};

		reader.readAsDataURL(input.files[0]);
	}
}
