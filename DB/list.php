<?php

    $servername = "127.0.0.1:50818";
    $username = "azure";
    $password = "6#vWHD_$";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "SELECT * FROM testtable"

?>