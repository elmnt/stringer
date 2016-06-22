<nav id="menu">

  <ul class="list-reset cf">

  <?php include $root.'/inc/nav/navmain-links.php'; ?>
  
  <div class="mobile__navutility__links">
  <?php include $root.'/inc/nav/navutility-links.php'; ?>
  </div>

  <div class="mobile__navutility__social">
  <?php include $root.'/inc/nav/navutility-social.php'; ?>
  </div>

  <div class="mobile__navutility__search">
  <?php include $root.'/inc/nav/navutility-search.php'; ?>
  </div>

  </ul>

</nav><!-- /#menu -->

<footer class="footer">
  <div class="container--footer">
  <div class="wrap pad">
    
    <div class="grid" style="text-align:center;">
      <div class="single-col" style="text-align:center;">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>made by <a href="https://elmnt.com/" target="_blank">elmnt</a></p>
        <p><a href="https://twitter.com/elmnt" target="_blank"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://github.com/elmnt" target="_blank"><i class="fa fa-github-alt"></i></a></p>
        <p><a href="#top" class="scrollanchor button">Return to Top</a></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div>
    
  </div>
  </div>
</footer>

</div><!-- /#page -->

<script src="/assets/js/main.min.js"></script>

<script type="text/javascript">
$(window).on("load resize scroll",function(e){

  var wdw = $( window ).width();
  $("#checkw").html( wdw );

  $(".mmenu-trigger").click(function(){
    console.log("MENU");
  });

});
</script>
