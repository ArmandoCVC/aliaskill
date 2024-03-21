<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <header class="nav-header" style="background-image: url('<?php the_field('header__wallpaper'); ?>'); background-position:center;">
        <div class="nav-header__overlay">
            <div class="nav-header__overlay_box-logo">
                <div class="nav-header__overlay_box-logo_logo" id="logo"><?php afficher_logo(); ?></div>
            </div>

            <div class="nav-header__overlay_nomlogo">
                <h1><?php the_field('header__nomlogo'); ?></h1>
            </div>

            <nav class="nav-header__overlay_menus">

                <?php

                wp_nav_menu(
                    array(
                        'theme_location' => 'main-navigation',
                        'container' => 'nav',
                        'container_class' => 'nav',
                        'menu_class' => 'ul'
                    )
                );

                ?>

            </nav>
        </div>
    </header>

    <div class="bandes-bleu">
        <div class="bandes-bleu__container">
            <p><?php the_field('header__txt'); ?></p>
        </div>
    </div>