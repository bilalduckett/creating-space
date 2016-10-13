<?
  /**
   * The main template file
   *
   * This is the most generic template file in a WordPress theme
   * and one of the two required files for a theme (the other being style.css).
   * It is used to display a page when nothing more specific matches a query.
   * E.g., it puts together the home page when no home.php file exists.
   *
   *
   *
   *
   * @subpackage Twenty_Sixteen
   *
   */

  get_header(); ?>

  <section class="home-hero">
    <div class="container">
      <div class="podcast-title-container">
        <div class="title">
          <h1>#CreatingSpace</h1>
        </div>
        <div class="author">
          <div class="content">
            <h2>W/ Wes Knight</h2>
          </div>
        </div>

      </div>
    </div>
  </section>


<!--    <div class="home-hero">-->
<!--<!--      <img src="-->--><?////= asset('/img/hero-2.png') ?><!--<!--" alt="Our Capabilities" />-->-->
<!--      <div class="row">-->
<!--        <div class="col m5 s12">-->
<!--          <div class="podcast-title-container">-->
<!--            -->
<!--            <div class="title">-->
<!--              <h1>#CreatingSpace</h1>-->
<!--            </div>-->
<!---->
<!--            <div class="author">-->
<!--              <div class="content">-->
<!--                <h2>W/ Wes Knight</h2>-->
<!--              </div>-->
<!--            </div>-->
<!---->
<!--            <div class="links">-->
<!--              <ul>-->
<!--                <li><a href="https://soundcloud.com/creatingspace"><img src="--><?//= asset('img/soundcloud.svg') ?><!--" class="wk-soundcloud-button" alt=""></a></li>-->
<!--                <li><a href="https://itunes.apple.com/us/podcast/creating-space-w-wes-knight/id1120265586"><img src="--><?//= asset('img/apple.svg') ?><!--" class="wk-apple-button" alt=""></a></li>-->
<!--              </ul>-->
<!--            </div>-->
<!---->
<!--            <div class="social">-->
<!--              bilal duckett-->
<!--              <a href="https://www.snapchat.com/add/wesknight"><img src="--><?//= asset('img/snapchat.svg') ?><!--" class="wk-icon" alt=""></a>-->
<!--              <a href="http://instagram.com/wesleytknight"><img src="--><?//= asset('img/instagram.svg') ?><!--" class="wk-icon" alt=""></a>-->
<!--              <a href="http://twitter.com/wesleytknight"><img src="--><?//= asset('img/twitter.svg') ?><!--" class="wk-icon" alt=""></a>-->
<!--              <a href="https://www.facebook.com/wes.knight/"><img src="--><?//= asset('img/facebook.svg') ?><!--" class="wk-icon" alt=""></a>-->
<!--            </div>-->
<!---->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->


<? get_footer(); ?>