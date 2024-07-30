let map;

async function initMap() {
  const { Map } = await google.maps.importLibrary("maps");

  map = new Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}

initMap();

//Smooth Scrolling
jQuery(function(){
   jQuery("#navbar a, .btn").on("click",function(event){
    event.preventDefault();
    const hash = this.hash;
    jQuery('html,body').animate({
      scrollTop: jQuery(hash).offset().top-100
    },800);
   });

});