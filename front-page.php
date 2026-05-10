<?php
get_header();

$tdir = get_stylesheet_directory_uri();

// Genera los <span class="line"> de una rotación del hero.
// $em_raw: palabras/frases separadas por | que se envuelven en <em> si coinciden exactamente.
function nmh_hero_rot_lines( $text, $em_raw ) {
    $lines = array_filter( array_map( 'trim', explode( "\n", (string) $text ) ) );
    $ems   = array_filter( array_map( 'trim', explode( '|', (string) $em_raw ) ) );
    $out   = '';
    foreach ( $lines as $line ) {
        $safe = esc_html( $line );
        foreach ( $ems as $em ) {
            $safe_em = esc_html( $em );
            if ( $safe_em !== '' ) {
                $safe = str_replace( $safe_em, '<em>' . $safe_em . '</em>', $safe );
            }
        }
        $out .= '<span class="line">' . $safe . '</span>' . "\n";
    }
    return $out;
}

// Aplica <em> a palabras/frases separadas por | y convierte \n en <br>.
function nmh_h2_display( $text, $em_raw ) {
    $safe = esc_html( (string) $text );
    foreach ( array_filter( array_map( 'trim', explode( '|', (string) $em_raw ) ) ) as $em ) {
        $safe_em = esc_html( $em );
        if ( $safe_em !== '' ) {
            $safe = str_replace( $safe_em, '<em>' . $safe_em . '</em>', $safe );
        }
    }
    return nl2br( $safe );
}

// ── Hero ──────────────────────────────────────────────────────────────────────
$hero_video   = nmh_get_acf_field( 'home_hero_video',   $tdir . '/assets/video/video_portada.mp4' );
$hero_eyebrow = nmh_get_acf_field( 'home_hero_eyebrow', 'Costa del Sol · Est. since 2004' );
$hero_status  = nmh_get_acf_field( 'home_hero_status',  'Active mandates · Q2 2026' );
$hero_btn1     = nmh_get_acf_field( 'home_hero_btn1',     'Explore the Method' );
$hero_btn1_url = nmh_get_acf_field( 'home_hero_btn1_url', home_url( '/method/' ) );
$hero_btn2     = nmh_get_acf_field( 'home_hero_btn2',     'Start a Conversation' );
$hero_btn2_url = nmh_get_acf_field( 'home_hero_btn2_url', home_url( '/contacto/' ) );
$rot1_text    = nmh_get_acf_field( 'home_hero_rot1_text', "One structure.\nFive disciplines.\nTotal control." );
$rot1_em      = nmh_get_acf_field( 'home_hero_rot1_em',   'Five' );
$rot2_text    = nmh_get_acf_field( 'home_hero_rot2_text', "Broker access.\nArchitectural vision.\nLegal precision.\nDeveloper execution.\nMarketing positioning." );
$rot2_em      = nmh_get_acf_field( 'home_hero_rot2_em',   '' );
$rot3_text    = nmh_get_acf_field( 'home_hero_rot3_text', "We don't sell properties.\nWe are not intermediaries.\nWe define the right decisions." );
$rot3_em      = nmh_get_acf_field( 'home_hero_rot3_em',   'the right decisions.' );

// ── Approach ──────────────────────────────────────────────────────────────────
// El statement "From acquisition… to exit." es hardcoded — ver AGENTS.md
$approach_body = nmh_get_acf_field( 'home_approach_body', 'At EKIN, we identify, analyze, and structure high-value real estate opportunities across the Costa del Sol. From land with development potential to repositioned and ready-to-market assets — every opportunity is selected on a single principle: its ability to generate value through the right decisions.' );

