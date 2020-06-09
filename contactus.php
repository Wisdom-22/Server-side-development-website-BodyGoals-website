  <body id ="page">
  <!--Header link file-->
  <?php include('header.php');?>
		<section class = "registration">
		<h4 class="mb-3">Contact Us</h4>
				<form style="margin-left:220px;" action = "validation_contactus_form.php" method = "POST">
						<div class="registration-textfield">
							<label class = "labels-for-textbox" for="firstname">First name</label>
							<input type="text" class="form-control" name ="firstname" placeholder="" value="" required="">
							<div class="invalid-feedback">
							  Valid first name is required.
							</div>
						</div>
						
						<div class="registration-textfield">
							<label class = "labels-for-textbox" for="lastname">Last name</label>
							<input type="" class="form-control" name="lastname" placeholder="" value="" required="">
							<div class="invalid-feedback">
							  Valid last name is required.
							</div>
						</div>
						<div class = "registration-textfield">
								<label class = "labels-for-textbox" for="email">Email </label>
								 <input type="email" class="form-control" name="email" placeholder="you@example.com">
								 <div class="invalid-feedback">
								Please enter a valid email address for shipping updates.
								</div>
						</div>
					
						<div class="registration-textfield">
							<label  class = "labels-for-textbox" for="phonenumber">Phone Number</label>
							<input type = "text" class="form-control" name="phonenumber" size = 20 maxlength = 20 required/>
							<div class="invalid-feedback">
							  Valid phone number is required.
							</div>
						</div>
						
						<div class = "registration-textfield">
								<label class = "labels-for-textbox" for="email">Message </label>
								<textarea id = "" rols = "4" cols = "70" name = "message">
									 
								</textarea>
								<div class="invalid-feedback">
									Please enter a valid Message here to be in contact with us.
								</div>
						</div><p></p>
						<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin-right:150px;">Contact Us</button>
				</form>
		</section>
		
	
   <!--Footer link file-->	
   <?php include('footer.php');?>

</body>
</html><!--https://wireframe.cc/sPvyz8-->
