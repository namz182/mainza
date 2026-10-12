<?php include 'includes/header.php' ?>
<?php require_once 'includes/gallery-data.php' ?>
<?php $galleryImages = gallery_images(); ?>
<main class="feed-container social-layout">
    <?php include 'includes/sidebars.php' ?>
    <div class="portfolio-shell">
        <header class="page-header">
            <h1 class="page-title">Gallery</h1>
            <p class="page-subtitle">Photos and moments from my gallery.</p>
        </header>

        <section class="gallery-page-section" aria-label="All gallery images">
            <div class="gallery-grid gallery-grid--full">
                <?php foreach ($galleryImages as $image): ?>
                    <button class="gallery-image-tile" type="button" data-photo-viewer-trigger data-photo-src="<?= htmlspecialchars($image['src'], ENT_QUOTES, 'UTF-8') ?>" data-photo-alt="<?= htmlspecialchars($image['alt'], ENT_QUOTES, 'UTF-8') ?>" aria-label="Preview <?= htmlspecialchars($image['alt'], ENT_QUOTES, 'UTF-8') ?>">
                        <img src="<?= htmlspecialchars($image['src'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($image['alt'], ENT_QUOTES, 'UTF-8') ?>" width="<?= (int) $image['width'] ?>" height="<?= (int) $image['height'] ?>" loading="lazy" decoding="async">
                    </button>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>
<?php include 'includes/photo-viewer.php' ?>
<?php include 'includes/footer.php' ?>
