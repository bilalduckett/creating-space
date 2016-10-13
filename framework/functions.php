<?
  function asset($path)
  {
    if ($path{0} !== '/') {
      $path = "/$path";
    }

    return get_bloginfo('template_directory') . "/dist/assets$path";
  }


  function enqueueScripts()
  {
    wp_enqueue_script('jquery');
  }

  add_theme_support('post-thumbnails');