<?php

    if ($_SERVER['REQUEST_METHOD']== "GET"){
        $errors = array();

        $class1 = trim($_GET['class1']);
        $paragraph1 = trim ($_GET['paragraphClass1']);

        echo $class1;
        echo $paragraph1;
    }


?>