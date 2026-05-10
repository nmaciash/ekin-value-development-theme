<footer class="site-footer">
    <div class="shell">

        <div class="footer-grid">

            <div>
                <div class="footer-mark">ekin</div>
                <p class="footer-tag">Real estate investment, engineered through better decisions.</p>
                <div class="footer-contact">
                    <a href="mailto:info@ekinvaluedevelopment.com">
                        <strong>info@ekinvaluedevelopment.com</strong>
                        <span>General &amp; investor inquiries</span>
                    </a>
                    <a href="tel:+34672972590">
                        <strong>+34 672 972 590</strong>
                        <span>Direct line</span>
                    </a>
                </div>
            </div>

            <div>
                <h3>Navigate</h3>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                ) );
                ?>
            </div>

            <div>
                <h3>Disciplines</h3>
                <ul>
                    <li>Consultancy &amp; Research</li>
                    <li>Project Coordination</li>
                    <li>Legal Structuring</li>
                    <li>Commercialization</li>
                </ul>
            </div>

            <div>
                <h3>Office</h3>
                <ul>
                    <li>Marbella</li>
                    <li>Costa del Sol</li>
                    <li>Spain</li>
                    <li>By appointment</li>
                </ul>
            </div>

        </div>

        <div class="footer-kit">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/kit-logo-new.png' ); ?>"
                 alt="Kit Digital — Plan de Recuperación, Transformación y Resiliencia"
                 loading="lazy">
        </div>

        <div class="footer-bottom">
            <span>&copy; <span class="js-year"><?php echo esc_html( date( 'Y' ) ); ?></span> EKIN Value Development</span>
            <div class="footer-links">
                <a href="#">Legal Notice</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Cookies</a>
                <a href="https://ekinvaluedevelopment.com/accessibility">Accessibility</a>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
