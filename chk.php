<!DOCTYPE html>
<html lang="en">
   <head>
<?php
	session_start();
	$admins = array("ahmed", "imad");
	if ($_SERVER)['REQUEST_METHOD'] == 'POST') {
		$user = $_POST['username'];
		if (in_array($user, $admins)) {
			// If IS Admin
			$_SESSION['user'] = $user;
			echo 'Welcome ' . $_SESSION['user'] . ' You Will Be Redirected To Control Pannel Area';
			header('REFRESH:5;URL=control.php)
		} else {
			// If Not Admin
			echo 'Sorry You Are Not Admin And You Are Not Permitted To See Control Pannel';
		}

?>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>AhmedMobiles</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html">AhmedMobiles</a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.html">Home</a> </li>
                              
                              <li> <a href="#service"> Promotions</a> </li>
                              <li> <a href="#blog">Produits</a> </li>
                              <li> <a href="#contact">Contact us</a> </li>                            
<!-- Search bar -->
<style>
.container{ 
padding:0px;
} 
.searchbar{ 
padding:5px; 
border-radius: 0px; 
width: 80px;
} 
input[type=text] { width: 75%; 
-webkit-transition: width 0.15s ease-in-out; transition: width 0.15s ease-in-out; 
} 
/* When the input field gets focus, change its width to 50% */input[type=text]:focus { 
width: 50%; 
}
#list{
list-style-type: none;
}
.animals{
display: list-item;
}
</style>
<li><a href="#Search">
<input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="????Search ... ??????????????">
</a>
<!-- search bar css code for search bar -->
<!-- search bar JavaScript code for search bar -->					
<script>
function search_animal() {
let input = document.getElementById('searchbar').value 
input=input.toLowerCase(); 
let x = document.getElementsByClassName('myCarousel'); 
for (i = 0; i < x.length; i++) {  
if (!x[i].innerHTML.toLowerCase().includes(input)) { 
x[i].style.display="none"; 
} 
else { 
x[i].style.display="list-item";                  
} 
} 
} 
</script> 
<!-- search bar JavaScript code for search bar -->
<!-- Search bar -->
<!-- Search bar -->
 </li>














































                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
<br>
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner2.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1><div class="productname">Product 1</div></h1>
                        <p>Product 1 Description </p>
                        <a  href="Javascript:void(0)">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner3.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1><div class="productname">Product 2</div></h1>
                        <p>Product 2 Description </p>
                        <a  href="Javascript:void(0)">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/banner4.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1><div class="productname">Product 3</div></h1>
                        <p>Product 3 Description </p>
                        <a  href="Javascript:void(0)">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
            <a class="bottom_arrow_scroll" href="#about"><img src="icon/errow.png" /></a>
         </div>
      </section>
<!-- about  -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <span>We Sell Mobiles Cover </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end abouts -->
      
<!-- Download -->
      <div id="screenshot" class="Screenshot">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Promotions</h2>
                     <span>Nos Promotions</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active"> <h1> Promotion 1 <br> <img class="first-slide" src="images/banner.png" alt="First slide"> </div>
                        <div class="carousel-item"> <h1> Promotion 2 <br> <img class="second-slide" src="images/banner5.png" alt="Second slide"> </div>
                        <div class="carousel-item"> <h1> Promotion 3 <br> <img class="third-slide" src="images/banner6.png" alt="Third slide"> </div>
                     </div>
                     <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i></a> <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a> 
                  </div>
                  <div class="read-more">
                     <!-- <a href="Javascript:void(0)">download now</a> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Download -->

<!-- service --> 
      <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Services </h2>
                     <span>Nos Services </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="container margin-r-l">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/1.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/1.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/1.jpg" class="fancybox" rel="ligthbox">Livraison</a>
                        </span>  
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/2.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/2.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/1.jpg" class="fancybox" rel="ligthbox">Service apres vente</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/3.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/3.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/3.jpg" class="fancybox" rel="ligthbox">Consultation</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/4.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/4.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/4.jpg" class="fancybox" rel="ligthbox">Marketing</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/5.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">Design</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/6.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/6.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/6.jpg" class="fancybox" rel="ligthbox">Achat</a>
                        </span>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->
      <!-- customer -->
<style>
/** customer section **/
.customer {
     margin-top: 90px;
     padding-bottom: 120px;
     background: white;
}
.customer .titlepage h2 {
     padding-bottom: 15px;
}
.customer .titlepage span {
     font-size: 16px;
     line-height: 28px;
     color: #747373;
}
.customer_Carousel .carousel-caption {
     position: inherit;
     padding: 0;
}
.customer_box {
     background: #0c0f38;
}
.test_box {
     background: #fff;
     box-shadow: #ddd 0px 0px 10px -1px;
     margin-top: 13px;
     margin-left: 50px;
     margin-right: 50px;
}
.customer_Carousel .test_box .veni h4 {
     font-size: 30px;
     color: #fff;
     line-height: 32px;
     display: inline-block;
     padding-left: 30px;
}
.customer_Carousel .test_box p {
     font-size: 17px;
     line-height: 28px;
     color: #797878;
     font-weight: 400;
     text-align: left;
     padding: 40px 25px;
}
.customer_Carousel .test_box .veni {
     padding-top: 45px;
     display: inline-block;
}
.customar_box::after {
     position: absolute;
     content: "";
     width: 58px;
     left: 85px;
     height: 30px;
     top: 0;
     background-repeat: no-repeat;
     background: url(../images/cross.png);
}
.customar_box {
     background: #FFDEAD;
     text-align: left;
     position: relative;
     padding: 0px 0px 44px 50px;
}
.padd_rightt0 {
     padding-right: 10px;
     float: right;
}
.customer_Carousel .carousel-indicators {
     bottom: -52px;
}
.customer_Carousel .carousel-indicators li {
     width: 22px;
     height: 22px;
     border-radius: 20px;
     background: #FFDEAD;
}
.customer_Carousel .carousel-indicators li.active {
     background: black;
}
.carousel-control-next-icon,
.carousel-control-prev-icon {
     display: none;
}
/** end customer section **/
</style>
      <div class="customer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Votre  <strong class="pink">  Opinion</strong></h2>
                     <span> Ici vous decouvrez les opinions de nos clients </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          <p>Le meilleur site de l'achat en ligne... </p>
                                          <div class="customar_box">
                                             <div class="veni">
                                                <!-- imagecustomer <i><img src="images/costomar.png" alt="#"/></i>-->
                                                <h4> Adil </h4>
                                             </div>
                                             <!-- imagecustomer <i class="padd_rightt0"><img src="images/cost.png" alt="#"/></i>-->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          <p>Top! </p>
                                          <div class="customar_box">
                                             <div class="veni">
                                                <!-- imagecustomer <i><img src="images/costomar.png" alt="#"/></i>-->
                                                <h4> Chaimae </h4>
                                             </div>
                                             <!-- imagecustomer <i class="padd_rightt0"><img src="images/cost.png" alt="#"/></i>-->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          <p>Un grand merci pour votre parfait service! </p>
                                          <div class="customar_box">
                                             <div class="veni">
                                                <!-- imagecustomer <i><img src="images/costomar.png" alt="#"/></i>-->
                                                <h4> Reda </h4>
                                             </div>
                                             <!-- imagecustomer <i class="padd_rightt0"><img src="images/cost.png" alt="#"/></i>-->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end customer -->
      <!-- our blog -->
      <!-- end our blog -->
      <!-- Testimonial -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>Contact Us</h3>
                  </div>
               </div>
            </div>
            <div class="row">
             
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 offset-md-3">
                  <div class="contact">
                     
                     <form>
                        <div class="row">
                           <!-- <div class="col-sm-12">
                              <input class="contactus" placeholder="Name" type="text" name="Name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Phone" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                           </div> -->
                           <div class="col-sm-12">
                              <button class="send">Contact</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Testimonial --> 
      <!--  footer --> 
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Address</h3>
                        <i><img src="icon/3.png">Maroc</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Menus</h3>
                        <i><img src="icon/2.png">Home</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Useful Linkes</h3>
                        <i><img src="icon/1.png">Link</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Social Media </h3>
                        <ul class="contant_icon">
                           <li><img src="icon/fb.png" alt="icon"/></li>
                           <li><img src="icon/tw.png" alt="icon"/></li>
                           <li><img src="icon/lin(2).png" alt="icon"/></li>
                           <li><img src="icon/instagram.png" alt="icon"/></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                     <!-- <div class="address">
                        <h3>Newsletter </h3>
                        <input class="form-control" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit-btn">Subscribe</button>
                     </div> -->
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Privacy</h3>
                        <i><img src="icon/3.png"></i>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <p>Copyright ?? <script>document.write(new Date().getFullYear())</script> <a href="https://arabicps4games.github.io/a">Imadesigns</a> - All rights reserved</p>
            </div>
         </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>