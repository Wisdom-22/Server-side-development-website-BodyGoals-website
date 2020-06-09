<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
	$errormessages = array();
	
		//validation for heading 1
		if(empty($_POST['heading1'])){
			$errormessages[] = 'Heading1 is required';
		}
		else{
			$heading1 = trim($_POST['heading1']);
			if(preg_match("/^[a-zA-Z0-9]*$/", $heading1)){
				$errormessages[] = "Need Valid Heading1.";
			}
		}
		
		//validation for message1
		if(empty($_POST['message1'])){
		$errormessages[] = 'Message1 is required';
		}
		else{
			$message1 = trim($_POST['message1']);
			if(preg_match("/^[a-zA-Z0-9.,?]*$/",$message1)){
				$errormessages[] = "Need Valid Message1.";
			}
		}
		
		
		//validation for heading 2
		if(empty($_POST['heading2'])){
			$errormessages[] = 'Heading2 is required';
		}
		else{
			$heading2 = trim($_POST['heading2']);
			if(!preg_match("/^[a-zA-Z0-9.,?]*$/", $heading2)){
				$errormessages[] = "Need Valid Heading2.";
			}
		}
		
		//validation for message2
		if(empty($_POST['message2'])){
			$errormessages[] = 'Message2 is required';
		}
		else{
			$message2 = trim($_POST['message2']);
			if(preg_match("/^[a-zA-Z0-9.,?]*$/",$message2)){
				$errormessages[] = "Need Valid Message2.";
			}
		}
		
		
		//validation for heading 3
		if(empty($_POST['heading3'])){
			$errormessages[] = 'Heading3 is required';
		}
		else{
			$heading3 = trim($_POST['heading3']);
			if(preg_match("/^[a-zA-Z0-9]*$/", $heading3)){
				$errormessages[] = "Need Valid Heading3.";
			}
		}
		
		//validation for message3
		if(empty($_POST['message3'])){
			$errormessages[] = 'Message3 is required';
		}
		else{
			$message3 = trim($_POST['message3']);
			if(preg_match("/^[a-zA-Z0-9.,?]*$/",$message3)){
				$errormessages[] = "Need Valid Message3.";
			}
		}
		
		
		//validation for heading 4
		if(empty($_POST['heading4'])){
			$errormessages[] = 'Heading4 is required';
		}
		else{
			$heading4 = trim($_POST['heading4']);
			if(preg_match("/^[a-zA-Z0-9]*$/", $heading4)){
				$errormessages[] = "Need Valid Heading4.";
			}
		}
		
		//validation for message4
		if(empty($_POST['message4'])){
			$errormessages[] = 'Message4 is required';
		}
		else{
			$message4 = trim($_POST['message4']);
			if(preg_match("/^[a-zA-Z0-9.,?]*$/",$message4)){
				$errormessages[] = "Need Valid Message4.";
			}
		}
		
		//validation for heading 5
		if(empty($_POST['heading5'])){
			$errormessages[] = 'Heading5 is required';
		}
		else{
			$heading5 = trim($_POST['heading5']);
			if(preg_match("/^[a-zA-Z0-9]*$/", $heading5)){
				$errormessages[] = "Need Valid Heading5.";
			}
		}
		
		//validation for message5
		if(empty($_POST['message5'])){
			$errormessages[] = 'Message5 is required';
		}
		else{
			$message5 = trim($_POST['message5']);
			if(preg_match("/^[a-zA-Z0-9.,?]*$/",$message5)){
				$errormessages[] = "Need Valid Message5.";
			}
		}
		
		//validation for heading 6
		if(empty($_POST['heading6'])){
			$errormessages[] = 'Heading6 is required';
		}
		else{
			$heading6 = trim($_POST['heading6']);
			if(!preg_match("/^[a-zA-Z0-9.,?]*$/", $heading6)){
				$errormessages[] = "Need Valid Heading6.";
			}
		}
		
		//validation for message6
		if(empty($_POST['message6'])){
			$errormessages[] = 'Message6 is required';
		}
		else{
			$message6 = trim($_POST['message6']);
			if(preg_match("/^[a-zA-Z0-9.,?]*$/",$message6)){
				$errormessages[] = "Need Valid Message6.";
			}
		}

	}
	
	
	
	
	if(empty($errormessages)){
		require('userDatabase.php');
		
		$query1 = "INSERT INTO classesEdit VALUES('1','$heading1','$message1')";
		$query2 = "INSERT INTO classesEdit VALUES('2','$heading2','$message2')";
		$query3 = "INSERT INTO classesEdit VALUES('3','$heading3','$message3')";
		$query4 = "INSERT INTO classesEdit VALUES('4','$heading4','$message4')";
		$query5 = "INSERT INTO classesEdit VALUES('5','$heading5','$message5')";
		$query6 = "INSERT INTO classesEdit VALUES('6','$heading6','$message6')";
		
		$result1 = @mysqli_query($db_connection, $query1);
		$result2 = @mysqli_query($db_connection, $query2);
		$result3 = @mysqli_query($db_connection, $query3);
		$result4 = @mysqli_query($db_connection, $query4);
		$result5 = @mysqli_query($db_connection, $query5);
		$result6 = @mysqli_query($db_connection, $query6);
		
		if($result1 && $result2 && $result3 && $result4 && $result5 && $result6){
			require('header.php');
			echo "<section style='padding:50px;'>
				<h2>Your classes has been sucessfully updated.</h2>
				<i class='fas fa-check fa-8x'></i>
				<p>We would get back to you shortly...</p>
				<a href = 'adminViews.php'>Go to Home Page</a>
			</section>";
		require('footer.php');
		}
		else{
			require('header.php');
			echo "<section style='padding:50px;'>
					<i class='fas fa-times-circle fa-8x'></i>
					<h2>Your class could not be sent at the moment</h2>
					<a href = 'adminViews.php'>Home Page</a>
				</section>";
		require('footer.php');
		}
		
	}

mysqli_close($db_connection);

?>