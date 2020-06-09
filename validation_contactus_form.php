<?php
	//code written by Chukwuemeka WIsdom Arinze and muiz johnson
	session_start();
	$sessionforContact  = $_SESSION['email'];
	
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$errormessages = array();
	
	if(empty($_POST['firstname'])){
		$errormessages[] = 'First Name is required';
	}
	else{
		$firstname = trim($_POST['firstname']);
		if(!preg_match("/^[a-zA-Z]*$/", $firstname)){
			$errormessages[] = "Need Valid First Name.";
		}
	}
	
	if(empty($_POST['lastname'])){
		$errormessages[] = 'Last Name is required';
	}
	else{
		$lastname = trim($_POST['lastname']);
		if(!preg_match("/^[a-zA-Z]*$/", $lastname)){
			$errormessages[] = "Need Valid Last Name.";
		}
	}
	
	if(empty($_POST['email'])){
		$errormessages[] = 'Email is required';
	}
	else{
		$email = trim($_POST['email']);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errormessages[] = "Need Valid Email.";
		}
	}
	
	if(empty($_POST['phonenumber'])){
		$errormessages[] = 'Phone Number is required';
	}
	else{
		$phonenumber = trim($_POST['phonenumber']);
		if(!preg_match("/^[0-9]*$/",$phonenumber)){
			$errormessages[] = "Need Valid Phone Number.";
		}
	}
	
	if(empty($_POST['message'])){
		$errormessages[] = 'Message is required';
	}
	else{
		$message = trim($_POST['message']);
		if(preg_match("/^[a-zA-Z0-9.,?]*$/",$message)){
			$errormessages[] = "Need Valid Message.";
		}
	}
	
	
}

if(empty($errormessages)){
	// opening databse connection.
	require('userDatabase.php');
	$query = "INSERT INTO contact_us value('$firstname' , '$lastname' , '$email' , '$phonenumber' , '$message')";
	$result = @mysqli_query($db_connection , $query);

	if ($result){
		require('header.php');
		echo "<section style='padding:50px;'>
				<h2>Your message has been sucessfully sent.</h2>
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
					<h2>Your message could not be sent at the moment</h2>
					<a href = 'index.php'>Home Page</a>
				</section>";
		require('footer.php');
	}
	mysqli_close($db_connection);
}












?>
