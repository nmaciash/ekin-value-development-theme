$ = jQuery.noConflict();

$(document).ready(function() {

    

    // PRELOADER

    setTimeout(fade, 300);   // Después de 0.3 segundos (un segundo = 1000), se llama a la función fade que hace que el spinner se desvanezca.
    
    function fade() {
        $("#page-loader").fadeOut('500');
     }



    // HEADER


    // Cambiar color de fondo de la cabecera en función de si está o no en la posición inicial 
    
    // Primero recupero los valores iniciales de los elementos

     var $initial_height = $('.logo').height(); 
     var $initial_height_scrolled = $initial_height - (parseInt($initial_height) * 0.10);

        if ($(window).width() >= 960 && $(".nm-nav").length) {

            // alert(initial_height);

                $(window).on("scroll touchmove", function() {


                    if ($(document).scrollTop() != $(".nm-nav").position().top) {
                        // $('.nm-nav').addClass('page-scrolled');
                        // $('.nav-list').addClass('nav-list-page-scrolled');
                        // $('.logo').addClass('height-logo-scrolled');

                        // alert(initial_height_scrolled);

                    } else {
                        // $('.nm-nav').removeClass('page-scrolled');
                        // $('.nav-list').removeClass('nav-list-page-scrolled');
                        // $('.logo').removeClass('height-logo-scrolled');
                    };
                    
                });

        }


    // Prevent default main submenú links

    $('.head-submenu a').first().click(function(event) {  // Debo añadir .first para que sólo prevenga el evento click de la etiqueta principal. En caso de que no exista .first lo aplica a todos los elementos del submenú, con lo que los enlaces no actúan.
        event.preventDefault();
    });


    // Menú Hamburguesa

    var hambtn = document.querySelector(".hamburger-btn");
    if (hambtn) { hambtn.addEventListener('click', animateBars); }

    var line1__bars = document.querySelector('.line1__bars-menu');
    var line2__bars = document.querySelector('.line2__bars-menu');
    var line3__bars = document.querySelector('.line3__bars-menu');
    

    function animateBars() {
        line1__bars.classList.toggle('activeline1__bars-menu');
        line2__bars.classList.toggle('activeline2__bars-menu');
        line3__bars.classList.toggle('activeline3__bars-menu');
    }

    

    // Cambiar color de las lineas del menú hamburguesa si el fondo de la página es blanco

    if ($("body").hasClass("page-template-t_page_plain")) {
        $(".hamburger-btn").addClass("ch__color");
        $("footer").addClass("ch__color");
    }
    else {
        $(".hamburger-btn").removeClass("ch__color");
        $("footer").removeClass("ch__color");
    }
    
    

    // Menú Navegación


    // Tratamiento de las etiquetas para el intercambio entre idiomas

    // Añado una clase al primer elemento para trabajar los márgenes de forma diferente
    $('.nav-list li.trp-language-switcher-container:first').addClass('first__language__item');



    //   PROPERTIES

    // Place element at the beginning of the father element
    $(".pagination-top").prependTo(".main-properties-section");


    // If url has the word page. The pagination is active in a page different the first one
    if (window.location.href.indexOf("page") > -1) {
        $('html, body').animate({
            scrollTop: $('#section-properties-grid').offset().top
        }, 'slow');
   
    }





    // Inicialización del nuevo slider de imágenes principal
    // ---------------------------------------------------
    if ($('.main-image-slider').length) { 
        $('.main-image-slider').slick({
            dots: true,
            infinite: true,
            speed: 1000,         // Transición más lenta y suave (1 segundo)
            fade: true,          // ¡EFECTO CLAVE! La imagen se desvanece en lugar de deslizarse
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000, // Tiempo entre slides (4 segundos)
            pauseOnHover: true,  // Pausa el slider si el ratón está encima
            arrows: true,        // Muestra las flechas que estilizamos
            lazyLoad: 'ondemand', // Carga las imágenes solo cuando se van a mostrar. Mejora el rendimiento.
        });
    }












    // Inicializar Slick Slider en Home

     $('.apartments-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: true,
        centerMode: false,
        initialSlide: 0,
        rtl: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1.4,
                    arrows: false
                }
            },
            {
                breakpoint: 1024, // Cuando la pantalla es MENOR de 1024px
                settings: {
                    slidesToShow: 1.2, // Muestra 1 slide a la vez, haciéndolo más ancho
                    // También puedes ajustar arrows, dots, etc., si es necesario
                    // arrows: false, // Por ejemplo, si quieres ocultar las flechas también
                }
            }
        ]
    });




    // Inicializar Slick Slider en Properties

    $('.featured-properties-slider').slick({
        dots: true, // Muestra la paginación
        arrows: true, // Muestra flechas de navegación
        infinite: true, // Loop infinito
        speed: 300, // Velocidad de transición
        slidesToShow: 1, // Número de slides visibles
        slidesToScroll: 1, // Número de slides a desplazar
        autoplay: true, // Autoplay
        autoplaySpeed: 2000, // Velocidad del autoplay
        prevArrow: '.featured-properties-prev', // Selector del botón "anterior"
        nextArrow: '.featured-properties-next', // Selector del botón "siguiente"
    });






