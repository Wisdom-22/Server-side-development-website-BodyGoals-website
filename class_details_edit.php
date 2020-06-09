
<body id ="page">
	  <!--main contains whole page-->
	  
	  <!--Header link file-->
	 <?php include('header.php');?>
	  
	  <section class = "upperSection">
		  <form action = "bookClassesValidation.php" method = "POST">
			 <div class = "row" style = "margin-bottom:50px;">
						<div class="col-sm-4">
							<i class="fas fa-female fa-3x"></i>
							<input type="text" class="form-control" name="heading1" placeholder="Heading" required="">
							
							<textarea id = "" rols = "4" cols = "70" name = "message1" class = "textArea">
										 
							</textarea>
							<!--<form>
								<button type="button" class="btn btn-outline-secondary">Book Now</button>
							</form>-->
						</div>
						<div class="col-sm-4">
							 <i class="fas fa-bolt fa-3x"></i>
						
							<input type="text" class="form-control" name="heading2" placeholder="Heading" required="">
							<textarea id = "" rols = "4" cols = "70" name = "message2" class = "textArea">
										 
							</textarea>
							<!--<form>
								<button type="button" class="btn btn-outline-secondary">Book Now</button>
							</form>-->
						</div>
							
						<div class="col-sm-4">
							 <i class="fas fa-beer fa-3x"></i>

							 <input type="text" class="form-control" name="heading3" placeholder="Heading" required="">
							 <textarea id = "" rols = "4" cols = "70" name = "message3" class = "textArea">
										 
							 </textarea>
							 <!--<form>
								<button type="button" class="btn btn-outline-secondary">Book Now</button>
							 </form>-->
						</div>  
				</div>
				
				<div class = "row">
						<div class="col-sm-4">
							<i class="fas fa-weight-hanging fa-3x"></i>
							<input type="text" class="form-control" name="heading4" placeholder="Heading" required="">
							<textarea id = "" rols = "4" cols = "70" name = "message4" class = "textArea">
									 
							</textarea>
							<!--<form>
								<button type="button" class="btn btn-outline-secondary">Book Now</button>
							</form>-->
						</div>
						<div class="col-sm-4">
							<i class="fas fa-running fa-3x"></i>
							 <input type="text" class="form-control" name="heading5" placeholder="Heading" required="">
								 <textarea id = "" rols = "4" cols = "70" name = "message5" class = "textArea">
										 
								</textarea>
							<!-- <form>
								<button type="button" class="btn btn-outline-secondary">Book Now</button>
							</form>-->
						</div>
						<div class="col-sm-4">
							  <i class="fas fa-hamburger fa-3x"></i>
							 <input type="text" class="form-control" name="heading6" placeholder="Heading" required="">
							<textarea id = "" rols = "4" cols = "70" name = "message6" class = "textArea">
										 
							</textarea>
							<!--<form>
								<button type="button" class="btn btn-outline-secondary">Book Now</button>
							</form>-->
						</div>
					</div>
				
					<button type = "submit" class = "loginbutton">Submit</button>
				</form>
			</section>

<!--Footer link file-->
	 <?php include('footer.php');?>

</body>
</html><!--https://wireframe.cc/sPvyz8-->
