<?php get_header() ?>

<section class="accueil1">

    <div class="accueil1__container">

        <div class="accueil1__container_box1">
            <?php if (have_rows('accueil__repeteur')) : ?>
                <?php while (the_repeater_field('accueil__repeteur')) : ?>

                    <div class="accueil1__container_box1_textes">
                        <h1><?php the_sub_field('accueil__repeteur_titre'); ?></h1>
                        <p><?php the_sub_field('accueil__repeteur_paragraphe'); ?></p>
                    </div>

                    <div class="accueil1__container_box1_img">
                        <img src="<?php the_sub_field('accueil__repeteur_img'); ?>" alt="" srcset="">
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
        </div>

        <div class="accueil1__container_box2">
            <?php if (have_rows('accueil__repeteur2')) : ?>
                <?php while (the_repeater_field('accueil__repeteur2')) : ?>
                    <div class="accueil1__container_box2_img">
                        <img src="<?php the_sub_field('accueil__repeteur2_img'); ?>" alt="" srcset="">
                    </div>

                    <div class="accueil1__container_box2_textes">
                        <h1><?php the_sub_field('accueil__repeteur2_titre'); ?></h1>
                        <p><?php the_sub_field('accueil__repeteur2_paragraphe'); ?></p>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
        </div>

        <div class="accueil1__container_presentation">
            <h1><?php the_field('accueil__valeurs_section_titre'); ?></h1>
            <p><?php the_field('accueil__valeurs_section_description'); ?></p>
        </div>

        <div class="accueil1__container_icones">
            <div class="accueil1__container_icones_carte">
                <div class="accueil1__container_icones_carte_img">
                    <svg class="accueil1__container_icones_carte_img_svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z" />
                    </svg>
                </div>

                <div class="accueil1__container_icones_carte_textes">
                    <h1><?php the_field('accueil__valeurs_titre1'); ?></h1>
                    <p><?php the_field('accueil__valeurs_description1'); ?></p>
                </div>
            </div>

            <div class="accueil1__container_icones_carte">
                <div class="accueil1__container_icones_carte_img">
                    <svg class="accueil1__container_icones_carte_img_svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z" />
                    </svg>
                </div>

                <div class="accueil1__container_icones_carte_textes">
                    <h1><?php the_field('accueil__valeurs_titre2'); ?></h1>
                    <p><?php the_field('accueil__valeurs_description2'); ?></p>
                </div>
            </div>

            <div class="accueil1__container_icones_carte">
                <div class="accueil1__container_icones_carte_img">
                    <svg class="accueil1__container_icones_carte_img_svg3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M0 96C0 43 43 0 96 0H384h32c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32H384 96c-53 0-96-43-96-96V96zM64 416c0 17.7 14.3 32 32 32H352V384H96c-17.7 0-32 14.3-32 32zm90.4-234.4l-21.2-21.2c-3 10.1-5.1 20.6-5.1 31.6c0 .2 0 .5 .1 .8s.1 .5 .1 .8L165.2 226c2.5 2.1 3.4 5.8 2.3 8.9c-1.3 3-4.1 5.1-7.5 5.1c-1.9-.1-3.8-.8-5.2-2l-23.6-20.6C142.8 267 186.9 304 240 304s97.3-37 108.9-86.6L325.3 238c-1.4 1.2-3.3 2-5.3 2c-2.2-.1-4.4-1.1-6-2.8c-1.2-1.5-1.9-3.4-2-5.2c.1-2.2 1.1-4.4 2.8-6l37.1-32.5c0-.3 0-.5 .1-.8s.1-.5 .1-.8c0-11-2.1-21.5-5.1-31.6l-21.2 21.2c-3.1 3.1-8.1 3.1-11.3 0s-3.1-8.1 0-11.2l26.4-26.5c-8.2-17-20.5-31.7-35.9-42.6c-2.7-1.9-6.2 1.4-5 4.5c8.5 22.4 3.6 48-13 65.6c-3.2 3.4-3.6 8.9-.9 12.7c9.8 14 12.7 31.9 7.5 48.5c-5.9 19.4-22 34.1-41.9 38.3l-1.4-34.3 12.6 8.6c.6 .4 1.5 .6 2.3 .6c1.5 0 2.7-.8 3.5-2s.6-2.8-.1-4L260 225.4l18-3.6c1.8-.4 3.1-2.1 3.1-4s-1.4-3.5-3.1-3.9l-18-3.7 8.5-14.3c.8-1.2 .9-2.9 .1-4.1s-2-2-3.5-2l-.1 0c-.7 .1-1.5 .3-2.1 .7l-14.1 9.6L244 87.9c-.1-2.2-1.9-3.9-4-3.9s-3.9 1.6-4 3.9l-4.6 110.8-12-8.1c-1.5-1.1-3.6-.9-5 .4s-1.6 3.4-.8 5l8.6 14.3-18 3.7c-1.8 .4-3.1 2-3.1 3.9s1.4 3.6 3.1 4l18 3.8-8.6 14.2c-.2 .6-.5 1.4-.5 2c0 1.1 .5 2.1 1.2 3c.8 .6 1.8 1 2.8 1c.7 0 1.6-.2 2.2-.6l10.4-7.1-1.4 32.8c-19.9-4.1-36-18.9-41.9-38.3c-5.1-16.6-2.2-34.4 7.6-48.5c2.7-3.9 2.3-9.3-.9-12.7c-16.6-17.5-21.6-43.1-13.1-65.5c1.2-3.1-2.3-6.4-5-4.5c-15.3 10.9-27.6 25.6-35.8 42.6l26.4 26.5c3.1 3.1 3.1 8.1 0 11.2s-8.1 3.1-11.2 0z" />
                    </svg>
                </div>

                <div class="accueil1__container_icones_carte_textes">
                    <h1><?php the_field('accueil__valeurs_titre3'); ?></h1>
                    <p><?php the_field('accueil__valeurs_description3'); ?></p>
                </div>
            </div>

        </div>

    </div>

