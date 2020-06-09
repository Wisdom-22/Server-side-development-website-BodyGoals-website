<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$errormessages = array();
		
		//validating first name
		if(empty($_POST['firstname'])){
			$errormessages[] = 'first name is required';	
		}
		else{
			$firstname = trim($_POST['firstname']);
			if(preg_match("/^[a-zA-Z0-9]$/", $firstname)){
				$errormessages[] = "Need first name";
			}
		}
		
		//validation for class name
		if(empty($_POST['classname'])){
			$errormessages[] = 'class name is required';	
		}
		else{
			$classname = trim($_POST['classname']);
			if(preg_match("/^[a-zA-Z0-9]$/", $classname)){
				$errormessages[] = "Need class name";
			}
		}
		
		
		//validation for date of birth
		if(empty($_POST['date'])){//if the lecture time is empty
			$errormessages [] = "date is required";//error message that will be 
		}
		else{
			$date = trim($_POST['date']);	//in databse year - day - month  		
		}
		
		
		
		if(empty($_POST['comment'])){
			$errormessages[] = 'comment is required';
		}
		else{
			$comment = trim($_POST['comment']);
			if(preg_match("/^[a-zA-Z0-9.,?]*$/",$comment)){
				$errormessages[] = "Need comment";
			}
		}
		
		
		
	}	

	if(empty($errormessages)){
			require('userDatabase.php');
			$query = "INSERT INTO comments_table VALUES('1','$firstname','$classname','$date','$comment')";
			$result = @mysqli_query($db_connection, $query);
			

		
		if($result){
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
	}

mysqli_close($db_connection);


?>