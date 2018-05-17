// $(".leonardo-img").hover(function(){
// 	$(".leonardo").css("display", "block");
// });

function initMap(){
	var location = {lat: 29.785785, lng: -95.824396};
	var center = {lat: 29.761331, lng: -95.358841};
	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 10,
		center: center
	});

	var marker = new google.maps.Marker({
      position: location,
      map: map,
      title: 'Three Balloons'
    });

}

//NAV BAR ANIMATIONS

	$('.js-nav-home').click(function(){
       $('html, body').animate({scrollTop: $('.js-home').offset().top}, 1500);
    });
    
    $('.js-nav-about').click(function(){
       $('html, body').animate({scrollTop: $('.js-about').offset().top -80}, 1500);
    });
    
    $('.js-nav-team').click(function(){
       $('html, body').animate({scrollTop: $('.js-team').offset().top -20}, 1500); 
    });
    
    $('.js-nav-services').click(function(){
       $('html, body').animate({scrollTop: $('.js-services').offset().top -100}, 1500);  
    });

    $('.js-nav-contact').click(function(){
       $('html, body').animate({scrollTop: $('.js-contact').offset().top -50}, 1500);  
    });

