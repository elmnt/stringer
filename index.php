<?php 
$current_page = 'index';
$page_title = 'This is the home page';
include $root.'inc/top.php';
?>

<!-- style guide only -->
<link rel="stylesheet" href="/assets/css/styleguide.css">
<link rel="stylesheet" href="/assets/css/solarized.dark.css">

<style type="text/css">
/* drop quick style edits here */
.rslides li {
  background: #1f3039;
}
.rslides img {
  opacity: .25;
}
</style>

</head>

<body class="styleguide">

<div id="top"></div>

<div id="page">

<?php include $root.'/inc/header.php'; ?>

<div class="content">

<!-- ==================================== stringer intro -->

<div class="container">
<div class="wrap">

<div class="cmbox">
  <div class="cmbox__content">
    <img class="sg__logo" src="/assets/img/stringer.svg">
    <h1 class="sg__title">stringer</h1>
  </div>
</div>

</div>
</div>

<div class="container">
<div class="wrap">

  <div class="grid">
    <div class="col-6">
      <p><strong>Stringer</strong> is a robust, responsive framework with plenty of optional building blocks. It's not a feature-complete boilerplate, but a good starting point upon which you can develop custom themes. This project is a sandbox, and it changes often.</p>
      <p>A <strong>stringer</strong> is a wooden strip that runs the length of a surfboard, designed to give the board strength &amp; rigidity.</p>
    </div>
    <div class="col-6">
      <ul>
        <li>See the <a href="https://github.com/elmnt/stringer">repo</a> for more info</li>     
        <li>I use <a href="https://incident57.com/codekit/">Codekit</a> to manage this project. My config file is in the repo, if you're a Codekit user.</li>
        <li>I'm using the (very customizable) jQuery <a href="http://mmenu.frebsite.nl">mmenu</a> system for mobile navigation.</li>
      </ul>
    </div>
  </div>

</div>
</div>

<!-- ==================================== /stringer intro -->



<!-- ==================================== picturefill -->

<div class="container">
  <div class="wrap">

    <h3 style="margin-top:0;">Picturefill responsive images</h3>

  </div>
</div>

<div class="container">
  <div class="wrap">

  <picture class="fit">
    <source srcset="/assets/img/surf-xl.jpg" media="(min-width: 2000px)">
    <source srcset="/assets/img/surf-lg.jpg" media="(min-width: 1200px)">
    <source srcset="/assets/img/surf-md.jpg" media="(min-width: 800px)">
    <source srcset="/assets/img/surf-sm.jpg" media="(min-width: 300px)">
    <img srcset="/assets/img/surf-sm.jpg" alt="<?php echo $picalt; ?>">
  </picture>

</div>
</div>

<div class="container pre-holder">
<div class="wrap">

  <pre style="margin-top:10px;">
  <code data-language="html">
    <picture class="fit">
      <source srcset="/assets/img/surf-xl.jpg" media="(min-width: 2000px)">
      <source srcset="/assets/img/surf-lg.jpg" media="(min-width: 1200px)">
      <source srcset="/assets/img/surf-md.jpg" media="(min-width: 800px)">
      <source srcset="/assets/img/surf-sm.jpg" media="(min-width: 300px)">
      <img srcset="/assets/img/surf-sm.jpg" alt="alt">
    </picture>
  </code>
  </pre>

</div>
</div>

<div class="container pre-holder">
  <div class="wrap">

    <p style="margin-top:10px;">The 'data-pfsrcset' and the 'src' attributes will be created &amp; filled dynamically. They <strong>do not</strong> exist in your markup. See source code for accurate picturefill markup.</p>

  </div>
</div>

<!-- ==================================== /picturefill -->



<!-- ==================================== slider -->

<div class="container">
  <div class="wrap">
    <h3>Responsive slider with vertically middle-aligned captions &amp; call-to-action (with picturefill)</h3>
  </div>
