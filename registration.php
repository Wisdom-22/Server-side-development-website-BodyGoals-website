<body id ="page">
			  <?php include('header.php');?>
			  
	<section class = "registration">
	
      <h4 class="mb-3">Client Details</h4>
		  <form style="margin-left:220px;" class="form" method = "POST" action = "validateRegistration.php">
		 
			  <div class="registration-textfield">
				   <label for="firstName" class = "labels-for-textbox">First name</label>
				   <input type="text" class="form-control" name="firstName" placeholder="" value="" required=""></br>
					<div class="invalid-feedback">
					  Valid first name is required.
					</div>
			  </div>
			  
			  
			  <div class="registration-textfield">
					<label for="lastName" class = "labels-for-textbox">Last name</label>
					<input type="text" class="form-control" name="lastName" placeholder="" value="" required="">
					<div class="invalid-feedback">
					  Valid last name is required.
					</div>
			  </div>
		  
			<div class="registration-textfield">
				<label for="username" class = "labels-for-textbox">Username</label>
				
				<div class="input-group">
					<div class="input-group-prepend">
					  <span class="input-group-text">@</span>
					</div>
					
					<input type="text" class="form-control" name="username" placeholder="Username" required="">
					<div class="invalid-feedback" style="width: 100%;">
					  Your username is required.
					</div>
					
			   </div>
			</div>

			<div class="registration-textfield">
				  <label for="email" class = "labels-for-textbox">Email</label>
				  <input type="email" class="form-control" name="email" placeholder="you@example.com">
				  
				  <div class="invalid-feedback">
					Please enter a valid email address for shipping updates.
				  </div>
			</div>

			<div class="registration-textfield">
				  <label for="address" class = "labels-for-textbox">Address</label>
				  <input type="text" class="form-control" name="address" placeholder="1234 Main St" required="">
				  <div class="invalid-feedback">
					Please enter your shipping address.
				  </div>
			</div>		
			
			 <div class="registration-textfield">
				  <label for="password" class = "labels-for-textbox">Password</label>
				  <div class="input-group">
						<div class="input-group-prepend">
						</div>
						<input type="password" class="form-control" name="password" placeholder="Password" required="">
						<div class="invalid-feedback" style="width: 100%;">
						  Your password is required.
						</div>
				  </div>
			</div><p></p>
			<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin-right:150px;">Register Now</button>
	  </form>
	 
  
</section>
			  
			 <?php include('footer.php');?>

	</body>
</html><!--https://wireframe.cc/sPvyz8-->


