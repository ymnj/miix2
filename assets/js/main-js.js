

jQuery( document ).ready(function() {

  //Init sidebar
  jQuery(".button-collapse").sideNav();

  //Headroom.js
  var mainNav = document.querySelector(".navbar-fixed");
  // construct an instance of Headroom, passing the element
  var headroom  = new Headroom(mainNav, {
  tolerance: {
    up: 1,
    down: 1
  },
  classes: {
    initial: "animated",
    pinned: "slideDown",
    unpinned: "slideUp",
    notTop : "headroom--not-top",
  }
});
  // initialise
  headroom.init();

});
