<?php
if ( ! function_exists( 'acf_add_local_field_group' ) ) {
    return;
}

// ─────────────────────────────────────────────
//  HELPER INTERNO: shorthand para crear un tab
// ─────────────────────────────────────────────
function nmh_acf_tab( $key, $label ) {
    return array(
        'key'       => $key,
        'label'     => $label,
        'name'      => '',
        'type'      => 'tab',
        'placement' => 'top',
    );
}


// ═══════════════════════════════════════════════════════════════
//  1. HOME (front-page)
// ═══════════════════════════════════════════════════════════════
acf_add_local_field_group( array(
    'key'   => 'group_home',
    'title' => 'Contenido · Home',
    'fields' => array(

        // ── TAB: Hero ──────────────────────────────────────────
        nmh_acf_tab( 'field_home_tab_hero', 'Hero' ),
        array(
            'key'           => 'field_home_hero_video',
            'label'         => 'Vídeo de portada',
            'name'          => 'home_hero_video',
            'type'          => 'url',
            'instructions'  => 'Ruta relativa al vídeo (p.ej. assets/video/video_portada.mp4) o URL externa.',
            'default_value' => 'assets/video/video_portada.mp4',
        ),
        array(
            'key'           => 'field_home_hero_title',
            'label'         => 'Título principal (H1)',
            'name'          => 'home_hero_title',
            'type'          => 'text',
            'default_value' => 'CONOCIMIENTO LOCAL · ALCANCE INTERNACIONAL',
        ),
        array(
            'key'           => 'field_home_hero_subtitle',
            'label'         => 'Subtítulo',
            'name'          => 'home_hero_subtitle',
            'type'          => 'text',
            'default_value' => 'Con más de 20 años de experiencia en la Costa del Sol.',
        ),

        // ── TAB: Servicios ─────────────────────────────────────
        nmh_acf_tab( 'field_home_tab_servicios', 'Servicios' ),
        array(
            'key'           => 'field_home_servicios_intro',
            'label'         => 'Texto introductorio',
            'name'          => 'home_servicios_intro',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => 'En Ekin Value Development entendemos que invertir en otro país requiere confianza, estrategia y un acompañamiento experto.',
        ),
        array( 'key' => 'field_home_s1_title', 'label' => 'Servicio 1 · Título', 'name' => 'home_s1_title', 'type' => 'text', 'default_value' => '1. ARQUITECTURA Y LICENCIAS' ),
        array( 'key' => 'field_home_s1_desc',  'label' => 'Servicio 1 · Descripción', 'name' => 'home_s1_desc', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Diseño arquitectónico con visión internacional y gestión completa de licencias urbanísticas.' ),
        array( 'key' => 'field_home_s2_title', 'label' => 'Servicio 2 · Título', 'name' => 'home_s2_title', 'type' => 'text', 'default_value' => '2. ASESORÍA LEGAL E INMIGRACIÓN' ),
        array( 'key' => 'field_home_s2_desc',  'label' => 'Servicio 2 · Descripción', 'name' => 'home_s2_desc', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Apoyo jurídico integral, desde la compra de propiedades hasta trámites de residencia y Golden Visa.' ),
        array( 'key' => 'field_home_s3_title', 'label' => 'Servicio 3 · Título', 'name' => 'home_s3_title', 'type' => 'text', 'default_value' => '3. COMERCIALIZACIÓN' ),
        array( 'key' => 'field_home_s3_desc',  'label' => 'Servicio 3 · Descripción', 'name' => 'home_s3_desc', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Diseñamos planes de venta y captación a medida.' ),
        array( 'key' => 'field_home_s4_title', 'label' => 'Servicio 4 · Título', 'name' => 'home_s4_title', 'type' => 'text', 'default_value' => '4. LIFESTYLE Y SERVICIOS PREMIUM' ),
        array( 'key' => 'field_home_s4_desc',  'label' => 'Servicio 4 · Descripción', 'name' => 'home_s4_desc', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Acompañamos al cliente más allá de la inversión: gestión de propiedades, concierge e integración local.' ),

        // ── TAB: Propiedades ───────────────────────────────────
        nmh_acf_tab( 'field_home_tab_propiedades', 'Propiedades' ),
        array(
            'key'           => 'field_home_prop_title',
            'label'         => 'Título de sección',
            'name'          => 'home_prop_title',
            'type'          => 'text',
            'default_value' => 'PROPIEDADES CON ALMA, ELEGIDAS CON CRITERIO',
        ),
        array(
            'key'           => 'field_home_prop_text',
            'label'         => 'Texto',
            'name'          => 'home_prop_text',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => 'Seleccionamos y desarrollamos propiedades con alto valor añadido en ubicaciones estratégicas de la Costa del Sol.',
        ),
        array(
            'key'           => 'field_home_prop_motto',
            'label'         => 'Frase destacada (motto)',
            'name'          => 'home_prop_motto',
            'type'          => 'text',
            'default_value' => 'Calidad, ubicación y visión: así elegimos cada propiedad.',
        ),

        // ── TAB: Imagen corporativa ────────────────────────────
        nmh_acf_tab( 'field_home_tab_corpimg', 'Imagen corporativa' ),
        array(
            'key'           => 'field_home_corp_image',
            'label'         => 'Imagen de equipo / corporativa',
            'name'          => 'home_corp_image',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
        ),

        // ── TAB: Somos servicio ────────────────────────────────
        nmh_acf_tab( 'field_home_tab_somos', 'Somos Servicio' ),
        array(
            'key'           => 'field_home_somos_title',
            'label'         => 'Título (H2)',
            'name'          => 'home_somos_title',
            'type'          => 'text',
            'default_value' => 'SOMOS SERVICIO DE ALTA CALIDAD PARA CLIENTES DE ALTO ESTÁNDAR',
        ),
        array( 'key' => 'field_home_somos_p1', 'label' => 'Párrafo 1', 'name' => 'home_somos_p1', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'En Ekin Value Development seleccionamos y desarrollamos propiedades con alto valor añadido en ubicaciones estratégicas de la Costa del Sol.' ),
        array( 'key' => 'field_home_somos_p2', 'label' => 'Párrafo 2', 'name' => 'home_somos_p2', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'En Ekin Value Development, combinamos más de 20 años de experiencia en arquitectura, desarrollo inmobiliario y gestión de proyectos.' ),
        array( 'key' => 'field_home_somos_bullet1', 'label' => 'Punto de lista 1', 'name' => 'home_somos_bullet1', 'type' => 'text', 'default_value' => 'CONFIANZA' ),
        array( 'key' => 'field_home_somos_bullet2', 'label' => 'Punto de lista 2', 'name' => 'home_somos_bullet2', 'type' => 'text', 'default_value' => 'VISIÓN ESTRATÉGICA' ),
        array( 'key' => 'field_home_somos_bullet3', 'label' => 'Punto de lista 3', 'name' => 'home_somos_bullet3', 'type' => 'text', 'default_value' => 'CERCANÍA REAL' ),
        array( 'key' => 'field_home_somos_bullet4', 'label' => 'Punto de lista 4', 'name' => 'home_somos_bullet4', 'type' => 'text', 'default_value' => 'EXCELENCIA EN EL DETALLE' ),
        array(
            'key'           => 'field_home_somos_image',
            'label'         => 'Imagen lateral',
            'name'          => 'home_somos_image',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
        ),

        // ── TAB: Vídeo costa ───────────────────────────────────
        nmh_acf_tab( 'field_home_tab_videocosta', 'Vídeo costa' ),
        array(
            'key'           => 'field_home_video_costa',
            'label'         => 'Vídeo de fondo (sección inferior)',
            'name'          => 'home_video_costa',
            'type'          => 'url',
            'instructions'  => 'Ruta relativa al vídeo (p.ej. assets/video/coast.mp4) o URL externa.',
            'default_value' => 'assets/video/coast.mp4',
        ),

        // ── TAB: Equipo ────────────────────────────────────────
        nmh_acf_tab( 'field_home_tab_equipo', 'Equipo' ),
        array( 'key' => 'field_home_m1_name',  'label' => 'Miembro 1 · Nombre', 'name' => 'home_m1_name', 'type' => 'text', 'default_value' => 'Rodrigo Camerano' ),
        array( 'key' => 'field_home_m1_role',  'label' => 'Miembro 1 · Cargo', 'name' => 'home_m1_role', 'type' => 'text', 'default_value' => 'Arquitecto y asesor inmobiliario' ),
        array( 'key' => 'field_home_m1_desc',  'label' => 'Miembro 1 · Descripción', 'name' => 'home_m1_desc', 'type' => 'textarea', 'rows' => 5, 'default_value' => 'Arquitecto y asesor inmobiliario con 11 años de experiencia internacional.' ),
        array( 'key' => 'field_home_m1_phone', 'label' => 'Miembro 1 · Teléfono', 'name' => 'home_m1_phone', 'type' => 'text', 'default_value' => '+34 672 972 590' ),
        array( 'key' => 'field_home_m1_email', 'label' => 'Miembro 1 · Email', 'name' => 'home_m1_email', 'type' => 'email', 'default_value' => 'info@ekinvaluedevelopment.com' ),
        array( 'key' => 'field_home_m1_photo', 'label' => 'Miembro 1 · Foto', 'name' => 'home_m1_photo', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'thumbnail' ),
        array( 'key' => 'field_home_m2_name',  'label' => 'Miembro 2 · Nombre', 'name' => 'home_m2_name', 'type' => 'text', 'default_value' => 'Celia Márquez' ),
        array( 'key' => 'field_home_m2_role',  'label' => 'Miembro 2 · Cargo', 'name' => 'home_m2_role', 'type' => 'text', 'default_value' => 'Técnico Superior en Comercio Internacional' ),
        array( 'key' => 'field_home_m2_desc',  'label' => 'Miembro 2 · Descripción', 'name' => 'home_m2_desc', 'type' => 'textarea', 'rows' => 5, 'default_value' => 'Técnico Superior en Comercio Internacional con más de 10 años de experiencia en el sector servicios.' ),
        array( 'key' => 'field_home_m2_phone', 'label' => 'Miembro 2 · Teléfono', 'name' => 'home_m2_phone', 'type' => 'text', 'default_value' => '+34 639 059 750' ),
        array( 'key' => 'field_home_m2_email', 'label' => 'Miembro 2 · Email', 'name' => 'home_m2_email', 'type' => 'email', 'default_value' => 'celia.marquez@gph-ip.com' ),
        array( 'key' => 'field_home_m2_photo', 'label' => 'Miembro 2 · Foto', 'name' => 'home_m2_photo', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'thumbnail' ),
        array(
            'key'           => 'field_home_team_philosophy',
            'label'         => 'Texto de filosofía del equipo',
            'name'          => 'home_team_philosophy',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => 'Nuestra filosofía es el alma de Ekin Value Development. Es lo que nos diferencia y lo que guía cada paso que damos.',
        ),

    ),
    'location' => array( array( array(
        'param'    => 'page_type',
        'operator' => '==',
        'value'    => 'front_page',
    ) ) ),
    'menu_order' => 0,
) );


// ═══════════════════════════════════════════════════════════════
//  2. NOSOTROS
// ═══════════════════════════════════════════════════════════════
acf_add_local_field_group( array(
    'key'   => 'group_nosotros',
    'title' => 'Contenido · Nosotros',
    'fields' => array(

        // ── TAB: Hero ──────────────────────────────────────────
        nmh_acf_tab( 'field_nos_tab_hero', 'Hero' ),
        array(
            'key'           => 'field_nos_hero_video',
            'label'         => 'Vídeo de portada',
            'name'          => 'nos_hero_video',
            'type'          => 'url',
            'default_value' => 'assets/video/video_portada.mp4',
        ),
        array(
            'key'           => 'field_nos_hero_title',
            'label'         => 'Título principal (H1)',
            'name'          => 'nos_hero_title',
            'type'          => 'text',
            'default_value' => 'EL EQUIPO QUE LO HACE POSIBLE',
        ),

        // ── TAB: Intro ─────────────────────────────────────────
        nmh_acf_tab( 'field_nos_tab_intro', 'Intro' ),
        array(
            'key'           => 'field_nos_intro_text',
            'label'         => 'Texto introductorio',
            'name'          => 'nos_intro_text',
            'type'          => 'textarea',
            'rows'          => 5,
            'default_value' => 'Venimos de mundos distintos - arquitectura internacional, gestión inmobiliaria y comercio global - pero compartimos una misma visión: crear proyectos con alma.',
        ),

        // ── TAB: Equipo ────────────────────────────────────────
        nmh_acf_tab( 'field_nos_tab_equipo', 'Equipo' ),
        array( 'key' => 'field_nos_m1_name',  'label' => 'Miembro 1 · Nombre', 'name' => 'nos_m1_name', 'type' => 'text', 'default_value' => 'Rodrigo Camerano' ),
        array( 'key' => 'field_nos_m1_role',  'label' => 'Miembro 1 · Cargo', 'name' => 'nos_m1_role', 'type' => 'text', 'default_value' => 'Arquitecto y asesor inmobiliario' ),
        array( 'key' => 'field_nos_m1_desc',  'label' => 'Miembro 1 · Descripción', 'name' => 'nos_m1_desc', 'type' => 'textarea', 'rows' => 5, 'default_value' => 'Arquitecto y asesor inmobiliario con 11 años de experiencia internacional.' ),
        array( 'key' => 'field_nos_m1_phone', 'label' => 'Miembro 1 · Teléfono', 'name' => 'nos_m1_phone', 'type' => 'text', 'default_value' => '+34 672 972 590' ),
        array( 'key' => 'field_nos_m1_email', 'label' => 'Miembro 1 · Email', 'name' => 'nos_m1_email', 'type' => 'email', 'default_value' => 'info@ekinvaluedevelopment.com' ),
        array( 'key' => 'field_nos_m1_photo', 'label' => 'Miembro 1 · Foto', 'name' => 'nos_m1_photo', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'thumbnail' ),
        array( 'key' => 'field_nos_m2_name',  'label' => 'Miembro 2 · Nombre', 'name' => 'nos_m2_name', 'type' => 'text', 'default_value' => 'Celia Márquez' ),
        array( 'key' => 'field_nos_m2_role',  'label' => 'Miembro 2 · Cargo', 'name' => 'nos_m2_role', 'type' => 'text', 'default_value' => 'Técnico Superior en Comercio Internacional' ),
        array( 'key' => 'field_nos_m2_desc',  'label' => 'Miembro 2 · Descripción', 'name' => 'nos_m2_desc', 'type' => 'textarea', 'rows' => 5, 'default_value' => 'Técnico Superior en Comercio Internacional con más de 10 años de experiencia.' ),
        array( 'key' => 'field_nos_m2_phone', 'label' => 'Miembro 2 · Teléfono', 'name' => 'nos_m2_phone', 'type' => 'text', 'default_value' => '+34 639 059 750' ),
        array( 'key' => 'field_nos_m2_email', 'label' => 'Miembro 2 · Email', 'name' => 'nos_m2_email', 'type' => 'email', 'default_value' => 'celia.marquez@gph-ip.com' ),
        array( 'key' => 'field_nos_m2_photo', 'label' => 'Miembro 2 · Foto', 'name' => 'nos_m2_photo', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'thumbnail' ),

    ),
    'location' => array( array( array(
        'param'    => 'page_template',
        'operator' => '==',
        'value'    => 'page-templates/page-nosotros.php',
    ) ) ),
    'menu_order' => 0,
) );


// ═══════════════════════════════════════════════════════════════
//  3. CONTACTO
// ═══════════════════════════════════════════════════════════════
acf_add_local_field_group( array(
    'key'   => 'group_contacto',
    'title' => 'Contenido · Contacto',
    'fields' => array(

        // ── TAB: Hero ──────────────────────────────────────────
        nmh_acf_tab( 'field_con_tab_hero', 'Hero' ),
        array(
            'key'           => 'field_con_hero_title',
            'label'         => 'Título principal (H1)',
            'name'          => 'con_hero_title',
            'type'          => 'text',
            'default_value' => 'Contáctanos',
        ),
        array(
            'key'           => 'field_con_hero_desc',
            'label'         => 'Descripción',
            'name'          => 'con_hero_desc',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'Escríbenos, llámanos o visítanos en Marbella: estamos disponibles de lunes a viernes, de 9:00 a 18:00 h.',
        ),
        array(
            'key'           => 'field_con_hero_bold',
            'label'         => 'Frase en negrita',
            'name'          => 'con_hero_bold',
            'type'          => 'text',
            'default_value' => 'Tu nuevo comienzo empieza aquí.',
        ),

        // ── TAB: Formulario ────────────────────────────────────
        nmh_acf_tab( 'field_con_tab_form', 'Formulario' ),
        array(
            'key'           => 'field_con_form_title',
            'label'         => 'Título sobre el formulario',
            'name'          => 'con_form_title',
            'type'          => 'text',
            'default_value' => '¿Cómo podemos ayudarte?',
        ),

    ),
    'location' => array( array( array(
        'param'    => 'page_template',
        'operator' => '==',
        'value'    => 'page-templates/page-contacto.php',
    ) ) ),
    'menu_order' => 0,
) );


// ═══════════════════════════════════════════════════════════════
//  4. PROPIETARIOS
// ═══════════════════════════════════════════════════════════════
acf_add_local_field_group( array(
    'key'   => 'group_propietarios',
    'title' => 'Contenido · Propietarios',
    'fields' => array(

        nmh_acf_tab( 'field_pro_tab_hero', 'Hero' ),
        array(
            'key'           => 'field_pro_hero_title',
            'label'         => 'Título principal (H1)',
            'name'          => 'pro_hero_title',
            'type'          => 'text',
            'default_value' => 'Bienvenido a Nuestra Plataforma',
        ),
        array(
            'key'           => 'field_pro_hero_desc',
            'label'         => 'Descripción',
            'name'          => 'pro_hero_desc',
            'type'          => 'text',
            'default_value' => 'Accede a tu área de cliente para gestionar tus inmuebles.',
        ),
        array(
            'key'           => 'field_pro_hero_cta_text',
            'label'         => 'Texto del botón CTA',
            'name'          => 'pro_hero_cta_text',
            'type'          => 'text',
            'default_value' => 'Acceder al Área de Cliente',
        ),
        array(
            'key'           => 'field_pro_hero_cta_url',
            'label'         => 'URL del botón CTA',
            'name'          => 'pro_hero_cta_url',
            'type'          => 'url',
            'default_value' => 'https://admin.octorate.com/octobook/login.xhtml',
        ),

    ),
    'location' => array( array( array(
        'param'    => 'page_template',
        'operator' => '==',
        'value'    => 'page-templates/page-propietarios.php',
    ) ) ),
    'menu_order' => 0,
) );
