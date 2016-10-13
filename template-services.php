<?
  /**
   * Template Name: Services
   */
  get_header();
  the_post();

  $image = get_field('feature_image');

?>

<div class="page-services">
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
  </div>

  <div class="service-grid">
    <div class="row center-align">
      <div class="col s12 m6">
        <div class="grid-element top-left"><?php the_field('top_left'); ?></div>
      </div>
      <div class="col s12 m6">
        <div class="grid-element top-right"><?php the_field('top_right'); ?></div>
      </div>
      <div class="col s12 m6">
        <div class="grid-element bottom-left"><?php the_field('bottom_left'); ?></div>
      </div>
      <div class="col s12 m6">
        <div class="grid-element bottom-right"><?php the_field('bottom_right'); ?></div>
      </div>
    </div>
  </div>


</div>

<? get_footer() ?>
