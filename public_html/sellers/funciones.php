<?php
    function ConectarBD(){
        $con=new mysqli("localhost","toyota","12345","toyota_database");
        if($con->connect_error){
            die("Error al conectarse".$con->connect_error);
        }
        return $con;
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = str_replace("'", "\'", $data);
        return $data;
    }
?>