<?php get_header();?>


<div class="content">



    <!-- <div class="row">

        <div class="col-12"> -->

            <?php if(has_post_thumbnail()):?>

                <img src="<?php the_post_thumbnail_url('post_image');?>" class="thumbnail-post img-fluid mb-1">
                
            <?php endif;?>

                
            <div class="row-img-gallery">
                <img class="control prev" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/previous-w.png" alt="">

                    <div class="nmh-slider">
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_1')); ?>"><img src="<?php echo do_shortcode(the_field('slider_img_1')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_2')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_2')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_3')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_3')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_4')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_4')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_5')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_5')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_6')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_6')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_7')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_7')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_8')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_8')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_9')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_9')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_10')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_10')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_11')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_11')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_12')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_12')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_13')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_13')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_14')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_14')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_15')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_15')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_16')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_16')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_17')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_17')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_18')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_18')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_19')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_19')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_20')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_20')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_21')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_21')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_22')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_22')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_23')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_23')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_24')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_24')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_25')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_25')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_26')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_26')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_27')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_27')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_28')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_28')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_29')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_29')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_30')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_30')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_31')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_31')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_32')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_32')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_33')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_33')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_34')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_34')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_35')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_35')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_36')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_36')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_37')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_37')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_38')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_38')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_39')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_39')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                        <div>
                            <a rel="gallery-property" class="link-for-lightbox simplelightbox" href="<?php echo do_shortcode(the_field('imagen_40')); ?>"><img src="<?php echo do_shortcode(the_field('imagen_40')); ?>" width="150" height="80" onerror='this.style.display = "none"'></a>
                        </div>
                    </div>
                
                <img class="control next" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/next-w.png" alt="">

            </div>


            <div class="single-container">
                               
                
                <h1><?php the_title();?></h1>


                <!-- Show price in format currency -->
                <!-- <?php
                    // $meta= get_field('precio');
                    // $fmt = numfmt_create('es_ES', NumberFormatter::CURRENCY);
                    // $fmt->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, 0);
                    // $price_formated_sp = numfmt_format_currency($fmt, $meta, "EUR")."\n";                    
                ?> -->

                <!-- <p class="price-tag-format_sp"><?php echo ($price_formated_sp); ?></p> -->


                <div class="row referencies">
                    <div class="col-2 ref-col">
                        <p><?php echo do_shortcode(the_field('codigo')); ?></p>
                    </div>
                    <div class="col-2 ref-col">
                        <p><span class="material-symbols-outlined">bed</span><?php echo do_shortcode(the_field('camas')); ?></p>

                    </div>
                    <div class="col-2 ref-col">
                        <p><span class="material-symbols-outlined">bathtub</span><?php echo do_shortcode(the_field('banos')); ?></p>

                    </div>
                    <!-- <div class="col-2 ref-col">
                        <p><span class="material-symbols-outlined">select</span><?php echo do_shortcode(the_field('parcela')); ?><span class="mq">m<sup>2</sup></span></p>

                    </div> -->
                    <div class="col-2 ref-col">
                        <p><span class="material-symbols-outlined">home</span><?php echo do_shortcode(the_field('metros_cuadrados')); ?><span class="mq">m<sup>2</sup></span></p>

                    </div>
                </div>

                <?php 
                $importe = get_field('importe');
                if ($importe): ?>
                    <div class="row details">
                        <div class="col-12 content-detail">
                            <span>Desde:</span><p><?php echo esc_html($importe); ?></p>                
                        </div>
                    </div>
                <?php endif; ?>



                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                                            

                <div class="property-explanation">
                    <?php the_content();?>
                </div>


                <?php endwhile; else: endif;?>



           

                
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