<?
  /**
   * Template Name: Social
   */
  get_header();
  the_post();

  $image = get_field('feature_image');

?>

<div class="page-about">
  <? if (!empty($image)): ?>

    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="responsive-img"/>

  <?php endif; ?>

  <div class="container">
    <div class="page-title">
      <h1><? the_title(); ?></h1>
    </div>
    <div class="row center-align">
      <div class="page-section__cta">
        <h2><?php the_field('call_to_action'); ?></h2>
      </div>
    </div>

    <div class="row">
      <div class="col s12 m6">
        <?php the_field('body_text'); ?>
      </div>
      <div class="col s12 m6">
        <div class="facebook-ad">
          <h3>We live stream each of our weekly podcasts on Facebook Live.</h3>
          
          <h3>Tune in <a href="https://www.facebook.com/wes.knight/">here</a>.</h3>
        </div>
      </div>
    </div>


  </div>
</div>
<? get_footer() ?>
