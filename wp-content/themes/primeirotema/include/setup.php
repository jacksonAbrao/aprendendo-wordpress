<?php
    function cp_theme_styles() {
        wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/theme.css');
        wp_enqueue_script('script_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
    }

    function cp_after_setup() {
        add_theme_support('menus');

        register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
    }