<?php $page ='Books';?>
<?php include 'elements/header.php'; ?>



<section class="space--md bg--secondary" id="search-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-12">
				<div class="search-box-1">
					<form >
						<div class="search-bar search-container-bar">
							<div class="toolbar-search">
								<div class="d-flex">
									<svg xmlns="http://www.w3.org/2000/svg" class="search-panel-query-icon" width="24px" height="24px" viewBox="0 0 24 24"> <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path> </svg>
									<input class="validate-required" type="text" name="My Input" placeholder="Search a book" />
									<div class="spacer"></div>
								</div>
							</div>
							<div class="toolbar-text">
								<div class="cat-dropdown">
									<!-- Example single dropdown button -->
									<div class="input-group-append">
									    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Year</button>
									    <div class="dropdown-menu">
									      <a class="dropdown-item" href="#">2020</a>
									      <a class="dropdown-item" href="#">2019</a>
									      <a class="dropdown-item" href="#">2018</a>
									      <a class="dropdown-item" href="#">2018</a>
									      
									    </div>
									</div>
								</div>

								<div class="input-text">
									<input type="text" name="" placeholder="Search a publisher">
								</div>
								<div class="spacer"></div>
								<div class="cat-dropdown second">
									<!-- Example single dropdown button -->
									<div class="input-group-append">
									    <button class="btn dropdown-toggle type--uppercase" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Subject</button>
									    <div class="dropdown-menu">
									      <a class="dropdown-item" href="#">Mathematics</a>
									      <a class="dropdown-item" href="#">Science</a>
									      <a class="dropdown-item" href="#">Economics</a>
									      <a class="dropdown-item" href="#">English</a>
									      
									    </div>
									</div>
								</div>
								<div class="cat-dropdown third">
									<!-- Example single dropdown button -->
									<div class="input-group-append">
									    <button class="btn dropdown-toggle type--uppercase" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type of School</button>
									    <div class="dropdown-menu">
									      <a class="dropdown-item" href="#">Primary 1</a>
									      <a class="dropdown-item" href="#">Primary 2</a>
									      <a class="dropdown-item" href="#">Primary 3</a>
									      <a class="dropdown-item" href="#">Primary 4</a>
									      <a class="dropdown-item" href="#">Primary 5</a>
									    </div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div id="category-dropdown" class="input-group-append d-inline-block">
						    <button class="btn dropdown-toggle rounded" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type of Government</button>
						    <div class="dropdown-menu">
						      <a class="dropdown-item" href="#">Private</a>
						      <a class="dropdown-item" href="#">Missionary</a>
						      <a class="dropdown-item" href="#">Owned</a>
						      
						      
						    </div>
						</div> -->
						
					</form>
					
				</div>
			</div>
		</div>
	</div>
