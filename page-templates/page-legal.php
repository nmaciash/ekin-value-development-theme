<?php
// Template Name: Legal

get_header();
?>

<main class="legal-page">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <header class="legal-header shell">
        <span class="eyebrow">Legal</span>
        <h1 class="legal-title display"><?php the_title(); ?></h1>
        <p class="legal-meta mono">
            <?php
                $updated = get_the_modified_date( 'd F Y' );
                if ( $updated ) {
                    echo esc_html( $updated );
                }
            ?>
        </p>
    </header>

    <div class="legal-body shell">
        <div class="legal-content">
            <?php the_content(); ?>
        </div>
    </div>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
