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

