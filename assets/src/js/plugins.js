$(document).ready(function() {

  /* .slideToggle options:
  $(selector).slideToggle(speed,easing,callback)
  speed: 
  milliseconds
  "slow"
  "fast"
  easing:
  "swing" - moves slower at the beginning/end, but faster in the middle
  "linear" - moves in a constant speed
  */

  // load the headroom script (set the right class)
  //$(".header").headroom();

  // with a few basic options
  /*
  $(".header").headroom({
    "offset": 200,
    "tolerance": 10,
    "classes": {
      "initial": "animated",
      "pinned": "slideDown",
      "unpinned": "slideUp"
    }
  });
  */
  /*
  // to destroy
  $("#header").headroom("destroy");
  */

  // with lots of options
  /*
  $(".header").headroom({
    // vertical offset in px before element is first unpinned
    offset : 0,
    // scroll tolerance in px before state changes
    tolerance : 0,
    // or you can specify tolerance individually for up/down scroll
    tolerance : {
      up : 5,
      down : 0
    },
    // css classes to apply
    classes : {
      // when element is initialised
      initial : "headroom",
      // when scrolling up
      pinned : "headroom--pinned",
      // when scrolling down
      unpinned : "headroom--unpinned",
      // when above offset
      top : "headroom--top",
      // when below offset
      notTop : "headroom--not-top"
    },
    // element to listen to scroll events on, defaults to `window`
    scroller : someElement,
    // callback when pinned, `this` is headroom object
    onPin : function() {},
    // callback when unpinned, `this` is headroom object
    onUnpin : function() {},
    // callback when above offset, `this` is headroom object
    onTop : function() {},
    // callback when below offset, `this` is headroom object
    onNotTop : function() {},
  });
  */

  // add a slide toggle event
  /*
  $( "#loginbuttons__toggler" ).click(function() {
    $( ".loginbuttons__holder" ).slideToggle( 250, "swing" );
  });
  */

  //jQuery(document).ready(function( $ ) {
    /*
    $("#menu").mmenu({
      //"slidingSubmenus": false,
      "extensions": [
        "border-full"
      ],
      "offCanvas": {
        "position": "right"
      }
    });
    */
  //});

  // mmenu
  $("#menu").mmenu({
     "offCanvas": {
        "position": "right"
     }
  });

  /* full-page background slideshow
  $(function() {
    cbpBGSlideshow.init();
  });
  */

  // the responsive slideshow settings
  /*
  You need to create separate instances if:
  1. you have more than one slideshow per page
  2. you want each slideshow to have different settings
  For example: #slider_1, #slider_2, #slider_3 (each with its own settings)
  */
  $(function() {
    $("#slider").responsiveSlides({
      auto: true,           // Boolean:  Animate automatically, true or false
      speed: 500,           // Integer:  Speed of the transition, in milliseconds
      timeout: 5000,        // Integer:  Time between slide transitions, in milliseconds
      pager: true,          // Boolean:  Show pager, true or false
      nav: true,            // Boolean:  Show navigation, true or false
      random: false,        // Boolean:  Randomize the order of the slides, true or false
      pause: true,          // Boolean:  Pause on hover, true or false
      pauseControls: false, // Boolean:  Pause when hovering controls, true or false
      prevText: "Previous", // String:   Text for the "previous" button
      nextText: "Next",     // String:   Text for the "next" button
      maxwidth: "",         // Integer:  Max-width of the slideshow, in pixels
      navContainer: "",     // Selector: Where controls should be appended to, default is after the 'ul'
      manualControls: "",   // Selector: Declare custom pager navigation
      namespace: "rslides", // String:   Change the default namespace used
      before: function(){}, // Function: Before callback
      after: function(){}   // Function: After callback
    });
  });

});
