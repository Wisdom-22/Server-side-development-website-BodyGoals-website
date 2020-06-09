<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if (isset($_POST['admin'])){
        $admin = trim($_POST['admin']);
    }
    echo $admin;
}


?>
