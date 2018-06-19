<?php
    function connectToDatabase()
    {
        $conn = new mysqli("localhost", "toyota", "12345", "toyota_database");

        if ($conn->connect_error)
            die("Error: " . $conn->connect_error);
        
        return $conn;
    }
?>