// ── Capabilities / Pillars ────────────────────────────────────────────────────
$cap_h2    = nmh_get_acf_field( 'home_cap_h2',    'More than real estate.' );
$cap_h2_em = nmh_get_acf_field( 'home_cap_h2_em', 'real estate.' );
$cap_lede = nmh_get_acf_field( 'home_cap_lede', 'We integrate architecture, development, and investment strategy into a single approach — combining technical expertise, legal understanding, and market-driven thinking to unlock each asset\'s full potential.' );
$s1_title = nmh_get_acf_field( 'home_s1_title', 'Architecture &amp; Vision' );
$s1_desc  = nmh_get_acf_field( 'home_s1_desc',  'Architectural foresight that translates land and buildings into investable products with clear positioning.' );
$s2_title = nmh_get_acf_field( 'home_s2_title', 'Legal &amp; Urbanism' );
$s2_desc  = nmh_get_acf_field( 'home_s2_desc',  'Licensing, due diligence and urban analysis. We secure the regulatory framework before capital moves.' );
$s3_title = nmh_get_acf_field( 'home_s3_title', 'Development Execution' );
$s3_desc  = nmh_get_acf_field( 'home_s3_desc',  'Project management end-to-end, from preliminary design to handover, with controlled budget and schedule.' );
$s4_title = nmh_get_acf_field( 'home_s4_title', 'Market Positioning' );
$s4_desc  = nmh_get_acf_field( 'home_s4_desc',  'Pricing strategy, brand assets and channel activation tailored for international buyers and partners.' );

// ── Method Teaser ─────────────────────────────────────────────────────────────
$method_h2       = nmh_get_acf_field( 'home_method_h2',       "Invest like a developer\nwithout being one." );
$method_h2_em    = nmh_get_acf_field( 'home_method_h2_em',    'developer' );
$method_lede     = nmh_get_acf_field( 'home_method_lede',     'Five connected phases. One continuous decision chain. Each step is documented, reviewed and aligned with the asset\'s investment thesis — so capital, design and execution stay in lockstep.' );
$method_p1_title = nmh_get_acf_field( 'home_method_p1_title', 'Initial Consultancy & Research Mandate' );
$method_p1_body  = nmh_get_acf_field( 'home_method_p1_body',  'Investment thesis, location filters, target typologies and risk envelope agreed in writing.' );
$method_p2_title = nmh_get_acf_field( 'home_method_p2_title', 'Research Presentation & Due Diligence' );
$method_p2_body  = nmh_get_acf_field( 'home_method_p2_body',  'Shortlist of opportunities with technical, legal and commercial due diligence on each.' );
$method_p3_title = nmh_get_acf_field( 'home_method_p3_title', 'Negotiation & Asset Acquisition' );
$method_p3_body  = nmh_get_acf_field( 'home_method_p3_body',  'We translate findings into renegotiated terms and structure the cleanest possible entry.' );
$method_p4_title = nmh_get_acf_field( 'home_method_p4_title', 'Licensing, Design & Planning' );
$method_p4_body  = nmh_get_acf_field( 'home_method_p4_body',  'Permitting, architectural development and planning calibrated to the investment timeline.' );
$method_p5_title = nmh_get_acf_field( 'home_method_p5_title', 'Technical Execution & Commercialization' );
$method_p5_body  = nmh_get_acf_field( 'home_method_p5_body',  'Site supervision, quality control, and the launch of a coordinated commercial plan.' );
$method_cta      = nmh_get_acf_field( 'home_method_cta',      'See the full method' );

// ── Editorial ("Where we operate") ───────────────────────────────────────────
$ed_h2       = nmh_get_acf_field( 'home_ed_h2',      "Local knowledge.\nInternational perspective." );
$ed_h2_em    = nmh_get_acf_field( 'home_ed_h2_em',  'International' );
$ed_img_tag  = nmh_get_acf_field( 'home_ed_img_tag', 'Plate · 002 / Costa del Sol' );
$ed_p1       = nmh_get_acf_field( 'home_somos_p1',   'Deeply rooted in the Costa del Sol, we understand its urban dynamics, regulations and market behaviour — while operating with the standards and expectations of international investors.' );
$ed_p2       = nmh_get_acf_field( 'home_somos_p2',   'Twenty years on the ground. A network of architects, lawyers, brokers and developers built one project at a time. We speak the investor\'s language because we have spoken it for two decades.' );
$ed_img      = nmh_get_acf_field( 'home_somos_image', get_template_directory_uri() . '/assets/images/plate-002-costa-sol.jpg' );
// Decoradores fijos: «+» en stat1, «€» y «M» en stat3 — ver AGENTS.md
$stat1_num   = nmh_get_acf_field( 'home_stat1_num',   '20' );
$stat1_label = nmh_get_acf_field( 'home_stat1_label', "years operating\nbetween Marbella & Sotogrande" );
$stat2_num   = nmh_get_acf_field( 'home_stat2_num',   '5' );
$stat2_label = nmh_get_acf_field( 'home_stat2_label', "integrated\ndisciplines" );
$stat3_num   = nmh_get_acf_field( 'home_stat3_num',   '240' );
$stat3_label = nmh_get_acf_field( 'home_stat3_label', "asset value\nstructured to date" );

