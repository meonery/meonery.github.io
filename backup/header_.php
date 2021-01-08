<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mayriele Nery | Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <style type="text/css">

        svg:not(:root) {
            overflow: hidden;
        }
        .tilter {
    display: block;
    position: relative;
    width: 300px;
    height: 415px;
    margin: 1.5em 2.5em;
    color: #fff;
    flex: none;
    perspective: 1000px;
}

.tilter * {
    pointer-events: none;
}

.tilter:hover,
.tilter:focus {
    color: #fff;
    outline: none;
}

/*
.tilter__figure,
.tilter__deco,
.tilter__caption {
    will-change: transform;
}*/

.tilter__figure,
.tilter__image {
    margin: 0;
    width: 100%;
    height: 100%;
    display: block;
}

.tilter__figure > * {
    transform: translateZ(0px); /* Force correct stacking order */
}

.smooth .tilter__figure,
.smooth .tilter__deco--overlay,
.smooth .tilter__deco--lines,
.smooth .tilter__deco--shine div,
.smooth .tilter__caption {
    transition: transform 0.2s ease-out;
}

.tilter__figure {
    position: relative;
}

.tilter__figure::before {
    content: '';
    position: absolute;
    width: 90%;
    height: 90%;
    top: 5%;
    left: 5%;
    box-shadow: 0 30px 20px rgba(35,32,39,0.5);
}

.tilter__deco {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.tilter__deco--overlay {
    background-image: linear-gradient(45deg, rgba(226, 60, 99, 0.4), rgba(145, 58, 252, 0.4), rgba(16, 11, 192, 0.4));
}

.tilter__deco--shine div {
    position: absolute;
    width: 200%;
    height: 200%;
    top: -50%;
    left: -50%;
    background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.5) 0%, rgba(255, 255, 255, 0.25) 50%, transparent 100%);
}

.tilter__deco--lines {
    fill: none;
    stroke: #fff;
    stroke-width: 1.5px;
}

.tilter__caption {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 4em;
}

.tilter__title {
    margin: 0;
    font-weight: normal;
    font-size: 2.5em;
    font-family: 'Abril Fatface', serif;
    line-height: 1;
}

.tilter__description {
    margin: 1em 0 0 0;
    font-size: 0.85em;
    letter-spacing: 0.15em;
}

/* Individual styles */

/* Example 1 (Default) */
.tilter--1 .tilter__figure::before {
    box-shadow: 0 30px 20px rgba(0,0,0,0.5);
}

/* Example 2 (thicker lines, overlay) */
.tilter--2,
.tilter--2:hover,
.tilter--2:focus {
    color: #2e27ad;
}

.tilter--2 .tilter__deco--overlay {
    background-image: linear-gradient(45deg, rgba(245, 239, 40, 0.6), rgba(164, 22, 169, 0.6));
}

.tilter--2 .tilter__deco--lines {
    stroke: #2e27ad;
    stroke-width: 4px;
}

/* Example 3 (no lines, overlay hard-light) */
.tilter--3 .tilter__deco--overlay {
    background-image: linear-gradient(45deg, rgba(205, 81, 220, 0.6), rgba(41, 94, 230,0.5));
}

.tilter--3 .tilter__caption {
    padding: 2em;
    text-align: right;
    text-shadow: 0.1em 0.8em 1em rgba(0,0,0,0.35);
}

/* Example 4 (caption sliding in) */
.tilter--4 .tilter__deco--overlay {
    background-image: linear-gradient(20deg, rgb(214, 100, 40), rgba(46, 39, 173, 0.58), rgba(53, 74, 165, 0.6));
}

@media screen and (min-width: 30em) {
    .tilter--4 .tilter__deco--lines {
        transform: scale3d(0.8,0.8,1);
        transition: transform 0.4s;
    }
    .tilter--4:hover .tilter__deco--lines {
        transform: scale3d(1,1,1);
    }
    .tilter--4 .tilter__title,
    .tilter--4 .tilter__description {
        transform: translate3d(0,80px,0);
        opacity: 0;
        transition: transform 0.4s, opacity 0.4s;
    }
    .tilter--4:hover .tilter__description {
        transition-delay: 0.1s;
    }
    .tilter--4:hover .tilter__title,
    .tilter--4:hover .tilter__description {
        transform: translate3d(0,0,0);
        opacity: 1;
    }
}

