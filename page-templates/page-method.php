<?php
/*
 * Template Name: Method
 */

get_header();

$hero_eyebrow = nmh_get_acf_field( 'method_hero_eyebrow', '02 The Method' );
$hero_lede    = nmh_get_acf_field( 'method_hero_lede',    'EKIN is a multidisciplinary consultancy that transforms complex assets into high-value investments. Five connected phases — technical insight, legal structuring, strategic execution — that bridge the gap between architectural vision and commercial viability.' );
$disc_intro   = nmh_get_acf_field( 'method_disc_intro',   'One firm, four practices. We bridge architectural vision and commercial viability with data-driven analysis and execution designed for high-stakes decision-making.' );
$cta_sub      = nmh_get_acf_field( 'method_cta_sub',      'We respond with a structured analysis within five working days — no obligation.' );
?>

<main id="method-page">

    <section class="method-hero">
        <div class="shell method-hero-grid">
            <div>
                <span class="eyebrow"><span class="num">02</span> <?php echo esc_html( $hero_eyebrow ); ?></span>
                <h1 class="display">Invest like a <em>developer.</em><small>Without being one.</small></h1>
            </div>
            <div>
                <p class="lede"><?php echo esc_html( $hero_lede ); ?></p>
            </div>
        </div>
    </section>

    <section class="phase-rows">
        <div class="shell">

            <article class="phase-row">
                <div class="phase-num">01</div>
                <h3>Initial Consultancy<br>&amp; Research Mandate</h3>
                <div class="phase-body">
                    <p>We begin by aligning on the investment thesis: target geography, asset typology, ticket size, return horizon and risk envelope. The mandate is documented and becomes the filter through which every subsequent opportunity is evaluated.</p>
                    <ul>
                        <li>Investor profile &amp; thesis definition</li>
                        <li>Geographic and typological scoping</li>
                        <li>Risk &amp; return parameters in writing</li>
                        <li>Target capital deployment timeline</li>
                    </ul>
                </div>
            </article>

            <article class="phase-row">
                <div class="phase-num">02</div>
                <h3>Research Presentation<br>&amp; Due Diligence</h3>
                <div class="phase-body">
                    <p>A curated shortlist with full technical, legal and commercial due diligence on each opportunity. Hidden risks are surfaced early — and translated into negotiation leverage rather than deal-breakers.</p>
                    <ul>
                        <li>Urban &amp; regulatory feasibility studies</li>
                        <li>Land &amp; property valuations and appraisals</li>
                        <li>Technical due diligence with field reports</li>
                        <li>Comparative market analysis &amp; pricing</li>
                    </ul>
                </div>
            </article>

            <article class="phase-row">
                <div class="phase-num">03</div>
                <h3>Negotiation<br>&amp; Asset Acquisition</h3>
                <div class="phase-body">
                    <p>We translate findings into renegotiated terms, structuring the cleanest entry possible — fiscal, legal and operational. Acquisition is closed with the right vehicle and the right safeguards.</p>
                    <ul>
                        <li>Term-sheet drafting &amp; counterparty negotiation</li>
                        <li>Acquisition vehicle structuring</li>
                        <li>KYC, AML and compliance verification</li>
                        <li>Notary signing &amp; technical handover</li>
                    </ul>
                </div>
            </article>

            <article class="phase-row">
                <div class="phase-num">04</div>
                <h3>Licensing, Design<br>&amp; Planning</h3>
                <div class="phase-body">
                    <p>Permitting, architectural design and planning calibrated to the investment timeline — never the other way around. Building codes, accessibility and energy efficiency baked in from day one.</p>
                    <ul>
                        <li>Preliminary design &amp; architectural proposals</li>
                        <li>Execution projects &amp; technical documentation</li>
                        <li>Building permit management &amp; administrative procedures</li>
                        <li>Regulatory compliance (codes, accessibility, energy)</li>
                    </ul>
                </div>
            </article>

            <article class="phase-row">
                <div class="phase-num">05</div>
                <h3>Technical Execution<br>&amp; Commercialization</h3>
                <div class="phase-body">
                    <p>Site supervision and quality control walk hand-in-hand with the launch of a coordinated commercial plan. From first stone to last signature, the asset is managed as a single integrated product.</p>
                    <ul>
                        <li>Project management &amp; site supervision</li>
                        <li>Health, safety &amp; quality coordination</li>
                        <li>Commercial branding &amp; sales toolkit production</li>
                        <li>Channel activation &amp; lead conversion</li>
                    </ul>
                </div>
            </article>

        </div>
    </section>

    <section class="disciplines">
        <div class="shell">
            <div class="section-header">
                <div>
                    <span class="eyebrow"><span class="num">03</span> Disciplines</span>
                    <h2 class="display">Your <em>360°</em> architectural<br>&amp; business partner.</h2>
                </div>
                <p class="lede"><?php echo esc_html( $disc_intro ); ?></p>
            </div>
            <div class="disc-grid">
                <div class="disc">
                    <h4><small>01 · Consultancy</small>Feasibility &amp; Strategy</h4>
                    <ul>
                        <li>Urban, legal and technical feasibility studies</li>
                        <li>Product and typology analysis tailored to target markets</li>
                        <li>Technical consulting for investors and developers</li>
                        <li>Land and property valuations and appraisals</li>
                        <li>Technical due diligence support</li>
                        <li>Development potential and land-use optimization studies</li>
                    </ul>
                </div>
                <div class="disc">
                    <h4><small>02 · Architecture</small>Design &amp; Planning</h4>
                    <ul>
                        <li>Drafting of preliminary designs and architectural proposals</li>
                        <li>Development of execution projects</li>
                        <li>Building permit management and administrative procedures</li>
                        <li>Regulatory compliance (codes, accessibility, energy)</li>
                    </ul>
                </div>
                <div class="disc">
                    <h4><small>03 · Construction</small>Management &amp; Construction</h4>
                    <ul>
                        <li>Project management and site supervision</li>
                        <li>Health and safety coordination</li>
                        <li>Quality control and execution oversight</li>
                        <li>Certification and technical schedule supervision</li>
                    </ul>
                </div>
                <div class="disc">
                    <h4><small>04 · Closing</small>Technical &amp; Commercial Closing</h4>
                    <ul>
                        <li>Final legalizations and project close-out</li>
                        <li>Client handover support</li>
                        <li>Final state reports and "As-Built" technical documentation</li>
                        <li>Post-construction valuations for sale or rental</li>
                        <li>Comprehensive commercialization and sales support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="method-cta">
        <div class="shell cta-inner">
            <span class="eyebrow"><span class="num">04</span> Begin</span>
            <h2 class="display cta-title">Bring us a <em>thesis.</em></h2>
            <p class="cta-sub"><?php echo esc_html( $cta_sub ); ?></p>
            <div class="cta-actions">
                <a class="btn btn-primary" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>">Start a Conversation <span class="arrow"></span></a>
                <a class="btn" href="<?php echo esc_url( get_permalink( get_page_by_path( 'investor' ) ) ); ?>">Investor view <span class="arrow"></span></a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
