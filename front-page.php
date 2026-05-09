<?php
get_header();

$tdir = get_stylesheet_directory_uri();

// Hero
$hero_video = nmh_get_acf_field( 'home_hero_video', $tdir . '/assets/video/video_portada.mp4' );

// Pillars (reuses servicios fields)
$s1_title = nmh_get_acf_field( 'home_s1_title', 'Architecture &amp; Vision' );
$s1_desc  = nmh_get_acf_field( 'home_s1_desc',  'Architectural foresight that translates land and buildings into investable products with clear positioning.' );
$s2_title = nmh_get_acf_field( 'home_s2_title', 'Legal &amp; Urbanism' );
$s2_desc  = nmh_get_acf_field( 'home_s2_desc',  'Licensing, due diligence and urban analysis. We secure the regulatory framework before capital moves.' );
$s3_title = nmh_get_acf_field( 'home_s3_title', 'Development Execution' );
$s3_desc  = nmh_get_acf_field( 'home_s3_desc',  'Project management end-to-end, from preliminary design to handover, with controlled budget and schedule.' );
$s4_title = nmh_get_acf_field( 'home_s4_title', 'Market Positioning' );
$s4_desc  = nmh_get_acf_field( 'home_s4_desc',  'Pricing strategy, brand assets and channel activation tailored for international buyers and partners.' );

