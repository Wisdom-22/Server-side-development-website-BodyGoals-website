<body id ="page">
			  <?php include('header.php');?>

	
	<form class = "registration_edit" action = "validation_registration_edit.php" method ="POST">
		<div class="card-deck mb-3 text-center">
			<div class="card mb-4 shadow-sm">
			  <div class="card-header">
				<h4 class="my-0 font-weight-normal" name = "type">Free</h4>
			  </div>
			  <div class="card-body">
				<input type="text" class="form-control" name="price1" placeholder="Username" required="">
				<ul class="list-unstyled mt-3 mb-4" name = "benefits">
				  <li>No Classes included</li>
				  <li>Minimal equipment</li>
				  <li>Email support</li>
				  <li>Help center access</li>
				</ul>
				<a href = "registration_payment.php"><button type="button" class="btn btn-lg btn-block btn-outline-secondary">Free</button></a>
			  </div>
			</div>
			
			<div class="card mb-4 shadow-sm">
			  <div class="card-header">
				<h4 class="my-0 font-weight-normal" name = "type">Pro</h4>
			  </div>
			  <div class="card-body">
				<input type="text" class="form-control" name="price2" placeholder="Username" required="">
				<ul class="list-unstyled mt-3 mb-4" name = "benefits">
				  <li>3 Classes Included</li>
				  <li>Maximum equipment</li>
				  <li>Priority email support</li>
				  <li>Help center access</li>
				</ul>
				<a href = "registration_payment.php"><button type="button" class="btn btn-lg btn-block btn-secondary">Get started</button></a>
			  </div>
			  </div>
			<div class="card mb-4 shadow-sm">
			  <div class="card-header">
				<h4 class="my-0 font-weight-normal" name = "type">Enterprise</h4>
			  </div>
			  <div class="card-body">
				<input type="text" class="form-control" name="price3" placeholder="Username" required="">
				<ul class="list-unstyled mt-3 mb-4" name = "benefits">
				  <li>All classes included</li>
				  <li>Maximum equipment and personal</li>
				  <li>Phone and email support</li>
				  <li>Help center access</li>
				</ul>
				<a href = "registration_payment.php"><button type="button" class="btn btn-lg btn-block btn-secondary">Get Started</button></a>
				
			  </div>
			</div>
		  </div>

	
		<button type = "submit"class = "loginbutton">Submit</button>
	</form>
	
   <?php include('footer.php');?>

	</body>
</html><!--https://wireframe.cc/sPvyz8-->



