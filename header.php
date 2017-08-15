<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.1.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i">
  
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  

          <section class="menu cid-qsfI6tDpba" once="menu" id="menu1-0" data-rv-view="8">

    <nav class="navbar navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                         <img src="<?php echo get_template_directory_uri();?>/assets/assets/images/logo-152x157.png" alt="Mobirise" title="" media-simple="true" style="height: 4.4rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
            <?php
                  $menu_location=get_nav_menu_locations();
                  $menu_id=$menu_location['primary'];
                  $primarynav=wp_get_nav_menu_items($menu_id);

                  foreach ( $primarynav as $navItem ) {

                    echo '<li class="nav-item"><a class="nav-link link text-white display-4" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';

                  }
                  ?>
                        </ul>
            
        </div>
    </nav>
</section>