<!DOCTYPE html>
<html lang="en">

<head>
    <title>Скажите "А"</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/gif">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Uclean — Cleaning Service Website Template" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- CSS Files -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
</head>

<body>

    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <?php
            $site_logo = carbon_get_theme_option( 'site_logo' );
            $site_logo_src = wp_get_attachment_image_url($site_logo, 'full');
            $site_logo_src_webp = convertToWebpSrc($site_logo_src);
        ?>

        <!-- header begin -->
        <header class="header-light transparent">
            <div class="sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex xl-pt10">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <? if(carbon_get_theme_option( 'site_logo' )) { ?>
                                        <div class="main-header__logo">
                                            <a href="/">
                                                <img src="<?php echo $site_logo_src_webp; ?>" alt="logo" width="75">
                                                <div>
                                                    <div>Скажите «А»</div>
                                                    <div>ЛОР центр</div>
                                                </div>
                                            </a>
                                        </div>
                                    <? } ?>
                                    <!-- logo end -->
                                </div>
                                <div class="de-flex-col header-col-mid">
                                    <?php
                                        wp_nav_menu( [
                                            'theme_location'  => 'menu_main_header',
                                            'menu_id'       => 'mainmenu', 
                                            'menu_class'      => 'menu', 
                                        ] );
                                    ?>
                                </div>

                                <ul class="de-flex-col">
                                    <li class="search">
                                        <button id="quikSearchBtn" type="button" class="search-btn fw-bold text-dark"><i class="icofont-search-1"></i></button>
                                    </li>
                                    <li class="menu_side_area">
                                        <a href="#" class="btn-main btn-blue-2 bvi-open"><span>Для слабовидящих</span> <i class="fas fa-eye"></i></a>
                                    </li>
                                    <span id="menu-btn"></span>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- Search Box ==== -->
        <div class="nav-search-bar">
            <?php get_search_form(); ?>
            <span id="searchRemove"><i class="icofont-close-line"></i></span>
        </div>

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>