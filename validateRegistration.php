<!--written by Muiz Johnson-->
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $errors = array();

        // validating first name
        if (empty($_POST['firstName'])){
            $errors [] = 'First name is required';
        }
        else{
            $firstName = trim ($_POST['firstName']);
            if (!(preg_match("/^[a-zA-Z]*$/" , $firstname))){
                $errors [] = 'Numbers are not required in names';
            }
        }
        // validating lastName
        if (empty($_POST['lastName'])){
            $errors [] = 'Last name is required';
        }
        else{
            $lastName = trim ($_POST['lastName']);
            if (!(preg_match("/^[a-zA-z]*$/" , $lastname))){
                $errors [] = 'Numbers are not required in names';
            }
        }
        // validating username
        if (empty($_POST['username'])){
            $errors [] = 'Username is required';
        }
        else{
            $username = trim ($_POST['username']);
            if (!(preg_match("/^[a-zA-z0-9]*$/" , $username))){
                $errors [] = 'Numbers are not required in names';
            }
        }
        // validating email.
        if (empty($_POST['email'])){
            $errors [] = 'email is required';
        }
        else{
            $email= trim($_POST['email']);
            if (!filter_var($email , FILTER_VALIDATE_EMAIL)){
                $errors [] = 'Invalid email';
            }
        }
        // validating address
        if (empty($_POST['address'])){
            $errors [] = 'Username is required';
        }
        else{
            $address = trim ($_POST['address']);
            if ((preg_match("/^[a-zA-z0-9]*$/" , $address))){
                $errors [] = 'Numbers are not required in names';
            }
        }
        // validating password
        if (empty($_POST['password'])){
            $errors [] = 'Password is required';
        }
        else{
            $password = trim ($_POST['password']);
            if (!(preg_match("/^[a-zA-z0-9]*$/" , $password))){
                $errors [] = 'Invalid Password';
            }
        }
    }
    if (empty($errors)){
        // opening databse connection.
        require('userDatabase.php');
        $command = "INSERT INTO user VALUE ('$firstname' , '$lastname' , '$username' , '$email' , '$address' , '$password')";
        $result = @mysqli_query($db_connection , $command);

        if($result){
            require('header.php');
        //  $message = "Hi $firstName thank you for registering with bodygoals we are delighted to start working with you";
       // mail('muizjohnson22@gmail.com', 'Registration' , $message);
        echo "<section style='padding:50px;'>
                <h2>Thank you for registring with us</h2>
                <i class='fas fa-check fa-8x'></i>
                <p>Please check your email for verification. But first.....</p>
                <a href = 'registration_edit.php'>Click here to view our programs. It only takes a minutes.</a>
                <p>we cant wait to help you achieve your body goals.</p>
            </section>";
        require('footer.php');
        }
        else{
            require('header.php');
			echo "<section style='padding:50px;'>
					<i class='fas fa-times-circle fa-8x'></i>
					<h2>Your cannot register at the moment</h2>
					<a href = 'index.php'>Home Page</a>
				</section>";
		require('footer.php');
        }
        mysqli_close($db_connection);
    }

   
?>
