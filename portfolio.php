<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mayriele Nery | Frontend Developer</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" href="favicon.ico">
    <!-- <link rel="stylesheet" href="https://use.typekit.net/vmz2gfd.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/base.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/portfolio.css" />


</head>

<body class="loading">
    <div class="">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="row justify-content-end align-items-center">
                    <div class="col-5 col-md-3">
                        <a href="index">mayriele nery</a>
                    </div>
                    <div class="col-7 col-md-9">
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">about me</a>
                            </li>
                            <li class="nav-item">
                                <a href="portfolio.php" class="nav-link">works</a>
                            </li>
                            <li class="nav-item">
                                <a href="mailto:mmeonery@gmail.com" class="nav-link">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4" data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="500" data-aos-once="true">
                        <a href="portfolio/levene/">
                            <img src="img/portfolio-1.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="zoom-in-down" data-aos-delay="200" data-aos-duration="500" data-aos-once="true">
                        <a href="portfolio/book-angel/">
                            <img src="img/portfolio-2.jpg">
                        </a>
                    </div>
                    <div class="col-md-12 mb-4" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="500" data-aos-once="true">
                        <a href="portfolio/aces/">    
                            <img src="img/portfolio-3.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="zoom-in-down" data-aos-delay="200" data-aos-duration="500" data-aos-once="true">
                        
                            <img src="img/portfolio-4.jpg">
                        
                    </div>
                    <div class="col-md-6 mb-4" data-aos="zoom-in-down" data-aos-delay="300" data-aos-duration="500" data-aos-once="true">
                        <img src="img/portfolio-5.jpg">
                    </div>
                    <div class="col-md-12 mb-4" data-aos="zoom-in-down" data-aos-delay="400" data-aos-duration="500" data-aos-once="true">
                        <a href="portfolio/ndh-portal/">  
                            <img src="img/portfolio-6.jpg">
                        </a>    
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- <script src="js/imagesloaded.pkgd.min.js"></script> -->
    <script src="js/charming.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        // Preload all the images in the page
        imagesLoaded(document.querySelectorAll('.intro__img, .reel__img'), {
            background: true
        }, () => document.body.classList.remove('loading'));
    </script>
</body>

</html>