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
                              <li><a href="about.php">About Us  </a></li>
                              <li><a href="#">Help</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">Tearm & Conditions</a></li>
                              <li><a href="contact.php">Contact Us</a></li>
                           </ul>
                           <?php 
						   if($_SESSION['service_provider_id']==''){
						   ?>
                           <div class="header-bottom">
                              <a href="signup.php" class="btn btn-default btn-default1 center-block pull-left">Signup</a>
                           </div>
                           <br>
                           <div class="header-inr">
                              <a href="login.php" class="btn btn-default btn-default2 center-block pull-left">Login</a>
                           </div>
                           <?php }else{?>
                           	<div class="header-bottom">
                              <a href="service_provider_dashboard.php" class="btn btn-default btn-default1 center-block pull-left">Profile</a>
                           </div>
                       <?php }?>
                        </nav>
                        <div class="overlay"></div>
                     </div>
                  </div>
               </header>