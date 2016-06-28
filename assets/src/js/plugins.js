/* mmenu init */
$("#menu").mmenu({
   "offCanvas": {
      "position": "right"
   }
});

/* 
Full-page background slideshow init
$(function() {
  cbpBGSlideshow.init();
});
*/

/*
// grab an element
var myHeadroomElement = document.querySelector(".header");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myHeadroomElement);
// initialise
headroom.init();
*/

//$(".header .container--navmain").headroom();

/* sticky header */
$(".header .container--navmain").sticky({
  topSpacing: 0,
  zIndex: 6
});

/* to unstick an object */
//$(".header .container--navmain").unstick();

/*
Options
topSpacing: (default: 0) Pixels between the page top and the element's top.
bottomSpacing: (default: 0) Pixels between the page bottom and the element's bottom.
className: (default: 'is-sticky') CSS class added to the element's wrapper when "sticked".
wrapperClassName: (default: 'sticky-wrapper') CSS class added to the wrapper.
center: (default: false) Boolean determining whether the sticky element should be horizontally centered in the page.
getWidthFrom: (default: '') Selector of element referenced to set fixed width of "sticky" element.
widthFromWrapper: (default: true) Boolean determining whether width of the "sticky" element should be updated to match the wrapper's width. Wrapper is a placeholder for "sticky" element while it is fixed (out of static elements flow), and its width depends on the context and CSS rules. Works only as long getWidthForm isn't set.
responsiveWidth: (default: false) Boolean determining whether widths will be recalculated on window resize (using getWidthfrom).
zIndex: (default: auto) controls z-index of the sticked element.

Methods
sticky(options): Initializer. options is optional.
sticky('update'): Recalculates the element's position.

Events
sticky-start: When the element becomes sticky.
sticky-end: When the element returns to its original location
sticky-update: When the element is sticked but position must be updated for constraints reasons
sticky-bottom-reached: When the element reached the bottom space limit
sticky-bottom-unreached: When the element unreached the bottom space limit
*/

/* 
Responsive slideshow settings
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

/* 
wow.js plugin init (to delay show of animate.css elements)
CONFLICTS WITH MMENU
new WOW().init();
*/
