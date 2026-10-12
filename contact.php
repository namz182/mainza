<?php include 'includes/header.php' ?>

<main class="feed-container social-layout">
    <?php include 'includes/sidebars.php' ?>
    <div class="portfolio-shell">
            <div class="page-header">
                <h1 class="page-title">Get In Touch</h1>
                <p class="page-subtitle">Ready to collaborate? Let's discuss your project and bring your ideas to life.</p>
            </div>


            <div class="contact-info card bg-base-100">
                <h2 class="section-heading">
                    <i class="contact-heading-icon" data-lucide="contact-round" aria-hidden="true"></i>
                    Contact Information
                </h2>

                <div class="contact-methods">
                    <div class="contact-method contact-method--email">
                        <div class="contact-icon">
                            <i data-lucide="mail" aria-hidden="true"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <div class="contact-email-list">
                                <a class="contact-email" href="mailto:mainzanamz@gmail.com">mainzanamz@gmail.com</a>
                                <a class="contact-email" href="mailto:mainza@michosms.com">mainza@michosms.com</a>
                                <a class="contact-email" href="mailto:mainamz750@gmail.com">mainamz750@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i data-lucide="phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Phone</h3>
                            <p>+260777183520</p>
                            <a href="tel:+260777183520" class="contact-link">Call Now</a>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i data-lucide="message-circle" aria-hidden="true"></i>
                        </div>
                        <div class="contact-details">
                            <h3>WhatsApp</h3>
                            <a href="https://wa.me/260777183520" class="contact-link" target="_blank">Message on WhatsApp</a>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i data-lucide="map-pin" aria-hidden="true"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Location</h3>
                            <p>Ndola, Zambia</p>
                            <span class="contact-note">Available for remote work worldwide</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-social card bg-base-100 mt-4">
                <h2 class="section-heading">
                    <i data-lucide="share-2" aria-hidden="true"></i>
                    Connect With Me
                </h2>
                <div class="social-links-contact">
                    <a href="https://www.linkedin.com/in/mainza-namangani-b8b334403" target="_blank" rel="noopener noreferrer" class="social-link-contact linkedin">
                        <?= social_icon('linkedin') ?>
                        <span>LinkedIn</span>
                    </a>
                    <a href="https://x.com/mainamz" target="_blank" rel="noopener noreferrer" class="social-link-contact x-social">
                        <?= social_icon('x') ?>
                        <span>X</span>
                    </a>
                    <a href="https://github.com/namz182" target="_blank" rel="noopener noreferrer" class="social-link-contact github">
                        <?= social_icon('github') ?>
                        <span>GitHub</span>
                    </a>
                    <a href="https://www.instagram.com/mainamz/" target="_blank" rel="noopener noreferrer" class="social-link-contact instagram">
                        <?= social_icon('instagram') ?>
                        <span>Instagram</span>
                    </a>
                </div>
            </div>

            <div class="response-info">
                <div class="response-card card bg-base-100">
                    <div class="response-icon">
                        <i data-lucide="clock" aria-hidden="true"></i>
                    </div>
                    <div class="response-content">
                        <h3>Quick Response</h3>
                        <p>I typically respond to messages within 24 hours. For urgent matters, please call or message on WhatsApp.</p>
                    </div>
                </div>
            </div>
    </div>
</main>
<?php include 'includes/footer.php' ?>
