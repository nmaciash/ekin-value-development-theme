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
        array( 'key' => 'field_home_hero_video',   'label' => 'Vídeo de portada',             'name' => 'home_hero_video',   'type' => 'url',  'instructions' => 'Ruta relativa o URL externa del vídeo MP4.', 'default_value' => 'assets/video/video_portada.mp4' ),
        array( 'key' => 'field_home_hero_eyebrow', 'label' => 'Eyebrow (texto superior)',      'name' => 'home_hero_eyebrow', 'type' => 'text', 'default_value' => 'Costa del Sol · Est. since 2004' ),
        array( 'key' => 'field_home_hero_status',  'label' => 'Indicador de estado activo',   'name' => 'home_hero_status',  'type' => 'text', 'default_value' => 'Active mandates · Q2 2026' ),
        array(
            'key'           => 'field_home_hero_rot1_text',
            'label'         => 'Rotación 1 · Texto',
            'name'          => 'home_hero_rot1_text',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => "One structure.\nFive disciplines.\nTotal control.",
            'instructions'  => 'Una línea = un bloque de texto animado.',
        ),
        array(
            'key'           => 'field_home_hero_rot1_em',
            'label'         => 'Rotación 1 · Palabras con diseño destacado',
            'name'          => 'home_hero_rot1_em',
            'type'          => 'text',
            'default_value' => 'Five',
            'instructions'  => 'Palabras o frases a poner en cursiva, separadas por |. Deben coincidir exactamente con el texto de arriba.',
        ),
        array(
            'key'           => 'field_home_hero_rot2_text',
            'label'         => 'Rotación 2 · Texto (lista)',
            'name'          => 'home_hero_rot2_text',
            'type'          => 'textarea',
            'rows'          => 6,
            'default_value' => "Broker access.\nArchitectural vision.\nLegal precision.\nDeveloper execution.\nMarketing positioning.",
            'instructions'  => 'Una línea = un bloque de texto animado.',
        ),
        array(
            'key'           => 'field_home_hero_rot2_em',
            'label'         => 'Rotación 2 · Palabras con diseño destacado',
            'name'          => 'home_hero_rot2_em',
            'type'          => 'text',
            'default_value' => '',
            'instructions'  => 'Palabras o frases a poner en cursiva, separadas por |.',
        ),
        array(
            'key'           => 'field_home_hero_rot3_text',
            'label'         => 'Rotación 3 · Texto',
            'name'          => 'home_hero_rot3_text',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => "We don't sell properties.\nWe are not intermediaries.\nWe define the right decisions.",
            'instructions'  => 'Una línea = un bloque de texto animado.',
        ),
        array(
            'key'           => 'field_home_hero_rot3_em',
            'label'         => 'Rotación 3 · Palabras con diseño destacado',
            'name'          => 'home_hero_rot3_em',
            'type'          => 'text',
            'default_value' => 'the right decisions.',
            'instructions'  => 'Palabras o frases a poner en cursiva, separadas por |.',
        ),
        array( 'key' => 'field_home_hero_btn1',     'label' => 'Botón principal · Texto', 'name' => 'home_hero_btn1',     'type' => 'text', 'default_value' => 'Explore the Method' ),
        array( 'key' => 'field_home_hero_btn1_url', 'label' => 'Botón principal · URL',   'name' => 'home_hero_btn1_url', 'type' => 'url',  'default_value' => '/method/' ),
        array( 'key' => 'field_home_hero_btn2',     'label' => 'Botón secundario · Texto','name' => 'home_hero_btn2',     'type' => 'text', 'default_value' => 'Start a Conversation' ),
        array( 'key' => 'field_home_hero_btn2_url', 'label' => 'Botón secundario · URL',  'name' => 'home_hero_btn2_url', 'type' => 'url',  'default_value' => '/contacto/' ),

        // ── TAB: Approach ──────────────────────────────────────
        // NOTA: el statement "From acquisition… to exit." es hardcoded — ver AGENTS.md
        nmh_acf_tab( 'field_home_tab_approach', 'Approach' ),
        array( 'key' => 'field_home_approach_body', 'label' => 'Párrafo de la sección', 'name' => 'home_approach_body', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'At EKIN, we identify, analyze, and structure high-value real estate opportunities across the Costa del Sol. From land with development potential to repositioned and ready-to-market assets — every opportunity is selected on a single principle: its ability to generate value through the right decisions.' ),

        // ── TAB: Capabilities ──────────────────────────────────
        nmh_acf_tab( 'field_home_tab_cap', 'Capabilities' ),
        array( 'key' => 'field_home_cap_h2',    'label' => 'Título de sección (H2)',         'name' => 'home_cap_h2',    'type' => 'textarea', 'rows' => 2, 'default_value' => 'More than real estate.' ),
        array( 'key' => 'field_home_cap_h2_em', 'label' => 'H2 · Palabras con diseño destacado', 'name' => 'home_cap_h2_em', 'type' => 'text', 'default_value' => 'real estate.', 'instructions' => 'Separadas por |. Coincidencia exacta. Nueva línea en el texto = salto de línea visible.' ),
        array( 'key' => 'field_home_cap_lede', 'label' => 'Párrafo introductorio',    'name' => 'home_cap_lede', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'We integrate architecture, development, and investment strategy into a single approach — combining technical expertise, legal understanding, and market-driven thinking to unlock each asset\'s full potential.' ),
        array( 'key' => 'field_home_s1_title', 'label' => 'Pilar 1 · Título',         'name' => 'home_s1_title', 'type' => 'text',     'default_value' => 'Architecture & Vision' ),
        array( 'key' => 'field_home_s1_desc',  'label' => 'Pilar 1 · Descripción',    'name' => 'home_s1_desc',  'type' => 'textarea', 'rows' => 3, 'default_value' => 'Architectural foresight that translates land and buildings into investable products with clear positioning.' ),
        array( 'key' => 'field_home_s2_title', 'label' => 'Pilar 2 · Título',         'name' => 'home_s2_title', 'type' => 'text',     'default_value' => 'Legal & Urbanism' ),
        array( 'key' => 'field_home_s2_desc',  'label' => 'Pilar 2 · Descripción',    'name' => 'home_s2_desc',  'type' => 'textarea', 'rows' => 3, 'default_value' => 'Licensing, due diligence and urban analysis. We secure the regulatory framework before capital moves.' ),
        array( 'key' => 'field_home_s3_title', 'label' => 'Pilar 3 · Título',         'name' => 'home_s3_title', 'type' => 'text',     'default_value' => 'Development Execution' ),
        array( 'key' => 'field_home_s3_desc',  'label' => 'Pilar 3 · Descripción',    'name' => 'home_s3_desc',  'type' => 'textarea', 'rows' => 3, 'default_value' => 'Project management end-to-end, from preliminary design to handover, with controlled budget and schedule.' ),
        array( 'key' => 'field_home_s4_title', 'label' => 'Pilar 4 · Título',         'name' => 'home_s4_title', 'type' => 'text',     'default_value' => 'Market Positioning' ),
        array( 'key' => 'field_home_s4_desc',  'label' => 'Pilar 4 · Descripción',    'name' => 'home_s4_desc',  'type' => 'textarea', 'rows' => 3, 'default_value' => 'Pricing strategy, brand assets and channel activation tailored for international buyers and partners.' ),

        // ── TAB: Method Teaser ──────────────────────────────────
        nmh_acf_tab( 'field_home_tab_method', 'Method Teaser' ),
        array( 'key' => 'field_home_method_h2',      'label' => 'Título de sección (H2)',         'name' => 'home_method_h2',      'type' => 'textarea', 'rows' => 2, 'default_value' => "Invest like a developer\nwithout being one." ),
        array( 'key' => 'field_home_method_h2_em',   'label' => 'H2 · Palabras con diseño destacado', 'name' => 'home_method_h2_em',   'type' => 'text', 'default_value' => 'developer', 'instructions' => 'Separadas por |. Coincidencia exacta. Nueva línea en el texto = salto de línea visible.' ),
        array( 'key' => 'field_home_method_lede',    'label' => 'Párrafo introductorio',    'name' => 'home_method_lede',    'type' => 'textarea', 'rows' => 3, 'default_value' => 'Five connected phases. One continuous decision chain. Each step is documented, reviewed and aligned with the asset\'s investment thesis — so capital, design and execution stay in lockstep.' ),
        array( 'key' => 'field_home_method_p1_title','label' => 'Fase P/01 · Título',       'name' => 'home_method_p1_title','type' => 'text',     'default_value' => 'Initial Consultancy & Research Mandate' ),
        array( 'key' => 'field_home_method_p1_body', 'label' => 'Fase P/01 · Descripción', 'name' => 'home_method_p1_body', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Investment thesis, location filters, target typologies and risk envelope agreed in writing.' ),
        array( 'key' => 'field_home_method_p2_title','label' => 'Fase P/02 · Título',       'name' => 'home_method_p2_title','type' => 'text',     'default_value' => 'Research Presentation & Due Diligence' ),
        array( 'key' => 'field_home_method_p2_body', 'label' => 'Fase P/02 · Descripción', 'name' => 'home_method_p2_body', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Shortlist of opportunities with technical, legal and commercial due diligence on each.' ),
        array( 'key' => 'field_home_method_p3_title','label' => 'Fase P/03 · Título',       'name' => 'home_method_p3_title','type' => 'text',     'default_value' => 'Negotiation & Asset Acquisition' ),
        array( 'key' => 'field_home_method_p3_body', 'label' => 'Fase P/03 · Descripción', 'name' => 'home_method_p3_body', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'We translate findings into renegotiated terms and structure the cleanest possible entry.' ),
        array( 'key' => 'field_home_method_p4_title','label' => 'Fase P/04 · Título',       'name' => 'home_method_p4_title','type' => 'text',     'default_value' => 'Licensing, Design & Planning' ),
        array( 'key' => 'field_home_method_p4_body', 'label' => 'Fase P/04 · Descripción', 'name' => 'home_method_p4_body', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Permitting, architectural development and planning calibrated to the investment timeline.' ),
        array( 'key' => 'field_home_method_p5_title','label' => 'Fase P/05 · Título',       'name' => 'home_method_p5_title','type' => 'text',     'default_value' => 'Technical Execution & Commercialization' ),
        array( 'key' => 'field_home_method_p5_body', 'label' => 'Fase P/05 · Descripción', 'name' => 'home_method_p5_body', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Site supervision, quality control, and the launch of a coordinated commercial plan.' ),
        array( 'key' => 'field_home_method_cta',     'label' => 'Botón "ver método" · Texto','name' => 'home_method_cta',    'type' => 'text',     'default_value' => 'See the full method' ),

        // ── TAB: Editorial ─────────────────────────────────────
        nmh_acf_tab( 'field_home_tab_editorial', 'Editorial' ),
        array( 'key' => 'field_home_ed_h2',      'label' => 'Título de sección (H2)',         'name' => 'home_ed_h2',      'type' => 'textarea', 'rows' => 2, 'default_value' => "Local knowledge.\nInternational perspective." ),
        array( 'key' => 'field_home_ed_h2_em',   'label' => 'H2 · Palabras con diseño destacado', 'name' => 'home_ed_h2_em',   'type' => 'text', 'default_value' => 'International', 'instructions' => 'Separadas por |. Coincidencia exacta. Nueva línea en el texto = salto de línea visible.' ),
        array( 'key' => 'field_home_ed_img_tag', 'label' => 'Etiqueta de imagen',     'name' => 'home_ed_img_tag', 'type' => 'text',     'default_value' => 'Plate · 002 / Costa del Sol' ),
        array( 'key' => 'field_home_somos_p1',   'label' => 'Párrafo 1',              'name' => 'home_somos_p1',   'type' => 'textarea', 'rows' => 3, 'default_value' => 'Deeply rooted in the Costa del Sol, we understand its urban dynamics, regulations and market behaviour — while operating with the standards and expectations of international investors.' ),
        array( 'key' => 'field_home_somos_p2',   'label' => 'Párrafo 2',              'name' => 'home_somos_p2',   'type' => 'textarea', 'rows' => 3, 'default_value' => 'Twenty years on the ground. A network of architects, lawyers, brokers and developers built one project at a time. We speak the investor\'s language because we have spoken it for two decades.' ),
        array( 'key' => 'field_home_somos_image','label' => 'Imagen lateral',          'name' => 'home_somos_image','type' => 'image',    'return_format' => 'url', 'preview_size' => 'medium' ),
        // Estadísticas — los decoradores tipográficos (+, €, M) son fijos en el template
        array( 'key' => 'field_home_stat1_num',  'label' => 'Stat 1 · Cifra',         'name' => 'home_stat1_num',  'type' => 'text',     'default_value' => '20',  'instructions' => 'Solo el número. El símbolo «+» es fijo en el diseño.' ),
        array( 'key' => 'field_home_stat1_label','label' => 'Stat 1 · Etiqueta',       'name' => 'home_stat1_label','type' => 'textarea', 'rows' => 2, 'default_value' => "years operating\nbetween Marbella & Sotogrande", 'instructions' => 'Una línea por línea visible.' ),
        array( 'key' => 'field_home_stat2_num',  'label' => 'Stat 2 · Cifra',         'name' => 'home_stat2_num',  'type' => 'text',     'default_value' => '5' ),
        array( 'key' => 'field_home_stat2_label','label' => 'Stat 2 · Etiqueta',       'name' => 'home_stat2_label','type' => 'textarea', 'rows' => 2, 'default_value' => "integrated\ndisciplines", 'instructions' => 'Una línea por línea visible.' ),
        array( 'key' => 'field_home_stat3_num',  'label' => 'Stat 3 · Cifra',         'name' => 'home_stat3_num',  'type' => 'text',     'default_value' => '240', 'instructions' => 'Solo el número. El prefijo «€» y el sufijo «M» son fijos en el diseño.' ),
        array( 'key' => 'field_home_stat3_label','label' => 'Stat 3 · Etiqueta',       'name' => 'home_stat3_label','type' => 'textarea', 'rows' => 2, 'default_value' => "asset value\nstructured to date", 'instructions' => 'Una línea por línea visible.' ),

        // ── TAB: Why Investors ─────────────────────────────────
        nmh_acf_tab( 'field_home_tab_why', 'Why Investors' ),
        array( 'key' => 'field_home_why_h2',    'label' => 'Título de sección (H2)',         'name' => 'home_why_h2',    'type' => 'textarea', 'rows' => 2, 'default_value' => 'Decisions, engineered.' ),
        array( 'key' => 'field_home_why_h2_em', 'label' => 'H2 · Palabras con diseño destacado', 'name' => 'home_why_h2_em', 'type' => 'text', 'default_value' => 'engineered.', 'instructions' => 'Separadas por |. Coincidencia exacta. Nueva línea en el texto = salto de línea visible.' ),
        array( 'key' => 'field_home_why_lede',  'label' => 'Párrafo introductorio',   'name' => 'home_why_lede',  'type' => 'textarea', 'rows' => 3, 'default_value' => 'Value is not extracted, it is engineered — through better decisions, earlier. We protect the downside by reading the asset before the market does.' ),
        array( 'key' => 'field_home_why1_tag',  'label' => 'Card 1 · Tag',            'name' => 'home_why1_tag',  'type' => 'text',     'default_value' => '01 · Risk' ),
        array( 'key' => 'field_home_why1_title','label' => 'Card 1 · Título',          'name' => 'home_why1_title','type' => 'text',     'default_value' => 'Risk Reduction' ),
        array( 'key' => 'field_home_why1_body', 'label' => 'Card 1 · Texto',          'name' => 'home_why1_body', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Full technical and legal due diligence allows us to identify risks early — and use them to renegotiate better entry conditions.' ),
        array( 'key' => 'field_home_why2_tag',  'label' => 'Card 2 · Tag',            'name' => 'home_why2_tag',  'type' => 'text',     'default_value' => '02 · Clarity' ),
        array( 'key' => 'field_home_why2_title','label' => 'Card 2 · Título',          'name' => 'home_why2_title','type' => 'text',     'default_value' => 'Predictability' ),
        array( 'key' => 'field_home_why2_body', 'label' => 'Card 2 · Texto',          'name' => 'home_why2_body', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Through deep analysis and structured processes, we replace uncertainty with clarity — aligning expectations with real outcomes.' ),
        array( 'key' => 'field_home_why3_tag',  'label' => 'Card 3 · Tag',            'name' => 'home_why3_tag',  'type' => 'text',     'default_value' => '03 · Structure' ),
        array( 'key' => 'field_home_why3_title','label' => 'Card 3 · Título',          'name' => 'home_why3_title','type' => 'text',     'default_value' => 'Structured Deals' ),
        array( 'key' => 'field_home_why3_body', 'label' => 'Card 3 · Texto',          'name' => 'home_why3_body', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'We design each transaction with the right legal, financial and operational framework — especially in complex acquisitions.' ),
        array( 'key' => 'field_home_why4_tag',  'label' => 'Card 4 · Tag',            'name' => 'home_why4_tag',  'type' => 'text',     'default_value' => '04 · Upside' ),
        array( 'key' => 'field_home_why4_title','label' => 'Card 4 · Título',          'name' => 'home_why4_title','type' => 'text',     'default_value' => 'Value Creation' ),
        array( 'key' => 'field_home_why4_body', 'label' => 'Card 4 · Texto',          'name' => 'home_why4_body', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Value is engineered through better decisions: from acquisition strategy to asset transformation and final exit.' ),

        // ── TAB: CTA ───────────────────────────────────────────
        nmh_acf_tab( 'field_home_tab_cta', 'CTA' ),
        array( 'key' => 'field_home_cta_h2',    'label' => 'Título (H2)',                    'name' => 'home_cta_h2',    'type' => 'textarea', 'rows' => 2, 'default_value' => "We define the right\ndecisions." ),
        array( 'key' => 'field_home_cta_h2_em', 'label' => 'H2 · Palabras con diseño destacado', 'name' => 'home_cta_h2_em', 'type' => 'text', 'default_value' => 'decisions.', 'instructions' => 'Separadas por |. Coincidencia exacta. Nueva línea en el texto = salto de línea visible.' ),
        array( 'key' => 'field_home_cta_sub',   'label' => 'Subtexto',               'name' => 'home_cta_sub',   'type' => 'textarea', 'rows' => 3, 'default_value' => 'Bring us a thesis, a piece of land, an underperforming asset, or a question. We respond with structured analysis within five working days.' ),
        array( 'key' => 'field_home_cta_btn1',  'label' => 'Botón · Texto',          'name' => 'home_cta_btn1',  'type' => 'text',     'default_value' => 'Start a Conversation' ),
        array( 'key' => 'field_home_cta_phone', 'label' => 'Teléfono',               'name' => 'home_cta_phone', 'type' => 'text',     'default_value' => '+34 672 972 590' ),
        array( 'key' => 'field_home_cta_office','label' => 'Bloque Oficina',          'name' => 'home_cta_office','type' => 'textarea', 'rows' => 2, 'default_value' => "Marbella · Costa del Sol\nBy appointment",           'instructions' => 'Una línea por línea visible.' ),
        array( 'key' => 'field_home_cta_hours', 'label' => 'Bloque Horario',         'name' => 'home_cta_hours', 'type' => 'textarea', 'rows' => 2, 'default_value' => "Mon\xe2\x80\x93Fri · 09:00\xe2\x80\x9318:00 CET\nWeekends on request", 'instructions' => 'Una línea por línea visible.' ),
        array( 'key' => 'field_home_cta_direct','label' => 'Bloque Contacto directo', 'name' => 'home_cta_direct','type' => 'textarea', 'rows' => 2, 'default_value' => "info@ekinvaluedevelopment.com\n+34 672 972 590",   'instructions' => 'Una línea por línea visible.' ),

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
        array(
            'key'          => 'field_con_form_shortcode',
            'label'        => 'Shortcode del formulario',
            'name'         => 'con_form_shortcode',
            'type'         => 'text',
            'instructions' => 'Pega aquí el shortcode del plugin de formulario, ej: [nmh-contact-forms]. Si está vacío, se muestra el formulario HTML de reserva.',
            'default_value' => '',
            'placeholder'  => '[nmh-contact-forms]',
        ),

        // ── TAB: Oficina ────────────────────────────────────────
        nmh_acf_tab( 'field_con_tab_office', 'Oficina' ),
        array(
            'key'           => 'field_con_address',
            'label'         => 'Dirección de la oficina',
            'name'          => 'con_address',
            'type'          => 'text',
            'default_value' => 'C. Marqués de Larios, 9, Distrito Centro, 29015 Málaga',
            'instructions'  => 'Aparece en el footer y en la página de contacto.',
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
//  4. METHOD
// ═══════════════════════════════════════════════════════════════
acf_add_local_field_group( array(
    'key'   => 'group_method',
    'title' => 'Contenido · Method',
    'fields' => array(

        // ── TAB: Hero ──────────────────────────────────────────
        nmh_acf_tab( 'field_met_tab_hero', 'Hero' ),
        array( 'key' => 'field_met_hero_eyebrow',  'label' => 'Eyebrow (texto superior)',         'name' => 'method_hero_eyebrow',  'type' => 'text',     'default_value' => '02 The Method' ),
        array( 'key' => 'field_met_hero_h1_pre',   'label' => 'H1 · Texto antes del énfasis',     'name' => 'method_hero_h1_pre',   'type' => 'text',     'default_value' => 'Invest like a' ),
        array( 'key' => 'field_met_hero_h1_em',    'label' => 'H1 · Palabra en cursiva (em)',     'name' => 'method_hero_h1_em',    'type' => 'text',     'default_value' => 'developer.' ),
        array( 'key' => 'field_met_hero_h1_small', 'label' => 'H1 · Subtexto (línea pequeña)',    'name' => 'method_hero_h1_small', 'type' => 'text',     'default_value' => 'Without being one.' ),
        array( 'key' => 'field_met_hero_lede',     'label' => 'Párrafo introductorio',            'name' => 'method_hero_lede',     'type' => 'textarea', 'rows' => 4, 'default_value' => 'EKIN is a multidisciplinary consultancy that transforms complex assets into high-value investments. Five connected phases — technical insight, legal structuring, strategic execution — that bridge the gap between architectural vision and commercial viability.' ),

        // ── TAB: Phases ────────────────────────────────────────
        nmh_acf_tab( 'field_met_tab_phases', 'Phases' ),
        array( 'key' => 'field_met_p1_title', 'label' => 'Fase 01 · Título',        'name' => 'method_p1_title', 'type' => 'textarea', 'rows' => 2, 'instructions' => 'Salto de línea = <br> visible.', 'default_value' => "Initial Consultancy\n& Research Mandate" ),
        array( 'key' => 'field_met_p1_body',  'label' => 'Fase 01 · Párrafo',       'name' => 'method_p1_body',  'type' => 'textarea', 'rows' => 4, 'default_value' => 'We begin by aligning on the investment thesis: target geography, asset typology, ticket size, return horizon and risk envelope. The mandate is documented and becomes the filter through which every subsequent opportunity is evaluated.' ),
        array( 'key' => 'field_met_p1_items', 'label' => 'Fase 01 · Ítems de lista','name' => 'method_p1_items', 'type' => 'textarea', 'rows' => 5, 'instructions' => 'Una línea = un ítem de lista.', 'default_value' => implode( "\n", array( 'Investor profile & thesis definition', 'Geographic and typological scoping', 'Risk & return parameters in writing', 'Target capital deployment timeline' ) ) ),
        array( 'key' => 'field_met_p2_title', 'label' => 'Fase 02 · Título',        'name' => 'method_p2_title', 'type' => 'textarea', 'rows' => 2, 'instructions' => 'Salto de línea = <br> visible.', 'default_value' => "Research Presentation\n& Due Diligence" ),
        array( 'key' => 'field_met_p2_body',  'label' => 'Fase 02 · Párrafo',       'name' => 'method_p2_body',  'type' => 'textarea', 'rows' => 4, 'default_value' => 'A curated shortlist with full technical, legal and commercial due diligence on each opportunity. Hidden risks are surfaced early — and translated into negotiation leverage rather than deal-breakers.' ),
        array( 'key' => 'field_met_p2_items', 'label' => 'Fase 02 · Ítems de lista','name' => 'method_p2_items', 'type' => 'textarea', 'rows' => 5, 'instructions' => 'Una línea = un ítem de lista.', 'default_value' => implode( "\n", array( 'Urban & regulatory feasibility studies', 'Land & property valuations and appraisals', 'Technical due diligence with field reports', 'Comparative market analysis & pricing' ) ) ),
        array( 'key' => 'field_met_p3_title', 'label' => 'Fase 03 · Título',        'name' => 'method_p3_title', 'type' => 'textarea', 'rows' => 2, 'instructions' => 'Salto de línea = <br> visible.', 'default_value' => "Negotiation\n& Asset Acquisition" ),
        array( 'key' => 'field_met_p3_body',  'label' => 'Fase 03 · Párrafo',       'name' => 'method_p3_body',  'type' => 'textarea', 'rows' => 4, 'default_value' => 'We translate findings into renegotiated terms, structuring the cleanest entry possible — fiscal, legal and operational. Acquisition is closed with the right vehicle and the right safeguards.' ),
        array( 'key' => 'field_met_p3_items', 'label' => 'Fase 03 · Ítems de lista','name' => 'method_p3_items', 'type' => 'textarea', 'rows' => 5, 'instructions' => 'Una línea = un ítem de lista.', 'default_value' => implode( "\n", array( 'Term-sheet drafting & counterparty negotiation', 'Acquisition vehicle structuring', 'KYC, AML and compliance verification', 'Notary signing & technical handover' ) ) ),
        array( 'key' => 'field_met_p4_title', 'label' => 'Fase 04 · Título',        'name' => 'method_p4_title', 'type' => 'textarea', 'rows' => 2, 'instructions' => 'Salto de línea = <br> visible.', 'default_value' => "Licensing, Design\n& Planning" ),
        array( 'key' => 'field_met_p4_body',  'label' => 'Fase 04 · Párrafo',       'name' => 'method_p4_body',  'type' => 'textarea', 'rows' => 4, 'default_value' => 'Permitting, architectural design and planning calibrated to the investment timeline — never the other way around. Building codes, accessibility and energy efficiency baked in from day one.' ),
        array( 'key' => 'field_met_p4_items', 'label' => 'Fase 04 · Ítems de lista','name' => 'method_p4_items', 'type' => 'textarea', 'rows' => 5, 'instructions' => 'Una línea = un ítem de lista.', 'default_value' => implode( "\n", array( 'Preliminary design & architectural proposals', 'Execution projects & technical documentation', 'Building permit management & administrative procedures', 'Regulatory compliance (codes, accessibility, energy)' ) ) ),
        array( 'key' => 'field_met_p5_title', 'label' => 'Fase 05 · Título',        'name' => 'method_p5_title', 'type' => 'textarea', 'rows' => 2, 'instructions' => 'Salto de línea = <br> visible.', 'default_value' => "Technical Execution\n& Commercialization" ),
        array( 'key' => 'field_met_p5_body',  'label' => 'Fase 05 · Párrafo',       'name' => 'method_p5_body',  'type' => 'textarea', 'rows' => 4, 'default_value' => 'Site supervision and quality control walk hand-in-hand with the launch of a coordinated commercial plan. From first stone to last signature, the asset is managed as a single integrated product.' ),
        array( 'key' => 'field_met_p5_items', 'label' => 'Fase 05 · Ítems de lista','name' => 'method_p5_items', 'type' => 'textarea', 'rows' => 5, 'instructions' => 'Una línea = un ítem de lista.', 'default_value' => implode( "\n", array( 'Project management & site supervision', 'Health, safety & quality coordination', 'Commercial branding & sales toolkit production', 'Channel activation & lead conversion' ) ) ),

        // ── TAB: Disciplines ───────────────────────────────────
        nmh_acf_tab( 'field_met_tab_disc', 'Disciplines' ),
        array( 'key' => 'field_met_disc_eyebrow', 'label' => 'Eyebrow',                              'name' => 'method_disc_eyebrow', 'type' => 'text',     'default_value' => 'Disciplines' ),
        array( 'key' => 'field_met_disc_h2',      'label' => 'Título de sección (H2)',               'name' => 'method_disc_h2',     'type' => 'textarea', 'rows' => 2, 'default_value' => "Your 360° architectural\n& business partner." ),
        array( 'key' => 'field_met_disc_h2_em',   'label' => 'H2 · Palabras con diseño destacado',  'name' => 'method_disc_h2_em',  'type' => 'text',     'default_value' => '360°', 'instructions' => 'Separadas por |. Coincidencia exacta con el texto de arriba.' ),
        array( 'key' => 'field_met_disc_intro',   'label' => 'Párrafo introductorio',               'name' => 'method_disc_intro',  'type' => 'textarea', 'rows' => 3, 'default_value' => 'One firm, four practices. We bridge architectural vision and commercial viability with data-driven analysis and execution designed for high-stakes decision-making.' ),
        array( 'key' => 'field_met_d1_tag',   'label' => 'Disciplina 01 · Tag',    'name' => 'method_d1_tag',   'type' => 'text',     'default_value' => '01 · Consultancy' ),
        array( 'key' => 'field_met_d1_title', 'label' => 'Disciplina 01 · Título', 'name' => 'method_d1_title', 'type' => 'text',     'default_value' => 'Feasibility & Strategy' ),
        array( 'key' => 'field_met_d1_items', 'label' => 'Disciplina 01 · Ítems', 'name' => 'method_d1_items', 'type' => 'textarea', 'rows' => 7, 'instructions' => 'Una línea = un ítem de lista.', 'default_value' => implode( "\n", array( 'Urban, legal and technical feasibility studies', 'Product and typology analysis tailored to target markets', 'Technical consulting for investors and developers', 'Land and property valuations and appraisals', 'Technical due diligence support', 'Development potential and land-use optimization studies' ) ) ),
        array( 'key' => 'field_met_d2_tag',   'label' => 'Disciplina 02 · Tag',    'name' => 'method_d2_tag',   'type' => 'text',     'default_value' => '02 · Architecture' ),
        array( 'key' => 'field_met_d2_title', 'label' => 'Disciplina 02 · Título', 'name' => 'method_d2_title', 'type' => 'text',     'default_value' => 'Design & Planning' ),
        array( 'key' => 'field_met_d2_items', 'label' => 'Disciplina 02 · Ítems', 'name' => 'method_d2_items', 'type' => 'textarea', 'rows' => 5, 'instructions' => 'Una línea = un ítem de lista.', 'default_value' => implode( "\n", array( 'Drafting of preliminary designs and architectural proposals', 'Development of execution projects', 'Building permit management and administrative procedures', 'Regulatory compliance (codes, accessibility, energy)' ) ) ),
        array( 'key' => 'field_met_d3_tag',   'label' => 'Disciplina 03 · Tag',    'name' => 'method_d3_tag',   'type' => 'text',     'default_value' => '03 · Construction' ),
        array( 'key' => 'field_met_d3_title', 'label' => 'Disciplina 03 · Título', 'name' => 'method_d3_title', 'type' => 'text',     'default_value' => 'Management & Construction' ),
        array( 'key' => 'field_met_d3_items', 'label' => 'Disciplina 03 · Ítems', 'name' => 'method_d3_items', 'type' => 'textarea', 'rows' => 5, 'instructions' => 'Una línea = un ítem de lista.', 'default_value' => implode( "\n", array( 'Project management and site supervision', 'Health and safety coordination', 'Quality control and execution oversight', 'Certification and technical schedule supervision' ) ) ),
        array( 'key' => 'field_met_d4_tag',   'label' => 'Disciplina 04 · Tag',    'name' => 'method_d4_tag',   'type' => 'text',     'default_value' => '04 · Closing' ),
        array( 'key' => 'field_met_d4_title', 'label' => 'Disciplina 04 · Título', 'name' => 'method_d4_title', 'type' => 'text',     'default_value' => 'Technical & Commercial Closing' ),
        array( 'key' => 'field_met_d4_items', 'label' => 'Disciplina 04 · Ítems', 'name' => 'method_d4_items', 'type' => 'textarea', 'rows' => 6, 'instructions' => 'Una línea = un ítem de lista.', 'default_value' => implode( "\n", array( 'Final legalizations and project close-out', 'Client handover support', 'Final state reports and "As-Built" technical documentation', 'Post-construction valuations for sale or rental', 'Comprehensive commercialization and sales support' ) ) ),

        // ── TAB: CTA ───────────────────────────────────────────
        nmh_acf_tab( 'field_met_tab_cta', 'CTA' ),
        array( 'key' => 'field_met_cta_eyebrow',  'label' => 'Eyebrow',                            'name' => 'method_cta_eyebrow',  'type' => 'text',     'default_value' => 'Begin' ),
        array( 'key' => 'field_met_cta_h2',       'label' => 'Título (H2)',                        'name' => 'method_cta_h2',       'type' => 'textarea', 'rows' => 2, 'default_value' => 'Bring us a thesis.' ),
        array( 'key' => 'field_met_cta_h2_em',    'label' => 'H2 · Palabras con diseño destacado','name' => 'method_cta_h2_em',    'type' => 'text',     'default_value' => 'thesis.', 'instructions' => 'Separadas por |. Coincidencia exacta.' ),
        array( 'key' => 'field_met_cta_sub',      'label' => 'Subtexto',                          'name' => 'method_cta_sub',      'type' => 'textarea', 'rows' => 2, 'default_value' => 'We respond with a structured analysis within five working days — no obligation.' ),
        array( 'key' => 'field_met_cta_btn1',     'label' => 'Botón principal · Texto',           'name' => 'method_cta_btn1',     'type' => 'text',     'default_value' => 'Start a Conversation' ),
        array( 'key' => 'field_met_cta_btn1_url', 'label' => 'Botón principal · URL',             'name' => 'method_cta_btn1_url', 'type' => 'url',      'default_value' => '', 'instructions' => 'Vacío = URL automática de la página Contact.' ),
        array( 'key' => 'field_met_cta_btn2',     'label' => 'Botón secundario · Texto',          'name' => 'method_cta_btn2',     'type' => 'text',     'default_value' => 'Investor view' ),
        array( 'key' => 'field_met_cta_btn2_url', 'label' => 'Botón secundario · URL',            'name' => 'method_cta_btn2_url', 'type' => 'url',      'default_value' => '', 'instructions' => 'Vacío = URL automática de la página Investor.' ),

    ),
    'location' => array( array( array(
        'param'    => 'page_template',
        'operator' => '==',
        'value'    => 'page-templates/page-method.php',
    ) ) ),
    'menu_order' => 0,
) );


// ═══════════════════════════════════════════════════════════════
//  5. PROPIETARIOS
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


// ═══════════════════════════════════════════════════════════════
//  TRACK RECORD
// ═══════════════════════════════════════════════════════════════
acf_add_local_field_group( array(
    'key'   => 'group_track_record',
    'title' => 'Contenido · Track Record',
    'fields' => array(

        // ── TAB: Hero ──────────────────────────────────────────
        nmh_acf_tab( 'field_tr_tab_hero', 'Hero' ),
        array( 'key' => 'field_tr_hero_eyebrow', 'label' => 'Eyebrow',       'name' => 'tr_hero_eyebrow', 'type' => 'text',     'default_value' => '03 Track Record' ),
        array( 'key' => 'field_tr_hero_h1',      'label' => 'Título H1',     'name' => 'tr_hero_h1',      'type' => 'text',     'default_value' => 'Our Track' ),
        array( 'key' => 'field_tr_hero_sub',     'label' => 'Subtítulo',     'name' => 'tr_hero_sub',     'type' => 'text',     'default_value' => 'Some Testimonials' ),
        array( 'key' => 'field_tr_hero_lede',    'label' => 'Texto intro',   'name' => 'tr_hero_lede',    'type' => 'textarea', 'rows' => 2, 'default_value' => 'Real outcomes, real people. A selection of cases where our method made the difference.' ),

        // ── TAB: Caso 1 ────────────────────────────────────────
        nmh_acf_tab( 'field_tr_tab_c1', 'Caso 1' ),
        array( 'key' => 'field_tr_c1_title',   'label' => 'Título',    'name' => 'tr_c1_title',   'type' => 'text',     'default_value' => 'Beyond Due Diligence: A Masterclass in Ethical Advisory and Regulatory Strategy' ),
        array( 'key' => 'field_tr_c1_image',   'label' => 'Imagen',    'name' => 'tr_c1_image',   'type' => 'image',    'return_format' => 'array', 'preview_size' => 'medium' ),
        array( 'key' => 'field_tr_c1_content', 'label' => 'Testimonio','name' => 'tr_c1_content', 'type' => 'textarea', 'rows' => 12, 'default_value' => '' ),
        array( 'key' => 'field_tr_c1_author',  'label' => 'Autor',     'name' => 'tr_c1_author',  'type' => 'text',     'default_value' => 'Sebastian H.' ),
        array( 'key' => 'field_tr_c1_role',    'label' => 'Cargo',     'name' => 'tr_c1_role',    'type' => 'text',     'default_value' => 'CEO, German Engineering Firm' ),

        // ── TAB: Caso 2 ────────────────────────────────────────
        nmh_acf_tab( 'field_tr_tab_c2', 'Caso 2' ),
        array( 'key' => 'field_tr_c2_title',   'label' => 'Título',    'name' => 'tr_c2_title',   'type' => 'text',     'default_value' => 'The local embassador. The importance of a local partner for an Expat investor.' ),
        array( 'key' => 'field_tr_c2_image',   'label' => 'Imagen',    'name' => 'tr_c2_image',   'type' => 'image',    'return_format' => 'array', 'preview_size' => 'medium' ),
        array( 'key' => 'field_tr_c2_content', 'label' => 'Testimonio','name' => 'tr_c2_content', 'type' => 'textarea', 'rows' => 12, 'default_value' => '' ),
        array( 'key' => 'field_tr_c2_author',  'label' => 'Autor',     'name' => 'tr_c2_author',  'type' => 'text',     'default_value' => '' ),
        array( 'key' => 'field_tr_c2_role',    'label' => 'Cargo',     'name' => 'tr_c2_role',    'type' => 'text',     'default_value' => '' ),

        // ── TAB: Caso 3 ────────────────────────────────────────
        nmh_acf_tab( 'field_tr_tab_c3', 'Caso 3' ),
        array( 'key' => 'field_tr_c3_title',   'label' => 'Título',    'name' => 'tr_c3_title',   'type' => 'text',     'default_value' => 'Boots on the Ground: How Ekin Secured an 11% Discount and Saved a Mortgage During the August Shutdown.' ),
        array( 'key' => 'field_tr_c3_image',   'label' => 'Imagen',    'name' => 'tr_c3_image',   'type' => 'image',    'return_format' => 'array', 'preview_size' => 'medium' ),
        array( 'key' => 'field_tr_c3_content', 'label' => 'Testimonio','name' => 'tr_c3_content', 'type' => 'textarea', 'rows' => 12, 'default_value' => '' ),
        array( 'key' => 'field_tr_c3_author',  'label' => 'Autor',     'name' => 'tr_c3_author',  'type' => 'text',     'default_value' => '' ),
        array( 'key' => 'field_tr_c3_role',    'label' => 'Cargo',     'name' => 'tr_c3_role',    'type' => 'text',     'default_value' => '' ),

    ),
    'location' => array( array( array(
        'param'    => 'page_template',
        'operator' => '==',
        'value'    => 'page-templates/page-track-record.php',
    ) ) ),
    'menu_order' => 0,
) );
