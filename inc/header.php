<header role="banner" class="header">

<div class="container--navutility">

	<nav role="navigation">

    <div class="grid">

    <div class="col-6 left">
      <ul class="list-reset navutility__links cf">
      <?php include $root.'/inc/nav/navutility-links.php'; ?>
      </ul>
    </div><!-- /.col-6 -->

    <div class="col-6 right" style="padding-right:1rem;">
      <ul class="list-reset navutility__social">
      <?php include $root.'/inc/nav/navutility-social.php'; ?>
      </ul>
      <div class="navutility__search">
      <?php include $root.'/inc/nav/navutility-search.php'; ?>
      </div>
    </div><!-- /.col-6 right -->

    </div><!-- /.grid -->

	</nav>

</div><!-- /.container--nav -->

<div class="container--navmain">
  
  <div class="mmenu-trigger__holder">
    <a class="mmenu-trigger" href="#menu"><span>MENU</span> <i class="fa fa-bars fa-lg"></i></a>
  </div>

  <nav role="navigation" class="navmain__nav">
    <ul class="navmain__links cf">
    <?php include $root.'/inc/nav/navmain-links.php'; ?>
    </ul>
  </nav>

</div><!-- /.container--nav -->

</header>
