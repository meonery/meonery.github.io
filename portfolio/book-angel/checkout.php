<?php $page ='Books';?>
<?php include 'elements/header.php'; ?>
<section class="space--md">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Checkout</h3>
                
                <hr>
            </div>
        </div>
        <!--end of row-->
        <div class="container">
        	<form class="cart-form checkout">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product">
                            <span class="label">QTY: 1</span>
                            <img alt="Image" src="assets/img/cart/cart-1.jpg" />
                            <div>
                                <p class="publisher type--fine-print mb00">Evans Publication</p>
        	                	   
        	                    <h5 class="mb00">Modular Primary Social Studies Book 2</h5>
        	                    <span> Otite O. et al</span>
                            </div>
                            <div>
                                <span class="h4 inline-block price">₦849</span>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                    <div class="col-md-3">
                        <div class="product">
                            <span class="label">QTY: 1</span>
                            <img alt="Image" src="assets/img/cart/cart-1.jpg" />
                            <div>
                                <p class="publisher type--fine-print mb00">Evans Publication</p>
        	                	   
        	                    <h5 class="mb00">Modular Primary Social Studies Book 2</h5>
        	                    <span> Otite O. et al</span>
                            </div>
                            <div>
                                <span class="h4 inline-block price">₦849</span>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                </div>
                <!--end of row-->
                <div class="row justify-content-end">
                    <div class="col-lg-2 text-right text-center-xs">
                        <button type="submit" class="btn type--uppercase">Revise Cart</button>
                    </div>
        	    </div>
        	    <hr>
	        	<div class="row justify-content-center">
	                <div class="col-md-12 col-lg-8 cart-customer-details">
	                    <h4>Billing Details</h4>
	                    <p>Already a customer?
	                        <a href="#">Log in here</a>
	                    </p>
	                    <div class="row">
	                        <div class="col-md-6">
	                            <label>First Name:</label>
	                            <input type="text" name="name" />
	                        </div>
	                        <div class="col-md-6">
	                            <label>Surname:</label>
	                            <input type="text" name="surname" />
	                        </div>
	                        <div class="col-md-6">
	                            <label>Company Name:</label>
	                            <input type="text" name="company" />
	                        </div>
	                        <div class="col-md-6">
	                            <label>Email Address:</label>
	                            <input type="email" name="email" />
	                        </div>
	                        <div class="col-md-6">
	                            <label>Country:</label>
	                            <div class="input-select">
	                                <select name="country">
	                                    <option value="Default">Select Country</option>
	                                    <option value="Nigeria" selected="">Nigeria</option>
	                                   
	                                </select>
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <label>State:</label>
	                            <div class="input-select">
									<select>
										<option selected="" value="Default">Select State</option>
										<option value="2">Abia</option>
										<option value="3">Adamawa </option>
										<option value="4">Akwa Ibom</option>
										<option value="5">Anambra</option>
										<option value="6">Bauchi</option>
										<option value="7">Bayelsa</option>
										<option value="8">Benue</option>
										<option value="9">Borno</option>
										<option value="10">Cross River</option><option value="11">Delta</option><option value="12">Ebonyi</option><option value="13">Edo</option><option value="39">Ekiti</option><option value="15">Enugu</option><option value="37">Federal Capital Territory</option><option value="16">Gombe</option><option value="17">Imo</option><option value="18">Jigawa</option><option value="19">Kaduna</option><option value="20">Kano</option><option value="21">Katsina</option><option value="22">Kebbi</option><option value="23">Kogi</option><option value="52">Kwara</option><option value="1">Lagos</option><option value="25">Nasarawa</option><option value="26">Niger</option><option value="96">Nigeria</option><option value="27">Ogun</option><option value="28">Ondo</option><option value="29">Osun</option><option value="30">Oyo</option><option value="31">Plateau</option><option value="32">Rivers </option><option value="33">Sokoto</option><option value="34">Taraba</option><option value="35">Yobe</option><option value="36">Zamfara</option>
										
									</select>
								</div>
	                        </div>
	                        <div class="col-md-12">
	                            <label>Street Address:</label>
	                            <input type="text" name="apt" placeholder="Apartment / Suite No." />
	                            <input type="text" name="street" placeholder="Street Address" />
	                            <input type="text" name="town" placeholder="Town / Suburb" />
	                            <input type="text" name="postcode" placeholder="Post Code" />
	                        </div>
	                        <div class="col-md-12">
	                            <div class="input-checkbox">
	                                <input type="checkbox" name="account" />
	                                <label></label>
	                            </div>
	                            <span>
	                                <a href="#">Create an account</a>
	                            </span>
	                        </div>
	                        <div class="col-md-12">
	                            <label>Additional instructions (optional):</label>
	                            <textarea rows="4" name="instructions"></textarea>
	                        </div>
	                    </div>
	                    <!--end of row-->
	                </div>
	            </div>
	            <!--end of row-->
	            <div class="row mt--2">
	                <div class="col-md-12">
	                    <div class="boxed boxed--border cart-total">
	                        <div class="row">
	                            <div class="col-6">
	                                <span class="h5">Cart Subtotal:</span>
	                            </div>
	                            <div class="col-6 text-right">
	                                <span>₦989.98</span>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-6">
	                                <span class="h5">Shipping (Other places):</span>
	                            </div>
	                            <div class="col-6 text-right">
	                                <span>₦39</span>
	                            </div>
	                        </div>
	                        <hr />
	                        <div class="row">
	                            <div class="col-6">
	                                <span class="h5">Total:</span>
	                            </div>
	                            <div class="col-6 text-right">
	                                <span class="h5">₦1,028.98</span>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!--end of row-->
	            <div class="row justify-content-end">
	                <div class="col-lg-2 col-md-3 text-right text-center-xs">
	                    <button type="submit" class="btn btn--primary type--uppercase">Checkout</button>
	                </div>
	            </div>
	            <!--end of row-->
	        </form>
	        <!--end checkout form-->
	    </div>

         <!--end of container-->
</section>

<?php include 'elements/footer.php'; ?>