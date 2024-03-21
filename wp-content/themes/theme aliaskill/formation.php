<?php /* Template Name: Formation */ ?>

<?php get_header() ?>

<section class="formation1">

    <div class="formation1__banniere" style="background-image:url('<?php the_field('formation__banniere_img'); ?>');">
        <div class="formation1__banniere_overlay">
            <h1><?php the_field('formation__banniere_titre'); ?></h1>
        </div>
    </div>

    <div class="formation1__presentation">
        <div class="formation1__presentation_container">
            <h1><?php the_field('formation__section1_titre'); ?></h1>
            <p><?php the_field('formation__section1_paragraphe'); ?></p>
        </div>

    </div>

</section>

<section class="formation2">

    <div class="formation2__box">

        <div class="formation2__box_container">
            <div class="formation2__box_container_titre">
                <h1><?php the_field('formation__section2_titre'); ?></h1>
            </div>

            <div class="formation2__box_container2">
                <div class="formation2__box_container2_4poles">


                    <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'parcours',
                        'hide_empty' => true,
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
        </div>
    </div>

</section>

<?php get_footer() ?>