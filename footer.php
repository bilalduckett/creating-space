<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col s12 m3">
        <a href="#" class="brand-logo center"><img src="<?= asset('/img/creating-space-logo-alt.svg') ?>" alt="Creating Space"/></a>
        <div class="divider"></div>
        <ul class="footer_social">
          <li><a href="https://www.facebook.com/wes.knight/"><img src="<?= asset('/img/facebook.svg') ?>" alt="Facebook"/></a></li>
          <li><a href="http://instagram.com/wesleytknight"><img src="<?= asset('/img/instagram.svg') ?>" alt="Instagram"/></a></li>
          <li><a href="http://twitter.com/wesleytknight"><img src="<?= asset('/img/twitter.svg') ?>" alt="Twitter"/></a></li>
          <li><a href="https://www.snapchat.com/add/wesknight"><img src="<?= asset('/img/snapchat.svg') ?>" alt="Snapchat"/></a></li>
        </ul>
      </div>
      <div class="col m6 push-m4  valign-wrapper hide-on-small-only">
        <div class="footer-subscribe valign right">
          <?= do_shortcode('[mc4wp_form id="1091"]') ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footer_menu">
        <?
          wp_nav_menu([
              'menu'      => 'Primary Navigation',
              'container' => '',
              'walker'    => new Walker_Nav_Menu,
          ]);
        ?>
      </div>
    </div>
  </div>
</footer>


</body>
</html>

<? wp_footer(); ?>

<script>
  (function() {
    var header = new Headroom(document.querySelector(".nav-wrapper"), {
      tolerance: 5,
      offset:    205,
      classes:   {
        initial:  "creating-space-nav",
        pinned:   "creating-space-nav__show",
        unpinned: "creating-space-nav__hide"
      }
    });
    header.init();
  }());
</script>

<script>
    (function ($) {

      "use strict";

      $(document).ready(function() {
        $(".button-collapse").sideNav();
      });

    })( jQuery );

</script>

