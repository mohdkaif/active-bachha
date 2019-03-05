<?php 
session_start();
include_once("config.php");
$date = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>WELCOME TO THE ACTIVE BACCHA</title>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
      <link rel="icon" href="images/favicon.png" type="image/x-icon">
      <!-- Stylesheets -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Responsive -->
      <style>
         .contact-form .form-group {
         position: relative;
         margin-bottom: 12px;
         }
      </style>
   </head>
      
      <body>
         <div class="page-wrapper">
            <!-- Main Header-->
            <!--End Main Header -->
            <!--Main Slider-->
           
         <div id="wrapper">
             <section class="">
               <?php include_once("include/header.php"); ?>
        
         </section>
       <section id="fullSlider" class="carousel slide fullscreenSlider" data-ride="carousel">
               <!-- Wrapper for carousel items -->
               <div class="carousel-inner">
                  <div class="item active" style="background-image: url('images/main-slider/eight-1.jpg');">
                  </div>
                  <!-- end of item -->
                  <div class="item" style="background-image: url('images/main-slider/Child-education.jpg');">
                  </div>
                  <!-- end of item -->
                  <div class="item " style="background-image: url('images/main-slider/2.jpg');">
                  </div>
                  <!-- end of item -->
                  <div class="item " style="background-image: url('images/main-slider/index.jpg');">
                  </div>
                  <!-- end of item -->
               </div>
               <!-- Carousel controls -->
               <a class="carousel-control left" href="#fullSlider" data-slide="prev">
               <span class="glyphicon fa fa-angle-left fa-2x"></span>
               </a>
               <a class="carousel-control right" href="#fullSlider" data-slide="next">
               <span class="glyphicon fa fa-angle-right fa-2x"></span>
               </a>
               <div class="container">
                  <div class="SlidContent text-center">
                     <h1 class="ht2 white" >“Engage your child in active, creative & meaningful exploration and leaning.”</h1>
                     
                     <p style="font-family: 'Bradley Hand ITC'; text-align:right;">-EVERY CHILD IS DIFFERENT….</p>
                  </div>
                  <!-- end of SlidContent -->
               </div>
               <!-- end of container -->
            </section>
            <!-- end of fullscreenSlider -->
            <section class="info-section no-pd-top Modal" >
               <div class="auto-container">
                  <div class="row clearfix">
                     <!-- Info Block -->
                     <div class="owl-carousel">
                     <div class="info-block ">
                        <div class="inner-box clearfix">
                           <div class="icon-box"><img src="images/icon1.png" alt=""></div>
                           <h3><a href="#" style="text-align:center">ACTIVITIES</a></h3>
                        </div>
                     </div>
                     <!-- Info Block -->
                     <div class="info-block ">
                        <div class="inner-box clearfix">
                           <div class="icon-box"><img src="images/icon2.png" alt=""></div>
                           <h3><a href="#" style="text-align:center">EVENTS & WORKSHOPS</a></h3>
                        </div>
                     </div>
                     <!-- Info Block -->
                     <div class="info-block ">
                        <div class="inner-box clearfix">
                           <div class="icon-box"><img src="images/icon3.png" alt=""></div>
                           <h3><a href="#" style="text-align:center">PACKAGES</a></h3>
                        </div>
                     </div>
                     <div class="info-block ">
                        <div class="inner-box clearfix">
                           <div class="icon-box"><img src="images/icon4.png" alt=""></div>
                           <h3><a href="#" style="text-align:center">KIDS BOUTIQUE</a></h3>
                        </div>
                     </div>
                  
                   
                     </div>
                  </div>
               </div>
            </section>
            <section class="intro-section hidden-xs">
               <div class="auto-container">
                  <div class="row clearfix">
                     <div class="image-column col-md-5 col-sm-12 col-xs-12">
                        <div class="inner-column">
                           <img src="images/about_left.jpg">
                        </div>
                     </div>
                     <div class="text-column col-md-7 col-sm-12 col-xs-12">
                        <div class="inner-column">
                           <div class="sec-title">
                              <div class="sec-title">
                                 <h2>WELCOME TO<br> THE ACTIVE BACCHA </h2>
                              </div>
                           </div>
                           <p>ACTIVE BACCHA is kids online portal. We aim at full utilisation of your child’s free time through various learning and entertaining activities at home.  </p>
                           <p>We at ACTIVE BACCHA , customise programs to help your child attain his full potential.</p>
                        </div><br>
                        <a class="theme-btn btn-style-one pull-left"  style="font-family: 'Roboto';">Read More </a>
                     </div>
                  </div>
               </div>
            </section>
            <section class="call-to-action action" style="background: url(images/back.jpg) no-repeat;">
               <div class="auto-container">
                  <div class="inner-container">
                     <div class="row">
                        <div class="col-md-9">
                           <h2 >HOW TO ENROLL YOUR CHILD TO A CLASS? </h2>
                           <p style="color:#fff;">JENNIFER LAWRENCE REGINA SPEKTOR Active Learning Teacher Preschool Teach </p>
                        </div>
                        <div class="col-md-3">
                           <br>
                           <a href="#" class="theme-btn btn-style-two">FIND OUT MORE  </a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="staff-section">
               <div class="auto-container">
                  <div class="sec-title text-center">
                     <h2>MEET OUR TEACHERS </h2>
                  </div>
                  <div class="row clearfix">
                     <div id="news-slider" class="owl-carousel4">
                        <!-- Staff Block -->
                        <div class="staff-block">
                           <div class="inner-box">
                              <div class="image-box wow fadeInDown animated" data-wow-duration="1500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;"><a href="#"><img src="images/teacher1.jpg" alt=""></a></div>
                              <div class="info-box">
                                 <h3><a href="#">LILY CARTER</a></h3>
                                 <p>Literacy Teacher </p>
                              </div>
                           </div>
                        </div>
                        <!-- Staff Block -->
                        <div class="staff-block">
                           <div class="inner-box">
                              <div class="image-box wow fadeInDown animated" data-wow-duration="1500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInDown;"><a href="#"><img src="images/teacher2.jpg" alt="" class="img-rounded"></a></div>
                              <div class="info-box">
                                 <h3><a href="#">JENNIFER LAWRENCE </a></h3>
                                 <p>Active Learning Teacher</p>
                              </div>
                           </div>
                        </div>
                        <!-- Staff Block -->
                        <div class="staff-block ">
                           <div class="inner-box">
                              <div class="image-box wow fadeInDown animated" data-wow-duration="1500ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInDown;"><a href="#"><img src="images/teacher3.jpg" alt="" ></a></div>
                              <div class="info-box">
                                 <h3><a href="#">REGINA SPEKTOR </a></h3>
                                 <p>Preschool Teach</p>
                              </div>
                           </div>
                        </div>
                        <div class="staff-block">
                           <div class="inner-box">
                              <div class="image-box wow fadeInDown animated" data-wow-duration="1500ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInDown;"><a href="#"><img src="images/teacher4.jpg" alt=""></a></div>
                              <div class="info-box">
                                 <h3><a href="#">RICHARD HILL  </a></h3>
                                 <p>Art and Music Teacher </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="testimonial-section" style="background-image: url(images/background/3.jpg);">
               <div class="auto-container">
                  <div class="sec-title text-center light">
                     <h2>WHAT THE PARENTS SAY</h2>
                  </div>
                  <div class="testimonial-carousel owl-carousel owl-theme">
                     <!-- Slide item -->
                     <div class="slide-item">
                        <p>Labore et dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris dolor ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="info-box">
                           <div class="name"><a href="#">Shina Jerry</a> <span class="designation">Caring Mother</span></div>
                        </div>
                     </div>
                     <!-- Slide item -->
                     <div class="slide-item">
                        <p>Labore et dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris dolor ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="info-box">
                           <div class="name"><a href="#">Shina Jerry</a> <span class="designation">Caring Mother</span></div>
                        </div>
                     </div>
                     <!-- Slide item -->
                     <div class="slide-item">
                        <p>Labore et dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris dolor ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="info-box">
                           <div class="name"><a href="#">Shina Jerry</a> <span class="designation">Caring Mother</span></div>
                        </div>
                     </div>
                     <!-- Slide item -->
                     <div class="slide-item">
                        <p>Labore et dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris dolor ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="info-box">
                           <div class="name"><a href="#">Shina Jerry</a> <span class="designation">Caring Mother</span></div>
                        </div>
                     </div>
                     <!-- Slide item -->
                     <div class="slide-item">
                        <p>Labore et dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris dolor ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="info-box">
                           <div class="name"><a href="#">Shina Jerry</a> <span class="designation">Caring Mother</span></div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            
         <section class="gallery-full-width no-pd-bottom">
            <div class="auto-container">
               <div class="sec-title text-center">
                  <h2>categories</h2>
               </div>
            </div>
            <!--MixitUp Galery-->
            <div class="auto-container">
               <!--Filter-->
               <div class="filter-list row clearfix" id="MixItUp620B5A">
                  <div class="owl-carousel4">
                  <!--Gallery Item Two-->
                  <div class="gallery-item mix all campus video " style="display: inline-block;">
                     <div class="inner-box">
                        <figure class="image-box">
                           <img src="images/gallery/ctagories1.jpg" alt="">
                           <!--Overlay Box-->
                           <div class="caption-box clearfix">
                              <div class="title">
                                 <h3><a href="event.php">Cricket</a></h3>
                                  <p><a href="event.php">Lorem ipsum dolor sit amet, consectetur adcing  Lorem ipsum dolor sit amet, consectetur adcing</a></p>
                                  <button class="theme-btn btn-style-three pull-left">Read More</button>
                              </div>
                             
                           </div>
                        </figure>
                     </div>
                  </div>
                    <div class="gallery-item mix all campus video " style="display: inline-block;">
                     <div class="inner-box">
                        <figure class="image-box">
                           <img src="images/gallery/ctagories2.jpg" alt="">
                           <!--Overlay Box-->
                           <div class="caption-box clearfix">
                              <div class="title">
                                 <h3><a href="event.php">Cricket</a></h3>
                                  <p><a href="event.php">Lorem ipsum dolor sit amet, consectetur adcing  Lorem ipsum dolor sit amet, consectetur adcing</a></p>
                                  <button class="theme-btn btn-style-three pull-left">Read More</button>
                              </div>
                             
                           </div>
                        </figure>
                     </div>
                  </div>
                  <!--Gallery Item Two-->
                  <div class="gallery-item mix all activity video " style="display: inline-block;">
                     <div class="inner-box">
                        <figure class="image-box">
                           <img src="images/gallery/ctagories3.jpg" alt="">
                           <!--Overlay Box-->
                           <div class="caption-box clearfix">
                              <div class="title">
                                   <h3><a href="event.php">Cricket</a></h3>
                                <p><a href="event.php">Lorem ipsum dolor sit amet, consectetur adcing Lorem ipsum dolor sit amet, consectetur adcing</a></p>
                                  <button class="theme-btn btn-style-three pull-left">Read More</button>
                              </div>
                             
                           </div>
                        </figure>
                     </div>
                  </div>
                  <!--Gallery Item Two-->
                  <div class="gallery-item mix all campus photos " style="display: inline-block;">
                     <div class="inner-box">
                        <figure class="image-box">
                           <img src="images/gallery/ctagories4.jpg" alt="">
                           <!--Overlay Box-->
                          <div class="caption-box clearfix">
                              <div class="title">
                                 <h3><a href="event.php">Cricket</a></h3>
                                 <p><a href="event.php">Lorem ipsum dolor sit amet, consectetur adcing Lorem ipsum dolor sit amet, consectetur adcing </a></p>
                                  
                                
                                   <button class="theme-btn btn-style-three pull-left">Read More</button>
                              </div>
                             
                           </div>
                           </div>
                        </figure>
                     </div>
                  </div>
                  <!--Gallery Item Two-->
                 
                 
               </div>
               </div>
            </div>
         </section>
          <section class="gallery1-full-width no-pd-bottom">
            <div class="auto-container">
               <div class="sec-title text-center">
                  <h2>Our Gallery</h2>
               </div>
            </div>
            <!--MixitUp Galery-->
            <div class="auto-container">
               <!--Filter-->
               <div class="filter-list row clearfix" id="MixItUp620B5A">
                  <div class="owl-carousel4">
                  <!--Gallery Item Two-->
                  <div class="gallery1-item mix all campus video " style="display: inline-block;">
                     <div class="inner-box">
                        <figure class="image-box">
                           <img src="images/gallery/gallary1.png" alt="">
                           <!--Overlay Box-->
                           <div class="caption-box clearfix">
                              <div class="title">
                                   <h3>
                                 <a href="images/gallery/gallary1.png" class="link" data-fancybox="gallery" data-caption=""><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                              </h3>
                              </div>
                             
                           </div>
                        </figure>
                     </div>
                  </div>
                  <!--Gallery Item Two-->
                  <div class="gallery1-item mix all activity video " style="display: inline-block;">
                     <div class="inner-box">
                        <figure class="image-box">
                           <img src="images/gallery/gallary2.png" alt="">
                           <!--Overlay Box-->
                           <div class="caption-box clearfix">
                              <div class="title">
                                <h3>
                                 <a href="images/gallery/gallary2.png" class="link" data-fancybox="gallery" data-caption=""><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                              </h3>
                              </div>
                              
                           </div>
                        </figure>
                     </div>
                  </div>
                  <!--Gallery Item Two-->
                  <div class="gallery1-item mix all campus photos " style="display: inline-block;">
                     <div class="inner-box">
                        <figure class="image-box">
                           <img src="images/gallery/gallary3.png" alt="">
                           <!--Overlay Box-->
                           <div class="caption-box clearfix">
                              <div class="title">
                                <h3>
                                 <a href="images/gallery/gallary3.png" class="link" data-fancybox="gallery" data-caption=""><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                              </h3>
                              </div>
                              
                           </div>
                        </figure>
                     </div>
                  </div>
                   <div class="gallery1-item mix all activity video " style="display: inline-block;">
                     <div class="inner-box">
                        <figure class="image-box">
                           <img src="images/gallery/gallary4.png" alt="">
                           <!--Overlay Box-->
                           <div class="caption-box clearfix">
                              <div class="title">
                                <h3>
                                 <a href="images/gallery/gallary4.png" class="link" data-fancybox="gallery" data-caption=""><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                              </h3>
                              </div>
                              
                           </div>
                        </figure>
                     </div>
                  </div>
              
            </div>
         </section>
         <?php include_once("include/footer.php"); ?>
         </div>
          <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
           <!--End pagewrapper-->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
       
         <script src="js/jquery.fancybox.js"></script>
         <script src="js/appear.js"></script>
         <script src="js/mixitup.js"></script>
         <script src="js/owl.js"></script>
         <script src="js/wow.js"></script>
         <script src="js/script.js"></script>
         
         <script type="text/javascript">
            
            $('.burger, .overlay').click(function(){
            $('.burger').toggleClass('clicked');
            $('.overlay').toggleClass('show');
            $('nav').toggleClass('show');
            $('body').toggleClass('overflow');
            });
            
         </script>
   </body>
</html>