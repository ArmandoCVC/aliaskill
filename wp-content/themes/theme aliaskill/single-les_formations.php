

<?php get_header(); ?>

<section class="module1">
    <div class="module1__banniere" style="background-image:url('<?php the_field('modules_img'); ?>');   background-position: center; background-repeat: no-repeat; background-size: cover;">

        <div class="module1__banniere_overlay">

            <div class="module1__banniere_overlay_container">
                <h1 class="module1__banniere_overlay_container_titre"> <?php the_title(); ?> </h1>

                <div class="module1__banniere_overlay_container_box">
                    <div class="module1__banniere_overlay_container_box_duree">
                        <div class="module1__banniere_overlay_container_box_duree_icones1">

                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 5.5rem; fill: white;" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                            </svg>
                            <p><?php the_field('module-contenue_dureejours'); ?></p>

                        </div>

                        <div class="module1__banniere_overlay_container_box_duree_icones2">

                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 5.5rem; fill: white;" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                            </svg>
                            <p><?php the_field('module-contenue_dureeheures'); ?></p>

                        </div>

                    </div>

                    <div class="module1__banniere_overlay_container_box_boutton">
                        <a href="<?php the_field('module-contenue_lienboutton'); ?>"><?php the_field('module-contenue_titre'); ?></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="module2">

    <article class="module2__article1">

        <div class="module2__article1_container">
            <div class="module2__article1_container_textes">
                <h1><?php the_field('module-contenue_objectif'); ?> </h1>
                <p><?php the_field('module-contenue_paragraphe'); ?> </p>
            </div>
            <div class="module2__article1_container_img">
                <img src="<?php the_field('module-contenue_img'); ?> " alt="">
            </div>
        </div>

    </article>

    <article class="module2__article2">

        <div class="module2__article2_container">

            <div class="module2__article2_container_img">
                <img src="<?php the_field('module-contenue_public_img'); ?> " alt="">
            </div>

            <div class="module2__article2_container_textes">
                <h1><?php the_field('module-contenue_public'); ?> </h1>
                <p><?php the_field('module-contenue_public_paragraphe'); ?> </p>
            </div>

        </div>

    </article>


    <article class="module2__article3">

        <div class="module2__article3_container">
            <div class="module2__article3_container_textes">
                <h1><?php the_field('module-contenue_moyenspedagogique'); ?> </h1>
                <p><?php the_field('module-contenue_moyenspedagogique_paragraphe'); ?> </p>
            </div>
            <div class="module2__article3_container_img">
                <img src="<?php the_field('module-contenue_moyenspedagogique_img'); ?> " alt="">
            </div>
        </div>

    </article>


    <article class="module2__article4">

        <div class="module2__article4_container">

            <div class="module2__article4_container_img">
                <img src="<?php the_field('module-contenue_paragraphe_img'); ?> " alt="">
            </div>

            <div class="module2__article4_container_textes">
                <h1><?php the_field('module-contenue_contenue'); ?> </h1>
                <p><?php the_field('module-contenue_paragraphe_contenue'); ?> </p>
            </div>

        </div>

    </article>


    <article class="module2__article5">

        <div class="module2__article5_container">
            <div class="module2__article5_container_textes">
                <h1><?php the_field('module-contenue_evaluation'); ?> </h1>
                <p><?php the_field('module-contenue_evaluation_paragraphe'); ?> </p>
            </div>
            <div class="module2__article5_container_img">
                <img src="<?php the_field('module-contenue_evaluation_img'); ?> " alt="">
            </div>
        </div>

    </article>
</section>


<section class="module3">
    <div class="module3__carre">
        <div class="module3__carre_container">

            <div class="module3__carre_container_avis">

                <div class="module3__carre_container_avis_box1">

                    <div class="module3__carre_container_avis_box1_logo">
                        <img src="<?php the_field('module-contenue_avis_img'); ?>" alt="">
                    </div>
                    <div class="module3__carre_container_avis_box1_nom-logo">
                        <h1><?php the_field('module-contenue_avis_nomentreprise'); ?></h1>
                    </div>
                    <div class="module3__carre_container_avis_box1_etoiles">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 2rem;" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 2rem;" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 2rem;" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 2rem;" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 2rem;" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                    </div>

                </div>

                <div class="module3__carre_container_avis_box2">

                    <div class="module3__carre_container_avis_box2_titre">
                        <h1>Avis des Clients</h1>
                    </div>
                    <div class="module3__carre_container_avis_box2_description">
                        <p>
                        <h1><?php the_field('module-contenue_avis_paragraphe'); ?></h1>
                        </p>
                    </div>

                </div>

            </div>

        </div>
</section>




<?php get_footer(); ?>