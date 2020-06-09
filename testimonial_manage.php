<body id ="page"><!--Written by Chukwuemeka Wisdom Arinze-->
  <?php include('header.php');?>
	<section class = "testimonials">
	
		<form method = "POST" enctype = "multipart/form-data" action = "testimonialValidation.php" >
			<h4>Testimonial Insert</h4>
			<div class = "testimonials-container">
				
				<div class="testimonial-username">
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
			
			
					<div class = "testimonial-text">					
						<p>
							Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
							Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
						</p>
					</div>
					
					
					<div class = "testimonials-img">
						<!--<img src = "images/icon.jpg" alt = ""/> -->
						<input type = "file" name = "image" id = "image" class = "testimonialImage"/>
					</div>
					
						
			</div>
			
			
			
			<div class = "testimonials-container">
					
					<div class="testimonial-username">
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
				
					<div class = "testimonial-text">
						<p>
							Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
							Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
						</p>
					</div>
					<div class = "testimonials-img">
						<img src = "images/icon.jpg" alt = ""/> 
					</div>
			</div>
			
			
			
			<div class = "testimonials-container">
					
					<div class="testimonial-username">
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
				
					<div class = "testimonial-text">
						<p>
							Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
							Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
						</p>
					</div>
					<div class = "testimonials-img">
						<img src = "images/icon.jpg" alt = ""/> 
					</div>
			</div>
		
		<input type = "submit" name = "submit" id = "insert" value = "insert"/> 
		
	</form>	
		
		   
 <?php include('footer.php');?>

</body>
</html><!--https://wireframe.cc/sPvyz8-->

<script>
		$(document).ready(function(){
			$('#insert').click(function(){
				var image_name = $('#image').val();
				if(image_name == ''){
					
					alert("Please Select Image");
					return false;
				}
				else{
					var extension = $('#image').val().split('.').pop().toLowerCase();
					
					if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){
						alert('Invalid Image File');
						$('#image').val('');
						return false;
					}
				}
			});
		});	
</script>



