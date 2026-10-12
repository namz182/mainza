<?php include 'includes/header.php' ?>
<main class="feed-container social-layout">
    <?php include 'includes/sidebars.php' ?>
    <div class="portfolio-shell">
            <div class="hero-card card bg-base-100 mb-4">
                <div class="bg-pattern">
                    <div class="pattern-circle pattern-1"></div>
                    <div class="pattern-circle pattern-2"></div>
                </div>

                <div class="card-content card-body">

                    <div class="hero-main">
                        <div class="hero-copy">
                            <h1 class="hero-title">Mainza Namangani</h1>
                            <p class="hero-subtitle">Cybersecurity enthusiast and web developer based in Zambia, building useful and secure digital experiences.</p>
                        </div>
                        <div class="hero-portrait">
                            <div class="profile-image">
                                <img src="assets/img/namz.jpg" alt="Mainza Namangani">
                            </div>
                        </div>
                    </div>

                    <div class="social-section">
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/mainza-namangani-b8b334403" target="_blank" rel="noopener noreferrer" class="social-link" title="LinkedIn" aria-label="LinkedIn">
                                <?= social_icon('linkedin') ?>
                            </a>
                            <a href="https://x.com/mainamz" target="_blank" rel="noopener noreferrer" class="social-link" title="X" aria-label="X">
                                <?= social_icon('x') ?>
                            </a>
                            <a href="https://github.com/namz182" target="_blank" rel="noopener noreferrer" class="social-link" title="GitHub" aria-label="GitHub">
                                <?= social_icon('github') ?>
                            </a>
                            <a href="https://www.instagram.com/mainamz/" target="_blank" rel="noopener noreferrer" class="social-link" title="Instagram" aria-label="Instagram">
                                <?= social_icon('instagram') ?>
                            </a>
                        </div>
                        <a href="assets/files/Mainza Namangani CV.pdf" download="Mainza Namangani CV"
                            class="btn-primary" style="text-decoration: none;">
                            <i data-lucide="download" aria-hidden="true"></i>
                            Download Resume
                        </a>
                    </div>
                </div>
            </div>

            <div class="content-section card bg-base-100">
                <h2 class="section-heading">
                    <i data-lucide="user-round" aria-hidden="true"></i>
                    My Story
                </h2>
                <p class="content-text">
                    My journey into technology began with a curiosity about how digital systems work and how to
                    protect them from threats.
                </p>
                <p class="content-text">
                    I specialize in penetration testing, security awareness, and building secure web applications.
                </p>
            </div>


            <div class="certifications-section card bg-base-100" id="certifications">
                <h2 class="section-title">Certifications</h2>
                <div class="certifications-list">

                        <article class="certification-post">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/ethical-hacker.png" alt="Google Cybersecurity Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Ethical Hacker</h4>
                                    <p>Trained in cybersecurity principles, threat analysis, and ethical hacking
                                        methodologies.</p>
                                </div>
                            </div>
                        </article>

                        <article class="certification-post">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/net-defense.png" alt="Fullstack PHP Training Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Network Defense</h4>
                                    <p>Learned network protection strategies, firewalls, intrusion prevention, and
                                        incident response.</p>
                                </div>
                            </div>
                        </article>

                        <article class="certification-post">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/cyber-threat.png" alt="Fullstack PHP Training Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Cyber Threat Management</h4>
                                    <p>Learned how to manage cyber threats.</p>
                                </div>
                            </div>
                        </article>

                        <article class="certification-post">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/os.png" alt="Fullstack PHP Training Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Operating system concepts</h4>
                                </div>
                            </div>
                        </article>

                        <article class="certification-post">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/net-basics.png" alt="Fullstack PHP Training Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Networking basics</h4>
                                </div>
                            </div>
                        </article>

                        <article class="certification-post">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/endpoint.png" alt="Fullstack PHP Training Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>EndPoint Security</h4>
                                    <p>Learned how to secure Endpoints.</p>
                                </div>
                            </div>
                        </article>

                        <article class="certification-post">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/python.png" alt="Penetration Testing Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Python for Security</h4>
                                    <p>Utilized Python to develop security tools and perform ethical hacking
                                        assessments.</p>
                                </div>
                            </div>
                        </article>
                </div>
            </div>

            <div class="skills-section card bg-base-100" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills-grid">
                    <div class="skill-category">
                        <h4 class="skill-category-title">
                            <i data-lucide="code-xml" aria-hidden="true"></i>
                            Technical & Development
                        </h4>
                        <div class="skills-list">
                            <div class="skill-group">
                                <h5>Languages</h5>
                                <div class="skill-tags">
                                    <span class="skill-tag">Python</span>
                                    <span class="skill-tag">PHP</span>
                                    <span class="skill-tag">Java</span>
                                    <span class="skill-tag">SQL</span>
                                    <span class="skill-tag">HTML/CSS</span>
                                    <span class="skill-tag">JavaScript</span>
                                    <span class="skill-tag">C++</span>
                                </div>
                            </div>
                            <div class="skill-group">
                                <h5>Frameworks & Tools</h5>
                                <div class="skill-tags">
                                    <span class="skill-tag">Laravel</span>
                                    <span class="skill-tag">Livewire</span>
                                    <span class="skill-tag">Flask</span>
                                    <span class="skill-tag">React</span>
                                    <span class="skill-tag">Git</span>

                                </div>
                            </div>
                            <div class="skill-group">
                                <h5>Databases</h5>
                                <div class="skill-tags">
                                    <span class="skill-tag">MySQL</span>
                                    <span class="skill-tag">SQLite</span>
                                    <span class="skill-tag">MariaDB</span>
                                    <span class="skill-tag">PostgreSQL</span>
                                    <span class="skill-tag">MongoDB</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skill-category">
                        <h4 class="skill-category-title">
                            <i data-lucide="shield-check" aria-hidden="true"></i>
                            Cybersecurity
                        </h4>
                        <div class="skills-list">
                            <div class="skill-group">
                                <h5>Core Skills</h5>
                                <div class="skill-tags">
                                    <span class="skill-tag">Penetration Testing</span>
                                    <span class="skill-tag">Security Awareness</span>
                                    <span class="skill-tag">Networking</span>
                                    <span class="skill-tag">Cryptography</span>
                                    <span class="skill-tag">Digital Forensics</span>
                                    <span class="skill-tag">Kali linux</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="projects-section card bg-base-100 mb-5" id="recent-projects">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="section-title">Recent Projects</h2>
                    <a href="projects.php" class="view-all-btn">
                        View All
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="projects-list">
                    <article class="project-card project-preview-post">
                        <h3 class="project-name">MyTutor</h3>
                        <a href="projects.php#project-mytutor" aria-label="View MyTutor project">
                            <img src="assets/img/screenshots/mytutor.png" alt="MyTutor platform screenshot">
                        </a>
                        <p class="project-desc">A peer-to-peer tutoring platform for connecting students and sharing knowledge.</p>
                    </article>
                    <article class="project-card project-preview-post">
                        <h3 class="project-name">POS System</h3>
                        <a href="projects.php#project-pos" aria-label="View POS System project">
                            <img src="assets/img/screenshots/pos.jpeg" alt="Point of sale system screenshot">
                        </a>
                        <p class="project-desc">A point of sale system for handling sales, inventory, and business reports.</p>
                    </article>
                    <article class="project-card project-preview-post">
                        <h3 class="project-name">BAZ</h3>
                        <a href="projects.php#project-baz" aria-label="View BAZ project">
                            <img src="assets/img/screenshots/baz2.png" alt="BAZ badminton website screenshot">
                        </a>
                        <p class="project-desc">A badminton community website featuring news and event listings.</p>
                    </article>
                </div>
            </div>
    </div>
</main>
<?php include 'includes/footer.php' ?>
