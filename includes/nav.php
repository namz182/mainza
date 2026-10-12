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
                <a href="contact.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>" title="Contact">
                    <i data-lucide="mail" aria-hidden="true"></i>
                </a>
            </div>

            <div class="nav-actions">
                <a class="btn btn-primary" href="contact.php">
                    Contact
                </a>
            </div>
        </div>
    </div>
</nav>
