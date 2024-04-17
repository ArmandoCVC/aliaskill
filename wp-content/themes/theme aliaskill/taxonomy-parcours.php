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

                <h1><?php the_field('modules_section_titre', $term); ?> </h1>
                <h1><?php single_term_title(); ?></h1>
                <p><?php the_field('modules_section_descriptions', $term); ?></p>
            </div>

        </div>

    </div>

</section>

<section class="module2">

    <div class="module2__container">

        <div class="module2__container_grid">



            <?php
            $terms = get_terms(array(
                'taxonomy' => 'parcours',
                'hide_empty' => true,
            ));
            ?>

            <?php foreach ($terms as $term) : ?>
                <?php
                // Récupérer les enfants du terme actuel
                $children = get_term_children($term->term_id, 'parcours');

                // Vérifier s'il y a des enfants
                if (!empty($children)) {
                    foreach ($children as $child_id) {
                        $child_term = get_term_by('id', $child_id, 'parcours');
                        // Afficher les termes enfants avec un lien personnalisé
                ?>
                        <article class="module2__container_grid_carte">
                            <div class="module2__container_grid_carte_haut">
                                <div class="module2__container_grid_carte_haut_overlay">
                                    <div class="module2__container_grid_carte_haut_overlay_titre">
                                        <h1><?php echo $child_term->name; ?></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="module2__container_grid_carte_bas">
                                <div class="module2__container_grid_carte_bas_bouton">
                                    <a href="<?php echo esc_url(add_query_arg('child_term', $child_term->slug)); ?>">Voir en détails</a>
                                </div>
                            </div>
                        </article>
                <?php
                    }
                }
                ?>
            <?php endforeach; ?>

            

        </div>

    </div>
</section>

<?php get_footer() ?>