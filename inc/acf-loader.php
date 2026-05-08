<?php
if ( ! function_exists( 'acf' ) ) {
    return;
}

// Helper global: obtiene un campo ACF con fallback seguro
if ( ! function_exists( 'nmh_get_acf_field' ) ) {
    function nmh_get_acf_field( $field_name, $default = '' ) {
        $value = get_field( $field_name );
        return ( $value !== null && $value !== '' ) ? $value : $default;
    }
}

// Cargar definición de campos
require_once get_template_directory() . '/inc/acf-fields.php';

// Control de visibilidad de la UI de ACF en el admin
add_filter( 'acf/settings/show_admin', function() {
    return getenv( 'ACF_SHOW_ADMIN' ) === 'true';
} );
