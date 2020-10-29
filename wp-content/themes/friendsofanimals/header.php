<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri()?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri()?>/site.webmanifest">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/custom.css">

    <title>Friends of Animals Charaties</title>

    <?php wp_head()?>
</head>
<body>

    <div class="wrapper">
        <header>
            <nav>
                <div class="nav-link"><span>Menu</span></div>

                <?php wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'container' => 'ul',
                'menu_class' => 'vertical menu menu-main align-right'
                ) ); 
                ?>

            </nav>
        </header>