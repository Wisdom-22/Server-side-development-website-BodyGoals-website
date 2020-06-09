<!--written by wizdom arinze and muiz johnson -->
<?php
	session_start();
    $username = $_SESSION['username'];
    if(isset($username)){
		//start a time for the user
    $time = time() + 86400;
    //echo $username;
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- head section --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BodyGoals</title>
    <link rel ="icon" href ="images/icon">
    <link rel ="stylesheet" href="bodygoals.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--boostrap javaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/28ced351d4.js" crossorigin="anonymous"></script>
        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
  </head>

  
  
  <body id ="page">
  <!--main contains whole page-->
    <main> 
    <!--Contains navBar and carousel-->
    <section id = "nav-carousel">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="headernav">
      <a href = "index.php"><i class="icon fas fa-dumbbell fa-5x"></i></a>
      <a class="navbar-brand" href="index.php"> <strong>BODYGOALS</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Users
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <!--form to check if admin or member login-->
          <form id = "myForm" method ="POST" action="login.php">
              <button  name="admin" class="dropdown-item" type="button" id = "myForm" ><a href = "adminLogin.php">Admin</a></button>
              <button  name="member" class="dropdown-item" type="button" id = "myForm"><a href = "login.php">Member</button>
              <button class="dropdown-item" type="button" name="submit"><a href = "index.php">Public</a></button>
          </form>
          </div>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="bookclasses.php">Book classes 2020</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="testimonial_add.php">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="meetTheTeam.php">Meet the Team </a>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0" action="login.php">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin: 20px 10px;">Login</button>
      </form>
      <form class="form-inline my-2 my-lg-0" action="registration.php ">
       <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin: 20px 10px;">Register</button>
      </form>
      <form class="form-inline my-2 my-lg-0" action="Logout.php ">
       <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin: 20px 10px;">Logout</button>
      </form>
    </div>
  </nav>

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval ="4000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/picgym1.jpg" class="carosel-pic-1" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/picgym2.jpg" class="carosel-pic-1" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/picgym3.jpg" class="carosel-pic-1" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
	
	<section style= "background-color : white; padding : 70px;" class = "class-and-events">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img style= "max-width : 220px; border-radius:100%;" src = "images/class.jpg" alt =""/>
        <h4 style = "margin:3% 2%;">Classes</h4>
        <p>Physical Fitness is very important in a person’s life. Physically fit people are much more productive & successful in their life, not only that they hold a lot of health benefits over the people who are fit.</p>
        <p><a class="btn btn-secondary" href="bookclasses.php" role="button">View Details »</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
      <img style= "max-width : 220px; border-radius:100%;" src = "images/class.jpg" alt =""/>
        <h4 style = "margin:3% 2%;">Personal Trainer</h4>
        <p>Physical Fitness is very important in a person’s life. Physically fit people are much more productive & successful in their life, not only that they hold a lot of health benefits over the people who are fit.</p>
        <p><a class="btn btn-secondary" href="personal_trainer.php" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
	  
      <div class="col-lg-4">
      <img style= "max-width : 220px; border-radius:100%;" src = "images/class.jpg" alt =""/>
        <h4 style = "margin:3% 2%;">Events</h4>
        <p>Dont miss out on our exciting events coming up in this summer, Bodygoals is taking its member to differnt countries to experience workouts in new enviroments with new people. Dont miss out</p>
        <p><a class="btn btn-secondary" href="events.php" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
	</section>

	<section class = "testimonial"><!--id = "testimonialLocation"-->
		<div class = "container-for-testimonial">
			 <div class="testimonial-text1">
				<h2 class="featurette-heading">Andy Maddison. <span class="text-muted">C.E.O of Stallion Tech.</span></h2>
				<p class="lead">Our Experience with bodygoals Inc. was amazing, and result satisfying. The staffs working there were so patient and gave their all each time we came for classes. I highly recommend giving bodygoals Inc. a chance to help you get your body goals.  </p>
			</div>
			
			<div class="testimonial-img1">
				<!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
				<img src = "images/andy-maddison.jpg" alt = ""/> 
			  </div>
		 </div>
		 
		 
		 <div class = "container-for-testimonial">
		
			  <div class="testimonial-img2">
					<!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
					<img src = "images/shelly-forrest.jpg" alt = ""/>
			</div>
			
			<div class="testimonial-text2" style="width:50%; margin-right:2%;">
				<h2 class="featurette-heading">Shelly Forrest <span class="text-muted">Head of sales at Water ways Inc.</span></h2>
					<p class="lead">I am in total appreciation and gratitude to the way bodygoals Inc. helped me get the result I wanted to get. They helped me get into a different mind set every time we were in class and that helped me get the drive and push I needed to get my result.</p>
			  </div>
		</div>
	</section>
</main>

<footer class = "footer">
<a href = "index.php"><i href  class="icon fas fa-dumbbell fa-5x"></i></a>
  <div>
      <a class="navbar-brand" href="index.php" style="color:black; float:left;"> <strong>BODYGOALS</strong></a>
    </div>
    <p><strong>© Copyright 2020 BODYGOALS</strong></p> 
  <div class = "footer-div" style="margin-left:300px;"> 
    <ul class="list-inline">
      <li class="list-inline-item"><a href="contactus.php"><strong>Contact Us</strong></a></li>
      <li class="list-inline-item"><a href="aboutUs.php"><strong>About Us</strong></a></li>
      <li class="list-inline-item"><a href="partners.php"><strong>Partnerships</strong></a></li>
      <li class="list-inline-item"><a href="developers.php"><strong>Developers</strong></a></li>
    </ul>
  </div>
  <div style ="margin-bottom:60px;">
  <i class="fab fa-twitter" style="margin: 20px 10px;"></i>
  <i class="fab fa-facebook-f" style="margin: 20px 10px;"></i>
  <i class="fab fa-instagram" style="margin: 20px 10px;"></i>
  <i class="fas fa-envelope" style="margin: 20px 10px;"></i>
  </div>

</footer>
</body>
</html><!--https://wireframe.cc/sPvyz8-->



