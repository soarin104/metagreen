$(function(){
	//header - language
	$(".header .inner .leftBox .lanBox").on("click",function(){
		$(this).find("ul").stop().slideToggle("fast");
	});

	//header - button
	$(".header .inner .rightBox .utilBox li.onoff").on("click",function(){
		$(this).toggleClass("off");
	})
	
	//device
	$(".deviceSection .inner").slick({
		dots: true,
		arrows: false,
		autoplay: false,
		autoplaySpeed: 4000,
		speed: 1000,
		pauseOnHover: false,
		pauseOnFocus: false,
		slidesToShow: 6,
		slidesToScroll: 6,
		centerMode: false,
		responsive: [
			{
				breakpoint: 1600,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 5,
				}
			},
			{
				breakpoint: 1400,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				}
			},
			{
				breakpoint: 720,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			}
		]
	});

	//Device 고정값 수정 팝업
	$(".fixOpen").on("click",function(){
		$(".fixBox").fadeIn(400);
	})
	
	$(".fixBox article ul li.cancle").on("click",function(){
		$(".fixBox").fadeOut(400);
	});
})