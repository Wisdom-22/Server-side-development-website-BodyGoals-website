<?php
	//Written by Chukwuemeka Wisdom Arinze
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$errormessages = array();
	
			if(empty($_POST['price1'])){
				$errormessages[] = 'Price is required in the first input';
			}
			else{
				$price1 = trim($_POST['price1']);
				 if (!(preg_match("/^[a-zA-z0-9]*$/" , $price1))){
					$errormessages[] = "Need Valid Price1.";
				}
			}
		
			if(empty($_POST['price2'])){
				$errormessages[] = 'Price is required in the second input';
			}
			else{
				$price2 = trim($_POST['price2']);
				 if (!(preg_match("/^[a-zA-z0-9$]*$/" , $price2))){
					$errormessages[] = "Need Valid Price2.";
				}
			}
			
			if(empty($_POST['price3'])){
				$errormessages[] = 'Price is required in the third input';
			}
			else{
				$price3 = trim($_POST['price3']);
				 if (!(preg_match("/^[a-zA-z0-9$]*$/" , $price3))){
					$errormessages[] = "Need Valid Price3.";
				}
			}
								
	}
	
	
	if (!empty($errormessages)){
		print_r($errormessages);
	}
	
	// we still need to work on the edit on this page
	if(empty($errormessages)){
		require('userDatabase.php');
		$query = "INSERT INTO pricing_Details VALUES('$price2','$price3', '5')";
		$result = @mysqli_query($db_connection, $query);
		
		if($result){
			require('header.php');
			echo "<section style='padding:50px;'>
				<h2>Your Prices has been sucessfully changed.</h2>
				<i class='fas fa-check fa-8x'></i>
				<p>We would get back to you shortly...</p>
				<a href = 'index.php'>Go to Home Page</a>
			</section>";
		require('footer.php');
		}
		else{
			require('header.php');
			echo "<section style='padding:50px;'>
					<i class='fas fa-times-circle fa-8x'></i>
					<h2>Your prices could not be sent at the moment</h2>
					<a href = 'index.php'>Home Page</a>
				</section>";
		require('footer.php');
		}
		mysqli_close($db_connection);
	}
?>
