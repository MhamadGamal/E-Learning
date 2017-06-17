<?php
$mysql= new mysqli("localhost","root","","elearning");
$result= $mysql->query("SELECT * FROM `videos`");
?>
<!DOCTYPE html>
<html>
<html lang="en">
    <head>
      <title>E-Learning</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/normalize.css">
		  <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/slick-theme.css">
      <link rel="stylesheet" href="css/style.css">
		  <link rel="stylesheet" href="css/Home-Style.css">
      <link rel="stylesheet" href="css/media.css">
    </head>
    <body>
      <!--Start HEader-->
      <header>
        <div class="logo">
          <div class="row">
            <div class="col-md-4">
              <img class="logooo" src="images/logo - Copy.png" alt="Logo">
            </div>
            <div class="col-md-offset-2 col-md-6">
              <div class="user">
                <button class="btn btn-defult"> SIGN IN</button>
							</div>
					  </div>
          </div>
        </div>
      	<nav class="navbar">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="course.php">Courses</a></li>
                <li><a href="#">Instructors</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
              <form class="navbar-form navbar-right">
                <span class="glyphicon glyphicon-search"></span>
                <input type="search" class="form-controlll"  placeholder="I'am looking for" autocomplete="on">
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
    <!--End Header-->
    <!--Start Slider-->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="slider-header">
          <h1>it's the time to learn</h1>
          <h5>now it's easy for you to learn and communuicate with your<br />
             instructor in our Elearning System<br />
              SIGN UP now and join our courses</h5>
          <button class="btn btn-primary">SIGN UP</button>
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/sslider.jpg">
            </div>
            <div class="item">
                <img src="images/sslider.jpg">
            </div>
    	      <div class="item">
                <img src="images/sslider.jpg">
            </div>

        </div>
      <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      </div>
      <!--End Slider-->
		  <!--Start Section Departments-->
		  <section class="departments text-center">
			  <h1>WHAT DO YOU WANT TO LEARN ?</h1>
			  <div class="row">
          <div class="active subject">
					      <div class="col-md-offset-3 col-md-1 col-xs-4">
							    <i class="fa fa-desktop fa-5x"></i>
							    <h3>IT</h3>
						    </div>
					  </div>
            <div class="subject">
					      <div class="col-md-1 col-xs-4">
							    <i class="fa fa-building-o fa-5x"></i>
							    <h3>Design</h3>
						    </div>
					  </div>
            <div class="subject">
					      <div class="col-md-1 col-xs-4">
							    <i class="fa fa-globe fa-5x"></i>
							    <h3>Web</h3>
						  </div>
					  </div>
            <div class="subject">
					      <div class="col-md-1 col-xs-4">
							    <i class="fa fa-apple fa-5x"></i>
							    <h3>IOS</h3>
						    </div>
					  </div>
            <div class="subject">
					      <div class="col-md-1 col-xs-4">
							    <i class="fa fa-android fa-5x"></i>
							    <h3>Android</h3>
						    </div>
					  </div>
            <div class="subject">
					      <div class="col-md-1  col-xs-4 ">
							    <i class="fa fa-code fa-5x"></i>
							    <h3>Programming</h3>
						    </div>
					  </div>
			  </div>
        <section class="regular slider">
            <?php  $counter=0; while($row = $result->fetch_assoc()){ ?>
            <div class="video-card">
                 <?php echo'<iframe width="100%" height="300px" src="'.$row['url'].'" frameborder="0" allowfullscreen></iframe>'; ?>
                 <h3><?php echo $row['title']?></h3>
                 <span class="time-duration"><?php echo $row['duration']?></span>
                 <h3 class="inst-name">Ahmed Sallam</h3>
                 <span class="views" style="float: right; margin-right: 10px; margin-top: -31px;">views <?php echo $row['views']?></span>
            </div>
            <?php $counter++;}?>
        </section>
		  </section>
		<!--end Sections Departments-->
		<!--Start Section Instructors-->
      <section class="instructors text-center">
    		  <h2>MOST RATED INSTRUCTORS</h2>
    		  <div class="row">
    			    <div class="col-md-3 col-xs-6">
    				      <i class="fa fa-user fa-5x"></i>
    				      <h4>Ahmed Altahawy</h4>
    				      <span>DETAILS ABOUT HIS COURSES</span>
          				<ul>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
          				</ul>
    			    </div>
        			<div class="col-md-3 col-xs-6">
          				<i class="fa fa-user fa-5x"></i>
          				<h4>Ahmed Altahawy</h4>
          				<span>DETAILS ABOUT HIS COURSES</span>
          				<ul>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
          				</ul>
        			</div>
        			<div class="col-md-3 col-xs-6">
          				<i class="fa fa-user fa-5x"></i>
          				<h4>Ahmed Altahawy</h4>
          				<span>DETAILS ABOUT HIS COURSES</span>
          				<ul>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
          				</ul>
        			</div>
        			<div class="col-md-3 col-xs-6">
          				<i class="fa fa-user fa-5x"></i>
          				<h4>Ahmed Altahawy</h4>
          				<span>DETAILS ABOUT HIS COURSES</span>
          				<ul>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
            					<i class="fa fa-star-o fa-2x"></i>
          				</ul>
        			</div>
    		  </div>
    	</section>
    	<!--End Section Instructors-->
    	<!--Start Section Courses-->
    	<section class="Courses text-center">
      		<h2>MOST POPULAR COURSES</h2>
      		<div class="row">
        		  <div class="col-md-3 col-xs-6">
          				<img class="PhotoShop" src="images/photoshop.png">
          				<h4>PhotoShop course</h4>
          				<span>DETAILS ABOUT HIS COURSES</span>
          		</div>
          		<div  class="col-md-3 col-xs-6">
          				<img class="Android" src="images/android.png">
          				<h4>Android course</h4>
          				<span>DETAILS ABOUT HIS COURSES</span>
          		</div>
          		<div class="col-md-3 col-xs-6">
          				<img class="Web" src="images/design.png">
          				<h4>Web Design course</h4>
          				<span>DETAILS ABOUT HIS COURSES</span>
          		</div>
          		<div class="col-md-3 col-xs-6">
          				<img class="IOS" src="images/ios.png">
          				<h4>IOS course</h4>
          				<span>DETAILS ABOUT HIS COURSES</span>
        		  </div>
      		</div>
    	</section>
		<!--End Section Courses-->

		 <!--Start Footer-->
      <footer class="foo">
          <div class="row part1">
              <div class=" col-md-7 col-xs-offset-1 col-xs-10 col-xs-offset-1">
                <div class="logo">
                  <img src="images/logo.png" alt="logo">
                </div>
              </div>
              <div class="col-md-3 col-md-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1">
                  <div class="social-media">
            					<a href="https://www.facebook.com/sallam.ahm?ref=br_rs"><img class="somed" src="images/facebook_circle-128.png" ></a>
            					<a href="https://twitter.com/sallam_ah"><img class="somed" src="images/twitter-circle.png"></a>
            					<a href="http://sallamah.weebly.com"><img class="somed" src="images/social-circle-google-plus-2-128.png"></a>
            					<a href="http://www.linkedin.com/in/sallamah"><img class="somed" src="images/linkedin_circle-128.png"></a>
            					<a href="https://www.youtube.com/user/sallamah"><img class="somed" src="images/youtube_circle-128.png"></a>
            			</div>
              </div>
          </div>
          <div class="row part2">
              <div class="col-md-offset-1 col-md-6 col-xs-offset-1 col-xs-10 col-xs-offset-1">
                <div class="info">
                    <p>
                      FCI E-learning System is a project produced by Fci Students and Professors
                      to improve the qualificarion of the faculty students to be up to
                      date with labor market requiremnts
                    </p>
                </div>
              </div>
              <div class="col-md-offset-1 col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10 col-xs-offset-1">
                  <div class="policy">
                      <span><a href="#">PRIVCY POLICY</a></span> <span><a href="#">TERMS AND CONDITIONS</a></span>
                  </div>
              </div>
          </div>
          <p class="copyright">FCI E-Learning &copy; 2017</p>
      </footer>
        <!--End Footer-->

        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/jquery.mixitup.js"></script>
		    <script src="js/jquery.nicescroll.min.js"></script>
		    <script src="js/bootstrap.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/jquery.flexisel.js"></script>
        <script src="js/rtl.js"></script>
    </body>
</html>
