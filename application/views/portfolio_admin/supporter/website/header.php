<!DOCTYPE html>
<html lang="en" data-random-animation="false" data-animation="19">

    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="vcard, resume, personal, portfolio, cv, card, responsive" />
        <meta name="description" content="vCard / Resume / Personal Template" />
        <meta name="author" content="cosmos-themes" />
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <!--Plugins Css-->
        <link rel="stylesheet" href="<?php echo base_url('public/css/plugins.css'); ?> ">
        <!--Main Styles Css-->
        <link rel="stylesheet" href="<?php echo base_url('public/css/style-dark.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('public/css/style-demo.css'); ?>">
        <!--Color Css-->
        <link class="site-color" rel="stylesheet" href="<?php echo base_url('public/css/blue-color.css'); ?>">
        <!--Modernizr Js-->
        <script src="<?php echo base_url('public/js/modernizr.js'); ?>"></script>
        <!--Favicons-->
        <link rel="shortcut icon" href="<?php echo base_url('public/img/favicon.jpg'); ?>" type="image/x-icon">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122650090-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-122650090-3');
        </script>        
    </head>

    <!--Preloader Start-->
    <div class="preloader">
        <div class="loader">
            <h4><?php echo $_SESSION['logged_in']['name'] . " | " . "PORTFOLIO" ?></h4>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--Preloader End-->

    <div id="page">

        <!--Header Start-->
        <header>
            <div class="header-content">

                <!--Mobile Header-->
                <div class="header-mobile">
                    <a class="header-toggle"><i class="fas fa-bars"></i></a>
                    <h2><?php echo $_SESSION['logged_in']['name'] ?></h2>
                </div>

                <!--Main Header-->
                <div class="header-main" data-simplebar>
                    <div class="image-container">
                        <h2 class="header-name"><?php echo $_SESSION['logged_in']['name'] ?></h2>
                        <img src="<?php echo base_url('./public/admin/user_picture/') . '/' . $_SESSION['logged_in']['picture'] ?>" alt="profile-pic">
                    </div>

                    <!--Nav Menus-->
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="<?php echo site_url('Website/home'); ?>" class="pt-link active"><span class="nav-menu-icon"><i class="lnr lnr-home"></i></span>Home </a> </li>
                            <li><a href="<?php echo site_url('Website/about'); ?>" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-user"></i></span>About Me</a></li>
                            <li><a href="<?php echo site_url('Website/resume'); ?>" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-license"></i></span>Resume</a></li>
                            <li><a href="<?php echo site_url('Website/portfolio'); ?>" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-briefcase"></i></span>Portfolio</a></li>
                            <li><a href="<?php echo site_url('Website/blog'); ?>" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-book"></i></span>Blog</a></li>
                            <li><a href="<?php echo site_url('Website/contact'); ?>" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-envelope"></i></span>Contact</a></li>
                            <li><a href="<?php echo site_url('login/logout'); ?>" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-exit"></i></span>LogOut</a></li>
                            <li><a href="<?php echo site_url('Dashboard'); ?>" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-cog"></i></span>Dashboard</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!--Header End-->
        <!--Main Start-->
        <div id="main" class="site-main">
