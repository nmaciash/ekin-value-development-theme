<?php get_header();?>


<div class="content">

    <!-- <div class="row">

        <div class="col-12"> -->

            <?php if(has_post_thumbnail()):?>
                <div id="property__gallery">
                    <img src="<?php the_post_thumbnail_url('post_image');?>" class="thumbnail-post mb-1">
                </div>
            <?php endif;?>

                
            <div class="row-img-gallery bg-light">
                <img class="control prev" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/previous-w.png" alt="">

                    <div class="nmh-slider">
                        <!-- BEGIN - Bucle para recorrer las 100 posibles imágenes -->
                        <?php
                            for ($i = 1; $i <= 100; $i++) {
                                $imagen = get_field('imagen_' . $i);
                                if ($imagen): ?>
                                    <div>
                                        <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo esc_url($imagen); ?>">
                                            <img src="<?php echo esc_url($imagen); ?>" width="150" height="80" onerror='this.style.display = "none"'>
                                        </a>
                                    </div>
                                <?php endif;
                            }
                        ?>
                        <!-- END - Bucle -->
                    </div>
                
                <img class="control next" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/next-w.png" alt="">
            </div>


            <!-- BEGIN Variables -->
                <?php
                    $reference = get_field('reference');
                    
                    $get_price = get_field('price');
                    if (fmod($get_price, 1) == 0.0) {
                        $price = number_format($get_price, 0, ',', '.');
                    } else {
                        $price = number_format($get_price, 2, ',', '.');
                    }                    
                    
                    $rooms = get_field('rooms');
                    $bedrooms = get_field('bedrooms');
                    $beds = get_field('beds');
                    $baths = get_field('baths');
                    $built = get_field('built');
                    $terrace = get_field('terrace');
                    $plot = get_field('plot');
                    $location = get_field('location');
                    $pool = get_field('pool');
                    $garden = get_field('garden');
                    $garage = get_field('garage');

                    $get_ibi = get_field('ibi');
                    if (fmod($get_ibi, 1) == 0.0) {
                        $ibi = number_format($get_ibi, 0, ',', '.');
                    } else {
                        $ibi = number_format($get_ibi, 2, ',', '.');
                    }        

                    $community = get_field('community');
                    $garbage = get_field('garbage');                  

                ?>

            <!-- END Variables -->



            <div class="single-container">
                    
                <section class="property-header">
                    <div class="property-header-container">
                        <!-- Property Info -->
                        <div class="row top__alignment">
                            <div class="col-lg-6">
                                <h1 class="property-title"><?php the_title();?></h1>

                                <?php if ($reference): ?>
                                <p class="property-ref nm-mb-3"><?php echo esc_html($reference); ?></p>
                                <?php endif; ?>

                                <?php if ($price): ?>
                                <p class="property-price nm-mb-3"><?php echo esc_html($price . ' €'); ?></p>
                                <?php endif; ?>
                                
                                <div class="property-features d-flex flex-wrap mb-4">
                                    <?php if ($beds): ?>    
                                    <span class="feature versalitas"><strong><?php echo esc_html($beds); ?></strong> CAMAS</span>                                    
                                    <span class="nm-ml-1 nm-mr-1">/</span>
                                    <?php endif; ?>                                    

                                    <?php if ($baths): ?>
                                    <span class="feature versalitas"><strong><?php echo esc_html($baths); ?></strong> BAÑOS</span>
                                    <span class="nm-ml-1 nm-mr-1">/</span>
                                    <?php endif; ?>                                    

                                    <?php if ($built): ?>
                                    <span class="feature versalitas"><strong><?php echo esc_html($built . ' m²'); ?></strong> CONSTRUIDOS</span>
                                    <span class="nm-ml-1 nm-mr-1">/</span>
                                    <?php endif; ?>

                                    <?php if ($plot): ?>
                                    <span class="feature versalitas"><strong><?php echo esc_html($plot . ' m²'); ?></strong> PARCELA</span>
                                    <?php endif; ?>
                                </div>
                                
                                <a href="#dataTable" class="btn nm__button__property">MÁS DETALLES</a>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="property-description">
                                <p>Embodying the essence of Scandinavian design, this villa harmoniously blends wood and stone...</p>
                                <p>Situated in a desirable area of Nueva Andalucia, this property is conveniently close to amenities...</p>
                                </div>
                                
                                <div class="property-actions d-flex justify-content-center gap-3 mt-4">
                                <a href="#property__gallery" class="btn nm__button__property">View Gallery</a>
                                <a href="#details" class="btn nm__button__property">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="section-overview py-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <span id="dataTable" class="anchor"></span>

                                <!-- Overview -->
                                <h2>Property <strong>Overview</strong></h2>
                                <ul class="row list-unstyled overview-list mb-4">
                                
                                    <?php if ($price): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Price</small>
                                        <span><?php echo esc_html($price . ' €'); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($reference): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Reference</small>
                                        <span><?php echo esc_html($reference); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($rooms): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Rooms</small>
                                        <span><?php echo esc_html($rooms); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($bedrooms): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Bedrooms</small>
                                        <span><?php echo esc_html($bedrooms); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($beds): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Beds</small>
                                        <span><?php echo esc_html($beds); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($baths): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Baths</small>
                                        <span><?php echo esc_html($baths); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($built): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Metros Construidos</small>
                                        <span><?php echo esc_html($built . ' m²'); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($terrace): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Terraza</small>
                                        <span><?php echo esc_html($terrace . ' m²'); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($plot): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Parcela</small>
                                        <span><?php echo esc_html($plot . ' m²'); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($pool): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Piscina</small>
                                        <span><?php echo esc_html($pool); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($garden): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Jardín</small>
                                        <span><?php echo esc_html($garden); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($garage): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Garage</small>
                                        <span><?php echo esc_html($garage); ?></span>
                                    </li>
                                    <?php endif; ?>
                                </ul>

                                <!-- Costs -->
                                <ul class="row list-unstyled overview-list mb-4">

                                    <?php if ($ibi): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>IBI</small>
                                        <span><?php echo esc_html($ibi . ' /año'); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($community): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Comunidad</small>
                                        <span><?php echo esc_html($community . ' /mes'); ?></span>
                                    </li>
                                    <?php endif; ?>

                                    <?php if ($garbage): ?>
                                    <li class="col-6 col-md-3 mb-3">
                                        <small>Basuras</small>
                                        <span><?php echo esc_html($garbage . ' /año'); ?></span>
                                    </li>
                                    <?php endif; ?>

                                </ul>

                                <!-- Features -->
                                
                                <?php
                                    $features = get_post_meta(get_the_ID(), '_caracteristicas_apartamento', true);

                                    if (!empty($features) && is_array($features)) :
                                    ?>
                                        <h2 class="mt-5">Property <strong>Features</strong></h2>
                                        <ul class="list-unstyled features-list mt-3 row">
                                            <?php foreach ($features as $feature): ?>
                                                <li class="col-md-4 mb-2"><?php echo esc_html($feature); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                <?php endif; ?>


                            </div>
                        </div>
                    </div>
                </section>
                
                




                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                                            

                <div class="property-explanation">
                    <?php the_content();?>
                </div>


                <?php endwhile; else: endif;?>






      

                <div class="map__container">
                <?php 
                    
                    if ($location) {
                        echo $location; // Imprime el iframe tal cual está almacenado
                    }
                    ?>
                </div>


            </div>



                <?php the_tags();?>

            </div>


            <section class="contact__noctua__body">
                <div class="form-container">
                    <h3>Consúltanos sobre esta u otras propiedades</h3>
                    <?php echo do_shortcode("[nmh-contact-forms]");   ?>
                </div>
            </section>







    <!-- </div>











</div> -->





<?php get_footer();?>