<?php $page="Signup";?>
<?php include "elements/header.php";?>

<section class="height-100 bg--secondary text-center">
	<div class="container">
		<div class="row mb--1">
			<div class="col-12">
				<img src="assets/img/logo-dark.png" class="logo-height-20">
			</div>
		</div>
		<div class="row text-center ">
			<div class="col-12 col-md-8 pos--relative">
				<div class="card login-signup box-shadow">
					<div class="card-body">
						<h3 class="card-title text-left font800">Signup</h3>
						<p class="text-left">Already have an account?
							<a href="signup">Login.</a>
						</p>
						<form>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6">
                                	<div class="input-group">
                                        <div class="input inside-icon">
                                        	<input class="form-control" type="text" placeholder="Name">
											
											<span><i class="icon-User color--orange"></i></span>
										</div>
                                        
                                   </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <div class="input inside-icon">
                                        	<input class="form-control" type="type" placeholder="Address">
											<span><i class="icon-Geo2-Star color--orange"></i></span>
											
										</div>
                                        
                                   </div>
                                </div>

                                <div class="col-12 col-md-6">
                                	<div class="input-group">
                                        <div class="input inside-icon">
                                        	<input class="form-control" type="email" placeholder="Email Address">
											<span><i class="icon-Email color--orange"></i></span>
										</div>
                                        
                                   </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <div class="input inside-icon">
                                        	<input class="form-control" type="password" placeholder="Password">
											<span><i class="icon-Lock-2 color--orange"></i></span>
										</div>
                                        
                                   </div>
                                </div>
                                
                                <div class="col-12 col-md-4">
                                    <button type="submit" class="btn btn--primary type--uppercase mb--1 mt--1">Signup</button>
                                </div>
                                <div class="col-12 text-center">
                                    <span class="type--fine-print">
                                        Or Signup with
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