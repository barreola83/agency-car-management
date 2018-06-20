<?php
    require "functions.php";

    $conn = connectToDatabase();
    $id_node = $_POST["id_node"];

    $conn->close();
?>