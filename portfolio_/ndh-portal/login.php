<?php $page="Login";?>
<?php include "elements/header.php";?>

<section class="pt--2 pb--2 bg--secondary text-center">
	<div class="container">
		<div class="row mb--1">
			<div class="col-12">
				<img src="assets/img/logo-dark.png" class="logo-height-20">
			</div>
		</div>
		<div class="row text-center">
			<div class="col-12 col-md-5 pos--relative">
				<div class="card login-signup box-shadow">
					<div class="card-body">
						<h3 class="card-title text-left font800">Login</h3>
						<p class="text-left">Don't have an account?
							<a href="signup">Create your account.</a>
						</p>
						<form>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                	<div class="input-group">
                                        <div class="input inside-icon">
                                        	<input class="form-control" type="email" placeholder="Email Address">
											<span><i class="icon-Email color--orange"></i></span>
											
										</div>
                                        
                                   </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group">
                                        <div class="input inside-icon">
                                        	<input class="form-control" type="password" placeholder="Password">
											<span><i class="icon-Lock-2 color--orange"></i></span>
											
										</div>
                                        
                                   </div>
                                </div>
                                <div class="col-12 text-center">
                                    <span class="type--fine-print">
                                        <a href="#">Forgot Password</a>
                                    </span>
                                </div>
                                <div class="col-12 col-md-6">
                                    <button type="submit" class="btn btn--primary type--uppercase mb--1">Login</button>
                                </div>
                                <div class="col-12 text-center">
                                    <span class="type--fine-print">
                                        Or Login with
                                    </span>
                                </div>

                                <div class="col-12">
                                	<ul class="list-inline">
                                		<li><a class="btn btn--social bg--facebook" href="#">
											<i class="socicon socicon-facebook"></i>
										</a></li>
										<li><a class="btn btn--social bg--googleplus" href="#">
											<i class="socicon socicon-googleplus"></i>
										</a></li>
										<li><a class="btn btn--social bg--twitter" href="#">
											<i class="socicon socicon-twitter"></i>
										</a></li>	
                                	</ul>
                                </div>
                            </div>
                            <!--end row-->
                        </form>

					</div>
					<img src="assets/img/login-wave.png" class="logo-wave pos-absolute pos-bottom">
				</div>
				
			</div>
		</div>

	</div>
	
</section>

<?php include "elements/footer.php";?>