</div>

<div class="container">
<div class="wrap">

  <div class="rslides_container cf">
    <ul class="rslides" id="slider">

      <li>
        <picture class="fit">
          <source srcset="/assets/img/_slideshow/surf-01-lg.jpg" media="(min-width: 1800px)">
          <source srcset="/assets/img/_slideshow/surf-01-md.jpg" media="(min-width: 1000px)">
          <source srcset="/assets/img/_slideshow/surf-01-sm.jpg" media="(min-width: 400px)">
          <img srcset="/assets/img/_slideshow/surf-01-sm.jpg" alt="<?php echo $picalt; ?>">
        </picture>
        <div class="caption">
        <div class="caption-contents">
          <h1>Frontside</h1>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p> -->
          <a href="#!" class="button button--trans button--big">Call to Action</a>
        </div>
        </div>
      </li>

      <li>
        <picture class="fit">
          <source srcset="/assets/img/_slideshow/surf-02-lg.jpg" media="(min-width: 1800px)">
          <source srcset="/assets/img/_slideshow/surf-02-md.jpg" media="(min-width: 1000px)">
          <source srcset="/assets/img/_slideshow/surf-02-sm.jpg" media="(min-width: 400px)">
          <img srcset="/assets/img/_slideshow/surf-02-sm.jpg" alt="<?php echo $picalt; ?>">
        </picture>
        <div class="caption">
        <div class="caption-contents">
          <h1>Backside</h1>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p> -->
          <a href="#!" class="button button--trans button--big">Call to Action</a>
        </div>
        </div>
      </li>

      <li>
        <picture class="fit">
          <source srcset="/assets/img/_slideshow/surf-03-lg.jpg" media="(min-width: 1800px)">
          <source srcset="/assets/img/_slideshow/surf-03-md.jpg" media="(min-width: 1000px)">
          <source srcset="/assets/img/_slideshow/surf-03-sm.jpg" media="(min-width: 400px)">
          <img srcset="/assets/img/_slideshow/surf-03-sm.jpg" alt="<?php echo $picalt; ?>">
        </picture>
        <div class="caption">
        <div class="caption-contents">
          <h1>Duck Dive</h1>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p> -->
          <a href="#!" class="button button--trans button--big">Call to Action</a>
        </div>
        </div>
      </li>

    </ul>
  </div>

</div>
</div>

<div class="container pre-holder">
<div class="wrap">
  <p class="sg">The responsive slideshow is complex, and can't be implemented by copy-pasting a code snippet. See page source code &amp; src files.</p>
</div>
</div>

<!-- ==================================== /slider -->



<!-- ==================================== animate.css

<div class="container">
<div class="wrap">

  <h3>animate.css example (using wow.js to hold animations until elements are in view)</h3>
  <div class="grid">
    <div class="col-1-4" style="text-align:center;"><i class="fa fa-3x fa-rocket wow fadeInUp"></i></div>
    <div class="col-1-4" style="text-align:center;"><i class="fa fa-3x fa-taxi wow fadeInUp"></i></div>
    <div class="col-1-4" style="text-align:center;"><i class="fa fa-3x fa-ship wow fadeInUp"></i></div>
    <div class="col-1-4" style="text-align:center;"><i class="fa fa-3x fa-truck wow fadeInUp"></i></div>
  </div>

  <p>&nbsp;</p>

  <div class="pre-holder">
  <pre style="margin-top:10px;">
  <code data-language="html">
    <div class="cmbox cmbox--basic">
      <div class="cmbox__content cmbox__content--intro">
        <h1 class="cmbox__title">Jackdaws Love My Sphinx of Quartz</h1>
      </div>
    </div>
  </code>
  </pre>
  </div>

</div>
</div>

==================================== /animate.css -->



<!-- ==================================== center-aligned, middle-aligned -->