/* Example 5 (line animating) */
.tilter--5 .tilter__deco--lines path {
    stroke-dasharray: 1270;
    stroke-dashoffset: 1270;
    transition: stroke-dashoffset 0.7s;
}

.tilter--5:hover .tilter__deco--lines path {
    stroke-dashoffset: 0;
}

.tilter--5 .tilter__figure::before {
    box-shadow: none;
}

/* Example 6 (different line position) */
.tilter--6,
.tilter--6:hover,
.tilter--6:focus {
    color: #2e27ad;
}

.tilter--6 .tilter__deco--overlay {
    background-image: linear-gradient(45deg, rgba(46, 39, 173, 0.2), rgba(255, 186, 59, 0.58));
}

.tilter--6 .tilter__deco--lines {
    stroke: #2e27ad;
    stroke-width: 6px;
    top: -50px;
    left: -50px;
}

.tilter--6 .tilter__caption {
    padding: 0 4em 5.5em 1em;
}

.tilter--6 .tilter__figure::before {
    box-shadow: none;
}

/* Example 7 (different line) */
.tilter--7 .tilter__deco--overlay {
    background-image: linear-gradient(45deg, rgba(93, 203, 106, 0.48), rgba(59, 239, 255, 0.58));
}

.tilter--7 .tilter__deco--lines {
    stroke-width: 20px;
    transform: scale3d(0.9,0.9,1);
    opacity: 0;
    transition: transform 0.3s, opacity 0.3s;
}

.tilter--7:hover .tilter__deco--lines {
    opacity: 1;
    transform: scale3d(1,1,1);
}

.tilter--7 .tilter__figure::before {
    box-shadow: none;
}

/* Example 8 (different line) */
.tilter--8 {
    perspective: none;
}

.tilter--8 .tilter__figure {
    transform-style: flat;
}

.tilter--8 .tilter__deco--lines {
    stroke: #9255ae;
    stroke-width: 6px;
    mix-blend-mode: color-burn;
}

.tilter--8 .tilter__caption {
    color: #9255ae;
    mix-blend-mode: color-burn;
}

.tilter--8 .tilter__figure::before {
    box-shadow: none;
}

         #shapes-mask{
            
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: opacity .25s ease .65s;
            /*z-index: -3;*/
            opacity: 1;
            transition: opacity .45s ease .65s;
        }
        #shapes-mask svg path {
    stroke: inherit;
    fill: none;
}
#shapes-mask .layer1,
#shapes-mask .layer2 {
    position: absolute;
    z-index: 1;
}
#shapes-mask .p1 {
    left: 30%;
    top: 20%;
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}
#shapes-mask .p2 {
    left: 90%;
    top: 70%;
}
#shapes-mask .p3 {
    left: 100%;
    top: 20%;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
#shapes-mask .p4 {
    left: 70%;
    top: 20%;
}
#shapes-mask .p5 {
    left: 5%;
    top: 80%;
}
#shapes-mask .p5,
#shapes-mask .p6 {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
#shapes-mask .p6 {
    left: 2%;
    top: 20%;
}
#shapes-mask .p7 {
    left: 50%;
    bottom: 2%;
}
#shapes-mask .p8 {
    left: 85%;
    bottom: 4%;
}
#shapes-mask .p9 {
    left: 20%;
    top: 2%;
    -webkit-transform: rotate(65deg);
    transform: rotate(65deg);
}
#shapes-mask .p10 {
    left: 10%;
    bottom: 2%;
    -webkit-transform: rotate(85deg);
    transform: rotate(85deg);
}
#shapes-mask .p11 {
    left: 90%;
    top: 2%;
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}
#shapes-mask .pink {
    stroke: #f06449;
    fill: none;
}
#shapes-mask .yellow {
    stroke: #ff0;
    fill: none;
}
#shapes-mask .aqua {
    stroke: aqua;
    fill: none;
}

    </style>
    <body class="">
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
