<?php
/*
 * Template Name: Track Record
 */

get_header();

// ── Hero ──────────────────────────────────────────────────────
$hero_eyebrow = nmh_get_acf_field( 'tr_hero_eyebrow', '03 Track Record' );
$hero_h1      = nmh_get_acf_field( 'tr_hero_h1',      'Our Track' );
$hero_h1_sub  = nmh_get_acf_field( 'tr_hero_sub',     'Some Testimonials' );
$hero_lede    = nmh_get_acf_field( 'tr_hero_lede',     'Real outcomes, real people. A selection of cases where our method made the difference.' );

// ── Cases ─────────────────────────────────────────────────────
$cases = array(
    array(
        'num'     => '01',
        'title'   => nmh_get_acf_field( 'tr_c1_title', 'Beyond Due Diligence: A Masterclass in Ethical Advisory and Regulatory Strategy' ),
        'image'   => nmh_get_acf_field( 'tr_c1_image', '' ),
        'content' => nmh_get_acf_field( 'tr_c1_content', '"I engaged Ekin to conduct a technical audit of a land acquisition I had already completed. While the transaction was handled by a law firm in Madrid, the 13-hectare site is located in Málaga, where I intended to develop a five-villa residential project.

Having initially moved forward without architectural or urban planning consultations, I relied on legal advice alone, and there was my big mistake.

It was only when a realtor at Keller Williams introduced me to Rodrigo—Architect and Co-owner of Ekin—that I realized the necessity of a rigorous feasibility study before committing to such an investment.

Rodrigo\'s intervention was decisive. He performed a deep-dive regulatory analysis, coordinating directly with the Cártama City Council. Despite the land being classified as non-developable, his strategic mastery of local land-use laws allowed him to identify a legal framework to successfully secure approval for three villas (instead of my initial idea of five)—a testament to his technical and tactical expertise.

Beyond the planning phase, Ekin delivered a transparent financial assessment. They identified critical cost drivers—specifically the lack of connection to mains water and electricity plus extra cost of construction and maintenance connected with logistics—and balanced these against local market ROI. Despite the fact that Ekin stood to gain significant fees from the project\'s development, Rodrigo provided a candid, ethical recommendation: the investment was not viable.

Following this, Ekin managed the disposal of the land, enabling me to recover a substantial portion of my capital.

As the CEO of a German engineering firm, I am accustomed to technical rigor, but it is rare to find it paired with such unwavering personal integrity. Rodrigo didn\'t just provide a service; he protected my interests at his own expense. In a complex international market, finding an advisor you can trust as a partner is invaluable.' ),
        'author'  => nmh_get_acf_field( 'tr_c1_author', 'Sebastian H.' ),
        'role'    => nmh_get_acf_field( 'tr_c1_role',   'CEO, German Engineering Firm' ),
    ),
    array(
        'num'     => '02',
        'title'   => nmh_get_acf_field( 'tr_c2_title', 'The local embassador. The importance of a local partner for an Expat investor.' ),
        'image'   => nmh_get_acf_field( 'tr_c2_image', '' ),
        'content' => nmh_get_acf_field( 'tr_c2_content', '' ),
        'author'  => nmh_get_acf_field( 'tr_c2_author', '' ),
        'role'    => nmh_get_acf_field( 'tr_c2_role',   '' ),
    ),
    array(
        'num'     => '03',
        'title'   => nmh_get_acf_field( 'tr_c3_title', 'Boots on the Ground: How Ekin Secured an 11% Discount and Saved a Mortgage During the August Shutdown.' ),
        'image'   => nmh_get_acf_field( 'tr_c3_image', '' ),
        'content' => nmh_get_acf_field( 'tr_c3_content', '' ),
        'author'  => nmh_get_acf_field( 'tr_c3_author', '' ),
        'role'    => nmh_get_acf_field( 'tr_c3_role',   '' ),
    ),
);
?>

