//Meu código de JQuery Pessoal
$(document).ready(function(){
	var smartphoneScreen = $(window).width()<=767;
	if (smartphoneScreen) {
		$('#row-produtos, #row-produtos-single').removeClass('row');
	};
	// BX-SLIDER
	$('.bxslider').bxSlider({
		auto: true
	});

});
