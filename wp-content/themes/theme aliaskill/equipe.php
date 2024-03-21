<?php /* Template Name: Equipe */ ?>

<?php get_header() ?>

<section class="equipe1">

    <div class="equipe1__banniere" style="background-image: url('<?php the_field('equipe__banniere_img'); ?>'); background-repeat:no-repeat; background-size: cover;">

        <div class="equipe1__banniere_overlay">
            <h1><?php the_field('equipe__banniere_titre'); ?></h1>
        </div>

    </div>

    <div class="equipe1__presentation">

        <div class="equipe1__presentation_container">

            <div class="equipe1__presentation_container_textes">

                <h1><?php the_field('equipe__section1_titre'); ?></h1>
                <p><?php the_field('equipe__section1_pargraphe'); ?></p>

            </div>

        </div>

    </div>

</section>

<section class="equipe2">
    <div class="equipe2__container">

        <article class="equipe2__container_article1">
            <div class="equipe2__container_article1_img">
                <img src="<?php the_field('equipe__section2_img1'); ?>" alt="">
            </div>

            <div class="equipe2__container_article1_textes">
                <h1><?php the_field('equipe__section2_nom1'); ?></h1>
                <p><?php the_field('equipe__section2_description1'); ?></p>
                <div class="equipe2__container_article1_textes_bouton">
                    <a href="<?php the_field('equipe__section2_lien1'); ?>">Voire le CV</a>
                </div>
            </div>
        </article>


        <article class="equipe2__container_article2">

            <div class="equipe2__container_article2_textes">
                <h1><?php the_field('equipe__section2_nom2'); ?></h1>
                <p><?php the_field('equipe__section2_description2'); ?></p>
            </div>
            <div class="equipe2__container_article2_img">
                <img src="<?php the_field('equipe__section2_img2'); ?>" alt="">
            </div>

        </article>


        <article class="equipe2__container_article3">

            <div class="equipe2__container_article3_img">
                <img src="<?php the_field('equipe__section2_img3'); ?>" alt="">
            </div>
            <div class="equipe2__container_article3_textes">
                <h1><?php the_field('equipe__section2_nom3'); ?></h1>
                <p><?php the_field('equipe__section2_description3'); ?></p>
            </div>
        </article>


    </div>
</section>

<?php get_footer() ?>