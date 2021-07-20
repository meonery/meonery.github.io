<?php $page ='Books';?>
<?php include 'elements/header.php'; ?>
<section class="space--md bg--secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Cart Overview</h3>
                
                <hr>
            </div>
        </div>
        <!--end of row-->

        <div class="cart-overview">
        	<form class="cart-form">
        	    <div class="row">
        	        <div class="col-md-3">
        	            <div class="product-1">
        	                <div class="product__controls row align-items-center mb8">
        	                    <div class="col-3">
        	                        <label>Quantity:</label>
        	                    </div>
        	                    <div class="col-6">
        	                        <input type="text" name="quantity" value="1" placeholder="QTY" />
        	                    </div>
        	                    <div class="col-3 text-right">
        	                        <button class="checkmark checkmark--cross bg--error"></button>
        	                    </div>
        	                </div>
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
        	            <div class="product-1">
        	                <div class="product__controls row align-items-center mb8">
        	                    <div class="col-3">
        	                        <label>Quantity:</label>
        	                    </div>
        	                    <div class="col-6">
        	                        <input type="text" name="quantity" value="1" placeholder="QTY" />
        	                    </div>
        	                    <div class="col-3 text-right">
        	                        <button class="checkmark checkmark--cross bg--error"></button>
        	                    </div>
        	                </div>
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

        	    <div class="row jusify-content-center">
        	        <div class="col-lg-2 text-right text-center-xs">
        	            <button type="submit" class="btn btn--blue rounded type--uppercase ">
        	            	<span class="btn__text">Update Cart</span>
        	            </button>
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
        	                        <span>₦200</span>
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
        	    <div class="row justify-content-end mt8">
        	        <div class="col-lg-3 text-right text-center-xs">
        	            <!-- <button type="submit" class="btn btn--primary">Proceed &raquo;</button> -->
        	            <a href="checkout" class="btn btn--primary rounded"><span class="btn__text type--uppercase">Proceed &raquo;</span></a>
        	        </div>
        	    </div>
        	    <!--end of row-->
        	</form>
        	<!--end cart form-->
        </div>
    </div>
    <!--end of container-->
</section>

<?php include 'elements/footer.php'; ?>