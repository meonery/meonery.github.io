        <?php if($page=='Home' || $page=='About') { ?>
            <section class="<?php if($page != 'Donate'){echo 'bg-dark-blue';}else{echo 'bg--secondary-2';} ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="imagebg height-30 border--round" data-overlay="4">
                                <div class="background-image-holder"><img alt="background" src="<?php echo BASE_URL; ?>assets/img/home-1.jpg"></div>
                                <div class="pos-vertical-center boxed boxed--lg bg--none">
                                    <div class="row align-items-center text-left">
                                        <div class="col-12 col-md-6">
                                            <h3 class="mb00">Subscribe to our newsletter to know the latest on the needs, and impact</h3>
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
                            <img alt="Image" class="logo" src="<?php echo BASE_URL; ?>assets/img/logo-light.png">
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
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-12 text-center mb-3">
                        <p class="type--fine-print type--uppercase mb00">Book Angel © 2020. All Rights Reserved.</p>
                    </div>
                    
                </div>
            </div>
        </footer>
    </div>
    
    <script src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </body>
    <script src="<?php echo BASE_URL; ?>assets/js/parallax.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/smooth-scroll.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/flickity.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.steps.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/helpers.min.js"></script>

    <script src="<?php echo BASE_URL; ?>assets/js/scripts.js"></script>
    
    <!-- <script>var countries_config = {
      ms: "events",
      version: 7
    };</script>
    <script src="<?php echo BASE_URL; ?>assets/js/src.a2b27638.js"></script> -->
   <script>
      AOS.init();
    </script>
    <script>
        // image gallery
        // init the state from the input
        $(".image-checkbox").each(function () {
          if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
            $(this).addClass('image-checkbox-checked');
          }
          else {
            $(this).removeClass('image-checkbox-checked');
          }
        });

        // sync the state to the input
        $(".image-checkbox").on("click", function (e) {
          $(this).toggleClass('image-checkbox-checked');
          var $checkbox = $(this).find('input[type="checkbox"]');
          $checkbox.prop("checked",!$checkbox.prop("checked"))

          e.preventDefault();
        });
    </script>

    </body>

</html>