<?php /* Template Name: equipe-cv */ ?>

<?php get_header() ?>

<section class="equipe-cv1">

    <div class="equipe-cv1__banniere" style="background-image: url('<?php the_field('equipe-cv_banniere_img'); ?>'); background-repeat:no-repeat; background-size: cover;">

        <div class="equipe-cv1__banniere_overlay">
            <h1><?php the_field('equipe-cv_banniere_titre'); ?></h1>
        </div>

    </div>



</section>

<section>
    <div class="equipe-cv2__container">

        <article class="equipe-cv2__container_article145">
            <div class="equipe-cv2__container_article145_img">
                <img src="<?php the_field('equipe-cv_img'); ?>" alt="" srcset="">
            </div>

            <div class="equipe-cv2__container_article145_textes">

                <div class="equipe-cv2__container_article145_textes_nom">
                    <h1><?php the_field('equipe-cv_nom'); ?></h1>
                </div>

                <div class="equipe-cv2__container_article145_textes_barre"></div>

                <div class="equipe-cv2__container_article145_textes_description">
                    <p><?php the_field('equipe-cv_description'); ?></p>
                </div>

            </div>
        </article>

    </div>

</section>

<?php get_footer() ?>