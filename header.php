<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<? bloginfo('charset') ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <base href="<? bloginfo('url') ?>/">

  <title><? bloginfo('title') ?><? wp_title('|', TRUE, 'left') ?></title>

  <meta name="generator" content="WordPress">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href=">
  <link rel=" alternate
  " type="application/rss+xml" title="<? bloginfo('name') ?> <? _e('RSS Feed') ?>"
  href="<? bloginfo('rss2_url') ?>">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans|Playfair+Display+SC:400,700" rel="stylesheet">
  <link rel="pingback" href="<? bloginfo('pingback_url'); ?>">

  <script type="text/javascript">
    var TEMPLATE_DIRECTORY = '<? bloginfo('template_directory') ?>';
    var BASE_URL = '<? bloginfo('url') ?>';
  </script>

  <? wp_head() ?>

</head>

<body>

<header>
  <nav class="nav-wrapper valign-wrapper">
    <div class="container valign">
      <a href="#" class="brand-logo"><img src="<?= asset('/img/creating-space-logo.svg') ?>" alt="Creating Space"/></a>
<!--      <h5>Build space to grown in your own life. I can help you.</h5>-->
      <div class="right"><a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">&#9776;</i></a></div>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?
          wp_nav_menu([
              'menu'      => 'Primary Navigation',
              'container' => '',
              'walker'    => new Walker_Nav_Menu,
          ]);
        ?>
      </ul>
      <ul class="side-nav" id="mobile-nav">
        <?
          wp_nav_menu([
              'menu'      => 'Primary Navigation',
              'container' => '',
              'walker'    => new Walker_Nav_Menu,
          ]);
        ?>
      </ul>
    </div>
  </nav>
</header>