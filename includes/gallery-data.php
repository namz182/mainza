<?php
function gallery_images(): array
{
    $files = glob(__DIR__ . '/../assets/img/gallery/[0-9][0-9].webp') ?: [];
    sort($files, SORT_NATURAL);

    return array_map(static function (string $file): array {
        $size = getimagesize($file) ?: [0, 0];
        $number = (int) pathinfo($file, PATHINFO_FILENAME);

        return [
            'src' => 'assets/img/gallery/' . basename($file),
            'alt' => 'Gallery photo ' . $number,
            'width' => $size[0],
            'height' => $size[1],
        ];
    }, $files);
}
