<?php

/***************************/
//        ESTILOS
/***************************/
function theme_enqueue_styles() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css', 
        get_template_directory_uri() . '/assets/css/bootstrap.min.css', 
        array(), 
        '5.3.5', 
        'all'
    );

    // Estilos del tema
    wp_enqueue_style(
        'theme-style', 
        get_stylesheet_uri(), 
        array('bootstrap-css'), 
        '1.0', 
        'all'
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



/***************************/
//        SCRIPTS
/***************************/
function theme_enqueue_scripts() {
    // Bootstrap Bundle JS
    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.3.5', 
        true
    );

    // Custom JS (Tu script principal)
    wp_enqueue_script(
        'custom-js', // Este es el handle de tu script
        get_template_directory_uri() . '/assets/js/scripts.js',
        array('jquery', 'bootstrap-js'),
        '1.0',
        true
    );
    
    // Pasamos las variables de PHP a tu script 'custom-js' AQUÍ MISMO.
    wp_localize_script('custom-js', 'gph_ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('gph_ajax_nonce')
    ]);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts'); // Solo se necesita UNA llamada a la acción.


/**************************************************/
//   MANEJADOR DE LA LLAMADA AJAX
/*************************************************/
add_action('wp_ajax_nopriv_gph_cargar_contenido', 'gph_cargar_contenido_callback');
add_action('wp_ajax_gph_cargar_contenido', 'gph_cargar_contenido_callback');
function gph_cargar_contenido_callback() {
    // 1. Seguridad: Verificar el nonce.
    check_ajax_referer('gph_ajax_nonce', 'security');

    // 2. Validar y limpiar el slug recibido.
    if (!isset($_POST['post_slug']) || empty($_POST['post_slug'])) {
        wp_send_json_error('No se ha proporcionado un slug válido.');
    }
    // Sanitizamos como nombre de archivo para evitar ataques (Directory Traversal)
    $slug = sanitize_file_name($_POST['post_slug']);

    // 3. Construimos la ruta al archivo de plantilla parcial.
    $template_path = "template-parts/zona-inversor/{$slug}";

    // 4. Verificamos si el archivo existe para evitar errores.
    if (locate_template("{$template_path}.php")) {
        // Usamos output buffering para capturar el HTML de get_template_part
        ob_start();
        get_template_part($template_path);
        $html = ob_get_clean();
        
        wp_send_json_success(['html' => $html]);
    } else {
        // 5. Si el archivo no se encuentra, devolver un error.
        $error_message = '<div class="alert alert-warning">El archivo de contenido para "' . esc_html($slug) . '" no ha sido encontrado.</div>';
        wp_send_json_error(['html' => $error_message]);
    }
}




/*********************************************************/
//    Registrar Estilos y scripts para SLICK SLIDER
/*********************************************************/