// Inicializar slider SLICK SLIDER

    // Inicializar en la home SECTION THREE
    
    $('.property-slider').slick({
        dots: true, // Muestra puntos de navegación
        infinite: true, // Navegación infinita
        speed: 300, // Velocidad de transición
        slidesToShow: 1, // Muestra una imagen a la vez
        slidesToScroll: 1, // Desplaza una imagen a la vez
        autoplay: true, // Autoplay
        autoplaySpeed: 2000, // Velocidad del autoplay
        pauseOnHover: false, // Pausa al pasar el ratón
    });






    // SINGLE APPARTMENTS

    // Slider

    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');
    const slider = document.querySelector('.nmh-slider');

    if(prev) {
        prev.addEventListener('click', () => {
            slider.scrollLeft -= 300;
            console.log('youclick');
        });
    }

    if(next) {
        next.addEventListener('click', () => {
            slider.scrollLeft += 300;
        });
    }
   


    // Hide link tag if src image doesn't exist
    $('.link-for-lightbox').has('img[src=""]').hide();



    
    // SIMPLE LIGHT BOX - Remove Alert when it doesn't find an image

    if (typeof(console) !== "undefined") {
        window.alert = function(content) {
          try {
            window.console.log(content); /* send alerts to console.log if available. */
          } catch(e) {}
        }
      }




// Boton reservar apartamento en sigle appartments
    
      const button = document.getElementById('nm-button');

    // Verifica si el botón existe antes de continuar
    if (button) {
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    button.classList.add('fixed');
                } else {
                    button.classList.remove('fixed');
                }
            });
        };

        const observer = new IntersectionObserver(callback, options);
        observer.observe(button);
    }
    




    // MANEJADOR AJAX


        const mainContainer = $('#dynamic-content-area');
        const contentTarget = mainContainer.find('.dynamic-content__container');
        const imageTriggers = $('.section_two .image-hover-wrapper');

        imageTriggers.on('click', function() {
            const $this = $(this);
            const postSlug = $this.data('post-slug');

            if (!postSlug) {
                console.error('No se encontró el atributo data-post-slug.');
                return;
            }

            // Evitar múltiples clicks si ya se está cargando algo
            if (mainContainer.hasClass('is-loading')) {
                return;
            }
            
            imageTriggers.removeClass('active');
            $this.addClass('active');

            $.ajax({
                url: gph_ajax_object.ajax_url,
                type: 'POST',
                data: {
                    action: 'gph_cargar_contenido',
                    security: gph_ajax_object.nonce,
                    post_slug: postSlug
                },
                beforeSend: function() {
                    // 1. Añadimos la clase para iniciar el estado de carga (el CSS hace el resto)
                    mainContainer.addClass('is-loading');
                },
                success: function(response) {
                    if (response.success) {
                        contentTarget.html(response.data.html);
                    } else {
                        const errorMessage = response.data.html || '<p>Error al cargar el contenido.</p>';
                        contentTarget.html(errorMessage);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error de AJAX:', textStatus, errorThrown);
                    contentTarget.html('<div class="alert alert-danger">Ha ocurrido un problema de comunicación. Por favor, inténtelo de nuevo.</div>');
                },
                complete: function() {
                    // 2. Al terminar (éxito o error), quitamos la clase (el CSS hace el resto)
                    mainContainer.removeClass('is-loading');
                }
            });
        });
    





    //   SERVICES


    // Pop up

    $('.btn__abrir').on('click', function() { // Al clicar en el botón guardo su id en una variable. En html añado ese id como clase a cada pop-up y pop-up-wrap, con lo que puedo acceder a ellos individualment pasando la variable.
        var id = $(this).attr('id');
        
        $('.pop-up.' + id).addClass('show');
        $('.pop-up-wrap.' + id).addClass('show');
    });

    $('.close').click(function(){
        $('.pop-up').removeClass('show');
        $('.pop-up-wrap').removeClass('show');
    });
      




    // CONTACTO

    // Remove focus from elements

    $('#responsive-form').blur();
    $('.page-template-page-contacto input').blur();


    // Focus on first section

    $('.contact__hebe__hero').focus();





    // Traducciones que no son aplicables con el plugin por efecto css de movimiento
    
    var cadena = '&nbsp;&nbsp;WELFARE&nbsp;&nbsp;SERVICES';
    
    if ( $('body').hasClass('translatepress-en_GB') ) {
        
        $('.service__bar__content a:nth-child(1)').html('VIP&nbsp;TRANSPORT&nbsp;&nbsp;|');  
        $('.service__bar__content a:nth-child(4)').append("&nbsp;&nbsp;"); 
        $('.service__bar__content a:nth-child(5)').html(cadena);   
        
        $('.service__bar__content__reverse a:nth-child(1)').html('VIP&nbsp;TRANSPORT&nbsp;&nbsp;|');  
        $('.service__bar__content__reverse a:nth-child(4)').append("&nbsp;&nbsp;"); 
        $('.service__bar__content__reverse a:nth-child(5)').html(cadena);
        
    }






    
    
    // Copyright footer

    var date = new Date();
    var year = date.getFullYear();
    
    $('footer .current__year').html( year );









});