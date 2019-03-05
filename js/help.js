$(document).ready(function(){

	$(window).scroll(function(){

	if($(window).scrollTop() < 80) {

		$('.navbar').css ({
			'margin-top': '-100px',
			'opacity': '0'
		})

	}else{
			$('.navbar').css ({
			'margin-top': '0px',
			'opacity': '1'
		})
	}

});

});