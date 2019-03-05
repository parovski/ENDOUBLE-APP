$(document).ready(function(){

	$(window).scroll(function(){

	if($(window).scrollTop() < 80) {

		$('.navbar').css ({
			'margin-top': '-100px',
			'opacity': '0'
		});

		$('.navbar-default').css({
			'background': 'rgba(59, 59, 59, 0)'
		});

	}else{
			$('.navbar').css ({
			'margin-top': '0px',
			'opacity': '1'
		});
			$('.navbar-default').css({
			'background': 'rgba(59, 59, 59, 1)',
			'border-color': '#444'
		});
	}

});

});

$(document).ready(function(){

	$('.nav-item, #scroll-to-top').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});

});


$(document).ready(function(){

	$('.bxslider').bxSlider({

		slideWidth: 292.5,
		auto: true,
		minSlides: 1,
		maxSlides: 3,
		slideMargin: 50

	});

});

$(document).ready(function(){

	$(".counter-num").counterUp({
		delay: 10,
		time: 5000
	});
});


$(document).ready(function(){

	new WOW().init();
	
});