<?php get_header() ?>



<section class="modules1">

    <div class="modules1__container">

        <div class="modules1__container_box1">
            <div class="modules1__container_box1_img">
                <?php $term = get_queried_object(); ?>
                <img src="<?php the_field('modules_section_img', $term); ?>" alt="" srcset="">
            </div>

            <div class="modules1__container_box1_textes">
                <?php $term = get_queried_object(); ?>

                <h1><?php the_field('modules_section_titre',$term); ?> </h1>
                <h1><?php single_term_title(); ?></h1>
                <p><?php the_field('modules_section_descriptions',$term); ?></p>
            </div>

        </div>


    </div>

</section>

<section class="module2">

    <div class="module2__container">

        <div class="module2__container_grid">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <article class="module2__container_grid_carte">

                        <div class="module2__container_grid_carte_haut">
                            <div class="module2__container_grid_carte_haut_overlay">

                                <div class="module2__container_grid_carte_haut_overlay_titre">
                                    <h1><?php the_title() ?> </h1>
                                </div>

                            </div>
                        </div>

                        <div class="module2__container_grid_carte_bas">
                            <div class="module2__container_grid_carte_bas_bouton">

                                <a href="<?php the_permalink(); ?>">Voire en détails</a>

                            </div>
                        </div>


                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php get_footer() ?>