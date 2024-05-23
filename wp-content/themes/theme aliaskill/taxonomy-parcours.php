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
            // Récupérer l'ID du terme actuel
            $current_term_id = get_queried_object_id();

            // Vérifier si le terme actuel est un terme enfant
            $parent_term_id = wp_get_term_taxonomy_parent_id(get_queried_object()->term_id, 'parcours');
            if ($parent_term_id !== 0) {
                // Le terme actuel est un terme enfant, on récupère et affiche les modules associés
                $args = array(
                    'post_type' => 'les_formations',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'parcours',
                            'field' => 'term_id',
                            'terms' => $current_term_id
                        )
                    )
                );
                $modules = get_posts($args);

                // Afficher les modules associés au terme enfant actuel
                foreach ($modules as $module) :
            ?>
                    <article class="module2__container_grid_carte2">
                        <div class="module2__container_grid_carte2_haut">
                            <div class="module2__container_grid_carte2_haut_overlay">
                                <div class="module2__container_grid_carte2_haut_overlay_titre">
                                    <h1><?php echo $module->post_title; ?></h1>
                                </div>
                            </div>
                        </div>
                        <div class="module2__container_grid_carte2_bas">
                            <div class="module2__container_grid_carte2_bas_bouton">
                                <a href="<?php echo get_permalink($module->ID); ?>">Voire en détails</a>
                            </div>
                        </div>
                    </article>
            <?php
                endforeach;
            } else {
                // Le terme actuel est un terme parent, donc on n'affiche pas les modules
                echo " ";
            }
            ?>
        </div>

        <div class="module2__container_grid2">
            <?php
            // Récupérer l'ID du terme parent actuel
            $parent_term_id = get_queried_object_id();

            // Récupérer les enfants du terme parent actuel liés à ce terme parent
            $children_args = array(
                'taxonomy' => 'parcours',
                'hide_empty' => true,
                'parent' => $parent_term_id // Récupère uniquement les enfants du terme parent actuel
            );
            $children = get_terms($children_args);

            // Vérifier s'il y a des enfants
            if (!empty($children)) {
                // Afficher les enfants du terme parent actuel
            ?>
               
                    <?php foreach ($children as $child_term) : ?>
                        
                            <article class="module2__container_grid2_carte">
                                <div class="module2__container_grid2_carte_haut">
                                    <div class="module2__container_grid2_carte_haut_overlay">
                                        <div class="module2__container_grid2_carte_haut_overlay_titre">
                                            <h1><?php echo $child_term->name; ?></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="module2__container_grid2_carte_bas">
                                    <div class="module2__container_grid2_carte_bas_bouton">
                                        <a href="<?php echo get_term_link($child_term); ?>">Voire les modules</a>
                                    </div>
                                </div>
                            </article>
                        
                    <?php endforeach; ?>
                
            <?php } ?>
        </div>




    </div>
</section>

<?php get_footer() ?>