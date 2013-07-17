fixer = $('<style>.fixer {position:fixed; z-index:99; border-bottom: 2px solid #fff;}</style>');
$('html > head').append(fixer);
$(window).bind('scroll',function(e){
	menu = $('.container_menu');
	spacer = $('.spacer');
	yPos = $(window).scrollTop();
	if(yPos >= 183){
		menu.addClass('fixer');
		spacer.css('margin-top', '40px');
	}else {
		menu.removeClass('fixer');
		spacer.css('margin-top', 0);
	}
});