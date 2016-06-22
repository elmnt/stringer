// Accordion menus
$("#accordion li a").on("click", function (e) {
  //allow links to be followed if they don't have a sub-menu
  if ( !$(this).parent().has("ul").length ) { return; }
  // We have a sub-menu, so stop the link from being followed
  e.preventDefault();
  if(!$(this).hasClass("open")) {
    // We need to know which 'level' we're on 
    var currentLevel = $(this).closest('ul');
    $("li ul", currentLevel).slideUp(350);
    $("li a", currentLevel).removeClass("open");
    // Open our new menu and add the open class
    $(this).next("ul").slideDown(350);
    $(this).addClass("open");
  } else {
    $(this).removeClass("open");
    $(this).next("ul").slideUp(350);
  }
});

// Global scroll-to-top anchor (must add .scrollanchor class to the a tag)
// Possible easing methods: https://jqueryui.com/easing/
$(".scrollanchor").click(function(e){
  e.preventDefault();
  $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500, 'easeInOutQuint');
});

// animate scroll to in-page link
/*
$(function() {
  //$('a[href*=#]:not([href=#])').click(function() {
  // this newer method (below) excludes anchor links starting with 'panel' (Foundation accordions, for instance)
  $('a[href*=#]:not([href=#],[href^=#panel])').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
*/
