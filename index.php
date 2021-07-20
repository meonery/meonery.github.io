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


</head>

<body class="loading">
    <main>
        <div class="content content--grid content--second">
            <h3 class="content__title">Mayriele <br/>Nery</h3>
            <!-- <p class="content__text">All photographs are memento mori. To take a photograph is to participate in another person’s (or thing’s) mortality, vulnerability, mutability. Precisely by slicing out this moment and freezing it, all photographs testify to time’s relentless melt.</p> -->
            <div class="content__text">
                <p>Hi, I’m Mayriele. Nice to meet you.</p>
                <p>Finds passion in creating interactive and awesome websites for web and mobile devices.</p>
                <p>Well-organized, high attention to details, highly drive to meet deadlines, experienced in communicating with the creative team and clients. A fan of TV Series and outdoor activities. </p>
                <p>Interested in user interface development and working on ambitious projects with positive people.</p>
            </div>

            <!-- <div class="social">
					<a class="social__link" href="https://www.instagram.com/codropsss/">In</a>
					<a class="social__link" href="https://twitter.com/codrops">Tw</a>
				</div> -->
            <div class="reel">
                <div class="phone-box-1">
                    <img src="img/iphone-white.png" class="reel__img">
                </div>

                <div class="phone-box-2">
                    <img src="img/iphone-orange.png" class="reel__img">
                </div>


                <!-- <img class="reel__img" src="img/4.jpg" alt="Some image" /><span class="reel__number">003</span>
					<img class="reel__img" src="img/5.jpg" alt="Some image" /><span class="reel__number">004</span> -->
            </div>
            <!-- <div class="select">
					<h4 class="select__heading">select</h4>
					<a class="select__item select__item--current">all</a>
					<a class="select__item">portraits</a>
					<a class="select__item">b &amp; w</a>
					<a class="select__item">nude</a>
				</div> -->
            <button class="content__back" aria-label="Back to main view"></button>
        </div>
        <div class="content content--first">
            <!-- only rotated -->
            <div class="content__move">
                <!-- sized and moved -->
                <div class="content__reverse">
                    <div class="intro">
                        <div class="frame">
                            <div class="frame__title-wrap">
                                <h1 class="frame__title">Mayriele Nery</h1>

                            </div>
                            <div class="frame__demos">

                                <a href="mailto:meonery@gmail.com" class="frame__demo">contact</a>

                            </div>
                        </div>
                        <div class="intro__img" style=""></div>
                        <h2 class="intro__title">A creative frontend developer and a web designer.</h2>
                        <!-- <p class="intro__desc"></p> -->
                        <div class="links">
                            <a href="#" class="intro__enter">about me</a>
                            <span class="divider">|</span>
                            <a href="portfolio.php" class="intro__enter">view works</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/charming.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/scripts.js"></script>

    <script>
        // Preload all the images in the page
        imagesLoaded(document.querySelectorAll('.intro__img, .reel__img'), {
            background: true
        }, () => document.body.classList.remove('loading'));
    </script>
</body>

</html>