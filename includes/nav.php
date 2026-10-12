<nav class="navbar-custom sticky top-0">
    <div class="feed-container">
        <div class="nav-container">
            <a class="nav-brand" href="index.php" title="Mainza Namangani">
                <img src="assets/img/namz.jpg" alt="" class="nav-avatar">
                <span>Mainza Namangani</span>
            </a>
            <div class="nav-icons">
                <a href="index.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" title="Home">
                    <i data-lucide="layout-dashboard" aria-hidden="true"></i>
                </a>
                <a href="about.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>" title="About">
                    <i data-lucide="user-round" aria-hidden="true"></i>
                </a>
                <a href="projects.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : ''; ?>" title="Projects">
                    <i data-lucide="folder-kanban" aria-hidden="true"></i>
                </a>
                <a href="skills.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'skills.php' ? 'active' : ''; ?>" title="Skills & tools">
                    <i data-lucide="wrench" aria-hidden="true"></i>
                </a>
                <a href="gallery.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : ''; ?>" title="Gallery">
                    <i data-lucide="image" aria-hidden="true"></i>
                </a>
                <a href="contact.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>" title="Contact">
                    <i data-lucide="mail" aria-hidden="true"></i>
                </a>
            </div>

            <div class="nav-actions">
                <button class="theme-toggle" type="button" data-theme-toggle data-target-theme="dark" aria-label="Switch to dark theme" title="Switch to dark theme">
                    <svg class="theme-toggle-icon theme-toggle-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.9 13A9 9 0 0 1 11 3.1 9 9 0 1 0 20.9 13Z"/></svg>
                    <svg class="theme-toggle-icon theme-toggle-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/></svg>
                </button>
                <a class="btn btn-primary" href="contact.php">
                    Contact
                </a>
            </div>
        </div>
    </div>
</nav>
