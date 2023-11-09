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
                <ul class="flex flex-row justify-end m-3 space-x-3 socialMediaIcons">
                    <li class="rounded bg-[#4267B2] w-[40px] h-[40px] shadow">
                        <a href="https://www.facebook.com/humanityforprisoners/" class="flex items-center justify-center w-full h-full text-white">
                            <i class="text-2xl fa-brands fa-facebook-f"></i>
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li class="rounded bg-[#000] w-[40px] h-[40px] shadow">
                        <a href="https://twitter.com/humanity4prison" class="flex items-center justify-center w-full h-full text-white">
                            <i class="text-2xl fa-brands fa-x-twitter"></i>
                            <span>X (Twitter)</span>
                        </a>
                    </li>
                    <li class="rounded bg-[#fb0074] w-[40px] h-[40px] shadow">
                        <a href="https://www.instagram.com/humanityforprisoners/" class="flex items-center justify-center w-full h-full text-white">
                            <i class="text-2xl fa-brands fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
                    </li>
                    <li class="rounded bg-[#FF0000] w-[40px] h-[40px] shadow">
                        <a href="https://www.youtube.com/user/humanity4prisoners" class="flex items-center justify-center w-full h-full text-white">
                            <i class="text-2xl fa-brands fa-youtube"></i>
                            <span>Youtube</span>
                        </a>
                    </li>
                    <li class="rounded bg-[#f68221] w-[40px] h-[40px] shadow">
                        <a href="https://humanityforprisoners.blogspot.com/" class="flex items-center justify-center w-full h-full text-white">
                            <i class="text-2xl fa-brands fa-blogger-b"></i>
                            <span>Blogger</span>
                        </a>
                    </li>
                </ul>
            <div class="flex justify-between p-5 border-t-4 border-l-4 bg-beigeLight border-beigeMedium rounded-tl-3xl spacing-x-3">
                <a href="#" class="flex flex-col items-center content-center justify-start w-1/2 h-full text-center grow-1"><i class="p-5 mb-2 text-3xl text-white bg-black rounded-full fa-regular fa-heart w-fit max-w-fit"></i><span>Support Our Work</span></a>
                <a href="#" class="flex flex-col items-center content-center justify-start w-1/2 h-full text-center grow-1"><i class="p-5 mb-2 text-3xl text-white bg-black rounded-full fa-solid fa-ticket w-fit max-w-fit"></i><span>Purchase <em>Voices of Humanity</em> Tickets</span></a>
            </div>
            </div>
        </a>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a>
                <ul>
                    <li><a href="#">Our Board</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Volunteering</a></li>
                </ul>
            </li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Resources</a>
                <ul>
                    <li><a href="#">Newsletters</a></li>
                    <li><a href="#">Books</a></li>
                </ul>
            </li>
            <li><a href="#">Media</a>
                <ul>
                    <li><a href="#">Behind Bars</a></li>
                    <li><a href="#">Podcasts</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Testimonials</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>

    </nav>
 