// Editorial (reuses somos fields)
$ed_p1  = nmh_get_acf_field( 'home_somos_p1', 'Deeply rooted in the Costa del Sol, we understand its urban dynamics, regulations and market behaviour — while operating with the standards and expectations of international investors.' );
$ed_p2  = nmh_get_acf_field( 'home_somos_p2', 'Twenty years on the ground. A network of architects, lawyers, brokers and developers built one project at a time. We speak the investor\'s language because we have spoken it for two decades.' );
$ed_img = nmh_get_acf_field( 'home_somos_image', get_template_directory_uri() . '/assets/images/plate-002-costa-sol.jpg' );
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
                    <span class="eyebrow"><span class="num">01</span> Costa del Sol · Est. since 2004</span>
                </div>
                <div class="hero-status">
                    <span class="status-dot"></span>
                    Active mandates · Q2 2026
                </div>
            </div>

            <div class="hero-center">
                <div class="hero-rotator" id="heroRotator">

                    <div class="rot is-active">
                        <span class="eyebrow">Transition · 01 / 03</span>
                        <h1 class="hero-title">
                            <span class="line">One structure.</span>
                            <span class="line"><em>Five</em> disciplines.</span>
                            <span class="line">Total control.</span>
                        </h1>
                    </div>

                    <div class="rot">
                        <span class="eyebrow">Transition · 02 / 03</span>
                        <h1 class="hero-title hero-title-list">
                            <span class="line">Broker access.</span>
                            <span class="line">Architectural vision.</span>
                            <span class="line">Legal precision.</span>
                            <span class="line">Developer execution.</span>
                            <span class="line">Marketing positioning.</span>
                        </h1>
                    </div>

                    <div class="rot">
                        <span class="eyebrow">Transition · 03 / 03</span>
                        <h1 class="hero-title">
                            <span class="line">We don&#8217;t sell properties.</span>
                            <span class="line">We are not intermediaries.</span>
                            <span class="line">We define <em>the right decisions.</em></span>
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
                    <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/method/' ) ); ?>">
                        Explore the Method <span class="arrow" aria-hidden="true"></span>
                    </a>
                    <a class="btn" href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">
                        Start a Conversation <span class="arrow" aria-hidden="true"></span>
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
                    At EKIN, we identify, analyze, and structure high-value real estate
                    opportunities across the Costa del Sol. From land with development
                    potential to repositioned and ready-to-market assets &mdash; every opportunity
                    is selected on a single principle: its ability to generate value through
                    the right decisions.
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
                    <h2 class="display">More than <em>real&nbsp;estate.</em></h2>
                </div>
                <p class="lede">
                    We integrate architecture, development, and investment strategy into a
                    single approach &mdash; combining technical expertise, legal understanding,
                    and market-driven thinking to unlock each asset&#8217;s full potential.
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
                    <h2 class="display">Invest like a <em>developer</em><br>without being one.</h2>
                </div>
                <p class="lede">
                    Five connected phases. One continuous decision chain. Each step is
                    documented, reviewed and aligned with the asset&#8217;s investment thesis &mdash;
                    so capital, design and execution stay in lockstep.
                </p>
            </div>
            <ol class="phases" aria-label="Five phases">
                <li class="phase">
                    <span class="phase-num">P/01</span>
                    <h4>Initial Consultancy<br>&amp; Research Mandate</h4>
                    <p>Investment thesis, location filters, target typologies and risk envelope agreed in writing.</p>
                </li>
                <li class="phase">
                    <span class="phase-num">P/02</span>
                    <h4>Research Presentation<br>&amp; Due Diligence</h4>
                    <p>Shortlist of opportunities with technical, legal and commercial due diligence on each.</p>
                </li>
                <li class="phase">
                    <span class="phase-num">P/03</span>
                    <h4>Negotiation<br>&amp; Asset Acquisition</h4>
                    <p>We translate findings into renegotiated terms and structure the cleanest possible entry.</p>
                </li>
                <li class="phase">
                    <span class="phase-num">P/04</span>
                    <h4>Licensing, Design<br>&amp; Planning</h4>
                    <p>Permitting, architectural development and planning calibrated to the investment timeline.</p>
                </li>
                <li class="phase">
                    <span class="phase-num">P/05</span>
                    <h4>Technical Execution<br>&amp; Commercialization</h4>
                    <p>Site supervision, quality control, and the launch of a coordinated commercial plan.</p>
                </li>
            </ol>
            <div class="method-foot">
                <a class="btn" href="<?php echo esc_url( home_url( '/method/' ) ); ?>">
                    See the full method <span class="arrow" aria-hidden="true"></span>
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
                    <span class="img-tag">Plate &middot; 002 / Costa del Sol</span>
                </div>
                <div class="img-meta">
                    <span>N 36&deg;30&#8242;27&#8243;</span>
                    <span>W 4&deg;53&#8242;12&#8243;</span>
                </div>
            </div>

            <div class="editorial-text">
                <span class="eyebrow"><span class="num">05</span> Where we operate</span>
                <h2 class="display editorial-title">
                    Local knowledge.<br><em>International</em> perspective.
                </h2>
                <p><?php echo esc_html( $ed_p1 ); ?></p>
                <p><?php echo esc_html( $ed_p2 ); ?></p>
                <dl class="stats">
                    <div>
                        <dt class="display">20<span class="dim">+</span></dt>
                        <dd>years operating<br>between Marbella &amp; Sotogrande</dd>
                    </div>
                    <div>
                        <dt class="display">5</dt>
                        <dd>integrated<br>disciplines</dd>
                    </div>
                    <div>
                        <dt class="display">&euro;<span class="display">240</span><span class="dim">M</span></dt>
                        <dd>asset value<br>structured to date</dd>
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
                    <h2 class="display">Decisions, <em>engineered.</em></h2>
                </div>
                <p class="lede">
                    Value is not extracted, it is engineered &mdash; through better decisions, earlier.
                    We protect the downside by reading the asset before the market does.
                </p>
            </div>
            <div class="why-grid">
                <article class="why-card">
                    <header>
                        <span class="why-num">01 &middot; Risk</span>
                        <h3>Risk Reduction</h3>
                    </header>
                    <p>Full technical and legal due diligence allows us to identify risks early &mdash; and use them to renegotiate better entry conditions.</p>
                </article>
                <article class="why-card">
                    <header>
                        <span class="why-num">02 &middot; Clarity</span>
                        <h3>Predictability</h3>
                    </header>
                    <p>Through deep analysis and structured processes, we replace uncertainty with clarity &mdash; aligning expectations with real outcomes.</p>
                </article>
                <article class="why-card">
                    <header>
                        <span class="why-num">03 &middot; Structure</span>
                        <h3>Structured Deals</h3>
                    </header>
                    <p>We design each transaction with the right legal, financial and operational framework &mdash; especially in complex acquisitions.</p>
                </article>
                <article class="why-card">
                    <header>
                        <span class="why-num">04 &middot; Upside</span>
                        <h3>Value Creation</h3>
                    </header>
                    <p>Value is engineered through better decisions: from acquisition strategy to asset transformation and final exit.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- ── CTA ───────────────────────────────────────────── -->
    <section class="section section-cta" id="contact">
        <div class="shell cta-inner">
            <span class="eyebrow"><span class="num">07</span> Begin</span>
            <h2 class="display cta-title">
                We define the right<br><em>decisions.</em>
            </h2>
            <p class="cta-sub">
                Bring us a thesis, a piece of land, an underperforming asset, or a question.
                We respond with structured analysis within five working days.
            </p>
            <div class="cta-actions">
                <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">
                    Start a Conversation <span class="arrow" aria-hidden="true"></span>
                </a>
                <a class="btn" href="tel:+34672972590">
                    +34 672 972 590 <span class="arrow" aria-hidden="true"></span>
                </a>
            </div>
            <div class="cta-rule" aria-hidden="true"></div>
            <div class="cta-meta">
                <div>
                    <span class="eyebrow">Office</span>
                    <p>Marbella &middot; Costa del Sol<br>By appointment</p>
                </div>
                <div>
                    <span class="eyebrow">Hours</span>
                    <p>Mon&ndash;Fri &middot; 09:00&ndash;18:00 CET<br>Weekends on request</p>
                </div>
                <div>
                    <span class="eyebrow">Direct</span>
                    <p>info@ekinvaluedevelopment.com<br>+34 672 972 590</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
