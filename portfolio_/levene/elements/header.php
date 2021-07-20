<?php
    // define('BASE_URL', 'http://localhost:8100/portfolio/levene/');
    define('BASE_URL','https://meonery-portfolio.herokuapp.com/portfolio/levene/');
    ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $page; ?> | Levene Energy Group</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
        <link href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo BASE_URL; ?>/assets/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous"/>
        <link href="<?php echo BASE_URL; ?>/assets/css/socicon.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous"/>
        <link href="<?php echo BASE_URL; ?>/assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <link href="<?php echo BASE_URL; ?>/assets/css/flickity.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <link href="<?php echo BASE_URL; ?>/assets/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <link href="<?php echo BASE_URL; ?>/assets/css/theme-greensea.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <link href="<?php echo BASE_URL; ?>/assets/css/extras.min.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="<?php echo BASE_URL; ?>/assets/css/global.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

        <?php if($page == 'Home') { ?>
            <link href="<?php echo BASE_URL; ?>/assets/css/home.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <?php } ?>
        <?php if($page == 'Corporate Social Responsibility') { ?>
            <link href="<?php echo BASE_URL; ?>/assets/css/csr.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <?php } ?>
        <?php if($page == 'Media' || $page == 'Newsroom' || $page == 'Publications') { ?>
            <link href="<?php echo BASE_URL; ?>/assets/css/media.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <?php } ?>

        <link href="<?php echo BASE_URL; ?>/assets/css/custom.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700,800,900&display=swap" rel="stylesheet">
        
    </head>
   <!-- <?php if($page == 'Home'){include 'loader.php';}?> -->
    <body class=" " data-smooth-scroll-offset='64'>
        
        <a id="start"></a>

        <?php include 'menu.php';?>
