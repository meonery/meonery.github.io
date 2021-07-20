
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // define('BASE_URL', 'http://localhost:8100/portfolio/ndh-portal/');
        define('BASE_URL','https://meonery-portfolio.herokuapp.com/portfolio/ndh-portal/');
    ?>
	<title>Nextdayhost</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- StackIcons -->
    <link href="assets/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous">

    <!-- MaterialIcons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Flaticons -->
    <link href="assets/css/flaticon.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

    <!-- iconsMind -->
    <link href="assets/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

    <!-- SocialIcons -->
    <link href="assets/css/socicon.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

    <!-- Lightbox -->
    <link href="assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Spacing -->
    <link href="assets/css/spaces.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

    <!-- Flickity -->
    <link href="assets/css/flickity.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" /><link href="assets/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous">

    <!-- Theme -->
    <link href="assets/css/theme-tangerine.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

    <link href="assets/css/aos.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />

    <link href="assets/css/global.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
    
    <?php if($page=='Home') { ?>
    	<link href="assets/css/home.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
    <?php } ?>

    <?php if($page=='About') { ?>

        <link href="assets/css/about.css" rel="stylesheet" type="text/css" media="all" crossorigin="anonymous" />
    <?php } ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">

	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">	 -->
</head>

<body data-smooth-scroll-offset="77">
	
	<?php include 'elements/menu.php';?>

	<div class="main-container">