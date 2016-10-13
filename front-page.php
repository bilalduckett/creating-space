<?php
  get_header();
  the_post();

  $image = get_field('hero_image');
  $namespace = "Twitter";
?>

<div class="page-home">
  <div id="subscribe-modal" class="modal">
    <div class="modal-content">
      <p><?php the_field('email_popup_text'); ?></p>
      <?= do_shortcode('[mc4wp_form id="1091"]') ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Exit</a>
    </div>
  </div>

  <?

    if( !empty($image) ): ?>

      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="responsive-img" />

    <?php endif; ?>

  <section class="page-section">
    <div class="container">
      <div class="page-title">
        <h1><?php the_field('sub_header'); ?></h1>
      </div>
      <div class="row center-align">
        <div class="page-section__cta">
          <h2><?php the_field('call_to_action'); ?></h2>
        </div>
        <div class="row media-outlets">
          <div class="container">
            <ul class="instructions">
              <li>Live.</li>
              <li>Learn.</li>
              <li>Listen.</li>
            </ul>
            Find us on your favorite podcasting platform
          <ul class="image-links">
              <li><a href="https://itunes.apple.com/us/podcast/creating-space-w-wes-knight/id1120265586"><img src="<?= asset('/img/apple.svg') ?>" alt="iTunes"/></a></li>
              <li><a href="https://soundcloud.com/creatingspace"><img src="<?= asset('/img/soundcloud.svg') ?>" alt="Soundcloud"/></a></li>
              <li><a href="https://audioboom.com/channel/creating-space-with-wes-knight"><img src="<?= asset('/img/audioboom.svg') ?>" alt="AudioBoom"/></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="iframe-wrapper">
      <div class="container">
        <iframe width="100%" height="350" style="background-color:transparent; display:block; " frameborder="0" allowtransparency="allowtransparency" scrolling="no" src="//embeds.audioboom.com/publishing/playlist/v4?bg_fill_col=%23ecefef&amp;boo_content_type=channel&amp;data_for_content_type=4793904&amp;image_option=small&amp;link_color=%2358d1eb&amp;player_theme=light&amp;src=https%3A%2F%2Fapi.audioboom.com%2Fchannels%2F4793904%2Faudio_clips%3Finclude_child_channels%3D1" title="audioBoom player"></iframe>

      </div>
    </div>
  </section>

  <script>
    jQuery(document).ready(function(){
      if(localStorage.getItem('popState') != 'shown'){
        setTimeout(function () {
          jQuery('#subscribe-modal').openModal();
        }, 30000);

        localStorage.setItem('popState', 'shown')
      }
    });
  </script>
</div>
<? get_footer() ?>
