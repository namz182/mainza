<?php require_once __DIR__ . '/social-icons.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainza Namangani</title>
    <script>
        (() => {
            const root = document.documentElement;
            try {
                const savedTheme = localStorage.getItem('mainza-theme');
                const theme = savedTheme === 'light' || savedTheme === 'dark'
                    ? savedTheme
                    : (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
                root.dataset.theme = theme;
                root.dataset.themeMode = savedTheme === 'light' || savedTheme === 'dark' ? 'manual' : 'system';
            } catch (error) {
                root.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                root.dataset.themeMode = 'system';
            }
        })();
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/app.css?v=<?php echo file_exists('assets/css/app.css') ? filemtime('assets/css/app.css') : '1'; ?>">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo filemtime('assets/css/styles.css'); ?>">
</head>

<body>
    <?php include "nav.php" ?>
