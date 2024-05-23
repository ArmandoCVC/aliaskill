<?php get_header(); ?>

<section class="pole1">


    <div class="pole1__banniere">

        <div class="pole1__banniere_container">
            <h1 class="pole1__banniere_container_titre"> <?php the_title(); ?> </h1>

            <div class="pole1__banniere_container_box">
                <div class="pole1__banniere_container_box_duree">
                    <div class="pole1__banniere_container_box_duree_icones1">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                        </svg>
                        <p><?php the_field('module-contenue_dureejours'); ?></p>

                    </div>

                    <div class="pole1__banniere_container_box_duree_icones2">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                        </svg>
                        <p><?php the_field('module-contenue_dureeheures'); ?></p>

                    </div>

                </div>

                <div class="pole1__banniere_container_box_boutton">
                    <a href="<?php the_field('module-contenue_lienboutton'); ?>">Télécharger le Programme</a>
                </div>
            </div>

        </div>

    </div>

</section>

<section class="pole2">

    <article class="pole2__article1">

        <div class="pole2__article1_container">
            <div class="pole2__article1_container_textes">
                <h1><?php the_field('pole-contenue_objectif'); ?> </h1>
                <p><?php the_field('pole-contenue_paragraphe'); ?> </p>
            </div>
            <div class="pole2__article1_container_img">
                <img src="<?php the_field('pole-contenue_img'); ?> " alt="">
            </div>
        </div>

    </article>

    <article class="pole2__article2">

        <div class="pole2__article2_container">

            <div class="pole2__article2_container_icones">
                <div class="pole2__article2_container_icones_carte">
                    <div class="pole2__article2_container_icones_carte_img">
                        <svg class="pole2__article2_container_icones_carte_img_svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#FFD43B" d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z" />
                        </svg>
                    </div>

                    <div class="pole2__article2_container_icones_carte_textes">
                        <h1><?php the_field('pole-contenue_couts_titre'); ?> </h1>
                        <p><?php the_field('pole-contenue_couts_description'); ?> </p>
                    </div>
                </div>

                <div class="pole2__article2_container_icones_carte">
                    <div class="pole2__article2_container_icones_carte_img">

                        <svg class="pole2__article2_container_icones_carte_img_svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#1e3325" d="M335.5 4l288 160c15.4 8.6 21 28.1 12.4 43.5s-28.1 21-43.5 12.4L320 68.6 47.5 220c-15.4 8.6-34.9 3-43.5-12.4s-3-34.9 12.4-43.5L304.5 4c9.7-5.4 21.4-5.4 31.1 0zM320 160a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM144 256a40 40 0 1 1 0 80 40 40 0 1 1 0-80zm312 40a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM226.9 491.4L200 441.5V480c0 17.7-14.3 32-32 32H120c-17.7 0-32-14.3-32-32V441.5L61.1 491.4c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l37.9-70.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c16.3 0 31.9 4.5 45.4 12.6l33.6-62.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c32.4 0 62.1 17.8 77.5 46.3l33.6 62.3c13.5-8.1 29.1-12.6 45.4-12.6h19.5c32.4 0 62.1 17.8 77.5 46.3l37.9 70.3c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8L552 441.5V480c0 17.7-14.3 32-32 32H472c-17.7 0-32-14.3-32-32V441.5l-26.9 49.9c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l36.3-67.5c-1.7-1.7-3.2-3.6-4.3-5.8L376 345.5V400c0 17.7-14.3 32-32 32H296c-17.7 0-32-14.3-32-32V345.5l-26.9 49.9c-1.2 2.2-2.6 4.1-4.3 5.8l36.3 67.5c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8z" />
                        </svg>
                    </div>

                    <div class="pole2__article2_container_icones_carte_textes">
                        <h1><?php the_field('pole-contenue_public_titre'); ?></h1>
                        <p><?php the_field('pole-contenue_public_paragraphe'); ?></p>
                    </div>
                </div>

                <div class="pole2__article2_container_icones_carte">
                    <div class="pole2__article2_container_icones_carte_img">

                        <svg class="pole2__article2_container_icones_carte_img_svg3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#74C0FC" d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V83.8c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z" />
                        </svg>
                    </div>

                    <div class="pole2__article2_container_icones_carte_textes">
                        <h1><?php the_field('pole-contenue_prerequis_titre'); ?></h1>
                        <p><?php the_field('pole-contenue_prerequis_description'); ?></p>
                    </div>
                </div>

            </div>

        </div>

    </article>

    <article class="pole2__article3">

        <div class="pole2__article3_container">
            <div class="pole2__article3_container_textes">
                <h1><?php the_field('pole-contenue_contenue_titre'); ?> </h1>
                <p><?php the_field('pole-contenue_contenue_paragraphe'); ?> </p>
            </div>
        </div>

    </article>

    <article class="pole2__article4">

        <div class="pole2__article4_container">
            <div class="pole2__article4_container_img">
                <img src="<?php the_field('pole-contenue_moyenspedagogique_img'); ?> " alt="">
            </div>
            <div class="pole2__article4_container_textes">
                <h1><?php the_field('pole-contenue_moyenspedagogique'); ?> </h1>
                <p><?php the_field('pole-contenue_moyenspedagogique_paragraphe'); ?> </p>
            </div>
        </div>

    </article>


    <article class="pole2__article5">

        <div class="pole2__article5_container">
            <div class="pole2__article5_container_textes">
                <h1><?php the_field('pole-contenue_evaluation'); ?> </h1>
                <p><?php the_field('pole-contenue_evaluation_paragraphe'); ?> </p>
            </div>
        </div>

    </article>



