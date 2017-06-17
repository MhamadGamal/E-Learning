<?php
$mysql= new mysqli("localhost","root","","elearning");
$result= $mysql->query("SELECT * FROM `videos`");
$result_comments= $mysql->query("SELECT  `name`, `photo`,`content`,`timeDate`FROM `students` , `comments`  WHERE `student_id`=`studentID`");
$result_assignments= $mysql->query("SELECT `title`, `link` FROM `assignments`");
$result_lectures= $mysql->query("SELECT `title`, `link` FROM `lectures`");
$result_exam= $mysql->query("SELECT`title`, `link`, `exam_year` FROM `exams`");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
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
                  <img class="img-circle" src="images/profile_img.png">
                  <h3 class="user-name">Mohamed Gamal</h3>
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-caret-down fa-2x dropdownn5"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Profile </a></li>
                      <li><a href="#">Log Out</a></li>
                    </ul>
                  </div>
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
                  <li ><a href="home.php">Home<span class="sr-only">(current)</span></a></li>
                  <li class="active"><a href="course.php">Courses</a></li>
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
       <!--Start Container-->
       <div class="containner">
          <!--Start Section1-->
          <section class="sec1">
            <div class="row">
              <div class="col-md-7 col-xs-12">
                <iframe  width="100%" src="https://www.youtube.com/embed/kYaD1-5jWc4?list=PLMm8EjqH1EFUyV5MNXMc9-drTruhxhTRQ" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="col-md-5 col-xs-12">
                <div class="sec1-cont">
                  <img class="image img-circle" src="images/photo.jpg">
                  <h3>Ahmed Sallam</h3>
                  <span>Computer Science Department</span>
                  <p class="date">Published on may 12,2015 </p>
                  <p class="info">
                    This Course Build on The Basic Concepts of HTML and maltimedua Programming.
                    It Include an overview of Web Design Concepts, Including Usabality , accessibilty,
                    Information Design and Graphic Design in The Context of The Web will be covered.
                    Introduction to Website Technologies,
                    Including Cuscading Style Sheet be explosed.
                  </p>
							    <div class="row" style="margin-top:10%;">
								     <div class="col-xs-offset-3 col-xs-9">
                      <form action="" method="post">
                        <fieldset class="rating">
      										<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
      										<input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
      										<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
      										<input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
      										<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
      										<input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
      										<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
      										<input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
      										<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
      										<input type="radio" id="starhalf" name="rating" value=".5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
      									</fieldset>
                      </form>

                  <div class="social-media">
										<a href="http://www.facebook.com/sallam.ahm"><img class="somed" src="images/facebook_circle-128.png" style="width:40px; margin-right:4px;"></a>
										<a href="https://twitter.com/sallam_ah"><img class="somed" src="images/twitter-circle.png" style="width:40px; margin-right:4px;"></a>
										<a href="https://plus.google.com/+AhmedSallams"><img class="somed" src="images/social-circle-google-plus-2-128.png" style="width:40px; margin-right:4px;"></a>
										<a href="http://www.linkedin.com/in/sallamah"><img class="somed" src="images/linkedin_circle-128.png" style="width:40px; margin-right:4px;"></a>
									</div>
								</div>
							</div>
					   </div>
            </div>
          </div>
        </section>
        <!--End Section1-->
        <!--Start Section2-->
      <section class="sec2">
          <div class="row">
            <!--User Comment-->
              <div class="head-comment">
                  <div class="col-md-2 col-xs-2">
                      <img class="image1 img-circle" src="images/profile_img1.png">
                  </div>
                  <div class="xxs col-md-10 col-xs-10" style="posution:absolute; margin-left:-5px;">
				              <form method="post" action="">
                      	<input type="text" id="q" name="_comment" placeholder="Write Your Comment Here...">
				              </form>
			                <?php
                      if(isset($_POST["_comment"])){
                          $content = $_POST["_comment"];
                          $time=date("l jS \of F Y h:i:s A");
                          $mysql->query("INSERT INTO `comments`(`content`, `studentID`, `timeDate`) VALUES ('$content',2,'$time')");
                        }
                      ?>
                </div>
              </div>
          </div>
              <!--Comments-->
          <div class="row">
             <?php  $counter=0; while($row = $result_comments->fetch_assoc()){ if($counter==1){?>
              <div class="comments">
			             <div class="row">
                      <div class="col-md-offset-2 col-md-1 col-xs-offset-1 col-xs-1">
				                  <?php echo '<img class=" img-circle" src="data:image/jpeg;base64,'.base64_encode($row["photo"]).'" width="112px" height="112px"">' ?>
                      </div>
                      <div class="ccomm col-md-9 col-xs-7">
                          <h3><?php echo $row['name']?><span><?php echo $row['timeDate']?></span></h3>
                          <p><?php echo $row['content']?></p>
                          <span class="replay">Reply</span>
				                  <a class="toggle-nav"><span id="drop'.$i.'" class="editt glyphicon glyphicon-option-vertical" onclick="dropOptionMenu(this)"></span></a>;
                    			<nav class="menu">
                      				<ul class="active" >
                      						<li class="current-item"><a>Edit</a></li>
                      					  <li><a>Delete</a></li>
                      					  <li><a class="cancel">Cancel</a></li>
                      				</ul>
                    			</nav>
                      </div>
		                </div>
                  </div>
                  <?php break;}else{?>
			            <div class="comments">
                      <div class="col-md-offset-2 col-md-1 col-xs-offset-1 col-xs-1">
				                  <?php echo '<img class=" img-circle" src="data:image/jpeg;base64,'.base64_encode($row["photo"]).'" width="112px" height="112px"">' ?>
                      </div>
                      <div class="ccomm col-md-9 col-xs-7">
                          <h3><?php echo $row['name']?><span><?php echo $row['timeDate']?></span></h3>
                          <p><?php echo $row['content']?></p>
                          <span class="replay">Reply</span>
                  				<a class="toggle-nav" ><span class="editt glyphicon glyphicon-option-vertical" ></span></a>
                  				<nav class="menu">
                    					<ul class="active" >
                      						<li class="current-item"><a>Edit</a></li>
                    						  <li><a>Delete</a></li>
                    						  <li><a class="cancel">Cancel</a></li>
                    					</ul>
                  			  </nav>
                      </div>
                  </div>
			            <?php $counter++; }}?>
                  <span class="loadd" style="cursor:pointer;">Load More</span>
                  <!--This div will be hidden-->
                  <div class="loaded">
                      <?php while($row = $result_comments->fetch_assoc()){?>
                      <div class="comments" >
                          <div class="col-md-offset-2 col-md-1 col-xs-offset-1 col-xs-1">
				                      <?php echo '<img class=" img-circle" src="data:image/jpeg;base64,'.base64_encode($row["photo"]).'" width="112px" height="112px"">' ?>
                          </div>
                          <div class="ccomm col-md-9 col-xs-7">
                              <h3><?php echo $row['name']?><span><?php echo $row['timeDate']?></span></h3>
                              <p><?php echo $row['content']?></p>
                              <span class="replay">Reply</span>
                      				<a class="toggle-nav" ><span class="editt glyphicon glyphicon-option-vertical" ></span></a>
                      				<nav class="menu">
                        					<ul class="active" >
                          						<li class="current-item"><a>Edit</a></li>
                        						  <li><a>Delete</a></li>
                        						  <li><a class="cancel">Cancel</a></li>
                        					</ul>
                      				</nav>
                          </div>
                      </div>
                  <?php }?>
              </div>
          </div>
      </section>
      <!--End Section2-->
      <!--Start Section3-->
            <section class="sec3">
                <div class="row">
                    <div class="tut col-md-7 col-xs-12">
							          <?php  $counter=0; while($row = $result->fetch_assoc()){if($counter ==4){ ?>
                        <div class="tutorial">
                            <div class="row">
                                <div class="vid col-md-6  col-xs-12">
                                 <?php echo'<iframe width="100%" height="250px" src="'.$row['url'].'" frameborder="0" allowfullscreen></iframe>'; ?>
                                </div>
                                <div class="vid-info col-md-6 col-xs-12">
                                    <h3><?php echo $row['title']?></h3>
                                    <span class="time-duration"><?php echo $row['duration']?></span>
                                    <span class="inst-name">Ahmed Sallam</span>
                                    <span class="views">views <?php echo $row['views']?></span>
                                </div>
                            </div>
                        </div>
							           <?php  break;}else{?>
          						 <div class="tutorial">
                          <div class="row">
                              <div class="vid col-md-6 col-xs-12">
                                  <?php echo'<iframe width="100%" height="250px" src="'.$row['url'].'" frameborder="0" allowfullscreen></iframe>'; ?>
                              </div>
                              <div class="vid-info col-md-6 col-xs-12">
                                  <h3><?php echo $row['title']?></h3>
                                  <span class="time-duration"><?php echo $row['duration']?></span>
                                  <span class="inst-name">Ahmed Sallam</span>
                                  <span class="views">views <?php echo $row['views']?></span>
                              </div>
                          </div>
                      </div>

      						<?php $counter++;}}?>
                  <span class="loaddd" style="cursor:pointer;">Load More</span>
      					<!--This Div Will Be Hidden-->
                  <div class="loadded">

                     <?php  while($row = $result->fetch_assoc()){?>
                      <div class="tutorial">
                          <div class="row">
                              <div class="vid col-md-6 col-xs-12">
                               <?php echo'<iframe width="100%" height="250px" src="'.$row['url'].'" frameborder="0" allowfullscreen></iframe>'; ?>
                              </div>
                              <div class="vid-info col-md-6 col-xs-12">
                                  <h3><?php echo $row['title']?></h3>
                                  <span class="time-duration"><?php echo $row['duration']?></span>
                                  <span class="inst-name">Ahmed Sallam</span>
                                  <span class="views">views <?php echo $row['views']?></span>
                              </div>
                          </div>
                      </div>
      							<?php  }?>
                  </div>
      						<div class="addpdf text-center">
      							<span class="add-vid glyphicon glyphicon-plus-sign"></span>
      							<p class="addfile">Add Video</p>
                    <!--<input type="file">-->
      						</div>
                </div>
     <!--Start Assignments-->
              <div class="col-md-4 col-xs-12">
      						  <!-- Nav tabs -->
      						  <ul class="nav nav-tabs" role="tablist">
      							<li role="presentation" class="active"><a href="#Assignments" aria-controls="Assignments" role="tab" data-toggle="tab">Assignments</a></li>
      							<li role="presentation"><a href="#Lectures" aria-controls="Lectures" role="tab" data-toggle="tab">Lectures</a></li>
      							<li role="presentation"><a href="#Exams" aria-controls="Exams" role="tab" data-toggle="tab">Exams</a></li>
      						  </ul>
      						  <!-- Tab panes -->
      					<div class="tab-content">
      						<div role="tabpanel" class="tab-pane active" id="Assignments">
    							  <div class="row">
                        <div class="col-md-8 col-xs-8">
                          <div class="assiegnmnts">
                            <h2 class="assi">Assignments</h2>
                          </div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                          <h2 class="success">Success</h2>
                        </div>
						            <?php  while($row = $result_assignments->fetch_assoc()){?>
                        <div class="col-md-offset-1 col-md-8 col-xs-offset-1 col-xs-8">
                            <div class="assiegnmnts">
                                <h3><a href=<?php echo $row['link'] ?>><?php echo $row['title']?></a></h3>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-1  col-xs-offset-1 col-xs-2">
                          <input type="checkbox" id="checkbox-2-1" class="regular-checkbox big-checkbox">
                        </div>
                        <?php }?>
                      <p class="exam text-center"><a href="http://sallamah.weebly.com/uploads/6/9/3/5/6935631/web-2005-s-super.pdf">Final Exam</a></p>
          						<h2 class="head-rate text-center">Rate This tutorials</h2>
          						<div class="rating">
          							<fieldset class="rating">
          								<input type="radio" id="star10" name="ratting" value="10" /><label class = "full" for="star10" title="Awesome - 10 stars"></label>
          								<input type="radio" id="star9half" name="ratting" value="9 and a half" /><label class="half" for="star9half" title="Pretty good - 9.5 stars"></label>
          								<input type="radio" id="star9" name="ratting" value="9" /><label class = "full" for="star9" title="Pretty good - 9 stars"></label>
          								<input type="radio" id="star8half" name="ratting" value="8 and a half" /><label class="half" for="star8half" title="Meh - 8.5 stars"></label>
          								<input type="radio" id="star8" name="ratting" value="8" /><label class = "full" for="star8" title="Meh - 8 stars"></label>
          								<input type="radio" id="star7half" name="ratting" value="7 and a half" /><label class="half" for="star7half" title="Kinda bad - 7.5 stars"></label>
          								<input type="radio" id="star7" name="ratting" value="7" /><label class = "full" for="star7" title="Kinda bad - 7 stars"></label>
          								<input type="radio" id="star6half" name="ratting" value="6 and a half" /><label class="half" for="star6half" title="Meh - 6.5 stars"></label>
          								<input type="radio" id="star6" name="ratting" value="6" /><label class = "full" for="star6" title="Sucks big time - 6 star"></label>
          								<input type="radio" id="star5half" name="ratting" value="5 and a half" /><label class="half" for="star5half" title="Sucks big time - 5.5 stars"></label>
          							</fieldset>
          					  </div>
          					</div>
          				</div>
          				<div role="tabpanel" class="tab-pane" id="Lectures">
        						<div class="lecs">
        						  <?php while($row = $result_lectures->fetch_assoc()){?>
        							<div class="connlec">
        							  <img class="imglecs" style="width:100px;" src="images/122.png"><p class="lechead"><a href=<?php echo $row['link']?>><?php echo $row['title']?></a></p>
        							</div>
        						<?php }?>
        						</div>
          					<div class="addpdf text-center" >
          						<span class="glyphicon glyphicon-plus-sign"></span>
          						<p class="addfile">Add File</p>
                      <input class="upload-file" type="file">
          					</div>
          				</div>
          				<div role="tabpanel" class="tab-pane" id="Exams">
          					<div class="exa">
          						<?php while($row = $result_exam->fetch_assoc()){?>
          							<div class="connexam" style="margin: 10% 0 30px 20%;">
          							<p class="lechead" style="font-size:19px;"><a href=<?php echo $row['link']?>><?php echo $row['title']?></a><span style="margin-left:7px;"><?php echo $row['exam_year']?></span></p>
          							</div>
          						<?php }?>
          					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
            <!--End Section3-->

        </div>
        <!--End Container-->
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
                        <p>FCI E-learning System is a project produced by Fci Students and Professors
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
		<script src="js/bootstrap.min.js"></script>
        <script src="js/rtl.js"></script>

    </body>
</html>
