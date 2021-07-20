<?php $page = 'Contact';?>
<?php include 'elements/header.php';?>
     <section class="unpad">
        <div class="map-container"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.631564219157!2d3.4432581145475027!3d6.4413354953398105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf56b73ef2923%3A0x790ed7c34dc8479b!2sLEVENE%20ENERGY%20GROUP!5e0!3m2!1sen!2sph!4v1575620360333!5m2!1sen!2sph"></iframe> </div>
    </section>
    <section class="switchable">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5"> <img alt="Image" class="border--round box-shadow-wide" src="assets/img/contact-1.jpg"> </div>
                <div class="col-md-6">
                    <div class="row switchable__text">
                        <div class="col-12">
                            <p class="lead"> E: <a href="#">info@leveneenergy.com</a><br> P: +234 (0) 906 294 8514 | +234 (0) 906 289 2970</p>
                            <p class="lead"> Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. </p>
                            <p class="lead"> We are open from 9am — 5pm week days. </p>
                            
                            <form class="form-email row" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly.">
                                <div class="col-md-6"> <label>Your Name:</label> <input type="text" name="Name" class="validate-required"> </div>
                                <div class="col-md-6"> <label>Email Address:</label> <input type="email" name="email" class="validate-required validate-email"> </div>
                                <div class="col-md-12"> <label>Message:</label> <textarea rows="4" name="Message" class="validate-required"></textarea> </div>
                                <div class="col-md-5 col-lg-4"> <button type="submit" class="btn btn--primary type--uppercase">Send Enquiry</button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

<?php include 'elements/footer.php';?>