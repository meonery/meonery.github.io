<!DOCTYPE html>
<html lang="en" class="no-js">
    <head >
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Mayriele Nery - Frontend Developer</title>
        <link type="text/plain" rel="author" href="humans.txt" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="msapplication-tap-highlight" content="no" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/css/application.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            body {
                background-color: #252a60 !important;
            }
            body.loaded {
                background-color: #f3f3f3 !important;
            }
            #page-wrap {
                opacity: 0;
            }
            .loaded #page-wrap {
                opacity: 1;
            }
            @-webkit-keyframes "stripe" {
                0% {
                    left: 0;
                    width: 0px;
                }
                25% {
                    left: 0;
                    width: 100%;
                }
                50% {
                    left: 100%;
                    width: 0px;
                }
                75% {
                    left: 0;
                    width: 100%;
                }
                100% {
                    left: 0;
                    width: 0px;
                }
            }
            @keyframes "stripe" {
                0% {
                    left: 0;
                    width: 0px;
                }
                25% {
                    left: 0;
                    width: 100%;
                }
                50% {
                    left: 100%;
                    width: 0px;
                }
                75% {
                    left: 0;
                    width: 100%;
                }
                100% {
                    left: 0;
                    width: 0px;
                }
            }
            #loader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #252a60;
                opacity: 1;
                visibility: visible;
                transition: opacity 0.7s, visibility 0.7s, z-index 0.7s;
                z-index: 61;
            }
            #loader.is-hidden {
                opacity: 0;
                visibility: hidden;
                z-index: -1;
            }
            .no-js #loader {
                display: none;
            }
            .loader-content {
                position: absolute;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                width: 300px;
                height: 90px;
                overflow: hidden;
                opacity: 1;
                visibility: visible;
                transition: all 0.25s ease;
                z-index: 70;
            }
            .loader-content.is-hidden {
                opacity: 0;
                visibility: hidden;
            }
            .loader-content > * {
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
            }
            .stripe-loader {
                width: 100%;
                height: 90px;
            }
            .stripe {
                height: 30px;
                width: 0;
                background: #ffffff;
                position: relative;
                margin: 0;
            }
            .stripe:first-child {
                -webkit-animation: stripe 1.5s cubic-bezier(0.694, 0.048, 0.335, 1) infinite;
                animation: stripe 1.5s cubic-bezier(0.694, 0.048, 0.335, 1) infinite;
            }
            .stripe:nth-child(2) {
                -webkit-animation: stripe 1.5s cubic-bezier(0.694, 0.048, 0.335, 1) 0.1s infinite;
                animation: stripe 1.5s cubic-bezier(0.694, 0.048, 0.335, 1) 0.1s infinite;
            }
            .stripe:nth-child(3) {
                -webkit-animation: stripe 1.5s cubic-bezier(0.694, 0.048, 0.335, 1) 0.2s infinite;
                animation: stripe 1.5s cubic-bezier(0.694, 0.048, 0.335, 1) 0.2s infinite;
            }
            #loader-after {
                position: fixed;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background-color: #1c1d25;
                opacity: 1;
                visibility: visible;
                transition: opacity 0.7s, visibility 0.7s, z-index 0.7s;
                z-index: 62;
            }
            #loader-after.is-hidden {
                opacity: 0;
                visibility: hidden;
                z-index: -1;
            }
        </style>
         <link rel="stylesheet" href="assets/css/application.css" />
       
    </head>
    <body>
        <nav id="menu1" class="bar bar--sm bar-1 hidden-xs bar--absolute bar--transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 hidden-xs">
                        <div class="bar__module">
                            <a href="index.php">
                                <p class="logo logo-light">Mayriele Nery</p>
                                <p class="logo logo-dark">Mayriele Nery</p>
                                
                            </a>
                        </div>
                        <!--end module-->
                    </div>
                    <div class="col-lg-8 col-md-12 text-right text-left-xs text-left-sm">
                        <div class="bar__module">
                            <ul class="menu-horizontal text-left">
                                <li >
                                    <a href="about.php">About</a>
                                    
                                </li>
                                <li>
                                    <a href="portfolio.php">Portfolio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>