<main id="track-record-page">

    <section class="tr-hero">
        <div class="shell tr-hero-grid">
            <div>
                <span class="eyebrow"><span class="num">03</span> <?php echo esc_html( $hero_eyebrow ); ?></span>
                <h1 class="display"><?php echo esc_html( $hero_h1 ); ?><small><?php echo esc_html( $hero_h1_sub ); ?></small></h1>
            </div>
            <div>
                <p class="lede"><?php echo esc_html( $hero_lede ); ?></p>
            </div>
        </div>
    </section>

    <section class="tr-cases">
        <div class="shell">

            <?php foreach ( $cases as $i => $case ) :
                $img_url = is_array( $case['image'] ) ? esc_url( $case['image']['url'] ) : esc_url( $case['image'] );
                $img_alt = is_array( $case['image'] ) ? esc_attr( $case['image']['alt'] ) : esc_attr( $case['author'] );
                $is_even = ( $i % 2 !== 0 );
            ?>
            <article class="tr-case <?php echo $is_even ? 'tr-case--reverse' : ''; ?>"
                     data-case="<?php echo esc_attr( $i ); ?>">

                <div class="tr-card">
                    <div class="tr-img-col">
                        <?php if ( $img_url ) : ?>
                        <img class="tr-img" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>" />
                        <?php if ( $case['author'] ) : ?>
                        <div class="tr-img-caption">
                            <strong><?php echo esc_html( $case['author'] ); ?></strong>
                            <?php if ( $case['role'] ) : ?>
                            <span><?php echo esc_html( $case['role'] ); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <?php else : ?>
                        <div class="tr-img-placeholder"></div>
                        <?php endif; ?>
                    </div>

                    <div class="tr-text-col">
                        <div class="tr-case-num"><?php echo esc_html( $case['num'] ); ?></div>
                        <h2 class="tr-case-title"><?php echo esc_html( $case['title'] ); ?></h2>
                        <button class="tr-trigger"
                                aria-expanded="false"
                                aria-controls="tr-panel-<?php echo esc_attr( $i ); ?>">
                            <span class="tr-trigger-label">Read</span>
                            <span class="tr-trigger-arrow" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>

                <div class="tr-panel"
                     id="tr-panel-<?php echo esc_attr( $i ); ?>"
                     aria-hidden="true">
                    <div class="tr-panel-inner">
                        <div class="tr-panel-body">
                            <?php if ( $case['content'] ) : ?>
                            <div class="tr-panel-text">
                                <?php
                                foreach ( explode( "\n\n", $case['content'] ) as $para ) {
                                    $para = trim( $para );
                                    if ( $para ) {
                                        echo '<p>' . nl2br( esc_html( $para ) ) . '</p>';
                                    }
                                }
                                ?>
                            </div>
                            <?php else : ?>
                            <p class="tr-panel-empty">Content coming soon.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </article>
            <?php endforeach; ?>

        </div>
    </section>

</main>

<script>
(function () {
    document.querySelectorAll('.tr-trigger').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var article = btn.closest('.tr-case');
            var panel   = article.querySelector('.tr-panel');
            var isOpen  = article.classList.contains('is-open');

            document.querySelectorAll('.tr-case.is-open').forEach(function (el) {
                el.classList.remove('is-open');
                el.querySelector('.tr-trigger').setAttribute('aria-expanded', 'false');
                el.querySelector('.tr-trigger-label').textContent = 'Read';
                el.querySelector('.tr-panel').setAttribute('aria-hidden', 'true');
            });

            if (!isOpen) {
                article.classList.add('is-open');
                btn.setAttribute('aria-expanded', 'true');
                btn.querySelector('.tr-trigger-label').textContent = 'Close';
                panel.setAttribute('aria-hidden', 'false');
                setTimeout(function () {
                    panel.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 60);
            }
        });
    });
}());
</script>

<?php get_footer(); ?>
