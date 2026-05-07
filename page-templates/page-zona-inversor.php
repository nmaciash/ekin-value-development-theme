<?php 
/*
*  Template Name: Página Zona Inversor
*/ 

get_header();?>

<main id="zona-inversor-page" class="zona__inversor">

    <div id="page-loader"><span class="preloader-interior"></span></div>

    <section class="section__one">
        <div class="video-section">
            <video autoplay muted loop playsinline class="background-video">
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/zona_inversor.mp4" type="video/mp4">
                Tu navegador no soporta videos HTML5.
            </video>
            <div class="video-overlay"></div>
            <div class="overlay-text">
                <h1>CONOCIMIENTO LOCAL, ALCANCE INTERNACIONAL</h1>
            </div>
        </div>       
    </section>

    <section class="section_two">
        <div class="container-fluid p-0">
            <div class="row g-0">

                <!-- Columna 1 con data-attribute -->
                <div class="col-12 col-md-4">
                    <div class="image-hover-wrapper" data-post-slug="consultoria">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consutoria.jpg" alt="Consultoría">
                        <div class="overlay"><h3 class="overlay-title">CONSULTORÍA</h3></div>
                    </div>
                </div>

                <!-- Columna 2 con data-attribute -->
                <div class="col-12 col-md-4">
                    <div class="image-hover-wrapper" data-post-slug="coordinacion-proyectos">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tapa.png" alt="Coordinación de Proyectos">
                        <div class="overlay"><h3 class="overlay-title">COORDINACIÓN DE PROYECTOS</h3></div>
                    </div>
                </div>

                <!-- Columna 3 con data-attribute -->
                <div class="col-12 col-md-4">
                    <div class="image-hover-wrapper" data-post-slug="gestion-comercial">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coordinacion-operativa.png" alt="Gestión Comercial">
                        <div class="overlay"><h3 class="overlay-title">GESTIÓN COMERCIAL</h3></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========= INICIA SECCIÓN DE CONTENIDO DINÁMICO ========= -->
    <section id="dynamic-content-area" class="section_three">
        
        <!-- <div class="dynamic-content__loader text-center" style="display: none;"> -->
        <div class="dynamic-content__loader">    
        
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>
        </div>

        <div class="dynamic-content__container">
            <?php 
            // Carga el contenido INICIAL por defecto desde el archivo.
            get_template_part('template-parts/zona-inversor/inicial'); 
            ?>
        </div>
    </section>
    <!-- ========= TERMINA SECCIÓN DE CONTENIDO DINÁMICO ========= -->

</main>

<?php get_footer();?>