<div class="container">
<div class="wrap">

  <h3>center-aligned, middle-aligned box</h3>
  <p class="sg">Fluid vertical alignment with no height settings.</p>
  <div class="cmbox">
    <div class="cmbox__content">
      <h1 class="cmbox__title">Jackdaws Love My Sphinx of Quartz</h1>
    </div>
  </div>

  <div class="pre-holder">
  <pre style="margin-top:10px;">
  <code data-language="html">
    <div class="cmbox cmbox--basic">
      <div class="cmbox__content cmbox__content--intro">
        <h1 class="cmbox__title">Jackdaws Love My Sphinx of Quartz</h1>
      </div>
    </div>
  </code>
  </pre>
  </div>

</div>
</div>

<!-- ==================================== /center-aligned, middle-aligned -->



<!-- ==================================== typography -->

<div class="container">
<div class="wrap">

  <div class="grid">

    <h3>Typography</h3>

    <div class="col-6">
      <h1>h1 Sphinx Quartz</h1>
      <h2>h2 Sphinx Quartz</h2>
      <h3>h3 Sphinx Quartz</h3>
      <h4>h4 Sphinx Quartz</h4>
      <h5>h5 Sphinx Quartz</h5>
      <h6>h6 Sphinx Quartz</h6>
    </div>

    <div class="col-6">
      <div class="pre-holder">
      <pre>
      <code data-language="html">
        <h1>h1 Sphinx Quartz</h1>
        <h2>h2 Sphinx Quartz</h2>
        <h3>h3 Sphinx Quartz</h3>
        <h4>h4 Sphinx Quartz</h4>
        <h5>h5 Sphinx Quartz</h5>
        <h6>h6 Sphinx Quartz</h6>
      </code>
      </pre>
      </div>
    </div>

  </div><!-- /.grid -->

</div>
</div>

<!-- ==================================== /typography -->



<!-- ==================================== unordered lists -->

<div class="container">
<div class="wrap">

  <div class="grid">

    <h3>Unordered List</h3>

    <div class="col-6">
    <ul>
      <li>This is a list item blah blah</li>
      <li>This is a list item blah blah</li>
      <li>This is a list item blah blah</li>
      <li>This is a list item blah blah</li>
      <li>This is a list item blah blah</li>
      <li>This is a list item blah blah</li>
    </ul>
    </div>

    <div class="col-6">
      <div class="pre-holder">
      <pre>
      <code data-language="html">
        <ul>
          <li>This is a list item blah blah</li>
          <li>This is a list item blah blah</li>
          <li>This is a list item blah blah</li>
          <li>This is a list item blah blah</li>
          <li>This is a list item blah blah</li>
          <li>This is a list item blah blah</li>
        </ul>
      </code>
      </pre>
      </div>
    </div>

  </div><!-- /.grid -->

</div>
</div>

<!-- ==================================== /unordered lists -->



<!-- ==================================== ordered lists -->

<div class="container">
<div class="wrap">

  <div class="grid">

    <h3>Ordered List</h3>

    <div class="col-6">
    <ol>
      <li>This is a list item blah blah</li>
      <li>This is a list item blah blah</li>
      <li>This is a list item blah blah</li>
      <li>This is a list item blah blah</li>
      <li>This is a list item blah blah</li>
      <li>This is a list item blah blah</li>
    </ol>
    </div>

    <div class="col-6">
      <div class="pre-holder">
      <pre>
      <code data-language="html">
        <ol>
          <li>This is a list item blah blah</li>
          <li>This is a list item blah blah</li>
          <li>This is a list item blah blah</li>
          <li>This is a list item blah blah</li>
          <li>This is a list item blah blah</li>
          <li>This is a list item blah blah</li>
        </ol>
      </code>
      </pre>
      </div>
    </div>

  </div><!-- /.grid -->

</div>
</div>

<!-- ==================================== /ordered lists -->



<!-- ==================================== grids -->

