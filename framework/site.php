<?
  class Site {
    /**
     * Construction function to init actions/hooks and load dependency files
     *
     * @return Site
     */
    public function __construct() {
//      add_action('init', [$this, 'registerSidebars']);
      add_action('init', [$this, 'registerNavigation']);
      add_action('init', [$this, 'registerImageSizes']);
      add_action('init', [$this, 'registerThemeSupport']);
//      add_action('init', [$this, 'registerCustomTags']);
//      add_action('wp_head', [$this, 'ajaxURL']);

      add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
      add_action('wp_print_styles', [$this, 'enqueueStyles']);

      // Disable tablepress styles
      add_filter('tablepress_use_default_css', '__return_false');

//      require_once(TEMPLATEPATH . '/framework/walkers/PrimaryNavigationWalker.php');
//      require_once(TEMPLATEPATH . '/framework/shortcodes/shortcode.php');
//      require_once(TEMPLATEPATH . '/framework/shortcodes/WeatherShortcode.php');
//      require_once(TEMPLATEPATH . '/framework/shortcodes/LeadershipShortcode.php');

      date_default_timezone_set('America/New_York');

//      if(function_exists('acf_add_options_page')) {
//        acf_add_options_page([
//            'page_title' => 'NC Ports Settings',
//            'menu_title' => 'NC Ports Settings',
//            'menu_slug'  => 'nc-ports-settings',
//            'capability' => 'edit_posts',
//            'redirect'   => FALSE,
//        ]);
//      }
    }
  
    /**
     * Alias for wp_enqueue_script
     *
     * @param       $handle
     * @param bool  $src
     * @param array $deps
     * @param bool  $ver
     * @param bool  $in_footer
     */
    public function enqueueScript($handle, $src = FALSE, $deps = [], $ver = FALSE, $in_footer = FALSE) {
      wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
    }

    /**
     * Alias for wp_enqueue_style
     *
     * @param        $handle
     * @param bool   $src
     * @param array  $deps
     * @param bool   $ver
     * @param string $media
     */
    public function enqueueStyle($handle, $src = FALSE, $deps = [], $ver = FALSE, $media = 'all') {
      wp_enqueue_style($handle, $src, $deps, $ver, $media);
    }

    /**
     * Link to asset
     *
     * @param  string $url
     *
     * @return string
     */
    public static function asset($url) {
      if($url{0} !== '/') {
        $url = "/$url";
      }

      return get_bloginfo('template_directory') . '/dist/assets' . $url;
    }

    /**
     * Defines image sizes
     *
     * @return void
     */
    public function registerImageSizes() {
      add_image_size('blog-thumbnail', 444, 444, TRUE);
    }

    /**
     * Define what the theme supports
     *
     * @return void
     */
    public function registerThemeSupport() {
      add_theme_support('menus');
      add_theme_support('widgets');
      add_theme_support('post-thumbnails');
    }

    /**
     * Register navigation
     *
     * @return void
     */
    public function registerNavigation() {
      register_nav_menu('primary-nav', 'Primary Navigation');
      register_nav_menu('footer-secondary-nav', 'Footer Secondary Navigation');
    }

    /**
     * Enqueue css styles for the site
     *
     * @return void
     */
    public function enqueueStyles() {
//      wp_enqueue_style('font-awesome', asset("css/plugins/font-awesome/css/font-awesome.min.css"), NULL, '4.5.0', 'all');
      wp_enqueue_style('main', asset("/styles/app.css"), NULL, '1.0.0', 'all');
//      wp_enqueue_style('pretty-photo', asset("css/plugins/prettyPhoto/prettyPhoto.css"), NULL, '3.1.6', 'all');
    }

    /**
     * Enqueue js scripts for the site
     *
     * @return void
     */
    public function enqueueScripts() {
      wp_enqueue_script('jquery');
      //wp_enqueue_script('prettyPhoto', asset("js/vendor/jquery.prettyPhoto.js"), NULL, '3.1.5', TRUE);
//      wp_enqueue_script('modernizr', asset("js/vendor/modernizr.custom.js"), NULL, '4.0', TRUE);
      wp_enqueue_script('materialize', asset("/js/vendor/materialize.min.js"), NULL, '0.97.6', TRUE);
      wp_enqueue_script('headroom', asset("/js/vendor/headroom.js"), NULL, '0.9.3', TRUE);
//      wp_enqueue_script('app', asset("js/app.min.js"), ['jquery', 'modernizr'], '1.0', TRUE);
//      wp_enqueue_script('prettyPhoto', asset("js/vendor/jquery.prettyPhoto.js"), ['jquery'], '3.1.6', TRUE);
    }
  }

  /**
   * Create new instance of the Site class
   */
  new Site();
