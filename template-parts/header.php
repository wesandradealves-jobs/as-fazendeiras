<header class="normal light dark">


 <?php get_template_part('template-parts/topbar'); ?>
 	

 	
     <div id="up_topbar" class="topclass  enable_sticky">

	

 <div class="container">
 <div class="row">
 <div class="col-md-12 topnav-left centar">
 <div class="topbarmenu clearfix">
 <div id="logo" class="logocase">
 <a class="brand logofont" href="http://www.hc.useful-pixels.com/">
  <div id="uplogo">
   <img src="<?php echo get_theme_mod('logo'); ?>" alt="<?php echo get_bloginfo('name'); ?>" class="up-logo logo custom_sticky  " />

   <img src="<?php echo get_theme_mod('logo_shrink'); ?>" class="logo sticy-logo" alt="<?php echo get_bloginfo('name'); ?>" />   
   <img src="<?php echo get_theme_mod('logo_shrink'); ?>" class="logo retina-logo" alt="<?php echo get_bloginfo('name'); ?>" />  </div>
  </a>                      
 </div> <!-- logo span end -->
 </div>
 </div>
 <!-- topnav left center end -->
 <div class="navcenter">
 	
   
 <!-- <div class="search_menu">
   <a href="#ser" class="navsearch-icon">
   <i class="fa fa-search"></i></a>
 </div> -->
  <div class="topnav-right">
 <div class="topbarmenu clearfix">
 <nav id="nav-main" class="clearfix" role="navigation">
 <div class="menu-main-menu-container"><ul id="menu-main-menu" class="sf-menu"><?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s', 'container_class'=>'' ) ); ?> </ul></div> </nav> 
 </div>
 </div>
 </div>
 <!-- topnav-right -->
 </div> 
 <!-- Close Row --> 
 </div> 
 <!-- Close Container -->
 </div>	 	 
	 <!-- end Logo Centar -->  <div class="container_mob"> 
  <div id="mobile-up-trigger" class="nav-trigger">
 <a class="nav-trigger-case mobileclass collapsed" data-toggle="collapse" data-target=".up-nav-collapse">
 <div class="up-menu-icon"><i class="fa fa-bars"></i></div>
 </a> 
 </div>
 <div id="up-mobile-nav" class="up-mobile-nav"> 
 <div class="nav-inner mobileclass"> 
 <div class="up-nav-collapse"> 
 <div class="menu-mob-menu-container"><ul id="menu-mob-menu" class="up-mobnav"><?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s', 'container_class'=>'' ) ); ?> </ul></div> </div> 
 </div> 
 </div> 
  </div> 
 <!--  Mob menu end -->
 </header> 