</section>
<section class="list-of-book bg--secondary">
	<div class="container">
		<div class="row justify-content-center equal-container">
			<div class="col-12 text-center mb30">
				<h1>List of books</h1>
			</div>
            <div class="col-md-3 col-6 mb20">
                <div class="book feature"> 
                    <div class="pos-relative mb20">
                        <img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-1.png">
                        <label class="label label--primary">Primary 1</label>
                        <!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                            <span>View More</span>
                        </a> -->
                    </div>

                    <p class="publisher type--fine-print mb00">Rasmed Publication</p>
                    <h4 class="mb--0 font-1 mb00 equal">Civics Education for Primary Schools Bk 2</h4>
                    <p class="author-name">Igwe I. O. et al</p>
                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                     
                </div>
            </div>
			<div class="col-md-3 col-6 mb20">
                <div class="book feature"> 
                	<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-2.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                		
                	</div>
                    <p class="publisher type--fine-print mb00">Literamed Publication</p>
                    <h4 class="mb--0 font-1 mb00 equal">Brume: The Captain</h4>
                    <p class="author-name">Jane Agunabor</p>
                    	<!-- <h4 class="color--blue mb00">₦ 2000</h4> -->

                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                    
                    
                </div>
            </div>
           
            <div class="col-md-3 col-6 mb20">
                <div class="book feature"> 
                	<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-3.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                	</div>

                    <p class="publisher type--fine-print mb00">Literamed Publication</p>
                    <h4 class="mb--0 font-1 mb00 equal">Imuli’s Journey</h4>
                    <p class="author-name">Moses Olufemi</p>
                        <!-- <h4 class="color--blue mb00">₦ 2000</h4> -->

                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                    
                    
                </div>
            </div>
			<div class="col-6 col-md-3	 mb20">
				<div class="book feature"> 
					<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-4.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                	</div>
					<p class="publisher type--fine-print mb00">Evans Publication</p>
                    <h4 class="mb--0 font-1 mb00 equal">Modular English Course for Pry Sch Book 2</h4>
                    <p class="author-name">S. O. Ayodele et al</p>
				    
				    <a hrefbtn--sm ="#"class="btn btn--bordered-blue block rounded"><span class="btn__text type--uppercase">Add to cart</span></a>
				     
				</div>
			</div>
			<div class="col-md-3 col-6 mb20">

                <div class="book feature">
                	<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-5.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                	</div>
                	<p class="publisher type--fine-print mb00">Evans Publication</p>
                    <h4 class="mb--0 font-1 mb00 equal">Modular Primary Social Studies Book 2</h4>
                    <p class="author-name">Otite O. et al</p>

                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                    
                </div>
            </div>
            <div class="col-md-3 col-6 mb20">
                <div class="book feature"> 
                	<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-6.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                	</div>
                	<p class="publisher type--fine-print mb00">Oxford Univ Press</p>
                    <h4 class="mb--0 font-1 mb00 equal">My First Oxford Dictionary</h4>
                    <p class="author-name">Evelyn Goldsmith</p>

                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                     
                </div>
            </div>
            <div class="col-md-3 col-6 mb20">
                <div class="book feature"> 
                	<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-7.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                	</div>
                	<p class="publisher type--fine-print mb00">Nelson</p>
                    <h4 class="mb--0 font-1 mb00 equal">Agricultural Science for Primary Schools Book 2</h4>
                    <p class="author-name">Aiyegbayo J. T. et al</p>

                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                    
                </div>
            </div>
			<div class="col-6 col-md-3	 mb20">
				<div class="book feature"> 
					<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-8.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                	</div>
					<p class="publisher type--fine-print mb00">Nelson Publication</p>
                    <h4 class="mb--0 font-1 mb00 equal">Basic Science and Technology Book 2</h4>
                    <p class="author-name">Igwe I. O. et al</p>
				    
				    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
				     
				</div>
			</div>
			<div class="col-md-3 col-6 mb20">
                <div class="book feature">
                	<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-9.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                	</div>
                	<p class="publisher type--fine-print mb00">Evans Publication</p>
                    <h4 class="mb--0 font-1 mb00 equal">Primary Health Education Book 2</h4>
                    <p class="author-name">Ori-Aifo et al</p>

                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                    
                </div>
            </div>
            <div class="col-md-3 col-6 mb20">
                <div class="book feature"> 
                	<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-10.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                	</div>
                	<p class="publisher type--fine-print mb00">Bounty Press Ltd.</p>
                    <h4 class="mb--0 font-1 mb00 equal">Spelling Book 0</h4>
                    <p class="author-name">John Smith</p>
                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                     
                </div>
            </div>
            <div class="col-md-3 col-6 mb20">
                <div class="book feature"> 
                	<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-11.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                	</div>
                	<p class="publisher type--fine-print mb00">Structural Eng. Workbooks Book 2</p>
                    <h4 class="mb--0 font-1 mb00 equal">Imuli’s Journey</h4>
                    <p class="author-name">Ronald Ridouti</p>
                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                    
                </div>
            </div>
			<div class="col-6 col-md-3 mb20">
				<div class="book feature"> 
					<div class="pos-relative mb20">
                		<img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-12.png">
                		<label class="label label--primary">Primary 1</label>
                		<!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                			<span>View More</span>
                		</a> -->
                	</div>
					<p class="publisher type--fine-print mb00">Spectrum Books Ltd</p>
                    <h4 class="mb--0 font-1 mb00 equal">Imuli’s JourneThe Queen Primer – Part 2</h4>
                    <p class="author-name">Victoria Regina</p>
				    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
				     
				</div>
			</div>
            <div class="col-6 col-md-3 mb20">
                <div class="book feature"> 
                    <div class="pos-relative mb20">
                        <img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-1-13.png">
                        <label class="label label--primary">Primary 1</label>
                        <!-- <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                            <span>View More</span>
                        </a> -->
                    </div>
                    <p class="publisher type--fine-print mb00">Rasmed Publication</p>
                    <h4 class="mb--0 font-1 mb00 equal">New Approach to Verbal Reasoning Bk. 2</h4>
                    <p class="author-name">T.A.O. Olayiwola</p>
                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                     
                </div>
            </div>

            <!-- Primary 2 -->
            <div class="col-6 col-md-3 mb20">
                <div class="book feature"> 
                    <div class="pos-relative mb20">
                        <img alt="Pic" class="mb00" src="assets/img/book-1/primary-1-2/primary-2-1.png">
                        <label class="label label--primary">Primary 2</label>
                       <!--  <a href="#" class="justify-content-center align-items-center py-2 text-uppercase color--black border-bottom seemore">
                            <span>View More</span>
                        </a> -->
                    </div>
                    <p class="publisher type--fine-print mb00">Rasmed Publication</p>
                    <h4 class="mb--0 font-1 mb00 equal">Basic Creative and Cultural Arts Book 2</h4>
                    <p class="author-name">Kolade Salami</p>
                    <a href="#"class="btn btn--sm btn--bordered-blue block rounded "><span class="btn__text type--uppercase">Add to cart</span></a>
                     
                </div>
            </div>
		</div>
	</div>
</section>

<?php include 'elements/footer.php'; ?>