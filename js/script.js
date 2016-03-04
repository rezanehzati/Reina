$(document).ready(function(){
	if( $('header #myCarousel').length == 0 ) {
		$('header').css('background-image','url(/img/slider/bg0.jpg)').css('background-size','cover');
		$('footer').css('border-top','1px solid #ECC26C');
	}
	$('.flag').mouseenter(function(){
		$(this).css('border','1px solid gold');
	}).mouseleave(function(){
		$(this).css('border','none');
		});
	 $('.carousel-indicators').remove();
	 $('.carousel').carousel({
        interval: 3000 //changes the speed
    });
   
   	$('.fill').each(function(){
	   	
	   	var index = $('.fill').index(this);
	   	var url = "url('/img/slider/bg" + index + ".jpg')";
	   	$(this).css('background-image',url);
	   		
   	}); 
   	$(document).scroll(function(){
	   var scrollTop = $(document).scrollTop();

	   $('.arrows').css('opacity', 1 - scrollTop / 50);
	   	
   	});

    
		playAudio();


    
});

var x = document.getElementById("myAudio"); 
		function playAudio() { 	
		x.play(); 
		} 
		function pauseAudio() { 
		x.pause(); 
		} 


$(document).ready(function() {
	var state = "paused";
	$('#pause').on('click', function() {
		if(state == 'paused') {
			pauseAudio()
			state = "playing";
			$("#circle").attr("class", "play");
			$("#from_pause_to_play")[0].beginElement();
		} else {
			state = "paused";
			playAudio();			
			$("#circle").attr("class", "");
			$("#from_play_to_pause")[0].beginElement();
		}
	});
});