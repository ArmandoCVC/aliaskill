<?php /* Template Name: Equipe */ ?>

<?php get_header() ?>

<section class="equipe">
    <div class="equipe__container">
        <article class="equipe__container_article1">
            <div class="equipe__container_article1_haut">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 3rem;" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
                <h1>

                    <?php the_field('equipe_article1_titre'); ?>
                </h1>
            </div>

            <div class="equipe__container_article1_bas">
                <p>
                    <?php the_field('equipe_article1_paragraphe'); ?>
                </p>
            </div>
        </article>

        <article class="equipe__container_article2">
            <div class="equipe__container_article2_haut">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" style="width: 3rem;" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg> -->
                <h1>

                    <?php the_field('equipe_article2_titre'); ?>
                </h1>
            </div>

            <div class="equipe__container_article2_bas">
                <p>
                    <?php the_field('equipe_article2_paragraphe'); ?>
                </p>
            </div>
        </article>

        <article class="equipe__container_article3">
            <div class="equipe__container_article3_haut">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M256 32H181.2c-27.1 0-51.3 17.1-60.3 42.6L3.1 407.2C1.1 413 0 419.2 0 425.4C0 455.5 24.5 480 54.6 480H256V416c0-17.7 14.3-32 32-32s32 14.3 32 32v64H521.4c30.2 0 54.6-24.5 54.6-54.6c0-6.2-1.1-12.4-3.1-18.2L455.1 74.6C446 49.1 421.9 32 394.8 32H320V96c0 17.7-14.3 32-32 32s-32-14.3-32-32V32zm64 192v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32s32 14.3 32 32z" />
                </svg>
                <h1>

                    <?php the_field('equipe_article3_titre'); ?>
                </h1>
            </div>

            <div class="equipe__container_article3_bas">
                <p>
                    <?php the_field('equipe_article3_paragraphe'); ?>
                </p>
            </div>
        </article>





    </div>




</section>

<?php get_footer() ?>