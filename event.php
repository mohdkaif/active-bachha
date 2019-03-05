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
         .icon-box i {
         font-size: 77px;
         }
      </style>
   </head>
   <body>
      </head>
      <body>
         <div class="page-wrapper">
         <!-- Main Header-->
         <!--End Main Header -->
         <!--Main Slider-->
         <div id="wrapper">
         <section class="">
            <header class="main-header">
               <!-- Main Box -->
               <div class="header-lower">
                  <div class="auto-container">
                     <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                     <div class="burger"> <span></span> </div>
                     <nav>
                        <ul class="main">
                           <li class="current"><a href="index.php">Home</a></li>
                           <li><a href="event.php">Events </a></li>
                           <li><a href="all-activity.php">Activity </a></li>
                           <li><a href="gallery.php">Gallery  </a></li>
                           <li><a href="about.php">About Us  </a></li>
                           <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                        <div class="header-bottom">
                           <a href="signup.php" class="btn btn-default btn-default1 center-block pull-left">Signup</a>
                        </div>
                        <br>
                        <div class="header-inr">
                           <a href="login.php" class="btn btn-default btn-default2 center-block pull-left">Login</a>
                        </div>
                     </nav>
                     <div class="overlay"></div>
                  </div>
               </div>
            </header>
         </section>
         <section id="fullSlider" class="carousel slide fullscreenSlider" data-ride="carousel">
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
               <div class="item active" style="background-image: url('images/main-slider/eight-1.jpg');">
               </div>
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
         <div class="sidebar-page-container">
         
            <div class="row clearfix">
               <div class="sidebar-side col-md-3 col-sm-3 col-xs-12">
                  <aside class="sidebar default-sidebar">
                     <div class="col-xs-12">
                        <div class="group-title">
                           <h2>GENDER</h2>
                        </div>
                        <form>
                           <p><input type="checkbox" name=""> Male</p>
                           <p><input type="checkbox" name=""> Female</p>
                           <p><input type="checkbox" name=""> Other</p>
                        </form>
                     </div>
                     <div class="col-xs-12">
                        <div class="group-title">
                           <h2>AGE</h2>
                        </div>
                        <form class="form-group">
                           <select class="form-control">
                              <option>--Year--</option>
                              <option>5</option>
                              <option>3</option>
                           </select>
                        </form>
                     </div>
                     <div class="col-xs-12">
                        <div class="group-title">
                           <h2>Price</h2>
                        </div>
                        <form class="form-group">
                           
                           <div style="margin:14px auto;margin-left: 30px;">
                              <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field"  style="width: 30%" /> &nbsp &nbsp To &nbsp &nbsp
                              <input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" style="width: 30%"/>
                           </div>
                           <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                        </form>
                     </div>
                     <div class="col-xs-12">
                        <div class="group-title">
                           <h2>RATTING</h2>
                        </div>
                        <form>
                           <p class="ratting"><i class="fa fa-star" style="color: #00cbc9"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>   5</p>
                           <p class="ratting"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>   4</p>
                           <p class="ratting"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>   3</p>
                           <p class="ratting"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>   2</p>
                           <p class="ratting"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>   1</p>
                        </form>
                     </div>
                     <div class="col-xs-12">
                        <div class="group-title">
                           <h2>Map</h2>
                        </div>
                        <form class="form-group">
                           <input type="text" name="" class="form-control" placeholder="Search Your Location">
                           <br><br> 
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28018.54696776649!2d77.34373893833676!3d28.620218775032622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5456ef36d9f%3A0x3b7191b1286136c8!2sSector+62%2C+Noida%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1548738343628" width="100%" height="200" frameborder="0"  allowfullscreen="" style="border: 4px solid #b7b7b7;
                              "></iframe>
                        </form>
                     </div>
                  </aside>
               </div>
               <!--Content Side-->
               <div class="content-side col-md-9 col-sm-9 col-xs-12">
                 
                     <div class="row-pan">
                        <h2>CHESS</h2>
                        <div class="mixedSlider">
                           <div class="MS-controls">
                              <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                              <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                           </div>
                           <div class="MS-content">
                              <div class="item">
                                 <div class="imgTitle">
                                    <div  class="blogTitle">
                                       <div class="list-inline" >
                                          <div class="col-md-4">
                                             <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="pull-right">
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <img src="images/12.jpg" alt="" />
                                 </div>
                                 <div class="col-md-12">
                                    <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                    <a href="#" class="theme-btn btn-style-one">Read More</a>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="imgTitle">
                                    <div  class="blogTitle">
                                       <div class="list-inline" >
                                          <div class="col-md-4">
                                             <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="pull-right">
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <img src="images/12.jpg" alt="" />
                                 </div>
                                 <div class="col-md-12">
                                    <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                    <a href="#" class="theme-btn btn-style-one">Read More</a>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="imgTitle">
                                    <div  class="blogTitle">
                                       <div class="list-inline" >
                                          <div class="col-md-4">
                                             <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="pull-right">
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <img src="images/12.jpg" alt="" />
                                 </div>
                                 <div class="col-md-12">
                                    <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                    <a href="#" class="theme-btn btn-style-one">Read More</a>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="imgTitle">
                                    <div  class="blogTitle">
                                       <div class="list-inline" >
                                          <div class="col-md-4">
                                             <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="pull-right">
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <img src="images/12.jpg" alt="" />
                                 </div>
                                 <div class="col-md-12">
                                    <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                    <a href="#" class="theme-btn btn-style-one">Read More</a>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="imgTitle">
                                    <div  class="blogTitle">
                                       <div class="list-inline" >
                                          <div class="col-md-4">
                                             <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="pull-right">
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <img src="images/12.jpg" alt="" />
                                 </div>
                                 <div class="col-md-12">
                                    <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                    <a href="#" class="theme-btn btn-style-one">Read More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="row-pan">
                        <h2>CHESS</h2>
                        <div class="mixedSlider">
                           <div class="MS-controls">
                              <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                              <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                           </div>
                           <div class="MS-content">
                              <div class="item">
                                 <div class="imgTitle">
                                    <div  class="blogTitle">
                                       <div class="list-inline" >
                                          <div class="col-md-4">
                                             <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="pull-right">
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <img src="images/12.jpg" alt="" />
                                 </div>
                                 <div class="col-md-12">
                                    <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                    <a href="#" class="theme-btn btn-style-one">Read More</a>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="imgTitle">
                                    <div  class="blogTitle">
                                       <div class="list-inline" >
                                          <div class="col-md-4">
                                             <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="pull-right">
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <img src="images/12.jpg" alt="" />
                                 </div>
                                 <div class="col-md-12">
                                    <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                    <a href="#" class="theme-btn btn-style-one">Read More</a>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="imgTitle">
                                    <div  class="blogTitle">
                                       <div class="list-inline" >
                                          <div class="col-md-4">
                                             <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="pull-right">
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <img src="images/12.jpg" alt="" />
                                 </div>
                                 <div class="col-md-12">
                                    <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                    <a href="#" class="theme-btn btn-style-one">Read More</a>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="imgTitle">
                                    <div  class="blogTitle">
                                       <div class="list-inline" >
                                          <div class="col-md-4">
                                             <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="pull-right">
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <img src="images/12.jpg" alt="" />
                                 </div>
                                 <div class="col-md-12">
                                    <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                    <a href="#" class="theme-btn btn-style-one">Read More</a>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="imgTitle">
                                    <div  class="blogTitle">
                                       <div class="list-inline" >
                                          <div class="col-md-4">
                                             <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="pull-right">
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                                <i class="fa fa-star" style="color: #00cbc9"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <img src="images/12.jpg" alt="" />
                                 </div>
                                 <div class="col-md-12">
                                    <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                    <a href="#" class="theme-btn btn-style-one">Read More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                     <hr>
                        <div class="row-pan">
                           <h2>CHESS</h2>
                           <div class="mixedSlider">
                              <div class="MS-controls">
                                 <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                                 <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                              </div>
                              <div class="MS-content">
                                 <div class="item">
                                    <div class="imgTitle">
                                       <div  class="blogTitle">
                                          <div class="list-inline" >
                                             <div class="col-md-4">
                                                <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                             </div>
                                             <div class="col-md-8">
                                                <div class="pull-right">
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <img src="images/12.jpg" alt="" />
                                    </div>
                                    <div class="col-md-12">
                                       <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                       <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                       <a href="#" class="theme-btn btn-style-one">Read More</a>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="imgTitle">
                                       <div  class="blogTitle">
                                          <div class="list-inline" >
                                             <div class="col-md-4">
                                                <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                             </div>
                                             <div class="col-md-8">
                                                <div class="pull-right">
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <img src="images/12.jpg" alt="" />
                                    </div>
                                    <div class="col-md-12">
                                       <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                       <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                       <a href="#" class="theme-btn btn-style-one">Read More</a>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="imgTitle">
                                       <div  class="blogTitle">
                                          <div class="list-inline" >
                                             <div class="col-md-4">
                                                <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                             </div>
                                             <div class="col-md-8">
                                                <div class="pull-right">
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <img src="images/12.jpg" alt="" />
                                    </div>
                                    <div class="col-md-12">
                                       <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                       <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                       <a href="#" class="theme-btn btn-style-one">Read More</a>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="imgTitle">
                                       <div  class="blogTitle">
                                          <div class="list-inline" >
                                             <div class="col-md-4">
                                                <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                             </div>
                                             <div class="col-md-8">
                                                <div class="pull-right">
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <img src="images/12.jpg" alt="" />
                                    </div>
                                    <div class="col-md-12">
                                       <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                       <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                       <a href="#" class="theme-btn btn-style-one">Read More</a>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="imgTitle">
                                       <div  class="blogTitle">
                                          <div class="list-inline" >
                                             <div class="col-md-4">
                                                <h3 class="pull-left"><i class=" fa fa-inr"></i> 600</h3>
                                             </div>
                                             <div class="col-md-8">
                                                <div class="pull-right">
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                   <i class="fa fa-star" style="color: #00cbc9"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <img src="images/12.jpg" alt="" />
                                    </div>
                                    <div class="col-md-12">
                                       <p style="color:#1da7aa;font-size: 12px;font-weight: 700;padding-top:7px"><i class="fa fa-map-marker" aria-hidden="true"></i> C-217, 1st Floor, C Block, Sector 63, Noida,</p>
                                       <p>Lorem ipsum dolor sit amet, consectetur adcing.</p>
                                       <a href="#" class="theme-btn btn-style-one">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
               </div>
            </div>
      </div>
            <footer class="main-footer">
               <div class="background">
                  <div class="layer">
                  </div>
                  <div class="auto-container" >
                     <!--Widgets Section-->
                     <div class="widgets-section">
                        <div class="row clearfix">
                           <div class="col-md-3">
                           </div>
                           <div class="col-md-6 offset-md-3 footer">
                              <h3>“If you want to customise any of our events, workshops & 
                                 packages feel free to ping us .We also organise birthday
                                 parties in a different & unique manner.”
                              </h3>
                              <br>
                              <p style="font-family: 'Bradley Hand ITC'">-YOU WISH IT WE PLAN IT….</p>
                              <br>
                              <button class="btn-style-five center-block" >Contact Us </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--Footer Bottom-->
               <div class="footer-bottom">
                  <div class="auto-container">
                     <div class="clearfix">
                        <div class="copyright-text">
                           <p> 2019 <a href="#"> 
                              </a> All Rights Reserved.
                           </p>
                        </div>
                        <ul class="footer-links clearfix">
                           <li><a href="#">About  
                              </a>
                           </li>
                           <li><a href="#">Tearm & Conditions   
                              </a>
                           </li>
                           <li><a href="#">Help  
                              </a>
                           </li>
                           <li><a href="#">  Privacy Policy  
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </footer>
         </div>

         <!--End pagewrapper-->
         <!--Scroll to top-->
         <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="js/price_range_script.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
         <script src="js/jquery.fancybox.js"></script>
         <script src="js/appear.js"></script>
         <script src="js/mixitup.js"></script>
         <script src="js/owl.js"></script>
         <script src="js/wow.js"></script>
         <script src="js/script.js"></script>
         <script src="js/multislider.js"></script>
         <script type="text/javascript">
            $('.burger, .overlay').click(function(){
            $('.burger').toggleClass('clicked');
            $('.overlay').toggleClass('show');
            $('nav').toggleClass('show');
            $('body').toggleClass('overflow');
            });
            
            $('.mixedSlider').multislider({
            duration: 1000,
            interval: 100000,
            });
            
         </script>
   </body>
</html>
<!--Scroll to top-->