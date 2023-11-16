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
    

<nav class="bg-firefly border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

  <div class="flex md:order-2">
    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
      </svg>
      <span class="sr-only">Search</span>
    </button>
    <div class="relative hidden md:block">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search icon</span>
      </div>
      <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
    </div>
    <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
      <div class="relative mt-3 md:hidden">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
        </div>
        <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
      </div>
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'header-menu', //menu id
            'walker'  => new HFP_MenuWalker(), //use our custom walker,
            'container' => null,
            'menu_class' => 'flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700'
        ));
        ?>
      
      
    </div>
  </div>
</nav>

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
 