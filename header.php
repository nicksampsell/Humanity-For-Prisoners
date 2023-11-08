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
    <header class="flex flex-row justify-between items-center shadow bg-gradient-to-b from-[#56757A] to-[#4d696d] border-b-4">
        <a href="/" id="logo">
            <span>Humanity for Prisoners</span>
        </a>
            <div>
                <ul class="socialMediaIcons flex flex-row space-x-3 my-2">
                    <li><a href="https://www.facebook.com/humanityforprisoners/">
                        <i class="fa-brands fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="https://twitter.com/humanity4prison">
                        <i class="fa-brands fa-x-twitter"></i>
                        <span>X (Twitter)</span>
                    </a></li>
                    <li><a href="https://www.instagram.com/humanityforprisoners/">
                        <i class="fa-brands fa-instagram"></i>
                        <span>Instagram</span>
                    </a></li>
                    <li><a href="https://www.youtube.com/user/humanity4prisoners">
                        <i class="fa-brands fa-youtube"></i>
                        <span>Youtube</span>
                    </a></li>
                    <li><a href="https://humanityforprisoners.blogspot.com/">
                        <i class="fa-brands fa-blogger-b"></i>
                        <span>Blogger</span>
                    </a></li>
                </ul>
            <div class="bg-beigeLight border-t-4 border-l-4 border-beigeMedium rounded-tl-3xl p-5 flex justify-between spacing-x-3">
                <a href="#" class="flex flex-col justify-start text-center grow-1 items-center content-center w-1/2 h-full"><i class="fa-regular fa-heart bg-black w-fit p-5 rounded-full text-white text-3xl max-w-fit mb-2"></i><span>Support Our Work</span></a>
                <a href="#" class="flex flex-col justify-start text-center grow-1 items-center content-center w-1/2 h-full"><i class="fa-solid fa-ticket bg-black w-fit p-5 rounded-full text-white text-3xl max-w-fit mb-2"></i><span>Purchase <em>Voices of Humanity</em> Tickets</span></a>
            </div>
            </div>
        </a>
    </header>
 