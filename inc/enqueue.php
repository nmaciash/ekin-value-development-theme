<?php
/**
 * enqueue.php — Registro y encolado de assets del tema
 *
 * Centraliza todos los wp_enqueue_style / wp_enqueue_script del tema.
 * Los assets condicionales (por template o página) se agrupan al final.
 */


// ── Fuentes del nuevo diseño (globales — header/footer usan Fraunces + Inter Tight) ──

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'nmh-fonts',
        'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght,SOFT@0,9..144,200..600,30..100;1,9..144,200..600,30..100&family=Inter+Tight:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap',
        array(),
        null
    );

} );


// ── Estilos globales ───────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'bootstrap-css',
        get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        array(),
        '5.3.5'
    );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array( 'bootstrap-css' ),
        '1.0'
    );

    wp_enqueue_style(
        'nmh-site',
        get_template_directory_uri() . '/assets/css/site.css',
        array( 'nmh-fonts' ),
        filemtime( get_template_directory() . '/assets/css/site.css' )
    );

} );


// ── Fuentes legacy (Century Gothic, Poppins, Montserrat, Roboto) ───────────

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style( 'century-gothic', get_template_directory_uri() . '/assets/fonts/century-gothic/stylesheet.css', array(), null );
    wp_enqueue_style( 'poppins',        get_template_directory_uri() . '/assets/fonts/poppins/stylesheet.css',        array(), null );
    wp_enqueue_style( 'montserrat',     get_template_directory_uri() . '/assets/fonts/montserrat/stylesheet.css',     array(), null );
    wp_enqueue_style( 'roboto',         get_template_directory_uri() . '/assets/fonts/roboto/stylesheet.css',         array(), null );

    wp_enqueue_style( 'material-icons', '//fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0', array(), null );

} );


// ── Scripts globales ───────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array( 'jquery' ),
        '5.3.5',
        true
    );

    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/assets/js/scripts.js',
        array( 'jquery', 'bootstrap-js' ),
        '1.0',
        true
    );

    wp_localize_script( 'custom-js', 'gph_ajax_object', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'gph_ajax_nonce' ),
    ) );

    wp_enqueue_script(
        'nmh-site-js',
        get_template_directory_uri() . '/assets/js/site.js',
        array(),
        filemtime( get_template_directory() . '/assets/js/site.js' ),
        true
    );

} );


// ── Slick Slider ───────────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style( 'slick-css',       'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css',       array(),              '1.8.1' );
    wp_enqueue_style( 'slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array( 'slick-css' ), '1.8.1' );

    wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array( 'jquery' ), '1.8.1', true );

} );


// ── Front-page ─────────────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {

    if ( ! is_front_page() ) {
        return;
    }

    wp_enqueue_style(
        'nmh-front-page',
        get_template_directory_uri() . '/assets/css/front-page.css',
        array( 'nmh-site' ),
        filemtime( get_template_directory() . '/assets/css/front-page.css' )
    );

    wp_enqueue_script( 'gsap',               'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',             array(),         '3.12.5', true );
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',   array( 'gsap' ), '3.12.5', true );

    wp_enqueue_script(
        'nmh-front-page-js',
        get_template_directory_uri() . '/assets/js/front-page.js',
        array(),
        filemtime( get_template_directory() . '/assets/js/front-page.js' ),
        true
    );

} );


// ── Method page ────────────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {

    if ( ! is_page_template( 'page-templates/page-method.php' ) ) {
        return;
    }

    wp_enqueue_style(
        'nmh-method',
        get_template_directory_uri() . '/assets/css/page-method.css',
        array( 'nmh-site' ),
        filemtime( get_template_directory() . '/assets/css/page-method.css' )
    );

} );


// ── Página de Contacto ─────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {

    if ( ! is_page_template( 'page-templates/page-contacto.php' ) ) {
        return;
    }

    wp_enqueue_style(
        'nmh-contacto',
        get_template_directory_uri() . '/assets/css/page-contacto.css',
        array( 'nmh-site' ),
        filemtime( get_template_directory() . '/assets/css/page-contacto.css' )
    );

} );


// ── Track Record ───────────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {

    if ( ! is_page_template( 'page-templates/page-track-record.php' ) ) {
        return;
    }

    wp_enqueue_style(
        'nmh-track-record',
        get_template_directory_uri() . '/assets/css/page-track-record.css',
        array( 'nmh-site' ),
        filemtime( get_template_directory() . '/assets/css/page-track-record.css' )
    );

} );


// ── Páginas legales ────────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {

    if ( ! is_page_template( 'page-templates/page-legal.php' ) ) {
        return;
    }

    wp_enqueue_style(
        'nmh-legal',
        get_template_directory_uri() . '/assets/css/page-legal.css',
        array( 'nmh-site' ),
        filemtime( get_template_directory() . '/assets/css/page-legal.css' )
    );

} );
