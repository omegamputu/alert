$(function (){
	var alert = $('#alert');
	if (alert.length > 0) {
		alert.hide();
		alert.slideDown(500);
		// alert.delay(3000).slideUp()
		alert.find('.close').click(function (e){
			e.preventDefault();
			alert.slideUp();
		});
	}
});