<!DOCTYPE html>
<html <?php language_attributes (); ?>>

<head>
    <meta charset="<?php bloginfo ('charset');?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo ('pingback_url');?>" />
    <?php if (is_singular () && get_option ('thread_comments')) wp_enqueue_script ('resposta do comentário'); ?>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/business-casual.min.css" rel="stylesheet">
    <?php wp_head (); ?>
</head>

<body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
        <span class="site-heading-lower">Business Casual</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <?php
                    $menuLocations = get_nav_menu_locations();
                    $menuID = $menuLocations['principal']; 
                    $primaryNav = wp_get_nav_menu_items($menuID);
                    foreach($primaryNav as $nav): ?>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="<?php echo $nav->url; ?>"><?php echo $nav->title; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>


        </div>
    </nav>