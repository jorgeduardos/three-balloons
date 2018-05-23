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

// gallery and team display

    $('.js-nav-gallery').click(function(){
        $('#gallery').addClass('animated fadeInRightBig').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass('fadeInRightBig');
       });
    });

    $('#gallery .icon-container').click(function(){
       // $('#gallery').removeClass('animated fadeInRightBig');
       $('#gallery').addClass('animated fadeOutRightBig').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass('animated fadeOutRightBig');
       });
       // $('#gallery').removeClass('animated fadeOutRightBig');
    });

    $(".menu_icon_mobile").on("click", function(){
    if($(this).hasClass("ion-md-menu")){
      $(this).removeClass("ion-md-menu");
      $(this).addClass("ion-md-close").show()
      $(".mobile-nav").show("blind");
    }else{
      $(this).addClass("ion-md-menu");
      $(this).removeClass("ion-md-close");
      $(".mobile-nav").hide("blind");
    }
  });


//Animations

  // $('.js-about').waypoint(function(direction) {
  //     if (direction == "down") {
  //          $('.hrAbout').animate({width: '5000px'}, 1500);
  //     }
  // }, {
  //   offset: 500
  // }); 


