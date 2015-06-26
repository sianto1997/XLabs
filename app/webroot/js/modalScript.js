//Created by Ossama Sybesma - Fixed by Joeri de Wacht THX!!

$(document).ready(function(){

	$('.openmodale').click(function (e) {
		e.preventDefault();
		$('.modale').addClass('opened');
		$('.modale').addClass('overlay');
	});
	$('.closemodale').click(function (e) {
		e.preventDefault();
		$('.modale').removeClass('opened');
		$('.modale').removeClass('overlay');
	});
	$('.overlay').click(function (e) {
		e.preventDefault();
		$('.modale').removeClass('opened');
		$('.modale').removeClass('overlay');
	});
	$(document).keyup(function(e) {
		if (e.keyCode == 27) {
			e.preventDefault();
			$('.modale').removeClass('opened');
			$('.modale').removeClass('overlay');
		}
	});

});