<div class="container">
<div class="wrap">

  <h3>Grids</h3>

  <div class="grid">
    <h5 class="sg">2-Column Grid</h5>
    <div class="col-6">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-6">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
  </div>

  <p>&nbsp;</p>

  <div class="grid pre-holder">
    <pre>
    <code data-language="html">
      <div class="grid">
        <div class="col-6">
          <p>Column One content</p>
        </div>
        <div class="col-6">
          <p>Column Two content</p>
        </div>
      </div>
    </code>
    </pre>
  </div>

  <p>&nbsp;</p>

  <div class="grid">
    <h5 class="sg">3-Column Grid</h5>
    <div class="col-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
  </div>

  <p>&nbsp;</p>

  <div class="grid pre-holder">
    <pre>
    <code data-language="html">
      <div class="grid">
        <div class="col-4">
          <p>Column One content</p>
        </div>
        <div class="col-4">
          <p>Column Two content</p>
        </div>
        <div class="col-4">
          <p>Column Three content</p>
        </div>
      </div>
    </code>
    </pre>
  </div>

  <p>&nbsp;</p>

  <div class="grid">
    <h5 class="sg">1/3 - 2/3 Split</h5>
    <div class="col-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
  </div>

  <p>&nbsp;</p>

  <div class="grid pre-holder">
    <pre>
    <code data-language="html">
      <div class="grid">
        <div class="col-4">
          <p>1/3 Column</p>
        </div>
        <div class="col-8">
          <p>2/3 Column</p>
        </div>
      </div>
    </code>
    </pre>
  </div>

</div>
</div>

<!-- ==================================== /grids -->



<!-- ==================================== accordions -->

<div class="container">
<div class="wrap">

  <div class="grid mb2">

    <h3>Accordions</h3>

    <ul id="accordion" class="list-reset">
      <li class="accordion__item"><a href="#" class="accordion__trigger">Accordion Item One</a>
        <ul class="accordion__content-holder">
          <li class="accordion__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
        </ul>
      </li>
      <li class="accordion__item"><a href="#" class="accordion__trigger">Accordion Item Two</a>
        <ul class="accordion__content-holder">
          <li class="accordion__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
        </ul>
      </li>
      <li class="accordion__item"><a href="#" class="accordion__trigger">Accordion Item Three</a>
        <ul class="accordion__content-holder">
          <li class="accordion__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
        </ul>
      </li>      
    </ul>

    <div style="margin-top:20px;" class="pre-holder">
      <pre>
      <code data-language="html">
          <ul id="accordion" class="list-reset">
            <li class="accordion__item"><a href="#" class="accordion__trigger">Accordion Item One</a>
              <ul class="accordion__content-holder">
                <li class="accordion__content">Accordion Content</li>
              </ul>
            </li>
            <li class="accordion__item"><a href="#" class="accordion__trigger">Accordion Item Two</a>
              <ul class="accordion__content-holder">
                <li class="accordion__content">Accordion Content</li>
              </ul>
            </li>
            <li class="accordion__item"><a href="#" class="accordion__trigger">Accordion Item Three</a>
              <ul class="accordion__content-holder">
                <li class="accordion__content">Accordion Content</li>
              </ul>
            </li>      
          </ul>
      </code>
      </pre>
    </div>

  </div><!-- /.grid -->

</div>
</div>

<!-- ==================================== /accordions -->



<!-- ==================================== buttons -->

<div class="container">
<div class="wrap">

  <h3>Buttons</h3>

  <div class="grid mb2">

    <h5 class="sg">Standard Button</h5>
    <a href="#!" class="button">Submit</a>
    <div class="pre-holder">
      <pre>
      <code data-language="html">
      <a href="#!" class="button">Submit</a>
      </code>
      </pre>
    </div> 

    <h5 class="sg">Big Button</h5>
    <a href="#!" class="button button--big">Call to Action</a>
    <div class="pre-holder">
      <pre>
      <code data-language="html">
      <a href="#!" class="button button--big">Call to Action</a>
      </code>
      </pre>
    </div>

  </div>

