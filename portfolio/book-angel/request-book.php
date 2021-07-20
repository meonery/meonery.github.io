<?php $page ='Request';?>
<?php include 'elements/header.php'; ?>   

<section class="bg--secondary-2 pb00 pb-xs-80">
	<div class="container">

		<div class="row mt40">
			 <div class="col-md-12 col-12 mb-5">
			 	
			 	<div class="pos-relative">
			 		<img src="assets/img/hero-banner-5.svg" class="hidden-xs">
			 		<div class="pos-absolute pos-top p80 pos-relative-xs p-xs-0 pb-xs-30">
			 			<h2 class="font-600 color--blue">Request for book</h2>
			 			<p>Welcome to Book Angel. You can request a <br>book by filling out the form below</p>
			 		</div>
			 		
			 	</div>
			 </div>
		</div>
	</div>
</section>
<section class="height-100 bg--secondary-2 pb80">
    <div class="container pos-vertical-center">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">
                <form class="wizard long bg--secondary-2 text-center">
                    <h5 class="font-600 ">Personal Information</h5>
                    <section>
                        <div class="container pos-vertical-center">
                        	<h2 class="font-600">Personal Information</h2>
                            <div class="row justify-content-center">
                            	<div class="col-12 col-md-5 text-left mb20">
                            		<label class="text-left">First Name</label>
                            		<input type="text" name="firstname">
                            	</div>
                            	<div class="col-12 col-md-5 text-left mb20">
                            		<label class="text-left text-left">Last Name</label>
                            		<input type="text" name="firstname">
                            	</div>
                            	<div class="col-12 col-md-10 text-left mb20">
                            		<label class="text-left text-left">Email Address</label>
                            		<input type="email" name="email">
                            	</div>
                            	<div class="col-md-5 text-left mb20">
                                                                    
                                     <input type="text" name="street-name" placeholder="Street Name" />
                                </div>
                                <div class="col-md-5 text-left mb20">
                                    
                                    <div class="input-select">
                                        <select>
                                            <option selected="" value="Default">Select City</option>
                                            <option value="101">Demsa</option><option value="1492">Fufore</option><option value="103">Ganye</option><option value="1493">Girei</option><option value="1494">Gombi</option><option value="1503">Guyuk</option><option value="1495">Hong</option><option value="1496">Jada</option><option value="5083">Jimeta</option><option value="1497">Lamurde</option><option value="1498">Madagali</option><option value="112">Maiha</option><option value="113">Mayo-Belwa</option><option value="114">Michika</option><option value="115">Mubi North</option><option value="1499">Mubi South</option><option value="117">Numan</option><option value="1500">Shelleng</option><option value="1501">Song</option><option value="120">Toungo</option><option value="121">Yola North</option><option value="1502">Yola South</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5 text-left mb20">
                                    
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
                                <div class="col-md-5 text-left mb20">
                                    
                                    <div class="input-select">
                                        <select>
                                            
                                            <option selected="" value="Default">Nigeria</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h5>School Information </h5>
                    <section class="text-center">
                        <div class="pos-vertical-center">
                            <h2 class="font-600">School Information</h2>
                            <div class="row justify-content-center">
                            	<div class="col-12 col-md-10 text-left mb20">
                            		<label class="text-left">Type of School:</label>
                            		<div class="input-select">
										<select>
											<option selected="" value="Default">Select Type of School</option>
                                            <option value="nursery">Nursery</option>
											<option value="nursery">Primary</option>
											<option value="secondary">Secondary</option>
											
										</select>
									</div>
                            	</div>
                                
                            	<div class="col-12 col-md-5 text-left mb20">
                            		<label class="text-left text-left">Name of the School</label>
                            		<input type="text" name="firstname">
                            	</div>
                            	<div class="col-12 col-md-5 text-left mb20">
                                    <label class="text-left">Local Governments:</label>
                                    <input type="text" name="local" placeholder="Local Governments" />
                                </div>
                            	<div class="col-md-5 text-left mb20">
                                                                    
                                     <input type="text" name="street-name" placeholder="Street Name" />
                                </div>
                                <div class="col-md-5 text-left mb20">
                                    
                                    <div class="input-select">
                                        <select>
                                            <option selected="" value="Default">Select City</option>
                                            <option value="101">Demsa</option><option value="1492">Fufore</option><option value="103">Ganye</option><option value="1493">Girei</option><option value="1494">Gombi</option><option value="1503">Guyuk</option><option value="1495">Hong</option><option value="1496">Jada</option><option value="5083">Jimeta</option><option value="1497">Lamurde</option><option value="1498">Madagali</option><option value="112">Maiha</option><option value="113">Mayo-Belwa</option><option value="114">Michika</option><option value="115">Mubi North</option><option value="1499">Mubi South</option><option value="117">Numan</option><option value="1500">Shelleng</option><option value="1501">Song</option><option value="120">Toungo</option><option value="121">Yola North</option><option value="1502">Yola South</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5 text-left mb20">
                                    
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
                                <div class="col-md-5 text-left mb20">
                                    
                                    <div class="input-select">
                                        <select>
                                            
                                            <option selected="" value="Default">Nigeria</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <h5>Book Information</h5>
                    <section class="text-center">
                        <div class="pos-vertical-center">
                            <h2 class="font-600">Book Information</h2>
                            <div class="row justify-content-center">
                            	<div class="col-12 col-md-7 text-left mb20">
                            		<label class="text-left">Books</label>
                            		<div class="input-select">
										<select>
											<option selected="" value="Default">Select a book</option>
											<option value="1">Modular Primary Social Studies Book 2</option>
											<option value="2">The Queen Primer – Part 2</option>
											<option value="3">My First Oxford Dictionary</option>
                                            <option value="3">Spelling Book 0</option>
                                            <option value="3">Structural Eng. Workbooks Book 2</option>
                                            <option value="3">Brume: The Captain</option>
                                            <option value="3">New Approach to Verbal Reasoning Bk. 2</option>
										</select>
									</div>
                            	</div>

                            	<div class="col-12 col-md-3 text-left mb20">
                            		<label class="text-left text-left">Quantity</label>
                            		<input type="number" name="quantity">
                            	</div>
                                <div class="col-12 col-md-10 text-left mb20">
                                    <label class="text-left">Publisher:</label>
                                    <div class="input-select">
                                        <select>
                                            <option selected="" value="Default">Select a Publisher</option>
                                            <option value="">Evans</option>
                                            <option value="">Longman</option>
                                            <option value="">African Univ. Press</option>
                                            <option value="">Bounty Press Ltd.</option>
                                            <option value="">Oxford Univ Press</option>
                                            <option value="">Literamed Publication</option>
                                        </select>
                                    </div>
                                </div>

                            	<div class="col-12 col-md-5 text-left mb20">
                            		<label class="text-left text-left">Select Subject</label>
                            		<div class="input-select">
	                            		<select>
											<option selected="" value="Default">Select a class</option>
											<option value="">Science</option>
											<option value="">Mathematics</option>
											<option value="">English</option>
										</select>
									</div>
                            	</div>
                               <div class="col-12 col-md-5 text-left mb20">
                                    <label class="text-left text-left">Select Year</label>
                                    <div class="input-select">
                                        <select>
                                            <option selected="" value="Default">Select a Year</option>
                                            <option value="">Nursery 1-3 </option>
                                            <option value="">Primary 1-6</option>
                                            <option value="">Junior secondary school 1-3</option>
                                             <option value="">Senior secondary school 1-3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h5>Contact</h5>
                    <section class="text-center">
                        <div class="pos-vertical-center">
                            <h2 class="font-600">Contact</h2>
                            <div class="row justify-content-center">
                            	<div class="col-12 col-md-5 text-left mb20">
                            		<label class="text-left">Name of Teacher</label>
                            		<input type="text" name="teacher-name">
                            	</div>
                            	<div class="col-12 col-md-5 text-left mb20">
                            		<label class="text-left text-left">Contact Number</label>
                            		<input type="text" name="contact">
                            	</div>
                            	
                            	
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<?php include 'elements/footer.php'; ?>