$(document).ready(function(){

  /*
  // toggle the login buttons
  $( '#loginbuttons__toggler' ).click(function() {
    $( '.loginbuttons__holder' ).slideToggle( 250, 'swing' );
  });
  // also let the sticky header login button do it
  $( "#loginbuttons__toggler--stick" ).click(function() {
    
    // this does not appear to be necessary
    // if( $( '.loginbuttons__holder' ).css('display') == 'block' ) {
    //   //just scroll up
    // } else {
    //   $( ".loginbuttons__holder" ).slideToggle( 250, "swing" );
    // }

    $( ".loginbuttons__holder" ).slideToggle( 250, "swing" );

  });

  // control the top border of the LOGIN show-hide element
  $( '.button--header-login' ).click(function() {
    $( '.container--navmain' ).toggleClass("container--navmain--grey");
  });
  */

  // accordion menus
  $("#accordion li a").on("click", function (e) {
    //allow links to be followed if they don't have a sub-menu
    if ( !$(this).parent().has("ul").length ) { return; }

    //we have a sub-menu, so stop the link from being followed
    e.preventDefault();

    if(!$(this).hasClass("open")) {
      //we need to know which 'level' we're on 
      var currentLevel = $(this).closest('ul')
      $("li ul", currentLevel).slideUp(350);
      $("li a", currentLevel).removeClass("open");

      // open our new menu and add the open class
      $(this).next("ul").slideDown(350);
      $(this).addClass("open");
    } else {
      $(this).removeClass("open");
      $(this).next("ul").slideUp(350);
      }
  });

  // global scroll-to-anchor (must add .scrollanchor class to the a tag)
  // possible easing methods: https://jqueryui.com/easing/
  $(".scrollanchor").click(function(event){
    // determine how far from the top we are
    // increase the scroll duration slightly, the farther down we are
    var howfar = $(this).offset().top
    if ( howfar < 1000 ){
      var scrollspeed = 500;
    } else if ( howfar > 1000 && howfar < 2000 ){
      var scrollspeed = 600;
    } else if ( howfar > 2000 && howfar < 3000 ){
      var scrollspeed = 700;
    } else if ( howfar > 3000 && howfar < 4000 ){
      var scrollspeed = 800;
    } else if ( howfar > 4000 && howfar < 5000 ){
      var scrollspeed = 900;
    } else if ( howfar > 5000 ){
      var scrollspeed = 1000;
    }
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, scrollspeed, 'easeInOutQuint');
  });
  // end:global scroll-to-anchor

});

// the secondary header that shows on scroll-down
$(window).scroll(function (event) {

  /*
  // only show it 800 and up
  if ($(window).width() >= 800) {
    var hdrh = $( '.header' ).height();
    var curypos = $(window).scrollTop();
    // SHOW IT
    if ( curypos > hdrh ) {
      $( '.header--stick' ).removeClass( 'header--stick-hide' );
      $( '.header--stick' ).addClass( 'header--stick-show' );
    // HIDE IT
    } else if ( curypos < hdrh ) {
      $( '.header--stick' ).addClass( 'header--stick-hide' );
      $( '.header--stick' ).removeClass( 'header--stick-show' );
    }
  }
  */

});

$(window).on("load resize scroll",function(e){

  /*
  if ($(window).width() < 800) {

    // make sure the secondary header is gone under 800
    $( '.header--stick' ).addClass( 'header--stick-hide' );
    $( '.header--stick' ).removeClass( 'header--stick-show' );

    // hide the desktop login buttons
    // $(".loginbuttons__holder:visible").hide();
    // $(".loginbuttons__holder:hidden").show();
    // event.preventDefault();
    // if ($( '.loginbuttons__holder' ).css('display') == 'block'){
    //   $( '.loginbuttons__holder' ).css( 'cssText', 'display: none !important;' );
    // }

  }
  */

});
