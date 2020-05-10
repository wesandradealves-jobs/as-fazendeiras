<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php echo get_locale(); ?>" xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
<head>
<meta charset="<?php echo get_bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo get_bloginfo('name').((!is_front_page()) ? ' - '.get_the_title() : ''); ?></title>