</section>

<section class="pole3">

    <div class="pole3__container">

        <div class="pole3__container_titre">
            <h1>Les Témoignages</h1>
        </div>

        <div class="pole3__container_temoignage">

            <?php if (have_rows('pole-contenue_temoignage')) : ?>
                <?php while (the_repeater_field('pole-contenue_temoignage')) : ?>


                    <?php the_sub_field('pole-contenue_temoignage'); ?>

                    <div class="pole3__container_temoignage_carte">
                        <div class="pole3__container_temoignage_carte_avis">
                            <p> <?php the_sub_field('pole-contenue_temoignage_avis'); ?></p>
                        </div>

                        <div class="pole3__container_temoignage_carte_nom">
                            <h1><?php the_sub_field('pole-contenue_temoignage_nom'); ?></h1>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>

        </div>

    </div>

</section>

<!-- <section class="pole4">

    <div class="pole4__container">

        <div class="pole4__container_titre">
            <h1>Les autres modules de formation liée à <span><?php single_term_title(); ?> </span></h1>
        </div>

        <div class="pole4__container_4poles">

            <?php
            // Récupérer l'ID du produit actuellement affiché
            $current_product_id = get_the_ID();

            // Récupérer les termes associés au produit actuel dans la taxonomy 'parcours'
            $current_terms = wp_get_post_terms($current_product_id, 'parcours');

            if ($current_terms && !is_wp_error($current_terms)) {
                // Récupérer les IDs des termes enfants
                $current_term_ids = wp_list_pluck($current_terms, 'term_id');

                // Args pour la requête WP_Query
                $args = array(
                    'post_type'      => 'les_formations',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'post__not_in'   => array($current_product_id), // Exclure le produit actuel
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'parcours',
                            'field'    => 'term_id',
                            'terms'    => $current_term_ids, // Récupérer les posts associés aux termes enfants
                        ),
                    ),
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <article class="module2__container_grid_carte2">
                            <div class="module2__container_grid_carte2_haut">
                                <div class="module2__container_grid_carte2_haut_overlay">
                                    <div class="module2__container_grid_carte2_haut_overlay_titre">
                                        <h1><?php the_title(); ?></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="module2__container_grid_carte2_bas">
                                <div class="module2__container_grid_carte2_bas_bouton">
                                    <a href="<?php echo the_permalink(); ?>">Voir en détails</a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
            <?php endif;

                wp_reset_query();
                wp_reset_postdata();
            } else {
                echo 'Aucun terme trouvé.';
            }
            ?>

        </div>

    </div>

</section> -->





<?php get_footer(); ?>