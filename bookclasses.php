<?
	session_start();
	$username = $_SESSION['username'];
?>
<?php include ('header.php');?> <!--including header-->
<section class = "upperSection">
    <div class = "row" style = "margin-bottom:50px;">
        <div class="col-sm-4">
            <i class="fas fa-female fa-3x"></i>
            <h4>
				<?php
				require('userDatabase.php');
				$query = "SELECT heading FROM classesEdit WHERE class_id = '1'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[heading]";
					
				}

				?>
			
			</h4>
            <p>
			<?php
				require('userDatabase.php');
				$query = "SELECT message FROM classesEdit WHERE class_id = '1'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[message]";
					
				}

				?>
			</p>
            <form>
			<a href = "connect.php"><button type="button" class="btn btn-outline-secondary">Book Now</button></a>
            </form>
        </div>
        <div class="col-sm-4">
             <i class="fas fa-bolt fa-3x"></i>
            <h4>
			<?php
				require('userDatabase.php');
				$query = "SELECT heading FROM classesEdit WHERE class_id = '2'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[heading]";
					
				}

				?>
			</h4>
            <p>
			<?php
				require('userDatabase.php');
				$query = "SELECT message FROM classesEdit WHERE class_id = '2'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[message]";
					
				}

				?>
			</p>
            <form>
            <a href = "connectToZumba.php"><button type="button" class="btn btn-outline-secondary">Book Now</button></a>
            </form>
        </div>

        <div class="col-sm-4">
             <i class="fas fa-beer fa-3x"></i>
             <h4>
			 <?php
				require('userDatabase.php');
				$query = "SELECT heading FROM classesEdit WHERE class_id = '3'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[heading]";
					
				}

				?>
			 </h4>
             <p>
			 <?php
				require('userDatabase.php');
				$query = "SELECT message FROM classesEdit WHERE class_id = '3'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[message]";
					
				}

				?>
			 </p>
             <form>
			 <a href = "connectToBody.php"><button type="button" class="btn btn-outline-secondary">Book Now</button></a>
            </form>
        </div>    
    </div>
    
    <div class = "row">
        <div class="col-sm-4">
            <i class="fas fa-weight-hanging fa-3x"></i>
            <h4>
			<?php
				require('userDatabase.php');
				$query = "SELECT heading FROM classesEdit WHERE class_id = '4'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[heading]";
					
				}

				?>
			</h4>
            <p>
			<?php
				require('userDatabase.php');
				$query = "SELECT message FROM classesEdit WHERE class_id = '4'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[message]";
					
				}

				?>
			</p>
            <form>
			<a href = "connecttoWeight.php"><button type="button" class="btn btn-outline-secondary">Book Now</button></a>
            </form>
        </div>
        <div class="col-sm-4">
            <i class="fas fa-running fa-3x"></i>
             <h4>
			 <?php
				require('userDatabase.php');
				$query = "SELECT heading FROM classesEdit WHERE class_id = '5'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[heading]";
					
				}

				?>
			 </h4>
             <p>
			 <?php
				require('userDatabase.php');
				$query = "SELECT message FROM classesEdit WHERE class_id = '5'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[message]";
					
				}

				?>
			 </p>
             <form>
             <a href = "connectCardio.php"><button type="button" class="btn btn-outline-secondary">Book Now</button></a>
            </form>
        </div>
        <div class="col-sm-4">
              <i class="fas fa-hamburger fa-3x"></i>
             <h4>
			 <?php
				require('userDatabase.php');
				$query = "SELECT heading FROM classesEdit WHERE class_id = '6'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[heading]";
					
				}

				?>
			 </h4>
            <p>
			<?php
				require('userDatabase.php');
				$query = "SELECT message FROM classesEdit WHERE class_id = '6'";
				$result = mysqli_query($db_connection, $query);
				while($row = mysqli_fetch_array($result)){
					echo "$row[message]";
					
				}

				?>
			</p>
            <form>
			<a href = "connectNutrition.php"> <button type="button" class="btn btn-outline-secondary">Book Now</button></a>
            </form>
        </div>
    </div>
</section>


<?php include ('footer.php'); ?> <!--including footer-->
</body>











</html>