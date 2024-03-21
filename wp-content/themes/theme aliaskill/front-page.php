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

    </div>

</section>


<section class="accueil2">
    <div class="accueil2__container">

        <div class="accueil2__container_textes">
            <h1><?php the_field('accueil__section2_titre'); ?></h1>
            <p><?php the_field('accueil__section2_paragraphe'); ?></p>
        </div>

        <div class="accueil2__container_4poles">

            <?php
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
                                <a href="<?php the_field('pole_lienbouton'); ?>"><?php the_field('pole_txtboutton'); ?></a>
                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?>
        </div>

    </div>
</section>


<section class="accueil3">
    <div class="accueil3__container">

        <div class="accueil3__container_textes">
            <h1><?php the_field('accueil__section3_titre'); ?></h1>
            <div class="accueil3__container_textes_barre"></div>
        </div>

        <div class="accueil3__container_partenaires">

            <?php if (have_rows('accueil__repeteur-partenaires')) : ?>
                <?php while (the_repeater_field('accueil__repeteur-partenaires')) : ?>

                    <div>
                        <img src="<?php the_sub_field('accueil__repeteur-partenaires_img'); ?>" alt="" srcset="">
                    </div>
                    <div>
                        <img src="<?php the_sub_field('accueil__repeteur-partenaires_img'); ?>" alt="" srcset="">
                    </div>
                    <div>
                        <img src="<?php the_sub_field('accueil__repeteur-partenaires_img'); ?>" alt="" srcset="">
                    </div>
                    <div>
                        <img src="<?php the_sub_field('accueil__repeteur-partenaires_img'); ?>" alt="" srcset="">
                    </div>
                   

                <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer() ?>