</div>
</div>

<!-- ==================================== /buttons -->



<!-- ==================================== panel -->

<div class="container">
<div class="wrap">

  <h3>Panel</h3>

  <div class="grid">

    <div class="single-col">
      <div class="panel">
        <h2 class="panel__title">This is a Panel</h2>
        <p class="panel__copy">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit anim id est laborum.</p>
        <a href="#!" class="button button--panel">Call to Action</a>
      </div>
    </div>
  
  </div><!-- /.grid -->

  <div class="grid pre-holder">

    <pre>
    <code data-language="html">
      <div class="grid">
        <div class="single-col">
          <div class="panel">
            <h2 class="panel__title">Panel Title</h2>
            <p class="panel__copy">Panel copy. Lorem ipsum dolor.</p>
            <a href="#!" class="button button--panel">Call to Action</a>
          </div>
        </div>
      </div>
    </code>
    </pre>

  </div>

</div>
</div>

<!-- ==================================== /panel -->



<!-- ==================================== tables -->

<div class="container">
<div class="wrap">

  <h3>Static Table: Option 1</h3>

  <div class="grid">

  <table cellspacing="0" border="0" class="static-table static-table--optional-class">
    <thead>
    <tr>
      <th width="25%">Thead</th>
      <th width="25%">Thead</th>
      <th width="25%">Thead</th>
      <th width="25%">Thead</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
    </tr>
    <tr>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
    </tr>
    </tbody>
  </table>

  </div><!-- /.grid -->

  <p>&nbsp;</p>

  <div class="grid pre-holder">
  <pre>
  <code data-language="html">
    <table cellspacing="0" border="0" class="static-table static-table--optional-class">
      <thead>
      <tr>
        <th width="25%">Thead</th>
        <th width="25%">Thead</th>
        <th width="25%">Thead</th>
        <th width="25%">Thead</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Table cell content</td>
        <td>Table cell content</td>
        <td>Table cell content</td>
        <td>Table cell content</td>
      </tr>
      <tr>
        <td>Table cell content</td>
        <td>Table cell content</td>
        <td>Table cell content</td>
        <td>Table cell content</td>
      </tr>
      </tbody>
    </table>
  </code>
  </pre>
  </div><!-- /.grid -->

  <h3>Static Table: Option 2</h3>

  <div class="grid">

  <table cellspacing="0" border="0" class="static-table static-table--optional-class">
    <thead>
    <tr>
      <th width="25%">Thing</th>
      <th width="25%">Type of Thing</th>
      <th width="25%">Color of Thing</th>
      <th width="25%">Size of Thing</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="table__row-label">Animal</td>
      <td>Cow</td>
      <td>Black &amp; White</td>
      <td>Big</td>
    </tr>
    <tr>
      <td class="table__row-label">Car</td>
      <td>Corolla</td>
      <td>Red</td>
      <td>Small</td>
    </tr>
    </tbody>
  </table>

  </div><!-- /.grid -->

  <p>&nbsp;</p>

  <div class="grid pre-holder">
    <pre>
    <code data-language="html">
      <table cellspacing="0" border="0" class="static-table static-table--optional-class">
        <thead>
        <tr>
          <th width="25%">Thing</th>
          <th width="25%">Type of Thing</th>
          <th width="25%">Color of Thing</th>
          <th width="25%">Size of Thing</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="table__row-label">Animal</td>
          <td>Cow</td>
          <td>Black &amp; White</td>
          <td>Big</td>
        </tr>
        <tr>
          <td class="table__row-label">Car</td>
          <td>Corolla</td>
          <td>Red</td>
          <td>Small</td>
        </tr>
        </tbody>
      </table>
    </code>
    </pre>
  </div>

  <p>&nbsp;</p>
  <p>This is not to imply that there are <strong>only</strong> two options for styling tables. They're just offered as starting points for different style options.</p>

  <h3>Responsive Table</h3>
  <p>This is a <strong>basic</strong> responsive table. All requirements should be clarified in the project's definition phase, and the proper responsive table layout can be built up from this starting point.</p>

  <div class="grid">

  <table cellspacing="0" border="0" class="responsive-table responsive-table--optional-class">
  <thead>
  <tr>
    <th width="50%">Thead</th>
    <th width="25%">Thead</th>
    <th width="25%">Thead</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td class="mobile-thead">Mobile Thead</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
    <td class="mobile-thead">Mobile Thead</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
    <td class="mobile-thead">Mobile Thead</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>
  </tbody>
  </table>

  </div><!-- /.grid -->

  <p>&nbsp;</p>

  <div class="grid pre-holder">
    <pre>
    <code data-language="html">
      <table cellspacing="0" border="0" class="responsive-table responsive-table--optional-class">
      <thead>
      <tr>
        <th width="50%">Thead</th>
        <th width="25%">Thead</th>
        <th width="25%">Thead</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="mobile-thead">Mobile Thead</td>
        <td>Table cell content</td>
        <td class="mobile-thead">Mobile Thead</td>
        <td>Table cell content</td>
        <td class="mobile-thead">Mobile Thead</td>
        <td>Table cell content</td>
      </tr>
      </tbody>
      </table>
    </code>
    </pre>
  </div>

  <h3>Admin Tables</h3>
  <div class="grid">
  <p>Tables for any admin area start with either a <strong>Static</strong> or <strong>Responsive</strong> table, as noted above. Then we add additional classes for specific admin section styling.</p>
  </div>

  <h3>Forms</h3>
  <p><em>Get starter form code from the page source</em></p>

  <div class="grid">
    <div class="single-col" style="margin:0 auto;max-width:800px!important;">
      <div class="panel--form" style="margin:0 auto;max-width:800px!important;">

  <form>
    <section id="form-input">
