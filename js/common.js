$(function() {

	$("#validation").validationEngine();

	$("#expiry").datepicker({
		dateFormat: 'dd-mm-yy',
		minDate: -7,
		changeMonth: true,
		changeYear: true
	});
});