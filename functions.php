<?php
  function underConstruction_files() {
      // wp_enqueue_script('main_uni_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);

      // wp_register_style('custom_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i', array(), '1.0');
      // wp_enqueue_style( 'custom_fonts' );

      // wp_register_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), '4.2.0' );
      // wp_enqueue_style( 'fontawesome' );

      // wp_enqueue_style('university_main_styles', get_stylesheet_uri());

      wp_enqueue_script('under_construction_scripts', get_theme_file_uri('/build/bundle.js'), NULL, '1.0', true);
  
      wp_register_style('under_construction_styles', get_theme_file_uri('/build/styles.css'), array(), '1.0');
      wp_enqueue_style('under_construction_styles');
  };

  function underConstruction_features() {
    add_theme_support('title-tag');
  }

  add_action('wp_enqueue_scripts', 'underConstruction_files');
  add_action('after_setup_theme', 'underConstruction_features');

  ?>