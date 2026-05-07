<?php

/*
Template Name: Página Apartments
*/ 


    get_header();
?>


    <section class="renting__hero">

        <div id="page-loader"><span class="preloader-interior"></span></div>


        <div class="heading">
            <h1 class="pg__title">PROPIEDADES</h1>
        </div>


    </section>

 


    <section id="section-properties-grid" class="main-properties-section">
    
        <?php
        // Define custom query parameters
        $args = array(
            'post_type' => 'apartments',
            'orderby' => 'date', 
            'order' => 'DESC', 
            'posts_per_page' => 10,       
            'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,                    
        );

        // Get current page and append to custom query parameters array
        // $args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        
        // Instantiate custom query
        $properties = new WP_Query($args);

        // Pagination fix
        $temp_query = $wp_query;
        $wp_query = NULL;
        $wp_query = $properties;

        // Run the loop
        if ($properties->have_posts()): ?>

            <ul class="grid-format">
                <?php
                    while( $properties->have_posts() ) : $properties->the_post();
                        
                        get_template_part('template-parts/apartments');

                    endwhile;
                ?>
        </ul>

        <!-- Paginación -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'format'    => '?paged=%#%',
                'current'   => max(1, get_query_var('paged')),
                'total'     => $properties->max_num_pages,
            ));
            ?>
        </div>
    <?php else : ?>
        <p>No apartments found.</p>
    <?php endif;

    wp_reset_postdata();
    ?>
</section>

<?php get_footer(); ?>