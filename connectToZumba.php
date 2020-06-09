<?php
	session_start();

    if(isset($_SESSION['username'])){
		//start a time for the user
        $time = time() + 86400;
        require('ZumbaClass.php');
        
    }
    else{
        require('header.php');
		echo "<section style='padding:100px;'>
				<h2>Sorry you need to login or register!!!.</h2>
				<i class='fas fa-times-circle fa-8x'></i>
				<p>We would get back to you shortly...</p>
				<a href = 'index.php'>Go to Home Page</a>
			</section>";
		require('footer.php');
    }
?>