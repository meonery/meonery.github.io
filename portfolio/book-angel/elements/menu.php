<a id="start"></a>
<div class="bar--absolute bar--transparent">
    <section class="bar bar-3 hidden-sm hidden-xs bar--xs" id="top-menu">
        <div class="container">
            <div class="row">
               
                <div class="col-12 text-right text-left-xs text-left-sm hidden-xs">
                    <div class="bar__module">
                        <ul class="menu-horizontal">
                            
                            <li>
                                <div class="modal-instance">
                                    <!-- user icon -->
                                    

                                    <a href="#" class="modal-trigger login-icon <?php if($page=='Home'|| $page=='About'){echo 'color--white';}else{echo 'color--black';}?>">
                                        <svg viewBox="0 -32 512.016 512" xmlns="http://www.w3.org/2000/svg"><path d="m192 213.339844c-58.816406 0-106.667969-47.847656-106.667969-106.664063 0-58.816406 47.851563-106.6679685 106.667969-106.6679685s106.667969 47.8515625 106.667969 106.6679685c0 58.816407-47.851563 106.664063-106.667969 106.664063zm0-181.332032c-41.171875 0-74.667969 33.492188-74.667969 74.667969 0 41.171875 33.496094 74.664063 74.667969 74.664063s74.667969-33.492188 74.667969-74.664063c0-41.175781-33.496094-74.667969-74.667969-74.667969zm0 0"/><path d="m368 448.007812h-352c-8.832031 0-16-7.167968-16-16v-74.667968c0-55.871094 45.460938-101.332032 101.332031-101.332032h181.335938c55.871093 0 101.332031 45.460938 101.332031 101.332032v74.667968c0 8.832032-7.167969 16-16 16zm-336-32h320v-58.667968c0-38.226563-31.105469-69.332032-69.332031-69.332032h-181.335938c-38.226562 0-69.332031 31.105469-69.332031 69.332032zm0 0"/><path d="m496 218.675781h-181.332031c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h181.332031c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m410.667969 304.007812c-4.097657 0-8.191407-1.558593-11.308594-4.691406-6.25-6.253906-6.25-16.386718 0-22.636718l74.027344-74.027344-74.027344-74.027344c-6.25-6.25-6.25-16.382812 0-22.632812s16.382813-6.25 22.636719 0l85.332031 85.332031c6.25 6.25 6.25 16.386719 0 22.636719l-85.332031 85.332031c-3.136719 3.15625-7.234375 4.714843-11.328125 4.714843zm0 0"/></svg>
                                        Login/Register
                                    </a>
                                    <div class="modal-container">
                                        <div class="modal-content section-modal">
                                            <section class="unpad ">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-6">
                                                            <div class="boxed boxed--lg bg--white text-center feature">
                                                                <div class="modal-close modal-close-cross"></div>
                                                                <h3>Login to Your Account</h3>
                                                                <a class="btn block btn--icon bg--facebook type--uppercase" href="#">
                                                                    <span class="btn__text">
                                                                        <i class="socicon-facebook"></i>
                                                                        Login with Facebook
                                                                    </span>
                                                                </a>
                                                                <a class="btn block btn--icon bg--twitter type--uppercase" href="#">
                                                                    <span class="btn__text">
                                                                        <i class="socicon-twitter"></i>
                                                                        Login with Twitter
                                                                    </span>
                                                                </a>
                                                                <hr data-title="OR">
                                                                <div class="feature__body">
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <input type="text" placeholder="Username" />
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <input type="password" placeholder="Password" />
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <button class="btn btn--primary type--uppercase" type="submit">Login</button>
                                                                            </div>
                                                                        </div>
                                                                        <!--end of row-->
                                                                    </form>
                                                                    <span class="type--fine-print block">Dont have an account yet?
                                                                        <a href="register">Create account</a>
                                                                    </span>
                                                                    <span class="type--fine-print block">Forgot your username or password?
                                                                        <a href="#">Recover account</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end of row-->
                                                </div>
                                                <!--end of container-->
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="<?php if($page=='Contact') {echo 'active';}?>"> 
                                <a href="contact.php"class="<?php if($page=='Home'|| $page=='About'){echo 'color--white';}else{echo 'color--black';}?>">
                                    Contact Us
                                </a> 
                            </li>
                             
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--end bar-->


    <div class="nav-container">
            <nav id="menu1" class="bar--transparent bar bar-1 bar--xs hidden-xs hidden-sm">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2 hidden-xs">
                            <div class="bar__module">
                                <a href="index"> 
                                    <img class="logo" alt="logo" src="<?php echo BASE_URL; ?><?php if($page=='Home'){echo 'assets/img/logo-light.png';}else{echo 'assets/img/logo-dark.png';}?>"> 
                                    <!-- <img class="logo logo-light" alt="logo" src="assets/img/logo-dark.png">  -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12 text-right text-left-xs text-left-sm">
                            <div class="bar__module">
                                <ul class="menu-horizontal text-left">
                                    <li class="<?php if($page=='About') {echo 'active';}?>">  
                                        <a href="about.php"class="<?php if($page=='Home'|| $page=='About'){echo 'color--white';}else{echo 'color--black';}?>">
                                            About Us
                                        </a> 
                                    </li>
                                   <li class="<?php if($page=='Donate') {echo 'active';}?>"> 
                                       <a href="donate-book.php"class="<?php if($page=='Home'|| $page=='About'){echo 'color--white';}else{echo 'color--black';}?>">
                                           Donate Used Books
                                       </a> 
                                   </li>
                                    
                                    <li class="<?php if($page=='Request') {echo 'active';}?>"> 
                                        <a href="request-book.php"class="<?php if($page=='Home'|| $page=='About'){echo 'color--white';}else{echo 'color--black';}?>">
                                            Request for Book
                                        </a> 
                                    </li>
                                    
                                    <li class="<?php if($page=='Project') {echo 'active';}?>"> 
                                        <a href="about.php#projects"class="inner-link <?php if($page=='Home'|| $page=='About'){echo 'color--white';}else{echo 'color--black';}?>">
                                            Projects
                                        </a> 
                                    </li>
                                     <li>
                                        
                                        <a href="#" class="btn btn--primary btn-icon-cart <?php if($page=='Home'|| $page=='About'){echo 'color--white';}else{echo 'color--black';}?>" data-notification-link="cart-menu">
                                            <span class="btn__text"><i class="stack-basket"></i></span>
                                            <span class="label label--sm">8</span>
                                        </a>
                                        
                                    </li>
                                   <!--  <li class="<?php if($page=='Donate') {echo 'active';}?>"> 
                                        <a href="donate-book"class="btn btn--primary rounded btn--xs <?php if($page=='Home'|| $page=='About'){echo 'color--white';}else{echo 'color--black';}?>">
                                            <span class="btn__text type--uppercase">Donate Used Book</span>
                                        </a> 
                                    </li> -->
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </nav>


           <div class="notification pos-right pos-top side-menu cart-menu bg--white" data-notification-link="cart-menu" data-animation="from-right">
                <div class="side-menu__module pos-relative d-flex align-items-center top">
                   
                    <div class="menu-back-btn ">
                        <i class="material-icons notification-close">close</i>
                    </div>

                    <div class="text-center pos-absolute d-flex align-items-center cart-title justify-content-center"> <h4 class="mb00">My Cart</h4> </div>
                    
                
                </div>
                <div class="side-menu__module cart-section">
                    <form class="d-flex flex-column align-items-stretch">
                        <div class="h-100 align-self-stretch">
                            <div class="pos-relative border-top-list p16 pl20 pr20">
                                <a class="pos-absolute pos-right pl20 pr20" href=""><i class="material-icons">close</i></a>
                                <div class="d-flex align-items-stretch justify-content-between book">
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="px-0 d-block h-auto align-self-stretch d-flex align-items-center cart-img">
                                            
                                            <a href="#" class="w-100 d-block">
                                                <img src="<?php echo BASE_URL; ?>assets/img/cart/cart-1.jpg" class="w-100 " >
                                            </a>
                                            
                                        </div>
                                        <div class="w-100 h-100 align-content-stretch pr-0 p-2 px-md-3 pt-md-3 pb-md-1 d-flex flex-column">
                                            <a href="#">
                                                <p class="f-20 f-md-24 line-height-smaller d-block mb-1 cart-item-title">Basic Creative and Cultural Arts Book 2</p>
                                                <p class="cart-item-author mb00"> Kolade Salami</p>
                                                <p class="type--fine-print quantity">Quantity: 2</p>
                                            </a>
                                            <div class="d-flex align-items-center mt-auto">
                                                <span class="price">N2000</span>
                                                
                                            </div>  
                                        </div>
                                        <!-- div class="mb-0 f-17 line-height-smaller">
                                            <span class="d-block mb-2 text-uppercase f-13 type--fine-print">
                                                N400 - Add on
                                            </span> 
                                        </div> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-100 align-self-stretch">
                            <div class="pos-relative border-top-list p16 pl20 pr20">
                                <a class="pos-absolute pos-right pl20 pr20" href=""><i class="material-icons">close</i></a>
                                <div class="d-flex align-items-stretch justify-content-between book">
                                    <div class="d-flex w-100 align-items-center">
                                        <div class="px-0 d-block h-auto align-self-stretch d-flex align-items-center cart-img">
                                            
                                            <a href="#" class="w-100 d-block">
                                                <img src="<?php echo BASE_URL; ?>assets/img/cart/cart-1.jpg" class="w-100 " >
                                            </a>
                                            
                                        </div>
                                        <div class="w-100 h-100 align-content-stretch pr-0 p-2 px-md-3 pt-md-3 pb-md-1 d-flex flex-column">
                                            <a href="#">
                                                <p class="f-20 f-md-24 line-height-smaller d-block mb-1 cart-item-title">Basic Creative and Cultural Arts Book 2</p>
                                                <p class="cart-item-author mb00"> Kolade Salami</p>
                                                <p class="type--fine-print quantity">Quantity: 2</p>
                                            </a>
                                            <div class="d-flex align-items-center mt-auto">
                                                <span class="price">N2000</span>
                                                
                                            </div>  
                                        </div>
                                        <!-- div class="mb-0 f-17 line-height-smaller">
                                            <span class="d-block mb-2 text-uppercase f-13 type--fine-print">
                                                N400 - Add on
                                            </span> 
                                        </div> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="side-menu__module pos-bottom pos-absolute col-12 border-top">
                    <div class="d-block">
                        <div class="d-flex justify-content-between align-items-center w-100">
                           
                            <div class="cart-subtotal-title type--bold color--black">Subtotal:</div>
                            <div class="cart-subtotal d-inline text-right color--black">N8000</div>
                           
                        </div>
                    </div>
                    <div class="d-block">
                        <div class="d-flex justify-content-between align-items-center w-100 mb16">
                           
                            <div class="cart-subtotal-title type--bold color--black">Shipping:</div>
                            <div class="cart-subtotal d-inline text-right color--black">Free NG Shipping</div>
                           
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="cart.php" class="btn btn--bordered-primary rounded mb00"><span class="btn__text type--uppercase">Go to Cart</span></a>
                        <a href="checkout.php" class="btn btn--primary rounded"><span class="btn__text type--uppercase">Checkout</span></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="bar bar-toggle bar--sm bar--transparent hidden-lg hidden-md visible-sm visible-xs" data-scroll-class='70px:pos-fixed' data-fixed-at="200">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="bar__module logo-style">
                                <a href="index"> 
                                    <img class="logo" alt="logo" src="<?php echo BASE_URL; ?><?php if($page=='Home'){echo 'assets/img/logo-light.png';}else{echo 'assets/img/logo-dark.png';}?>">
                                    <!-- <img class="logo logo-light" alt="logo" src="assets/img/logo-dark.png">  </a> -->
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="bar__module">
                                <a class="menu-toggle pull-right" href="#" data-notification-link="sidebar-menu">
                                    <i class="stack-interface stack-menu"></i>
                                </a>
                                
                               
                            </div>

                            <!--end module-->
                        </div>
                        <!--end columns-->
                    </div>
                    <!--end of row-->
                    <div class="notification pos-right pos-top side-menu bg-dark-blue" data-notification-link="sidebar-menu" data-animation="from-right">
                        <div class="side-menu__module pos-vertical-center text-center">
                            <ul class="menu-vertical">
                                <li class="mb-xs-40">
                                    <a href="index">
                                         <img class="logo" alt="logo" src="<?php echo BASE_URL; ?><?php if($page=='Home'){echo 'assets/img/logo-light.png';}else{echo 'assets/img/logo-dark.png';}?>"> 
                                        
                                    </a>
                                </li>
                                <li> 
                                    <a href="about.php">
                                        About Us
                                    </a> 
                                </li>
                                
                                <li> 
                                    <a href="donate-book.php">
                                        Donate a Book
                                    </a> 
                                </li>
                                <li> 
                                    <a href="request-book.php">
                                        Request for Book
                                    </a> 
                                </li>
                                <li> 
                                    <a href="about.php#projects" class="inner-link">
                                        Projects
                                    </a> 
                                </li>
                                <li> 
                                    <a href="contact.php">
                                        Contact Us
                                    </a> 
                                </li>
                                <li> 
                                    <a class="btn btn--primary" href="cart">
                                        <span class="btn__text"> <i class="stack-basket"></i> My Cart</span>
                                    </a> 
                                </li>
                                
                            </ul>
                            <ul class="menu-horizontal text-center">
                                   
                                    
                                    <li> 
                                        <a href="#" class="type--lowercase">
                                            <i class="icon icon--xs color--black icon-Email mr--1 v-align-middle"></i> info@bookangel.com
                                        </a> 
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#">
                                            <span class="type--fine-print">Book Angel © <span class="update-year"></span>. All Rights Reserved.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="">
                                        </a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end of container-->
        </nav>
    </div>
</div>