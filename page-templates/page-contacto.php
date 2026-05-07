<?php
/*
*  Template Name: Página Contacto
*/ 


get_header();
?>


<main class="main-content main-page-wrapper contact__page">
    
    <section class="wp-block-acf-text contact-hero-section">
        <div class="container nm__custom__container pt-5 pt-xl-6 position-relative title-text text-md-center">
            <div class="row justify-content-center pb-3 pb-md-4 pb-xl-5 main-heading custom-main-heading">
                <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xxl-8">
                    <div class="hero-content-wrapper">
                        <div class="d-flex flex-column align-items-md-center text-md-center">
                            <h1 class="mb-4 custom-hero-title">Contáctanos</h1>
                            <p class="custom-hero-description">Escríbenos, llámanos o visítanos en Marbella: estamos disponibles de lunes a viernes, de 9:00 a 18:00 h.
                                Nos encantará conocerte, escucharte y ayudarte a hacer realidad tus ideas.</p>
                            <p><strong>Tu nuevo comienzo empieza aquí.</strong></p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="container nm__custom__container position-relative pb-5">
            <span class="anchor" id="contactForm"></span>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-7 px-md-5">
                    <strong class="h3 align-self-start d-block form-title">¿Cómo podemos ayudarte?</strong>
                    
                   <?php echo do_shortcode("[nmh-contact-forms]");   ?>

 




                </div>
            </div>
        </div>
    </section>

    <section class="container position-relative py-4 listings-section">
        <span class="anchor" id="pageListings"></span>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xxl-4 g-4 g-lg-5 listing-grid" id="prop-list" data-language="en"></div>
    </section>
</main>




<?php
get_footer(); 
?>