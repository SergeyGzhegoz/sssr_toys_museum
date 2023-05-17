<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Музей игрушек</title>
    <link rel="stylesheet" href="styleG.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- CSS 
<link rel="stylesheet" href="itc-slider/itc-slider.css">-->
<!-- JavaScript 
<script src="itc-slider/itc-slider.js" defer></script>-->
<?php wp_head();?>
</head>
<body>
    <header>
        <div class="main-menu">
            <div class="menu-wrapper">
                <p>Музей игрушек СССР</p>
                <nav class="menu main">
    <?php /*  Позволить экранным дикторам / текстовым браузерам пропускать меню навигации и переходить сразу к контенту. */ ?>
    <div class="skip-link screen-reader-text">
        <a title="Перейти к контенту" href="#content"> Перейти к контенту </a>
    </div>
    <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
                </nav><!-- .main -->
            </div>
        </div>
        <div class="banner">
            <div class="banner-left">
            </div>
            <p>Музей <br> игрушек <br> СССР</p>
            <div class="banner-right">
            </div>
        </div>
    </header>
