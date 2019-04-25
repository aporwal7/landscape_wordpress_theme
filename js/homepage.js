$(document).ready(function() {
	//
	$('#camera_wrap').camera({
		//thumbnails: true
		//alignment			: 'centerRight', 
		autoAdvance			: true,		
		mobileAutoAdvance	: true,
		//fx					: 'simpleFade',
		height: '48%',
		hover: false,
		loader: 'none',
		navigation: false,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		pagination			: true,
		time: 7000,
		transPeriod: 1000,
		minHeight: '300px'
	});
	
	
$("#work_01").hover(function() {
$(".work_hover_1").css("display", "block");
},function(){
$(".work_hover_1").css("display", "none");
});
$("#work_02").hover(function() {
$(".work_hover_2").css("display", "block");
},function(){
$(".work_hover_2").css("display", "none");
});
$("#work_03").hover(function() {
$(".work_hover_3").css("display", "block");
},function(){
$(".work_hover_3").css("display", "none");
});
$("#work_04").hover(function() {
$(".work_hover_4").css("display", "block");
},function(){
$(".work_hover_4").css("display", "none");
});
$("#work_05").hover(function() {
$(".work_hover_5").css("display", "block");
},function(){
$(".work_hover_5").css("display", "none");
});
$("#work_06").hover(function() {
$(".work_hover_6").css("display", "block");
},function(){
$(".work_hover_6").css("display", "none");
});
$("#work_07").hover(function() {
$(".work_hover_7").css("display", "block");
},function(){
$(".work_hover_7").css("display", "none");
});

$("#work_08").hover(function() {
$(".work_hover_8").css("display", "block");
},function(){
$(".work_hover_8").css("display", "none");
});
$("#work_09").hover(function() {
$(".work_hover_9").css("display", "block");
},function(){
$(".work_hover_9").css("display", "none");
});




$("#work_10").hover(function() {
$(".work_hover_10").css("display", "block");
},function(){
$(".work_hover_10").css("display", "none");
});

$("#work_11").hover(function() {
$(".work_hover_11").css("display", "block");
},function(){
$(".work_hover_11").css("display", "none");
});
$("#work_12").hover(function() {
$(".work_hover_12").css("display", "block");
},function(){
$(".work_hover_12").css("display", "none");
});


}); //
$(window).load(function() {
	//

}); //

$(document).ready(function() {
	//	carouFredSel team
	$('#slider5 .carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 9000					
		},
		responsive: true,		
		direction:	"left",
		//prev: '.prev1',
		//next: '.next1',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo",
			fx: "fade"
		},			
		items: {
        	width: '1000',
			height: 'variable',	//	optionally resize item-height			  
			visible: {
				min: 1,
				max: 1
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			},
		pagination  : ".pagination5"


	});
}); //
AOS.init({
  duration: 1200,
})