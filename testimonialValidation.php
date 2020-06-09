<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
		$errormessages = array();
	
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$errormessages = array();
	
			if(empty($_POST['username'])){
				$errormessages[] = 'Username is required in first input';
			}
			else{
				$username = trim($_POST['username']);
				 if (!(preg_match("/^[a-zA-z0-9]*$/" , $price1))){
					$errormessages[] = "Need Valid username.";
				}
			}
			
			if(empty($_POST['image1'])){
				$errormessages[] = 'Image required';
			}
			else{
				$image1 = trim($_POST['image1']);
				 if (!(preg_match("/^[a-zA-z0-9]*$/" , $image1))){
					$errormessages[] = "Need Valid image.";
				}
			}
			
			if(isset($_POST['insert'])){
				$file = addcslashes(file_get_contents($_Files["image"]["tmp_name"]));
				$query = "INSERT INTO testimonial_manage VALUES('1','$username','$name','$testimonial','$file')";
				
				if(mysqli_query($db_connection, $query)){
					echo '<script>alert("Image Inserted into Database")</script>';
				}
				
			}
}



if(empty(errormessages)){
	require('userDatabase.php');
	
	
	
}



//display image from database
<?php
	$query = "SELECT * FROM tbl_images ORDER BY DESC";
	$result = mysqli_query($db_connection, $query);
	
while($row = mysqli_fetch_array($result)){
	echo '
		<tr>
				<td>
					<img sc = "data:image/jpeg:base64,'.base64_encode($row['name'] ).  '"/>
				</td>
		</tr>
	
	';
}
?>




?>
