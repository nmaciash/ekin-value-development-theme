<?php
/*
 * Template Name: Method
 */

get_header();

function nmh_met_h2( $text, $em_raw ) {
    $safe = esc_html( $text );
    if ( $em_raw ) {
        foreach ( array_filter( array_map( 'trim', explode( '|', $em_raw ) ) ) as $word ) {
            $safe = str_replace( esc_html( $word ), '<em>' . esc_html( $word ) . '</em>', $safe );
        }
    }
    return nl2br( $safe );
}

function nmh_met_items( $raw ) {
    return array_filter( array_map( 'trim', explode( "\n", $raw ) ) );
}

// ── Hero ──────────────────────────────────────────────────────
$hero_eyebrow  = nmh_get_acf_field( 'method_hero_eyebrow',  '02 The Method' );
$hero_h1_pre   = nmh_get_acf_field( 'method_hero_h1_pre',   'Invest like a' );
$hero_h1_em    = nmh_get_acf_field( 'method_hero_h1_em',    'developer.' );
$hero_h1_small = nmh_get_acf_field( 'method_hero_h1_small', 'Without being one.' );
$hero_lede     = nmh_get_acf_field( 'method_hero_lede',     'EKIN is a multidisciplinary consultancy that transforms complex assets into high-value investments. Five connected phases — technical insight, legal structuring, strategic execution — that bridge the gap between architectural vision and commercial viability.' );

// ── Phases ────────────────────────────────────────────────────
$phases = array(
    array(
        'num'   => '01',
        'title' => nmh_get_acf_field( 'method_p1_title', "Initial Consultancy\n& Research Mandate" ),
        'body'  => nmh_get_acf_field( 'method_p1_body',  'We begin by aligning on the investment thesis: target geography, asset typology, ticket size, return horizon and risk envelope. The mandate is documented and becomes the filter through which every subsequent opportunity is evaluated.' ),
        'items' => nmh_get_acf_field( 'method_p1_items', implode( "\n", array( 'Investor profile & thesis definition', 'Geographic and typological scoping', 'Risk & return parameters in writing', 'Target capital deployment timeline' ) ) ),
    ),
    array(
        'num'   => '02',
        'title' => nmh_get_acf_field( 'method_p2_title', "Research Presentation\n& Due Diligence" ),
        'body'  => nmh_get_acf_field( 'method_p2_body',  'A curated shortlist with full technical, legal and commercial due diligence on each opportunity. Hidden risks are surfaced early — and translated into negotiation leverage rather than deal-breakers.' ),
        'items' => nmh_get_acf_field( 'method_p2_items', implode( "\n", array( 'Urban & regulatory feasibility studies', 'Land & property valuations and appraisals', 'Technical due diligence with field reports', 'Comparative market analysis & pricing' ) ) ),
    ),
    array(
        'num'   => '03',
        'title' => nmh_get_acf_field( 'method_p3_title', "Negotiation\n& Asset Acquisition" ),
        'body'  => nmh_get_acf_field( 'method_p3_body',  'We translate findings into renegotiated terms, structuring the cleanest entry possible — fiscal, legal and operational. Acquisition is closed with the right vehicle and the right safeguards.' ),
        'items' => nmh_get_acf_field( 'method_p3_items', implode( "\n", array( 'Term-sheet drafting & counterparty negotiation', 'Acquisition vehicle structuring', 'KYC, AML and compliance verification', 'Notary signing & technical handover' ) ) ),
    ),
    array(
        'num'   => '04',
        'title' => nmh_get_acf_field( 'method_p4_title', "Licensing, Design\n& Planning" ),
        'body'  => nmh_get_acf_field( 'method_p4_body',  'Permitting, architectural design and planning calibrated to the investment timeline — never the other way around. Building codes, accessibility and energy efficiency baked in from day one.' ),
        'items' => nmh_get_acf_field( 'method_p4_items', implode( "\n", array( 'Preliminary design & architectural proposals', 'Execution projects & technical documentation', 'Building permit management & administrative procedures', 'Regulatory compliance (codes, accessibility, energy)' ) ) ),
    ),
    array(
        'num'   => '05',
        'title' => nmh_get_acf_field( 'method_p5_title', "Technical Execution\n& Commercialization" ),
        'body'  => nmh_get_acf_field( 'method_p5_body',  'Site supervision and quality control walk hand-in-hand with the launch of a coordinated commercial plan. From first stone to last signature, the asset is managed as a single integrated product.' ),
        'items' => nmh_get_acf_field( 'method_p5_items', implode( "\n", array( 'Project management & site supervision', 'Health, safety & quality coordination', 'Commercial branding & sales toolkit production', 'Channel activation & lead conversion' ) ) ),
    ),
);

// ── Disciplines ───────────────────────────────────────────────
$disc_eyebrow = nmh_get_acf_field( 'method_disc_eyebrow', 'Disciplines' );
$disc_h2      = nmh_get_acf_field( 'method_disc_h2',      "Your 360° architectural\n& business partner." );
$disc_h2_em   = nmh_get_acf_field( 'method_disc_h2_em',   '360°' );
$disc_intro   = nmh_get_acf_field( 'method_disc_intro',   'One firm, four practices. We bridge architectural vision and commercial viability with data-driven analysis and execution designed for high-stakes decision-making.' );

