<?php
    function cp_theme_styles() {
        wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/theme.css');
        wp_enqueue_script('script_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
    }

    function cp_after_setup() {
        add_theme_support('menus');
        add_theme_support('post-thumbnails');

        register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
    }

    function cp_widgets() {
        register_sidebar(array(
            'name' => __('Sidebar', 'primeirotema'),
            'id' => 'cp_sidebar',
            'description' => __('Sidebar do tema', 'primeirotema'),
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
        ));
    }