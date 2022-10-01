<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Art and Design</title>
 <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/img/aD.png">
<?php  wp_head();  ?>
  <title>Library Art and Design</title>
 
  <script src="https://kit.fontawesome.com/42497b7395.js" crossorigin="anonymous"></script>

</head>

<body>

<div class="top">
 <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell align-center text-center">

        <nav class="navbar text-center">
          <div class="brand-title"> <img class="thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/aD.png">
          <a href="#" id="toggle-button" class="toggle-button" >
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </a>
</div>
</nav>
          <div id="demo" class="navbar-links" >
            <ul class="align-center">
              <!-- This demo uses float grid but you can use flex grid too -->

<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium" data-hide-for="small">
  <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      
      <li class="has-submenu">
       
<?php 

     wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
</div>
</div>
     </div>
     </div>
     </div>
     </div>
<?php
 
if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar( 'custom-header-widget' ); ?>
    </div>
     
<?php endif; ?>