$disciplines = array(
    array(
        'tag'   => nmh_get_acf_field( 'method_d1_tag',   '01 · Consultancy' ),
        'title' => nmh_get_acf_field( 'method_d1_title', 'Feasibility & Strategy' ),
        'items' => nmh_get_acf_field( 'method_d1_items', implode( "\n", array( 'Urban, legal and technical feasibility studies', 'Product and typology analysis tailored to target markets', 'Technical consulting for investors and developers', 'Land and property valuations and appraisals', 'Technical due diligence support', 'Development potential and land-use optimization studies' ) ) ),
    ),
    array(
        'tag'   => nmh_get_acf_field( 'method_d2_tag',   '02 · Architecture' ),
        'title' => nmh_get_acf_field( 'method_d2_title', 'Design & Planning' ),
        'items' => nmh_get_acf_field( 'method_d2_items', implode( "\n", array( 'Drafting of preliminary designs and architectural proposals', 'Development of execution projects', 'Building permit management and administrative procedures', 'Regulatory compliance (codes, accessibility, energy)' ) ) ),
    ),
    array(
        'tag'   => nmh_get_acf_field( 'method_d3_tag',   '03 · Construction' ),
        'title' => nmh_get_acf_field( 'method_d3_title', 'Management & Construction' ),
        'items' => nmh_get_acf_field( 'method_d3_items', implode( "\n", array( 'Project management and site supervision', 'Health and safety coordination', 'Quality control and execution oversight', 'Certification and technical schedule supervision' ) ) ),
    ),
    array(
        'tag'   => nmh_get_acf_field( 'method_d4_tag',   '04 · Closing' ),
        'title' => nmh_get_acf_field( 'method_d4_title', 'Technical & Commercial Closing' ),
        'items' => nmh_get_acf_field( 'method_d4_items', implode( "\n", array( 'Final legalizations and project close-out', 'Client handover support', 'Final state reports and "As-Built" technical documentation', 'Post-construction valuations for sale or rental', 'Comprehensive commercialization and sales support' ) ) ),
    ),
);

// ── CTA ───────────────────────────────────────────────────────
$cta_eyebrow  = nmh_get_acf_field( 'method_cta_eyebrow',  'Begin' );
$cta_h2       = nmh_get_acf_field( 'method_cta_h2',       'Bring us a thesis.' );
$cta_h2_em    = nmh_get_acf_field( 'method_cta_h2_em',    'thesis.' );
$cta_sub      = nmh_get_acf_field( 'method_cta_sub',      'We respond with a structured analysis within five working days — no obligation.' );
$cta_btn1     = nmh_get_acf_field( 'method_cta_btn1',     'Start a Conversation' );
$cta_btn1_url = nmh_get_acf_field( 'method_cta_btn1_url', '' );
$cta_btn2     = nmh_get_acf_field( 'method_cta_btn2',     'Investor view' );
$cta_btn2_url = nmh_get_acf_field( 'method_cta_btn2_url', '' );

if ( ! $cta_btn1_url ) { $cta_btn1_url = get_permalink( get_page_by_path( 'contact' ) ); }
if ( ! $cta_btn2_url ) { $cta_btn2_url = get_permalink( get_page_by_path( 'investor' ) ); }
?>

<main id="method-page">

    <section class="method-hero">
        <div class="shell method-hero-grid">
            <div>
                <span class="eyebrow"><span class="num">02</span> <?php echo esc_html( $hero_eyebrow ); ?></span>
                <h1 class="display"><?php echo esc_html( $hero_h1_pre ); ?> <em><?php echo esc_html( $hero_h1_em ); ?></em><small><?php echo esc_html( $hero_h1_small ); ?></small></h1>
            </div>
            <div>
                <p class="lede"><?php echo esc_html( $hero_lede ); ?></p>
            </div>
        </div>
    </section>

    <section class="phase-rows">
        <div class="shell">

            <?php foreach ( $phases as $phase ) : ?>
            <article class="phase-row">
                <div class="phase-num"><?php echo esc_html( $phase['num'] ); ?></div>
                <h3><?php echo nl2br( esc_html( $phase['title'] ) ); ?></h3>
                <div class="phase-body">
                    <p><?php echo esc_html( $phase['body'] ); ?></p>
                    <ul>
                        <?php foreach ( nmh_met_items( $phase['items'] ) as $item ) : ?>
                        <li><?php echo esc_html( $item ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>
            <?php endforeach; ?>

        </div>
    </section>

    <section class="disciplines">
        <div class="shell">
            <div class="section-header">
                <div>
                    <span class="eyebrow"><span class="num">03</span> <?php echo esc_html( $disc_eyebrow ); ?></span>
                    <h2 class="display"><?php echo nmh_met_h2( $disc_h2, $disc_h2_em ); ?></h2>
                </div>
                <p class="lede"><?php echo esc_html( $disc_intro ); ?></p>
            </div>
            <div class="disc-grid">
                <?php foreach ( $disciplines as $disc ) : ?>
                <div class="disc">
                    <h4><small><?php echo esc_html( $disc['tag'] ); ?></small><?php echo esc_html( $disc['title'] ); ?></h4>
                    <ul>
                        <?php foreach ( nmh_met_items( $disc['items'] ) as $item ) : ?>
                        <li><?php echo esc_html( $item ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="method-cta">
        <div class="shell cta-inner">
            <span class="eyebrow"><span class="num">04</span> <?php echo esc_html( $cta_eyebrow ); ?></span>
            <h2 class="display cta-title"><?php echo nmh_met_h2( $cta_h2, $cta_h2_em ); ?></h2>
            <p class="cta-sub"><?php echo esc_html( $cta_sub ); ?></p>
            <div class="cta-actions">
                <a class="btn btn-primary" href="<?php echo esc_url( $cta_btn1_url ); ?>"><?php echo esc_html( $cta_btn1 ); ?> <span class="arrow"></span></a>
                <a class="btn" href="<?php echo esc_url( $cta_btn2_url ); ?>"><?php echo esc_html( $cta_btn2 ); ?> <span class="arrow"></span></a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
