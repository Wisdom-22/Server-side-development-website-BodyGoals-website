<?php 
    session_start();
    if(isset($_SESSION['username'])){
        session_unset();
        session_destroy();
        require('header.php');
			echo "<section style='padding:100px;'>
				<i class='fas fa-check fa-8x'></i>
				<h2>Sucessfully Logged out</h2>
			</section>";
		require('footer.php');
    }
    else{
        require('header.php');
        echo "<section style='padding:50px;'>
                <i class='fas fa-times-circle fa-8x'></i>
                <h2>Already Logged out</h2>
                <a href = 'index.php'>Home Page</a>
            </section>";
        require('footer.php');
    }
?>
