<!doctype html>
<html lang="en">
    <head>
        <?php
            define('BASE_URL','http://meonery-portfolio.herokuapp.com/portfolio/book-angel/');
            // define('BASE_URL','http://localhost:8100/portfolio/book-angel/');
        ?>
        <meta charset="utf-8">
        <title>Book Angel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href="<?php echo BASE_URL; ?>assets/css/stack-interface.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo BASE_URL; ?>assets/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <!-- <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="<?php echo BASE_URL; ?>assets/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo BASE_URL; ?>assets/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo BASE_URL; ?>assets/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
         <link href="<?php echo BASE_URL; ?>assets/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo BASE_URL; ?>assets/css/theme-yeller.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo BASE_URL; ?>assets/css/padding.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo BASE_URL; ?>assets/css/margin.min.css" rel="stylesheet" type="text/css" media="all" />
         <link href="<?php echo BASE_URL; ?>assets/css/hover.min.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link href="<?php echo BASE_URL; ?>assets/css/global.css" rel="stylesheet" type="text/css" media="all" />

        <?php if ($page == 'Home') { ?>
            <link href="<?php echo BASE_URL; ?>assets/css/home.css" rel="stylesheet" type="text/css" media="all" />
        <?php } ?>
        <?php if ($page == 'Donate') { ?>
            <link href="<?php echo BASE_URL; ?>assets/css/donate.css" rel="stylesheet" type="text/css" media="all" />
        <?php } ?>
        <?php if ($page == 'Books') { ?>
            <link href="<?php echo BASE_URL; ?>assets/css/books.css" rel="stylesheet" type="text/css" media="all" />
        <?php } ?>

        <link href="<?php echo BASE_URL; ?>assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900|Material+Icons" rel="stylesheet">

        <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.6d80b553.css"> -->
        
    </head>
    <body data-smooth-scroll-offset="77">
        <?php include 'menu.php'; ?>
        <div class="main-container">