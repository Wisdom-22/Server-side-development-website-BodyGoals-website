
<body id ="page">
	<?php include('header.php');?>
			 
	<section class = "registration_edit">
		<div class = "headind_paragraph">
			<h1 class="display-4">Pricing</h1>
			<p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
		</div>	
		
	<form method = "POST" action = "validation_registartion_edit.php">	
		<div class="card-deck mb-3 text-center">
			<div class="card mb-4 shadow-sm">
			  <div class="card-header">
				<h4 class="my-0 font-weight-normal" name = "type">Free</h4>
			  </div>
			  <div class="card-body">
				<h1 class="card-title pricing-card-title" name = "price"><?php echo "$price1"; ?>Free<small class="text-muted">/ mo</small></h1>
				<ul class="list-unstyled mt-3 mb-4" name = "benefits">
				  <li>No Classes included</li>
				  <li>Minimal equipment</li>
				  <li>Email support</li>
				  <li>Help center access</li>
				</ul>
				<button type="button" class="btn btn-lg btn-block btn-outline-primary">Free</button>
			  </div>
			</div>
			<div class="card mb-4 shadow-sm">
			  <div class="card-header">
				<h4 class="my-0 font-weight-normal" name = "type">Pro</h4>
			  </div>
			  <div class="card-body">
				<h1 class="card-title pricing-card-title" name = "price"> <?php
				require('userDatabase.php');
				$query = "SELECT * FROM pricing_Details where price_id ='5'";
				$result = mysqli_query($db_connection , $query);
				while($row = mysqli_fetch_array($result)){
					echo  "$row[price1]";
				}
				?> <small class="text-muted">/ mo</small></h1>
				<ul class="list-unstyled mt-3 mb-4" name = "benefits">
				  <li>3 Classes Included</li>
				  <li>Maximum equipment</li>
				  <li>Priority email support</li>
				  <li>Help center access</li>
				</ul>
				<a href = "registration_payment.php"><button type="button" class="btn btn-lg btn-block btn-primary">Get started</button></a>
			  </div>
			</div>
			<div class="card mb-4 shadow-sm">
			  <div class="card-header">
				<h4 class="my-0 font-weight-normal" name = "type">Enterprise</h4>
			  </div>
			  <div class="card-body">
				<h1 class="card-title pricing-card-title" name = "price">
				<?php
				require('userDatabase.php');
				$query = "SELECT * FROM pricing_Details where price_id ='5'";
				$result = mysqli_query($db_connection , $query);
				while($row = mysqli_fetch_array($result)){
					echo  "$row[price2]";
				}
				?>
				<small class="text-muted">/ mo</small></h1>
				<ul class="list-unstyled mt-3 mb-4" name = "benefits">
				  <li>All classes included</li>
				  <li>Personal Trainer</li>
				  <li>Phone and email support</li>
				  <li>Help center access</li>
				</ul>
				<a href = "registration_payment.php"><button type="button" class="btn btn-lg btn-block btn-primary">Get Started</button></a>
				
			  </div>
			</div>
		  </div>
		</form>
	</section>
   <?php include('footer.php');?>

	</body>
</html><!--https://wireframe.cc/sPvyz8-->



