<?php
get_header(); // Incluye la cabecera
?>

<main class="search-results-container">
    <div class="search-results-content">
        <h1 class="search-results-title">Resultados de búsqueda para: <span><?php echo get_search_query(); ?></span></h1>
        
        <?php if (have_posts()) : ?>
            <ul class="search-results-list">
                <?php while (have_posts()) : the_post(); ?>
                    <li class="search-result-item">
                        <a href="<?php the_permalink(); ?>" class="search-result-link">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p class="no-results">No se encontraron resultados para tu búsqueda. Por favor, intenta con otras palabras clave.</p>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer(); // Incluye el pie de página
?>
