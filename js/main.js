$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  });

$('.owl-carousel').owlCarousel({
loop:true,
margin:10,
responsiveClass:true,
responsive:{
    0:{
        items:1,
        nav:true
    },
    400:{
        items:2,
        nav:false
    },
    500:{
        items:3,
        nav:false
    },
    1000:{
        items:5,
        nav:true,
        loop:false
    }
}
})

//nav links
navbar_links = document.querySelectorAll("nav.navbar a.nav-link");
console.log(navbar_links);
console.log("hello")


var stars = document.getElementsByClassName('star_img');
var ratingInput = document.getElementById('ratingInput'); // Hidden input field to store the rating

for (var i = 0; i < 5; i++) {
  stars[i].addEventListener('click', function () {
    var selectedStarId = this.id;
    var ratingValue = selectedStarId.substr(4); // Extract the rating value from the star ID

    // Update the selected stars' color
    for (var j = 0; j < 5; j++) {
      if (j < ratingValue) {
        stars[j].src = './images/star_active.png';
      }else{
        stars[j].src = './images/star_r.png';
      }
    }

    // Update the hidden input field with the rating value
    ratingInput.value = ratingValue;
    console.log(ratingInput.value);
  });
}
