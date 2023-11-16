<?php
add_theme_support( 'title-tag' );
include('inc/HFP_MenuWalker.php');

function register_hfp_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
       )
     );
   }
   add_action( 'init', 'register_hfp_menus' );