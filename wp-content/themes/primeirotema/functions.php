<?php
    //include
    require get_template_directory() . '/include/setup.php';
    

    //setups
    add_action('wp_enqueue_scripts', 'cp_theme_styles');
    add_action('after_setup_theme', 'cp_after_setup');
    add_action('widgets_init', 'cp_widgets');
