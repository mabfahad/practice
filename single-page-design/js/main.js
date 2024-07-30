let map

async function initMap() {
  const { Map } = await google.maps.importLibrary('maps')

  map = new Map(document.getElementById('map'), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  })
}

initMap()

//Sticky menu background
window.addEventListener('scroll', function () {
  if (this.window.scrollY > 150) {
    document.querySelector('#navbar').style.opacity = 0.8;
  } else {
    document.querySelector('#navbar').style.opacity = 1;
  }
})

//Smooth Scrolling
jQuery(function () {
  jQuery('#navbar a, .btn').on('click', function (event) {
    event.preventDefault()
    const hash = this.hash
    jQuery('html,body').animate(
      {
        scrollTop: jQuery(hash).offset().top - 100,
      },
      800
    )
  })
})
