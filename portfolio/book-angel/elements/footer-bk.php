        <?php if($page=='Home' || $page=='About') { ?>
            <section class="<?php if($page != 'Donate'){echo 'bg-dark-blue';}else{echo 'bg--secondary-2';} ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="imagebg height-30 border--round" data-overlay="4">
                                <div class="background-image-holder"><img alt="background" src="assets/img/home-1.jpg"></div>
                                <div class="pos-vertical-center boxed boxed--lg bg--none">
                                    <div class="row align-items-center text-left">
                                        <div class="col-12 col-md-6">
                                            <h3 class="mb00">Subscribe to our newsletter and receive exclusive offers every week</h3>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input type="text" name="email-address" placeholder="Enter your email address" class="form-control rounded">
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <button type="submit" class="btn btn--primary type--uppercase rounded">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <footer class="space--sm footer-1 bg--dark bg-dark-blue text-center-xs ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-5">
                        <a href="index">
                            <img alt="Image" class="logo" src="assets/img/logo-light.png">
                        </a>
                        <p class="mb50">
                            We collect and distribute books around Africa that give access to quality education to African Children.
                        </p>
                        <ul class="social-list list-inline list--hover mb-md-50">
                            <li><a href="#"><i class="socicon socicon-facebook icon icon--xs"></i></a></li>
                            <li><a href="#"><i class="socicon socicon-twitter icon icon--xs"></i></a></li>
                            <li><a href="#"><i class="socicon socicon-linkedin icon icon--xs"></i></a></li>
                            <li><a href="#"><i class="socicon socicon-instagram icon icon--xs"></i></a></li>
                            <li><a href="#"><i class="socicon socicon-youtube icon icon--xs"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2">
                        <h6 class="type--uppercase">How it works</h6>
                        <ul class="list--hover">
                            <li><a href="donate-book">Donate a Book</a></li>
                            <li><a href="request-book">Request for a Book</a></li>
                            <li><a href="buy-book">Buy a Book</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2">
                        <h6 class="type--uppercase">About Us</h6>
                        <ul class="list--hover">
                            <li><a href="about#projects">Projects</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2">
                        <h6 class="type--uppercase">Contact</h6>
                        <ul class="list--hover">
                            <li><a href="#">info@bookangel.com</a></li>
                            <li><a href="#">Hotline: +1 131 138 138</a></li>
                            
                        </ul>
                    </div>
                </div>
               
            </div>
            <hr>
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <div class="col-12 col-md-9">
                        <p class="type--fine-print type--uppercase mb00">Book Angel © 2020. All Rights Reserved.</p>
                    </div>
                    <div class="col-12 col-md-3 ">
                        <a href="#"><img src="assets/img/d-nds-light.png"></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/smooth-scroll.min.js"></script>
    <script src="assets/js/flickity.min.js"></script>
    <script src="assets/js/jquery.steps.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/helpers.min.js"></script>

    <script src="assets/js/scripts.js"></script>
   <script>
      AOS.init();
    </script>
    <script>
        $(function(){
            // Get a reference to the <path>
            var path = document.querySelector('.line-path');
            var path2 = document.querySelector('.line-path-2');

            // Get length of path... ~577px in this case
            var pathLength = path.getTotalLength();
            var pathLength2 = path2.getTotalLength();

            // Make very long dashes (the length of the path itself)
            path.style.strokeDasharray = pathLength + ' ' + pathLength;
            path2.style.strokeDasharray = pathLength2 + ' ' + pathLength2;


            // Offset the dashes so the it appears hidden entirely
            path.style.strokeDashoffset = pathLength;
            path2.style.strokeDashoffset = pathLength2;

            path.getBoundingClientRect();
            path2.getBoundingClientRect();

            // When the page scrolls...
            window.addEventListener("scroll", function(e) {
             
              var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
                var scrollPercentage2 = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
              // Length to offset the dashes
              var drawLength = pathLength * scrollPercentage;
              var drawLength2 = pathLength2 * scrollPercentage2;
              
              // Draw in reverse
              path.style.strokeDashoffset = pathLength - drawLength;
              path2.style.strokeDashoffset = pathLength2 - drawLength2;
                
              // When complete, remove the dash array, otherwise shape isn't quite sharp
             // Accounts for fuzzy math
              if (scrollPercentage >=0.22) {
                path.style.strokeDasharray = "30px";
                path2.style.strokeDasharray = "30px";
                
              } else {
                path.style.strokeDasharray = pathLength + ' ' + pathLength;
                path2.style.strokeDasharray = pathLength2 + ' ' + pathLength2;
              }
              
            });
        });
    </script>

    </body>

</html>