</section>


<section class="accueil2">
    <div class="accueil2__container">

        <div class="accueil2__container_textes">
            <h1><?php the_field('accueil__section2_titre'); ?></h1>
            <p><?php the_field('accueil__section2_paragraphe'); ?></p>
        </div>

        <div class="accueil2__container_4poles">

            <!-- <?php
                    $args = array(
                        'post_type' => 'les_poles',
                        'posts_per_page' => 5,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    ?>

            <?php $the_query = new WP_Query($args); ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>



                    <div class="accueil2__container_4poles_pole" style="background-image: url('<?php the_field('pole_img'); ?>'); background-size:cover; background-position:center; ">

                        <div class="accueil2__container_4poles_pole_overlay">

                            <div class="accueil2__container_4poles_pole_overlay_textes">
                                <h1> <?php the_title(); ?> </h1>
                            </div>

                            <div class="accueil2__container_4poles_pole_overlay_boutton">
                                <a href="<?php the_field('pole_lienbouton'); ?>">Détail</a>
                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?> -->
            <?php
            $terms = get_terms(array(
                'taxonomy' => 'parcours',
                'hide_empty' => true,
                'parent' => 0, // Ne récupérer que les termes de plus haut niveau
            ));
            ?>


            <?php foreach ($terms as $term) : ?>

                <div class="formation2__box_container2_4poles_pole" style="background-image: url('<?php the_field('formation__section2_carte_img', $term); ?>'); background-size:cover; background-position:center; ">

                    <div class="formation2__box_container2_4poles_pole_overlay">

                        <div class="formation2__box_container2_4poles_pole_overlay_textes">
                            <h1>
                                <?php echo $term->name; ?> </h1>
                        </div>

                        <div class="formation2__box_container2_4poles_pole_overlay_bouton">
                            <a href="<?php echo get_term_link($term); ?>">Voire</a>
                        </div>

                    </div>

                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>


<section class="accueil3">
    <div class="accueil3__container">

        <div class="accueil3__container_textes">
            <h1><?php the_field('accueil__section3_titre'); ?></h1>
            <p><?php the_field('accueil__section3_description'); ?></p>

        </div>

        <div class="accueil3__container_partenaires">



            <div class="accueil3__container_partenaires_img">
                <img src="<?php the_sub_field('accueil__partenaires_img1'); ?>" alt="" srcset="">
            </div>
            <div class="accueil3__container_partenaires_img">
                <img src="<?php the_sub_field('accueil__partenaires_img2'); ?>" alt="" srcset="">
            </div>
            <div class="accueil3__container_partenaires_img">
                <img src="<?php the_sub_field('accueil__partenaires_img3'); ?>" alt="" srcset="">
            </div>



        </div>

    </div>
</section>

<?php get_footer() ?>