// ── Why Investors ─────────────────────────────────────────────────────────────
$why_h2     = nmh_get_acf_field( 'home_why_h2',    'Decisions, engineered.' );
$why_h2_em  = nmh_get_acf_field( 'home_why_h2_em', 'engineered.' );
$why_lede   = nmh_get_acf_field( 'home_why_lede',  'Value is not extracted, it is engineered — through better decisions, earlier. We protect the downside by reading the asset before the market does.' );
$why1_tag   = nmh_get_acf_field( 'home_why1_tag',   '01 · Risk' );
$why1_title = nmh_get_acf_field( 'home_why1_title', 'Risk Reduction' );
$why1_body  = nmh_get_acf_field( 'home_why1_body',  'Full technical and legal due diligence allows us to identify risks early — and use them to renegotiate better entry conditions.' );
$why2_tag   = nmh_get_acf_field( 'home_why2_tag',   '02 · Clarity' );
$why2_title = nmh_get_acf_field( 'home_why2_title', 'Predictability' );
$why2_body  = nmh_get_acf_field( 'home_why2_body',  'Through deep analysis and structured processes, we replace uncertainty with clarity — aligning expectations with real outcomes.' );
$why3_tag   = nmh_get_acf_field( 'home_why3_tag',   '03 · Structure' );
$why3_title = nmh_get_acf_field( 'home_why3_title', 'Structured Deals' );
$why3_body  = nmh_get_acf_field( 'home_why3_body',  'We design each transaction with the right legal, financial and operational framework — especially in complex acquisitions.' );
$why4_tag   = nmh_get_acf_field( 'home_why4_tag',   '04 · Upside' );
$why4_title = nmh_get_acf_field( 'home_why4_title', 'Value Creation' );
$why4_body  = nmh_get_acf_field( 'home_why4_body',  'Value is engineered through better decisions: from acquisition strategy to asset transformation and final exit.' );

// ── CTA ───────────────────────────────────────────────────────────────────────
$cta_h2     = nmh_get_acf_field( 'home_cta_h2',    "We define the right\ndecisions." );
$cta_h2_em  = nmh_get_acf_field( 'home_cta_h2_em', 'decisions.' );
$cta_sub    = nmh_get_acf_field( 'home_cta_sub',   'Bring us a thesis, a piece of land, an underperforming asset, or a question. We respond with structured analysis within five working days.' );
$cta_btn1   = nmh_get_acf_field( 'home_cta_btn1',  'Start a Conversation' );
$cta_phone  = nmh_get_acf_field( 'home_cta_phone', '+34 672 972 590' );
$cta_office = nmh_get_acf_field( 'home_cta_office', "Marbella · Costa del Sol\nBy appointment" );
$cta_hours  = nmh_get_acf_field( 'home_cta_hours',  "Mon\xe2\x80\x93Fri · 09:00\xe2\x80\x9318:00 CET\nWeekends on request" );
$cta_direct = nmh_get_acf_field( 'home_cta_direct', "info@ekinvaluedevelopment.com\n+34 672 972 590" );
?>