<h2>Input</h2>


  <label for="">Input Type Text</label>
  <input type="text" name="input-type-text">

  <label for="">Input Type Email</label>
  <input type="email" name="input-type-email">

  <label for="">Input Type Password</label>
  <input type="password" name="input-type-password">

  <label for="">Input Type URL</label>
  <input type="url" name="input-type-url">

  <label for="">Input Type Tel</label>
  <input type="tel" name="input-type-tel">

  <label for="">Input Type Number</label>
  <input type="number" name="input-type-number">

  <label for="">Input Type Search</label>
  <input type="search" name="input-type-search">



  <label for="">Input Type Checkbox</label>
  <input type="checkbox" name="input-type-checkbox1"> Value 1<br>
  <input type="checkbox" name="input-type-checkbox2"> Value 2<br>
  <input type="checkbox" name="input-type-checkbox3"> Value 3<br>

  <label for="">Input Type Radio</label>
  <input type="radio" name="input-type-radio1"> Value 1<br>
  <input type="radio" name="input-type-radio2"> Value 2<br>
  <input type="radio" name="input-type-radio3"> Value 3<br>

  <label for="">Input Type Range</label>
  <input type="range" name="input-type-range">



  <label for="">Input Type File</label>
  <input type="file" name="input-type-file">
  <input type="file" name="input-type-file">

  <label for="">Input Type Color</label>
  <input type="color" name="input-type-color">



  <label for="">Input Type Date</label>
  <input type="date" name="input-type-date">

  <label for="">Input Type Datetime Local</label>
  <input type="datetime-local" name="input-type-datetime-local">

  <label for="">Input Type Month</label>
  <input type="month" name="input-type-month">

  <label for="">Input Type Time</label>
  <input type="time" name="input-type-time">

  <label for="">Input Type Week</label>
  <input type="week" name="input-type-week">


