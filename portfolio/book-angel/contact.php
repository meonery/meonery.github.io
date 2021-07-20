<?php $page ='Contact';?>
<?php include 'elements/header.php'; ?>   
    <section class="text-center bg--secondary-2">
        <div class="container">
            <div class="row  mt40 justify-content-center">
                <div class="col-md-12 col-12 mb-5">
                    <div class="map-container border--round" >
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=New York&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/friday-night-funkin-mods-fnf-play-online/">FNF Mods</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>

                    </div>
                </div>
                <div class="col-md-8 col-lg-6 col-12 mb40">
                    <h3>New York City</h3>
                    <p class="lead">
                        Email:
                        <a href="#">info@bookangel.com</a>
                        
                    </p>
                    <p class="lead">
                        Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.
                    </p>
                    <p class="lead">
                        We are open from 9am &mdash; 5pm week days.
                    </p>
                </div>
                <div class="col-md-8 col-lg-7">
                    <form class="text-left form-email row mx-0" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly." data-recaptcha-sitekey="6LewhCIUAAAAACSwFvBDhgtTbw6EnW6e9dip8o2u" data-recaptcha-theme="light">
                        <div class="col-md-6">
                            <label>Your Name:</label>
                            <input type="text" name="name" class="validate-required" />
                        </div>
                        <div class="col-md-6">
                            <label>Email Address:</label>
                            <input type="email" name="email" class="validate-required validate-email" />
                        </div>
                        <div class="col-md-12">
                            <label>Message:</label>
                            <textarea rows="6" name="Message" class="validate-required"></textarea>
                        </div>
                        <div class="col-md-5 col-lg-4">
                            <button type="submit" class="btn rounded  btn--lg btn--primary type--uppercase">Send Enquiry</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
   
<?php include 'elements/footer.php'; ?>