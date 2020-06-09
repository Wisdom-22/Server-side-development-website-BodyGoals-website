<?php
	session_start();
	$username = $_SESSION['username'];
?>
 <?php include('header.php'); ?>
<body id ="page" style= "text-align:center;" >
    <section style = "padding:50px;" >
        <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <a href="class_details_edit.php"> <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin: 20px 10px;">Class Details Edit</button></a>
            </div>
            <div class="col-lg-4">
            <a href="registration_edit.php"> <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin: 20px 10px;">Change Pricing</button></a>
            </div>
            <div class="col-lg-4">
            <a href="viewContactUs.php"> <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin: 20px 10px;"> contact us messages</button></a>
            </div>
        </div>
    </div>
</section>
  <section style = 'padding:50px;'>
    <div class="container " >
     <div class="row">
        <div class="col-lg-4">
        <a href="#"> <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin: 20px 10px;">Testimonial manage</button></a>
        </div>
        <div class="col-lg-4">
        <a href="Logout.php"> <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin: 20px 10px;"> Logout</button></a>
        </div>
    </div>
</div>
 </section>
</body>
<?php include('footer.php'); ?>
	
