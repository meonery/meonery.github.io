<?php $page="Register";?>
<?php include 'elements/header.php'; ?> 

    <section class="imageblock switchable feature-large height-100 bg--secondary-2">
        <div class="imageblock__content col-lg-6 col-md-4 pos-right">
            <div class="background-image-holder">
                <img alt="image" src="assets/img/img-3.jpg" />
            </div>
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <h2>Create an account</h2>
                    <p class="lead"></p>
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <input type="email" name="Email Address" placeholder="Email Address" />
                            </div>
                            <div class="col-12">
                                <input type="password" name="Password" placeholder="Password" />
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn--primary type--uppercase">Create Account</button>
                            </div>
                            <div class="col-12">
                                <span class="type--fine-print">By signing up, you agree to the
                                    <a href="#">Terms of Service</a>
                                </span>
                            </div>
                        </div>
                        <!--end row-->
                    </form>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

<?php include 'elements/footer.php'; ?> 