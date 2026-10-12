<?php
function project_open_link(?string $url): string
{
    if ($url === null || trim($url) === '') {
        return '';
    }

    $scheme = parse_url($url, PHP_URL_SCHEME);
    if (!in_array(strtolower((string) $scheme), ['http', 'https'], true)) {
        return '';
    }

    $safeUrl = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');

    return '<a class="project-open-link" href="' . $safeUrl . '" target="_blank" rel="noopener noreferrer">'
        . '<span>Open project</span><i data-lucide="external-link" aria-hidden="true"></i></a>';
}
