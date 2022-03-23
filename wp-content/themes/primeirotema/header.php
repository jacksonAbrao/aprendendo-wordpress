<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- adicionando css -->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header>
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'menu-principal',
                'fallback_cb' => false,
            ));
        }
        ?>
    </header>