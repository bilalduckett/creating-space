<?
  /**
   * Template Name: Contact
   */
  get_header();
  the_post();

  $image = get_field('feature_image');

?>

<div class="page-contact" xmlns="http://www.w3.org/1999/html">
  <? if (!empty($image)): ?>

    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="responsive-img"/>

  <?php endif; ?>

  <div id="thankyou-modal" class="modal">
    <div class="modal-content">
      <h4 class="center">Thank You!</h4>
      <?php the_field('popup'); ?>
    </div>
    <div class="modal-footer center">
      <a href="/services" class=" modal-action modal-close waves-effect waves-green btn">Close</a>
    </div>
  </div>

  <div class="container">
    <div class="page-title">
      <h1><? the_title(); ?></h1>
    </div>
    <div class="row center-align page-section__cta">
      <h2><?php the_field('call_to_action'); ?></h2>
    </div>
  </div>

  <div class="row">
    <div class="container">
      <form class="col s12 m8 push-m2">
        <div class="row"><?= do_shortcode('[contact-form-7 id="97 " title="Standard Contact"]') ?></div>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function () {

    jQuery('.modal-trigger').leanModal();

  });
</script>

<? get_footer() ?>
