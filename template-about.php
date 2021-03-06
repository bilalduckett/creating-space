<?
  /**
   * Template Name: About
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
    <div class="row center-align page-section__cta">
      <h2><?php the_field('call_to_action'); ?></h2>
    </div>

    <div class="row">
      <div class="container">
        <?php the_field('body_text'); ?>
      </div>
    </div>


  </div>
</div>
<? get_footer() ?>
