

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


  //Materialize ScrollSpy init
  jQuery('.scrollspy').scrollSpy({
    scrollOffset: 0
  });

  //Materialize scrollFire init
  var options = [
      {selector: '#introduction', offset: 300, callback: function(el) {
        Materialize.showStaggeredList(jQuery(el));
      } },
      {selector: '#introduction .title-block', offset: 400, callback: function(el) {
        jQuery(el).addClass('show-animate');
      } }
    ];

  Materialize.scrollFire(options);
});