function enqueue_slick_slider() {
    // Registrar y encolar Slick Slider CSS
    wp_enqueue_style(
        'slick-css',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css',
        array(), // Sin dependencias
        '1.8.1' // Versión de Slick Slider
    );

    wp_enqueue_style(
        'slick-theme-css',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css',
        array('slick-css'), // Depende de slick-css
        '1.8.1' // Versión de Slick Slider
    );

    // Registrar y encolar Slick Slider JS
    wp_enqueue_script(
        'slick-js',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
        array('jquery'), // Depende de jQuery
        '1.8.1', // Versión de Slick Slider
        true // Cargar en el footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_slick_slider');














/**************************************************/
//     SOPORTE COMPLETO DEL TEMA
/**************************************************/

function nm_combined_theme_setup() {

    load_theme_textdomain('nm-neo-selene', get_template_directory() . '/languages');

    // --- Soportes básicos ---
    
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('menus');

    add_theme_support('responsive-embeds');

    add_theme_support('customize-selective-refresh-widgets');
     
    // --- Soportes de funcionalidades extendidas ---

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support('custom-background');

    // --- Soporte para Plugins ---

    if (class_exists('WooCommerce')) {
        add_theme_support('woocommerce');
    }
}
add_action('after_setup_theme', 'nm_combined_theme_setup');






/***************************/
//          MENUS
/***************************/

function nmneoselene_menus() {
    register_nav_menus([
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu'),
    ]);
}
add_action('init', 'nmneoselene_menus');




/***************************/
//          WIDGETS
/***************************/


function mi_tema_widgets() {
    register_sidebar([
        'name' => __('Barra Lateral', 'mi-tema'),
        'id' => 'sidebar-1',
        'description' => __('Widgets para la barra lateral', 'mi-tema'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'mi_tema_widgets');






// Incluir Widgets
register_sidebar (

    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
    );


register_sidebar (

    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
    );












/***************************/
//        FUENTES
/***************************/


add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('century-gothic', get_template_directory_uri() . '/assets/fonts/century-gothic/stylesheet.css');
    wp_enqueue_style('poppins', get_template_directory_uri() . '/assets/fonts/poppins/stylesheet.css');
    wp_enqueue_style('montserrat', get_template_directory_uri() . '/assets/fonts/montserrat/stylesheet.css');
    wp_enqueue_style('roboto', get_template_directory_uri() . '/assets/fonts/roboto/stylesheet.css');

    wp_enqueue_style('material-icons', '//fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');
	});





/***************************/
//    CUSTOM POST TYPES
/***************************/

// Crear un Custom Post Type para los apartamentos
function crear_custom_post_type_apartments() {
    $labels = array(
        'name'               => 'Apartments',
        'singular_name'      => 'Apartment',
        'menu_name'          => 'Apartments',
        'name_admin_bar'     => 'Apartment',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Apartment',
        'new_item'           => 'New Apartment',
        'edit_item'          => 'Edit Apartment',
        'view_item'          => 'View Apartment',
        'all_items'          => 'All Apartments',
        'search_items'       => 'Search Apartments',
        'parent_item_colon'  => 'Parent Apartment:', 
        'not_found'          => 'No apartments found.', 
        'not_found_in_trash' => 'No apartments found in trash.' 
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'apartments', 'with_front' => false), // Evita conflictos
        'capability_type'    => 'post', 
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-building',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
    );

    register_post_type('apartments', $args); // Usamos plural para evitar conflictos
}
add_action('init', 'crear_custom_post_type_apartments');



/**************************************************/
//    TAXONOMÍA: Tipo de Propiedad (compartida)
/*************************************************/

function crear_taxonomia_tipo_propiedad() {
    $labels = array(
        'name'              => 'Property Types',
        'singular_name'     => 'Property Type',
        'search_items'      => 'Search Property Types',
        'all_items'         => 'All Property Types',
        'parent_item'       => 'Parent Property Type',
        'parent_item_colon' => 'Parent Property Type:',
        'edit_item'         => 'Edit Property Type',
        'update_item'       => 'Update Property Type',
        'add_new_item'      => 'Add New Property Type',
        'new_item_name'     => 'New Property Type Name',
        'menu_name'         => 'Property Types',
    );

    $args = array(
        'hierarchical'      => true, // Si es false, se comportará como etiquetas (tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'property-type', 'with_front' => false),
    );

    register_taxonomy('property_type', array('apartments'), $args); // Usamos 'apartments' en plural
}
add_action('init', 'crear_taxonomia_tipo_propiedad');


// 🔄 Forzar la actualización de las reglas de reescritura al activar el tema o plugin
function flush_rewrite_on_activation() {
    crear_custom_post_type_apartments();
    crear_taxonomia_tipo_propiedad();
    flush_rewrite_rules(); // IMPORTANTE: Refresca las reglas de URLs
}
register_activation_hook(__FILE__, 'flush_rewrite_on_activation');

// También al desactivar (buena práctica)
function flush_rewrite_on_deactivation() {
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'flush_rewrite_on_deactivation');





// Añadir metabox de características al CPT Apartments
function agregar_metabox_caracteristicas() {
    add_meta_box(
        'caracteristicas_apartamento',
        'Property Features',
        'mostrar_checkboxes_caracteristicas',
        'apartments',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'agregar_metabox_caracteristicas');

// Mostrar los checkboxes en el backend
function mostrar_checkboxes_caracteristicas($post) {
    $caracteristicas = array(
        'Lavadora',
        'Champú',
        'Climatización',
        'Sábanas',
        'Secador',
        'Sercicios cerca',
        'Cerca de tiendas y restaurantes',
        'Sala de cine',
        'Excelente estado',
        'Cocina totalmente equipada',
        'Totalmente amueblada',
        'Gimnasio',
        'SPA',
        'Solarium',
        'Vistas al mar',
        'Vistas a la montaña',
        'Recientemente renovado',                
        'Bodega'
    );

    $guardadas = get_post_meta($post->ID, '_caracteristicas_apartamento', true);
    if (!is_array($guardadas)) $guardadas = [];

    echo '<div>';
    foreach ($caracteristicas as $caracteristica) {
        $checked = in_array($caracteristica, $guardadas) ? 'checked' : '';
        echo '<label style="display:block; margin-bottom:4px;">
            <input type="checkbox" name="caracteristicas_apartamento[]" value="' . esc_attr($caracteristica) . '" ' . $checked . '> ' . esc_html($caracteristica) . '
        </label>';
    }
    echo '</div>';
}

// Guardar las características al guardar el post
function guardar_caracteristicas_apartamento($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['caracteristicas_apartamento'])) {
        delete_post_meta($post_id, '_caracteristicas_apartamento');
        return;
    }

    $valores = array_map('sanitize_text_field', $_POST['caracteristicas_apartamento']);
    update_post_meta($post_id, '_caracteristicas_apartamento', $valores);
}
add_action('save_post_apartments', 'guardar_caracteristicas_apartamento');


/**************************************************/
//    OPCIONES DEL PERSONALIZADOR (CUSTOMIZER)
/*************************************************/

// Define cuántas imágenes tendrá el slider. ¡Cambia este número cuando quieras!
define('MI_TEMA_SLIDER_COUNT', 5);

function mi_tema_customize_register($wp_customize) {
    // 1. Crear un nuevo Panel para agrupar las secciones del tema
    $wp_customize->add_panel('opciones_tema_panel', array(
        'title'       => __('Opciones del Tema', 'mi-tema'),
        'description' => 'Opciones para configurar el slider principal y otras características.',
        'priority'    => 10,
    ));

    // 2. Crear una Sección para el Slider de Imágenes
    $wp_customize->add_section('slider_principal_section', array(
        'title'    => __('Slider de Imágenes Principal', 'mi-tema'),
        'panel'    => 'opciones_tema_panel',
        'priority' => 10,
    ));

    // 3. Añadir campos (Settings y Controls) para cada imagen USANDO LA CONSTANTE
    for ($i = 1; $i <= MI_TEMA_SLIDER_COUNT; $i++) {
        // Setting: Guarda la URL de la imagen en la base de datos
        $wp_customize->add_setting("slider_image_$i", array(
            'default'           => '',
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw'
        ));

        // Control: Muestra el campo para subir la imagen en el personalizador
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "slider_image_control_$i", array(
            'label'    => __("Imagen $i del Slider", 'mi-tema'),
            'section'  => 'slider_principal_section',
            'settings' => "slider_image_$i",
        )));
    }
}
add_action('customize_register', 'mi_tema_customize_register');