$(function() {
	var topBtn = $('.backtotop');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 140) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});
