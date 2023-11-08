<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php wp_title(':'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <script src="https://kit.fontawesome.com/d20cb14b94.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="flex flex-row justify-between items-center bg-mutedBlueGreen">
        <a href="/" id="logo">
            <span>Humanity for Prisoners</span>
            <div class="bg-green-200 border rounded p-2 flex justify-between spacing-x-3">
                <a href="#" class="flex flex-col justify-center text-center grow-1"><i class="fa-regular fa-heart bg-black w-fit p-5 rounded-full text-white text-3xl max-w-fit"></i><span>Support Our Work</span></a>
                <a href="#" class="flex flex-col justify-center text-center grow-1"><i class="fa-solid fa-ticket bg-black w-fit p-5 rounded-full text-white text-3xl max-w-fit"></i><span>Purchase <em>Voices of Humanity</em> Tickets</span></a>
            </div>
        </a>
    </header>
