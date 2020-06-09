<!--Written by Chukwuemeka Wisdom Arinze-->
<body id ="page">
<?php include('header.php');?>
			  
			<section class = "registration" style = "">  
				
				<form class = "form" method = "POST" action = "testimonialValidation.php">
					<h4>Comment</h4>
						
						 <div class="registration-textfield">
						   <label for="firstname" class = "labels-for-textbox">First name</label>
						   <input type="text" class="form-control" name="firstname" placeholder="" value="" required=""></br>
							<div class="invalid-feedback">
							  Valid first name is required.
							</div>
						  </div>
						
						<div class="registration-textfield">
						   <label for="firstname" class = "labels-for-textbox">Class name</label>
						   <input type="text" class="form-control" name="classname" placeholder="" value="" required=""></br>
							<div class="invalid-feedback">
							  Valid class name is required.
							</div>
						</div>
						
						<div class="registration-textfield">
							<label for="firstname" class = "labels-for-textbox">Date</label>
							<input type = "date" class="form-control" name = "date"/><br>
							<div class="invalid-feedback">
								Valid Date is required.
							</div>
						</div>
					  
					 
					  
					  <div class = "registration-textfield">
							<label class = "labels-for-textbox" for="email">Comment </label>
								<textarea id = "" rols = "4" cols = "70" name = "comment">
											 
								</textarea>
								<div class="invalid-feedback">
									Please enter a valid Message here to be in contact with us.
								</div>
					 </div>
			  
					<button type = "submit" class = "submitbutton">Send Comment</button>
				</form>
			 </section> 
<?php include('footer.php');?>

	</body>
</html><!--https://wireframe.cc/sPvyz8-->
