<?php get_header() ?>

<section class="module1">

    <div class="module1__banniere" style="background-image:url('<?php the_field('formation__section2_carte_img'); ?>');">
        <div class="module1__banniere_overlay">
            <h1>
                <?php single_term_title(); ?> </h1>
        </div>
    </div>

    <div class="module1__presentation">
        <div class="module1__presentation_container">
            <h1><?php the_field('modules_section_titre'); ?> </h1>
            <h1><?php single_term_title(); ?></h1>
            <p><?php the_field('modules_section_descriptions'); ?></p>
        </div>

    </div>

</section>

<section class="module2">

    <div class="module2__container">

        <div class="module2__container_contenue">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="module2__container_contenue_carte">

                        <div class="module2__container_contenue_carte_img">
                            <img src="<?php the_field('modules_img'); ?>" alt="">
                        </div>

                        <div class="module2__container_contenue_carte_textes">
                            <h1><?php the_title() ?> </h1>


                            <div class="module2__container_contenue_carte_textes_bouton">
                                <a href="<?php the_permalink(); ?>">Voire</a>
                            </div>
                        </div>

                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php get_footer() ?>