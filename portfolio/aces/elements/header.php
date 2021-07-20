
<!doctype html>
<html lang="en">
    <head>
        <?php
        // define('BASE_URL', 'http://localhost:8100/portfolio/aces/');
        define('BASE_URL','https://meonery-portfolio.herokuapp.com/portfolio/aces/');
        ?>
        <meta charset="utf-8">
        <title>Accelerated Compact Energy Solutions</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        <meta name="description" content="Site Description Here">
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous"/>
        <link href="assets/css/socicon.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous"/>
        <link href="assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <link href="assets/css/flickity.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <link href="assets/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <link href="assets/css/theme-red.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <link href="assets/css/extras.min.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="assets/css/global.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

        <?php if($page == 'Home') { ?>
            <link href="assets/css/home.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <?php } ?>

        <?php if($page == 'Projects') { ?>
            <link href="assets/css/project.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <?php } ?>

        <?php if($page == 'Services') { ?>
            <link href="assets/css/services.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <?php } ?>
        <?php if($page == 'Newsroom') { ?>
            <link href="assets/css/newsroom.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        <?php } ?>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap" rel="stylesheet">
        
    </head>
    <body class=" " data-smooth-scroll-offset='64'>
        
        <a id="start"></a>

        <?php include 'menu.php';?>
