<?php
	
	//$hostname = "localhost";
	//$username = "s2970177";
	//$password = "18/10/1996";
	//$databasename = "s2970177";
	
	
	$db_connection = mysqli_connect('localhost', 's2970177', '18/10/1996', 's2970177');//OR die("Could Not Connect To Mysql ".mysqli_connect_error());
	//mysqli_select_db($db_connection,'s2970177');
	if($db_connection){
		//echo "Connection succesful!!";
		//mysql_set_charset($db_connection,'utf8');
	}
	else{
		//echo "Connection Unsuccessful";
	}
	
	


	
?>
