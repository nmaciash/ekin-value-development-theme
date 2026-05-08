<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="siteHeader">

    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>"
             alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
             class="brand-logo">
    </a>

    <nav class="site-nav-bar" id="siteNavBar" aria-label="Primary navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'container'      => false,
            'menu_class'     => 'site-nav',
            'fallback_cb'    => false,
        ) );
        ?>
        <a class="nav-cta" href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">
            <span class="dot" aria-hidden="true"></span>
            <span class="label">Start a Conversation</span>
        </a>
    </nav>

    <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="siteNavBar" aria-label="Open menu">
        <span></span>
        <span></span>
        <span></span>
    </button>

</header>

<aside class="side-rail" aria-label="Direct contact">
    <a href="tel:+34672972590" aria-label="Call EKIN Value Development">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
    <a href="mailto:info@ekinvaluedevelopment.com" aria-label="Email EKIN Value Development">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="5" width="18" height="14" rx="2"/>
            <path d="M3 7l9 6 9-6"/>
        </svg>
    </a>
</aside>
