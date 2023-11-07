<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php wp_title(':'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
    <header class="flex flex-row justify-between items-center">
        <a href="/" id="logo">
            <span>Humanity for Prisoners</span>
            <div class="bg-green-200 border rounded p-2">
                <a href="#">Donate</a>
                <a href="#">Faces of Humanity</a>
            </div>
        </a>
    </header>
