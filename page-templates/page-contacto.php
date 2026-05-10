<?php
/*
 * Template Name: Página Contacto
 */

get_header();

$hero_title      = nmh_get_acf_field( 'con_hero_title',      'Get in Touch' );
$hero_desc       = nmh_get_acf_field( 'con_hero_desc',       'Write to us, call us or visit us in Marbella. We are available Monday to Friday, 9:00 to 18:00. We would love to meet you, hear your goals and help you move forward.' );
$hero_bold       = nmh_get_acf_field( 'con_hero_bold',       'Your next chapter starts here.' );
$form_title      = nmh_get_acf_field( 'con_form_title',      'How can we help you?' );
$form_shortcode  = nmh_get_acf_field( 'con_form_shortcode',  '' );
?>

<main class="main-content main-page-wrapper contact__page">

    <section class="contact-hero-section">
        <div class="container nm__custom__container">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xxl-7 text-md-center">
                    <p class="hero-eyebrow"><span class="num">—</span> EKIN Value Development</p>
                    <h1 class="custom-hero-title"><?php echo esc_html( $hero_title ); ?></h1>
                    <p class="custom-hero-description"><?php echo esc_html( $hero_desc ); ?></p>
                    <?php if ( $hero_bold ) : ?>
                        <p><strong><?php echo esc_html( $hero_bold ); ?></strong></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="container nm__custom__container">
            <span class="anchor" id="contactForm"></span>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-10 col-md-9 col-lg-7 col-xl-6">

                    <strong class="form-title d-block"><?php echo esc_html( $form_title ); ?></strong>

                    <?php if ( $form_shortcode ) : ?>
                        <?php echo do_shortcode( $form_shortcode ); ?>
                    <?php else : ?>
                    <form class="nmh-contact-form" method="post" novalidate>
                        <?php wp_nonce_field( 'nmh_contact_submit', 'nmh_contact_nonce' ); ?>

                        <div class="nmh-form-group">
                            <label for="nmh_name">Name</label>
                            <input type="text" id="nmh_name" name="nmh_name" placeholder="Your full name" required>
                        </div>

                        <div class="nmh-form-group">
                            <label for="nmh_email">Email</label>
                            <input type="email" id="nmh_email" name="nmh_email" placeholder="you@email.com" required>
                        </div>

                        <div class="nmh-form-group">
                            <label for="nmh_phone">Phone</label>
                            <input type="tel" id="nmh_phone" name="nmh_phone" placeholder="+34 600 000 000">
                        </div>

                        <div class="nmh-form-group">
                            <label for="nmh_message">Message</label>
                            <textarea id="nmh_message" name="nmh_message" placeholder="How can we help you?" required></textarea>
                        </div>

                        <button type="submit" class="nmh-submit">Send message</button>
                    </form>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
