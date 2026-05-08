<?php
/**
 * elementor-cleaner.php — Silencia Elementor fuera del editor
 *
 * Desencola estilos y scripts de Elementor en páginas que NO están
 * construidas con Elementor. Mejora el rendimiento en páginas del tema.
 */

add_action( 'wp_enqueue_scripts', function () {

    if ( ! defined( 'ELEMENTOR_VERSION' ) ) {
        return;
    }

    // No actuar en preview ni en el editor de Elementor
    if ( isset( $_GET['elementor-preview'] ) ) {
        return;
    }

    $post_id = get_the_ID();

    if ( ! $post_id ) {
        return;
    }

    $built_with_elementor = false;

    if ( class_exists( '\Elementor\Plugin' ) && isset( \Elementor\Plugin::$instance->db ) ) {
        $built_with_elementor = \Elementor\Plugin::$instance->db->is_built_with_elementor( $post_id );
    }

    if ( $built_with_elementor ) {
        return;
    }

    $styles_to_remove = array(
        'elementor-icons',
        'elementor-frontend',
        'elementor-global',
        'elementor-post-' . $post_id,
        'elementor-common',
        'e-animations',
        'e-gallery',
        'wp-mediaelement',
    );

    $scripts_to_remove = array(
        'elementor-frontend',
        'elementor-webpack-runtime',
        'elementor-common',
        'elementor-common-modules',
        'elementor-dialog',
        'elementor-app',
    );

    foreach ( $styles_to_remove as $handle ) {
        wp_dequeue_style( $handle );
        wp_deregister_style( $handle );
    }

    foreach ( $scripts_to_remove as $handle ) {
        wp_dequeue_script( $handle );
        wp_deregister_script( $handle );
    }

}, 999 );