</section>
    <section id="form-select-button">
<h2>Datalist</h2>


  <label for="">Input with Datalist</label>
  <input list="browsers">

  <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>


</section>

    <section id="form-textarea">
<h2>Textarea</h2>


  <label for="textarea">Textarea</label>
  <textarea name="textarea" id="" cols="30" rows="10"></textarea>




</section>
    <section id="form-select-option">
<h2>Select and Option</h2>


  <label for="select-normal">Select Default</label>
  <select name="select-normal" id="">
      <option value="">Option 1</option>
      <option value="">Option 2</option>
      <option value="">Option 3</option>
  </select>


  <label for="select-optgroup">Select with Optgroup</label>
  <select name="select-optgroup" id="">
      <optgroup label="Optgroup 1">
        <option value="">Option 1</option>
        <option value="">Option 2</option>
        <option value="">Option 3</option>
      </optgroup>

      <optgroup label="Optgroup 2">
        <option value="">Option 1</option>
        <option value="">Option 2</option>
        <option value="">Option 3</option>
      </optgroup>
  </select>


  <label for="select-multiple">Select Multiple</label>
  <select name="select-multiple" id="" multiple>
      <option value="">Option 1</option>
      <option value="">Option 2</option>
      <option value="">Option 3</option>
  </select>

</section>
    <section id="form-select-button">
<h2>Buttons and Input Type Submit/Reset</h2>


  <label for="button-type-button">Button Type Button</label>
  <button type="button">Button</button>

  <label for="button-type-reset">Button Type Reset</label>
  <button type="reset">Reset</button>

  <label for="button-type-submit">Button Type Submit</label>
  <button type="submit">Submit</button>

  <label for="">Input Type Button</label>
  <input type="button" name="input-type-button" value="Button">

  <label for="">Input Type Reset</label>
  <input type="reset" name="input-type-reset">

  <label for="">Input Type Submit</label>
  <input type="submit" name="input-type-submit">
  
  <label for="">Input Type Submit Disabled</label>
  <input type="submit" name="input-type-submit" disabled>

  <label for="">Input Type Image</label>
  <input type="image" name="input-type-image">


</section>
    <section id="form-select-fieldset">
<h2>Fieldset</h2>

  <fieldset>

    <legend>Legend Title</legend>

  <label for="input-text">Input</label>
    <input type="text" id="input-text">

    <label for="input-password">Another Input</label>
    <input type="text" id="input-password">
    
  </fieldset>

</section>
  </form>

      </div><!-- /.panel--form -->
    </div><!-- /.single-col -->
  </div>

</div>
</div>

<!-- ==================================== /tables -->



<!-- ==================================== images -->

<div class="container">
<div class="wrap">

  <h3>Images</h3>

  <div class="grid">

    <p class="sg">By default, (regular, non-picturefill-enabled) images appear at their native size. They re-size relative to their container on smaller screens.</p>
    <div class="grid" style="border:1px solid indianred;padding:10px;">
      <img src="/assets/img/surf-sm.jpg">
    </div>
  
    <p>&nbsp;</p>

    <p class="sg">Images with class="fit" will always fill the container, no matter their native size.</p>
    <div class="grid" style="border:1px solid indianred;padding:10px;">
      <img src="/assets/img/surf-sm.jpg" class="fit">
    </div>

  </div>

</div>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>

<!-- ==================================== /images -->

</div><!-- /.content -->

<?php include $root.'/inc/footer.php'; ?>

<!-- style guide only -->
<script src="/assets/js/rainbow-custom.min.js"></script>

<!-- include this only on pages with a slider -->
<script type="text/javascript">
$(window).on("load resize scroll",function(e){
  var caph = $( '.caption' ).height();
  var capconth = $( '.caption-contents' ).height();
  var capdif = (caph - capconth)/2;
  $('.caption-contents').css('margin-top', capdif);
});
</script>

</body>
</html>
