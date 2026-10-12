<?php include 'includes/header.php' ?>
<?php require_once 'includes/project-gallery.php' ?>
<?php require_once 'includes/project-link.php' ?>
<?php
$projectUrls = [
    'mytutor' => null,
    'pos' => null,
    'ytdown-cli' => null,
    'ytdown-gui' => null,
    'baz' => null,
    'ips-ids' => null,
];
?>
<main class="feed-container social-layout">
    <?php include 'includes/sidebars.php' ?>
    <div class="portfolio-shell">
        <header class="page-header">
            <h1 class="page-title">Projects</h1>
            <p class="page-subtitle">A list of projects I've worked on.</p>
        </header>

        <div class="projects-feed">
            <article class="project-post card bg-base-100" id="project-mytutor">
                <h2 class="project-title">MyTutor</h2>
                <?= project_gallery(['assets/img/screenshots/mytutor.png', 'assets/img/screenshots/mytutor-2.png', 'assets/img/screenshots/mytutor-3.png'], 'MyTutor') ?>
                <p class="project-description">A peer-to-peer tutoring platform where students connect, schedule sessions, and learn together.</p>
                <?= project_open_link($projectUrls['mytutor']) ?>
            </article>

            <article class="project-post card bg-base-100" id="project-pos">
                <h2 class="project-title">POS System</h2>
                <?= project_gallery(['assets/img/screenshots/pos.jpeg', 'assets/img/screenshots/pos-2.jpeg', 'assets/img/screenshots/pos-3.jpeg'], 'POS System') ?>
                <p class="project-description">A point-of-sale system for handling sales, inventory, and business reports.</p>
                <?= project_open_link($projectUrls['pos']) ?>
            </article>

            <article class="project-post card bg-base-100" id="project-ytdown-cli">
                <h2 class="project-title">YouTube Downloader (CLI)</h2>
                <?= project_gallery(['assets/img/screenshots/ytdown.png'], 'YouTube Downloader command line') ?>
                <p class="project-description">A command-line tool for downloading individual videos and playlists.</p>
                <?= project_open_link($projectUrls['ytdown-cli']) ?>
            </article>

            <article class="project-post card bg-base-100" id="project-ytdown-gui">
                <h2 class="project-title">YouTube Downloader (GUI)</h2>
                <?= project_gallery(['assets/img/screenshots/ytdown-gui.png'], 'YouTube Downloader desktop app') ?>
                <p class="project-description">A desktop app for downloading videos and playlists through a graphical interface.</p>
                <?= project_open_link($projectUrls['ytdown-gui']) ?>
            </article>

            <article class="project-post card bg-base-100" id="project-baz">
                <h2 class="project-title">BAZ</h2>
                <?= project_gallery(['assets/img/screenshots/baz2.png', 'assets/img/screenshots/baz.png', 'assets/img/screenshots/baz3.png'], 'BAZ') ?>
                <p class="project-description">A badminton community website featuring news and event listings.</p>
                <?= project_open_link($projectUrls['baz']) ?>
            </article>

            <article class="project-post card bg-base-100" id="project-ips-ids">
                <h2 class="project-title">IPS | IDS</h2>
                <?= project_gallery(['assets/img/screenshots/ips.png'], 'Intrusion prevention and detection system') ?>
                <p class="project-description">A security monitoring solution that detects suspicious network activity and helps block threats.</p>
                <?= project_open_link($projectUrls['ips-ids']) ?>
            </article>
        </div>
    </div>
</main>
<?php include 'includes/footer.php' ?>
