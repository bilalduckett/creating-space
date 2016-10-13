<?
  /**
   * Template Name: Podcast
   */
  get_header();
  the_post();

  $image = get_field('feature_image');

?>

  <div class="page-podcast">
    <? if (!empty($image)): ?>

      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="responsive-img"/>

    <?php endif; ?>

    <div class="container">
      <div class="page-title">
        <h1><? the_title() ; ?></h1>
      </div>
      <div class="row center-align page-section__cta">
        <h2><?php the_field('call_to_action'); ?></h2>
      </div>
    </div>

    <div class="row center-align">
      <?php the_field('body_text'); ?>
    </div>

    <div class="iframe-wrapper">
      <div class="container">
        <iframe width="100%" height="350" style="background-color:transparent; display:block; " frameborder="0"
                allowtransparency="allowtransparency" scrolling="no"
                src="//embeds.audioboom.com/publishing/playlist/v4?bg_fill_col=%23ecefef&amp;boo_content_type=channel&amp;data_for_content_type=4793904&amp;image_option=small&amp;link_color=%2358d1eb&amp;player_theme=light&amp;src=https%3A%2F%2Fapi.audioboom.com%2Fchannels%2F4793904%2Faudio_clips%3Finclude_child_channels%3D1"
                title="audioBoom player"></iframe>
      </div>
    </div>

  </div>

<? get_footer() ?>