<main id="home-page">

    <!-- ── HERO ──────────────────────────────────────────── -->
    <section class="hero" id="hero">

        <div class="hero-media" aria-hidden="true">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="<?php echo esc_url( $hero_video ); ?>" type="video/mp4">
            </video>
            <div class="hero-overlay"></div>
            <div class="hero-grain"></div>
            <div class="hero-vignette"></div>
        </div>

        <div class="hero-meta shell">

            <div class="hero-top">
                <div class="hero-eyebrow">
                    <span class="eyebrow"><span class="num">01</span> <?php echo esc_html( $hero_eyebrow ); ?></span>
                </div>
                <div class="hero-status">
                    <span class="status-dot"></span>
                    <?php echo esc_html( $hero_status ); ?>
                </div>
            </div>

            <div class="hero-center">
                <div class="hero-rotator" id="heroRotator">

                    <div class="rot is-active">
                        <span class="eyebrow">Transition · 01 / 03</span>
                        <h1 class="hero-title">
                            <?php echo nmh_hero_rot_lines( $rot1_text, $rot1_em ); ?>
                        </h1>
                    </div>

                    <div class="rot">
                        <span class="eyebrow">Transition · 02 / 03</span>
                        <h1 class="hero-title hero-title-list">
                            <?php echo nmh_hero_rot_lines( $rot2_text, $rot2_em ); ?>
                        </h1>
                    </div>

                    <div class="rot">
                        <span class="eyebrow">Transition · 03 / 03</span>
                        <h1 class="hero-title">
                            <?php echo nmh_hero_rot_lines( $rot3_text, $rot3_em ); ?>
                        </h1>
                    </div>

                </div>
            </div>

            <div class="hero-bottom">
                <div class="hero-progress" aria-hidden="true">
                    <span class="prog is-active"></span>
                    <span class="prog"></span>
                    <span class="prog"></span>
                </div>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="<?php echo esc_url( $hero_btn1_url ); ?>">
                        <?php echo esc_html( $hero_btn1 ); ?> <span class="arrow" aria-hidden="true"></span>
                    </a>
                    <a class="btn" href="<?php echo esc_url( $hero_btn2_url ); ?>">
                        <?php echo esc_html( $hero_btn2 ); ?> <span class="arrow" aria-hidden="true"></span>
                    </a>
                </div>
                <div class="hero-scroll" aria-hidden="true">
                    <span>Scroll</span>
                    <span class="scroll-line"></span>
                </div>
            </div>

        </div>
    </section>

    <!-- ── MARQUEE ───────────────────────────────────────── -->
    <section class="marquee" aria-hidden="true">
        <div class="marquee-track">
            <span>Marbella</span><span>&#10022;</span>
            <span>Estepona</span><span>&#10022;</span>
            <span>Sotogrande</span><span>&#10022;</span>
            <span>Benahav&iacute;s</span><span>&#10022;</span>
            <span>Mijas</span><span>&#10022;</span>
            <span>Casares</span><span>&#10022;</span>
            <span>M&aacute;laga</span><span>&#10022;</span>
            <span>Marbella</span><span>&#10022;</span>
            <span>Estepona</span><span>&#10022;</span>
            <span>Sotogrande</span><span>&#10022;</span>
            <span>Benahav&iacute;s</span><span>&#10022;</span>
            <span>Mijas</span><span>&#10022;</span>
            <span>Casares</span><span>&#10022;</span>
            <span>M&aacute;laga</span><span>&#10022;</span>
        </div>
    </section>

    <!-- ── INTRO ─────────────────────────────────────────── -->
    <section class="section section-intro" style="background:var(--ink);color:var(--bone);">
        <div class="shell intro-grid">
            <div>
                <span class="eyebrow"><span class="num">02</span> The Approach</span>
            </div>
            <div>
                <p class="intro-statement display">
                    From acquisition<span class="dim">&#8230;</span> to transformation<span class="dim">&#8230;</span> to <em>exit.</em>
                </p>
                <p class="intro-sub">
                    <?php echo esc_html( $approach_body ); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ── FULL-BLEED IMAGE ──────────────────────────────── -->
    <section class="section-fullbleed-img" aria-hidden="true">
        <img
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ekin-hd.png"
            alt=""
            loading="lazy"
            decoding="async"
            width="1920"
            height="1080"
        >
    </section>

    <!-- ── PILLARS / CAPABILITIES ────────────────────────── -->
    <section class="section section-paper section-pillars">
        <div class="shell">
            <div class="section-header">
                <div>
                    <span class="eyebrow"><span class="num">03</span> Capabilities</span>
                    <h2 class="display"><?php echo nmh_h2_display( $cap_h2, $cap_h2_em ); ?></h2>
                </div>
                <p class="lede">
                    <?php echo esc_html( $cap_lede ); ?>
                </p>
            </div>
            <div class="pillars">
                <article class="pillar">
                    <span class="pillar-num">01</span>
                    <h3><?php echo esc_html( html_entity_decode( $s1_title ) ); ?></h3>
                    <p><?php echo esc_html( $s1_desc ); ?></p>
                </article>
                <article class="pillar">
                    <span class="pillar-num">02</span>
                    <h3><?php echo esc_html( html_entity_decode( $s2_title ) ); ?></h3>
                    <p><?php echo esc_html( $s2_desc ); ?></p>
                </article>
                <article class="pillar">
                    <span class="pillar-num">03</span>
                    <h3><?php echo esc_html( html_entity_decode( $s3_title ) ); ?></h3>
                    <p><?php echo esc_html( $s3_desc ); ?></p>
                </article>
                <article class="pillar">
                    <span class="pillar-num">04</span>
                    <h3><?php echo esc_html( html_entity_decode( $s4_title ) ); ?></h3>
                    <p><?php echo esc_html( $s4_desc ); ?></p>
                </article>
            </div>
        </div>
    </section>

    <!-- ── METHOD TEASER ─────────────────────────────────── -->
    <section class="section section-method">
        <div class="shell">
            <div class="section-header">
                <div>
                    <span class="eyebrow"><span class="num">04</span> The Method</span>
                    <h2 class="display"><?php echo nmh_h2_display( $method_h2, $method_h2_em ); ?></h2>
                </div>
                <p class="lede">
                    <?php echo esc_html( $method_lede ); ?>
                </p>
            </div>
            <ol class="phases" aria-label="Five phases">
                <li class="phase">
                    <span class="phase-num">P/01</span>
                    <h3><?php echo esc_html( $method_p1_title ); ?></h3>
                    <p><?php echo esc_html( $method_p1_body ); ?></p>
                </li>
                <li class="phase">
                    <span class="phase-num">P/02</span>
                    <h3><?php echo esc_html( $method_p2_title ); ?></h3>
                    <p><?php echo esc_html( $method_p2_body ); ?></p>
                </li>
                <li class="phase">
                    <span class="phase-num">P/03</span>
                    <h3><?php echo esc_html( $method_p3_title ); ?></h3>
                    <p><?php echo esc_html( $method_p3_body ); ?></p>
                </li>
                <li class="phase">
                    <span class="phase-num">P/04</span>
                    <h3><?php echo esc_html( $method_p4_title ); ?></h3>
                    <p><?php echo esc_html( $method_p4_body ); ?></p>
                </li>
                <li class="phase">
                    <span class="phase-num">P/05</span>
                    <h3><?php echo esc_html( $method_p5_title ); ?></h3>
                    <p><?php echo esc_html( $method_p5_body ); ?></p>
                </li>
            </ol>
            <div class="method-foot">
                <a class="btn" href="<?php echo esc_url( home_url( '/method/' ) ); ?>">
                    <?php echo esc_html( $method_cta ); ?> <span class="arrow" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- ── EDITORIAL — LOCAL / INTERNATIONAL ─────────────── -->
    <section class="section" style="background:var(--ink);color:var(--bone);">
        <div class="shell editorial-grid">

            <div class="editorial-img">
                <div class="img-frame <?php echo $ed_img ? '' : 'img-coast'; ?>">
                    <?php if ( $ed_img ) : ?>
                        <img src="<?php echo esc_url( $ed_img ); ?>" alt="EKIN Value Development &mdash; Costa del Sol">
                    <?php endif; ?>
                    <span class="img-tag"><?php echo esc_html( $ed_img_tag ); ?></span>
                </div>
                <div class="img-meta">
                    <span>N 36&deg;30&#8242;27&#8243;</span>
                    <span>W 4&deg;53&#8242;12&#8243;</span>
                </div>
            </div>

            <div class="editorial-text">
                <span class="eyebrow"><span class="num">05</span> Where we operate</span>
                <h2 class="display editorial-title">
                    <?php echo nmh_h2_display( $ed_h2, $ed_h2_em ); ?>
                </h2>
                <p><?php echo esc_html( $ed_p1 ); ?></p>
                <p><?php echo esc_html( $ed_p2 ); ?></p>
                <dl class="stats">
                    <div>
                        <dt class="display"><?php echo esc_html( $stat1_num ); ?><span class="dim">+</span></dt>
                        <dd><?php echo nl2br( esc_html( $stat1_label ) ); ?></dd>
                    </div>
                    <div>
                        <dt class="display"><?php echo esc_html( $stat2_num ); ?></dt>
                        <dd><?php echo nl2br( esc_html( $stat2_label ) ); ?></dd>
                    </div>
                    <div>
                        <dt class="display">&euro;<span class="display"><?php echo esc_html( $stat3_num ); ?></span><span class="dim">M</span></dt>
                        <dd><?php echo nl2br( esc_html( $stat3_label ) ); ?></dd>
                    </div>
                </dl>
            </div>

        </div>
    </section>

    <!-- ── WHY INVESTORS ─────────────────────────────────── -->
    <section class="section section-why">
        <div class="shell">
            <div class="section-header">
                <div>
                    <span class="eyebrow"><span class="num">06</span> Why investors choose us</span>
                    <h2 class="display"><?php echo nmh_h2_display( $why_h2, $why_h2_em ); ?></h2>
                </div>
                <p class="lede">
                    <?php echo esc_html( $why_lede ); ?>
                </p>
            </div>
            <div class="why-grid">
                <article class="why-card">
                    <header>
                        <span class="why-num"><?php echo esc_html( $why1_tag ); ?></span>
                        <h3><?php echo esc_html( $why1_title ); ?></h3>
                    </header>
                    <p><?php echo esc_html( $why1_body ); ?></p>
                </article>
                <article class="why-card">
                    <header>
                        <span class="why-num"><?php echo esc_html( $why2_tag ); ?></span>
                        <h3><?php echo esc_html( $why2_title ); ?></h3>
                    </header>
                    <p><?php echo esc_html( $why2_body ); ?></p>
                </article>
                <article class="why-card">
                    <header>
                        <span class="why-num"><?php echo esc_html( $why3_tag ); ?></span>
                        <h3><?php echo esc_html( $why3_title ); ?></h3>
                    </header>
                    <p><?php echo esc_html( $why3_body ); ?></p>
                </article>
                <article class="why-card">
                    <header>
                        <span class="why-num"><?php echo esc_html( $why4_tag ); ?></span>
                        <h3><?php echo esc_html( $why4_title ); ?></h3>
                    </header>
                    <p><?php echo esc_html( $why4_body ); ?></p>
                </article>
            </div>
        </div>
    </section>

    <!-- ── CTA ───────────────────────────────────────────── -->
    <section class="section section-cta" id="contact">
        <div class="shell cta-inner">
            <span class="eyebrow"><span class="num">07</span> Begin</span>
            <h2 class="display cta-title">
                <?php echo nmh_h2_display( $cta_h2, $cta_h2_em ); ?>
            </h2>
            <p class="cta-sub">
                <?php echo esc_html( $cta_sub ); ?>
            </p>
            <div class="cta-actions">
                <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">
                    <?php echo esc_html( $cta_btn1 ); ?> <span class="arrow" aria-hidden="true"></span>
                </a>
                <a class="btn" href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $cta_phone ) ); ?>">
                    <?php echo esc_html( $cta_phone ); ?> <span class="arrow" aria-hidden="true"></span>
                </a>
            </div>
            <div class="cta-rule" aria-hidden="true"></div>
            <div class="cta-meta">
                <div>
                    <span class="eyebrow">Office</span>
                    <p><?php echo nl2br( esc_html( $cta_office ) ); ?></p>
                </div>
                <div>
                    <span class="eyebrow">Hours</span>
                    <p><?php echo nl2br( esc_html( $cta_hours ) ); ?></p>
                </div>
                <div>
                    <span class="eyebrow">Direct</span>
                    <p><?php echo nl2br( esc_html( $cta_direct ) ); ?></p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
