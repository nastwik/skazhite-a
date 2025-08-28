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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <?php wp_head(); ?>
</head>

<body>

    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="header-light transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex xl-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div class="main-header__logo">
                                    <a href="/">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" width="75">
                                        <div>
                                            <div>Скажите «А»</div>
                                            <div>ЛОР центр</div>
                                        </div>
                                    </a>
								</div>
                                <!-- logo end -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="index.php">Главная</a>
                                    </li>
                                    <li><a class="menu-item" href="about.php">О центре</a></li>
                                    <li><a class="menu-item" href="services.php">Услуги</a>
                                        <ul>
                                            <li><a class="menu-item" href="categories.php">Категории</a></li>
                                            <li><a class="menu-item" href="price.php">Прайс</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="archive-doctors.php">Врачи</a>
                                        <ul>
                                            <li><a class="menu-item" href="single-doctor.php">Князева О.А.</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="price.php">Цены</a></li>
                                    <li><a class="menu-item" href="#">Документы</a>
                                        <ul>
                                            <li><a class="menu-item" href="documents.php">Информация о юридическом лице</a></li>
                                            <li><a class="menu-item" href="#">Правовая информация</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="contacts.php">Контакты</a></li>
                                </ul>
                            </div>
                            
                            <div class="de-flex-col">
                                <div id="init" class="search">
                                    <a href="#" class="fw-bold text-dark" id="search-button">
                                        <i class="icofont-search-1"></i>
                                    </a>
                                </div>

                                <div id="myOverlay" class="search-overlay"> 
                                    <div class="overlay-content">
                                        <div class="overlay-header">
                                            <div class="middle-title">Поиск</div>
                                            <button class="closebtn"><i class="icofont-close"></i></button>
                                        </div>
                                        <div class="search-group">
                                            <form action="action_page.php" style="flex-grow: 1; display: flex;">
                                                <input type="text" placeholder="Введите для поиска" name="search" required>
                                            </form>
                                            <button type="submit" class="search-group__btn"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu_side_area">   
                                    <a href="#" class="btn-main btn-blue-2">Версия для слабовидящих</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>