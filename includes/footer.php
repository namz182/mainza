<footer class="site-footer">
    <div class="portfolio-shell">
        <section class="footer-cta feed-post card bg-base-100">
            <h2>Let’s work together.</h2>
            <p class="footer-subtitle">Creating secure solutions and thoughtful web experiences for your business.</p>
            <a href="contact.php" class="btn btn-primary">
                <i data-lucide="plus" aria-hidden="true"></i>
                Contact me
            </a>
        </section>

        <div class="footer-social">
            <span class="footer-follow-text">Find me online</span>
            <div class="footer-social-links">
                <a href="https://www.linkedin.com/in/mainza-namangani-b8b334403" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="LinkedIn" aria-label="LinkedIn">
                    <?= social_icon('linkedin') ?>
                </a>
                <a href="https://x.com/mainamz" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="X" aria-label="X">
                    <?= social_icon('x') ?>
                </a>
                <a href="https://github.com/namz182" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="GitHub" aria-label="GitHub">
                    <?= social_icon('github') ?>
                </a>
                <a href="https://www.instagram.com/mainamz/" target="_blank" rel="noopener noreferrer" class="footer-social-link" title="Instagram" aria-label="Instagram">
                    <?= social_icon('instagram') ?>
                </a>
            </div>
        </div>

        <p class="footer-attribution">© 2024 - <?= date('Y') ?> Mainza Namangani</p>
    </div>
</footer>

<script src="assets/js/icons.bundle.js?v=<?php echo filemtime('assets/js/icons.bundle.js'); ?>"></script>
<script src="assets/js/theme-toggle.js?v=<?php echo filemtime('assets/js/theme-toggle.js'); ?>"></script>
<script src="assets/js/certifications-scroll.js?v=<?php echo filemtime('assets/js/certifications-scroll.js'); ?>"></script>
<script src="assets/js/photo-viewer.js?v=<?php echo filemtime('assets/js/photo-viewer.js'); ?>"></script>
</body>
</html>
