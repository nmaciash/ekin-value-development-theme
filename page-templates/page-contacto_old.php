<?php
/*
*  Template Name: Página Contacto OLD
*/ 


get_header();
?>


<?php if ( have_posts() ) : the_post(); ?>
        <section class="contact__hebe__hero">
            <div class="nm-container w-img">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contáctanos</h1>
                    </div>
                </div>
            </div>




        </section>


        <section class="contact__hebe__body">

            <div class="nm-container">

                    <div class="row content-contact">

                            <div class="col-lg-6">

                            <div class="subtitle">
                                <h3>DATOS DE CONTACTO</h3>
                            </div>
                            
                            <div class="img-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3206.9169047305263!2d-4.890613816427759!3d36.507867900991656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7327f8587ab0c7%3A0xe4345e468e23003!2sC%2F%20Juan%20Ruiz%20Mu%C3%B1oz%2C%202%2C%2029602%20Marbella%2C%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1739784786857!5m2!1ses!2ses" height="350" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <div class="row contact-data first__row">
                                <div class="col-2 col-md-3 col-icon">
                                    <i class="material-symbols-outlined">call</i>
                                

                                </div>

                                <div class="col-10 col-md-9">

                                    <p>+34 645 84 83 83</p>
                                    
                                </div>
                            </div>

                            <div class="row contact-data other__row">
                                <div class="col-2 col-md-3 col-icon">
                                    <i class="material-symbols-outlined">mail</i>
                                </div>

                                <div class="col-10 col-md-9">
                                    <p>info@eastandwesthomes.com</p>                                    
                                </div>
                                
                            </div>

                            <div class="row contact-data other__row">
                                <div class="col-2 col-md-3 col-icon">
                                    <i class="material-symbols-outlined">location_on</i>
                                </div>

                                <div class="col-10 col-md-9">

                                    <p>East & West Homes</p>
                                    <p>Calle Juan Ruiz Muñoz 2. Edf. Marino II, oficina 4.</p>
                                    <p>29602 Marbella - Málaga</p>
                                    
                                </div>
                                

                            </div>


                            </div>






                                <div class="col-lg-6">

                                        <div class="subtitle plus__padding">
                                            <h3>ENVÍANOS UN MENSAJE</h3>
                                        </div>


                                            <?php echo do_shortcode("[nmh-contact-forms]");   ?>





                                </div>

                    </div>

            </div>


        </section>


<?php endif; ?>



<?php
get_footer(); 
?>