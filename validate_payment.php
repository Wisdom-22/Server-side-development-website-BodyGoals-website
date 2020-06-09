<!--written by muiz johnson-->
<?php 

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $errors = array();

        //validating card either weather debit master or verve
        if (isset($_POST['paymentMethod'])){
            $cardType = trim($_POST['paymentMethod']);
        }
        //no pattern matching for radio type

        // validating name
        if(empty($_POST['fullname'])){
            $errors[] = 'Full Name is required';
        }
        else{
            $fullname = trim($_POST['fullname']);
            if(!preg_match("/^[a-zA-Z]*$/", $fullname)){
                $errormessages[] = "Need Valid Full Name.";
            }
        }
        if (empty($_POST['cardNumber'])){
            $errors[] = 'you need a card number';
        }
        else{
            $number = trim($_POST['cardNumber']);
            if (!preg_match("/^[0-9]*$/" , $number)){
                $errors [] ='Invalid card number';
            }
        }

        if (empty($_POST['expire'])){
            $errors[] = 'you need a expiration date';
        }
        else{
            $expire = trim($_POST['expire']);
            if (preg_match("/^[0-9]*$/" , $expire)){
                $errors [] ='Invalid expiration number';
            }
        }
        if (empty($_POST['cvv'])){
            $errors[] = 'you need a cvv';
        }
        else{
            $cvv = trim($_POST['cvv']);
            if (!preg_match("/^[0-9]*$/" , $cvv)){
                $errors [] ='Invalid cvv';
            }
        }
    }
    if (empty($errors)){
        require('userDatabase.php');
        $result = "INSERT INTO cardDetails VALUE ('0' ,'$cardType' , '$fullname' , '$number' , '$expire' , '$cvv')";
        $outcome =@mysqli_query($db_connection , $result);

        //writing client card into the database 
        if($outcome){
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
					<h2>Your details was not successful</h2>
					<a href = 'index.php'>Home Page</a>
				</section>";
		    require('footer.php');
        }
    }
    mysqli_close($db_connection);
    
?>
