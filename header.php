<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>MoGo</title>
    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&family=Roboto:ital,wght@0,400;1,300&display=swap"
          rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
<div class="container">
    <div class="top-nav">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto">
                <div class="logo">
                    <p>MoGo</p>
                </div>
            </div><!-- /.col-md -->
            <div class="col-md-auto">
                <button class="top-nav_btn">
                    <i class="icon-menu"></i>
                </button>
                <?php wp_nav_menu( array(
                    'container'       => 'ul',
                    'container_class' => 'top-nav_menu',
                    'menu_class'      => 'top-nav_menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ) ); ?>
<!--                <ul class="top-nav_menu">
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">WORK</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>-->
            </div><!-- /.col-md -->
        </div><!-- /.row -->
        <div class="row justify-content-center align-items-center">
            <div class="col-md-auto">
                <div class="main_label kaush">
                    <p>Creative Template</p>
                </div>
            </div><!-- /.col-md -->
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-auto">
                <div class="welcome center">
                    <p>WELCOME<br/>TO MOGO</p>
                    <p>
                    <hr class="line"/>
                    </p>
                </div>
                <div class="center"><a href="#" class="button">LEARN MORE</a></div>
            </div><!-- /.col-md -->
        </div><!-- /.row -->
    </div><!-- /.top-nav -->