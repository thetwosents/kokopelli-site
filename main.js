  let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 32.78272738090331,  lng: -96.80688305465472 },
    zoom: 18,
  });

  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: { lat: 32.78272738090331,  lng: -96.80688305465472 },
    map: map,
  });
}

window.initMap = initMap;

// On document ready
jQuery(function ($) {
  // Watch the user scroll position and add the .active class to header on scroll down page
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("header").addClass("active");
    } else {
      $("header").removeClass("active");
    }
  }
  );

});