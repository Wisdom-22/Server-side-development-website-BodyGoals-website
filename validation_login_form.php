<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$errormessages = array();
	
	if (empty($_POST['username'])){
		$errors [] = 'Username is required';
	}
	else{
		$username = trim ($_POST['username']);
		if (!(preg_match("/^[a-zA-z0-9]*$/" , $username))){
			$errors [] = 'Numbers are not required in names';
		}
	}
	
	if(empty($_POST['password'])){
		$errormessages[] = 'Password is required';
	}
	else{
		$password = trim($_POST['password']);
		if(!preg_match("/^[a-zA-Z0-9]*$/", $password)){
			$errormessages[] = "Need Password";
		}
	}
}
if(empty($errormessages)){
	require('userDatabase.php');
	$command = "SELECT * from user where username = '$username' and password = '$password' ";
	$result = @mysqli_query($db_connection , $command);
		if (mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_array($result);
			$_SESSION['username'] = $row['username'];
			if (isset($_SESSION['username'])){
				$_SESSION['time'] = time() + 86400;
				require('header.php');
				echo "<section style='padding:50px;'>
						<i class='fas fa-check fa-8x'></i>
						<h2>Welcome back $username</h2>
						<a href = 'index.php'>Home Page</a><p></p>
						<a href = 'comments.php'>Add comment</a>
					</section>";
				require('footer.php');
			}
		}
		else{
			require('header.php');
			echo "<section style='padding:50px;'>
					<i class='fas fa-times-circle fa-8x'></i>
					<h2>Incorrect username and Password</h2>
					<a href = 'index.php'>Home Page</a>
				</section>";
			require('footer.php');
		}
	mysqli_close($db_connection);
}



?>
