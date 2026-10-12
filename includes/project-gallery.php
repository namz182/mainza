<?php
function project_gallery(array $images, string $projectName): string
{
    $visibleImages = array_slice($images, 0, 4);
    $remainingCount = max(0, count($images) - count($visibleImages));
    $layout = count($visibleImages) === 1 ? 'single' : (count($visibleImages) === 2 ? 'double' : 'multiple');
    $markup = '<div class="project-gallery project-gallery--' . $layout . '">';

    foreach ($visibleImages as $index => $image) {
        $fullImageUrl = htmlspecialchars($image, ENT_QUOTES, 'UTF-8');
        $alt = htmlspecialchars($projectName . ' screenshot ' . ($index + 1), ENT_QUOTES, 'UTF-8');
        $number = $index + 1;
        $markup .= '<a class="gallery-thumb" href="' . $fullImageUrl . '" target="_blank" rel="noopener noreferrer" aria-label="Open ' . $alt . ' full size">';
        $markup .= '<img src="' . $fullImageUrl . '" alt="' . $alt . '" loading="lazy">';

        if ($index === count($visibleImages) - 1 && $remainingCount > 0) {
            $markup .= '<span class="gallery-more">+' . $remainingCount . '</span>';
        }

        $markup .= '</a>';
    }

    return $markup . '</div>';
}
