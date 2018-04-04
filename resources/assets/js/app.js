require('@fortawesome/fontawesome');
require('@fortawesome/fontawesome-free-solid');
var jQuery = require('jquery');
require('jquery-ui');

(function($) {
	$('.hasdatepicker').datepicker({changeYear: true});

	//every time the category is changed adjust year of existing expiration date.
	if($('body.asset-edit' ).length || $('body.asset-create' ).length) {
		$("[name='category']").change(function() {
			var service_start = $("[name='service_start_date']");
			if((service_start).val() == "") {
				$("[name='expiration_date']").val(null);
			} else {
				__set_exp_date($(this), $("[name='service_start_date']"));
			}
		});

		$("[name='service_start_date']").change(function() {
			if($(this).val() == "") {
				$("[name='expiration_date']").val(null);
			} else {
				__set_exp_date($("[name='category']"), $(this));
			}
		});

		function __set_exp_date(category, service_start) {
			var useful_life = parseInt(category.find(':selected').attr('data-useful-life'));
			var service_start_date_string = service_start.val();
			var service_start_date = new Date(service_start_date_string);
			var start_year = service_start_date.getFullYear();
			var start_month = service_start_date.getMonth();
			var start_day = service_start_date.getDate();
			var new_expiration = new Date(start_year + useful_life, start_month, start_day);
			$("[name='expiration_date']").val($.datepicker.formatDate('mm/dd/yy', new_expiration));
		}
	}

})(jQuery);
