<aside class="feed-sidebar feed-sidebar-left" aria-label="Portfolio navigation">
    <a href="index.php" class="sidebar-profile">
        <img src="assets/img/namz.jpg" alt="" class="sidebar-avatar">
        <span>Mainza Namangani</span>
    </a>

    <nav class="sidebar-nav" aria-label="Main navigation">
        <a href="index.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : ''; ?>">
            <i data-lucide="compass" aria-hidden="true"></i><span>Home</span>
        </a>
        <a href="about.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) === 'about.php' ? 'active' : ''; ?>">
            <i data-lucide="book-open-text" aria-hidden="true"></i><span>About</span>
        </a>
        <a href="projects.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) === 'projects.php' ? 'active' : ''; ?>">
            <i data-lucide="folder-kanban" aria-hidden="true"></i><span>Projects</span>
        </a>
        <a href="contact.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) === 'contact.php' ? 'active' : ''; ?>">
            <i data-lucide="send" aria-hidden="true"></i><span>Contact</span>
        </a>
    </nav>

    <div class="sidebar-divider"></div>
    <h2 class="sidebar-heading">Your shortcuts</h2>
    <nav class="sidebar-nav" aria-label="Portfolio shortcuts">
        <a href="index.php#certifications" class="sidebar-link"><i data-lucide="medal" aria-hidden="true"></i><span>Certifications</span></a>
        <a href="index.php#skills" class="sidebar-link"><i data-lucide="wrench" aria-hidden="true"></i><span>Skills & tools</span></a>
        <a href="index.php#recent-projects" class="sidebar-link"><i data-lucide="image" aria-hidden="true"></i><span>Recent projects</span></a>
    </nav>
</aside>

<aside class="feed-sidebar feed-sidebar-right" aria-label="Profile details and featured projects">
    <section class="sidebar-card card bg-base-100">
        <h2 class="sidebar-heading">About Mainza</h2>
        <p class="sidebar-copy">Cybersecurity enthusiast and web developer building useful, secure digital experiences.</p>
        <p class="sidebar-detail"><i data-lucide="map-pin" aria-hidden="true"></i> Ndola, Zambia</p>
        <div class="sidebar-socials" aria-label="Social media">
            <a href="https://www.linkedin.com/in/mainza-namangani-b8b334403" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><?= social_icon('linkedin') ?></a>
            <a href="https://x.com/mainamz" target="_blank" rel="noopener noreferrer" aria-label="X"><?= social_icon('x') ?></a>
        </div>
        <a class="sidebar-action" href="contact.php">Get in touch <i data-lucide="arrow-right" aria-hidden="true"></i></a>
    </section>

    <section class="sidebar-card card bg-base-100">
        <h2 class="sidebar-heading">Featured projects</h2>
        <a class="featured-project" href="projects.php#project-mytutor"><span>MyTutor</span><small>Peer learning platform</small></a>
        <a class="featured-project" href="projects.php#project-pos"><span>POS System</span><small>Sales and inventory</small></a>
        <a class="featured-project" href="projects.php#project-baz"><span>BAZ</span><small>Badminton community</small></a>
    </section>
</aside>
