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

            <div class="nav-header__overlay_container">
                <div class="nav-header__overlay_container_block">
                    <div class="nav-header__overlay_container_block_gauche">


                        <div class="nav-header__overlay_container_block_gauche_textes">
                            <h1><?php the_field('header__nomlogo'); ?></h1>

                        </div>

                        <div class="nav-header__overlay_container_block_gauche_bouton">

                            <a href="<?php the_field('header__lienpage'); ?>">Prendre Rendez-vous</a>

                        </div>


                    </div>

                    <div class="nav-header__overlay_container_block_droit">
                        <div class="nav-header__overlay_container_block_droit_logo" id="logo"><?php afficher_logo(); ?></div>

                        <nav class="nav-header__overlay_container_block_droit_menus">

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

                </div>

            </div>


        </div>
    </header>

    <div class="bandes-bleu">
        <p><?php the_field('header__txt'); ?></p>
    </div>