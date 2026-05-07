<?php 
/*
*  Template Name: Página Nosotros
*/ 



get_header();?>

<main id="zona-inversor-page" class="zona__inversor">

    <div id="page-loader"><span class="preloader-interior"></span></div>

    <section class="section__one">
        <div class="video-section">
            <video autoplay muted loop playsinline class="background-video">
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/video_portada.mp4" type="video/mp4">
                Tu navegador no soporta videos HTML5.
            </video>

            <div class="video-overlay"></div>

            <div class="overlay-text">
                <h1>EL EQUIPO QUE LO HACE POSIBLE</h1>
                <!-- <p>Venimos de mundos distintos —arquitectura internacional, gestión inmobiliaria y comercio global— pero compartimos una misma visión: crear proyectos con alma, construidos desde la experiencia, el compromiso y el conocimiento profundo del lugar que llamamos hogar.</p> -->
                <!-- <p>Convertimos tus sueños en proyectos reales.</p> -->
            </div>
        </div>       
    </section>


    <section class="section__two dynamic-content__container">
        <div class="row__wrapper">
            <div class="row align-items-center">
                <div class="col-12">
                    <p>Venimos de mundos distintos - arquitectura internacional, gestión inmobiliaria y comercio global -  pero compartimos una misma visión: crear proyectos con alma, construidos desde la experiencia, el compromiso y el conocimiento profundo del lugar que llamamos hogar. Nuestra combinación de saber hacer técnico, visión estratégica y cercanía personal nos permite acompañar a cada cliente con soluciones integrales y a medida, poniendo siempre la calidad, la transparencia y la confianza en el centro de todo lo que hacemos.</p>
                </div>      
            </div>
        </div>
    </section>


    <section class="section__three py-5">
        <div class="container">
            <div class="row gx-5">

                <!-- Miembro 1 (se apilará en móvil) -->
                <div class="col-lg-6 m__team__1">
                    <div class="perfil-miembro-mf">
                        <!-- <div class="perfil-foto-mf borde-degradado">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Rodrigo.png" alt="Retrato de Rodrigo Camerano">
                        </div> -->
                        <div class="perfil-contenido-mf">
                            <h3 class="perfil-nombre-mf">Rodrigo Camerano</h3>
                            <p class="perfil-descripcion-mf">
                                Arquitecto y asesor inmobiliario con 11 años de experiencia internacional en Australia, Japón, Argentina y España. Ha liderado más de 40 proyectos urbanos, residenciales y de infraestructura, desarrollando una visión global y estratégica del sector. Su enfoque combina precisión técnica y mirada comercial, lo que le permite detectar valor oculto, evaluar riesgos y ofrecer asesoría integral a inversores, compradores y desarrolladores. Con una fuerte orientación a la sostenibilidad y una gran sensibilidad intercultural, Rodrigo se destaca por su trato diplomático y cercano con clientes de perfiles diversos, aportando confianza y visión a cada etapa del proyecto.
                            </p>
                        </div>
                        <div class="perfil-contacto-mf">
                            <a href="tel:+34672972590">+34 672 972 590</a>
                            <a href="mailto:info@ekinvaluedevelopment.com">info@ekinvaluedevelopment.com</a>
                        </div>
                        
                    </div>
                </div>

                <!-- Miembro 2 (se apilará en móvil) -->
                <div class="col-lg-6 m__team__2 hide">
                    <div class="perfil-miembro-mf">
                        <!-- <div class="perfil-foto-mf borde-degradado">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Celia.png" alt="Retrato de Celia Márquez">
                        </div> -->
                        <div class="perfil-contenido-mf">
                            <h3 class="perfil-nombre-mf">Celia Márquez</h3>
                            <p class="perfil-descripcion-mf">
                                Técnico Superior en Comercio Internacional y asesor inmobiliario, cuenta con más de 10 años de experiencia en el sector servicios y atención al cliente en Marbella. Nacida y criada en la Costa del Sol, conoce de forma natural la cultura local, el estilo de vida y las expectativas tanto de residentes como de inversores extranjeros. Su enfoque combina cercanía, organización y vocación de servicio, aportando a Ekin Value Development una visión humana y resolutiva. Para Celia, cada proyecto es una oportunidad para crear confianza, cuidar los detalles y ofrecer una experiencia personalizada de principio a fin.
                            </p>
                        </div>
                        <div class="perfil-contacto-mf">
                            <a href="tel:+34639059750">+34 639 059 750</a>
                            <a href="mailto:celia.marquez@gph-ip.com">celia.marquez@gph-ip.com</a>
                        </div>
                        
                    </div>
                </div>

            </div>


                




        </div>
       
    </section>












</main>






<?php get_footer();?>