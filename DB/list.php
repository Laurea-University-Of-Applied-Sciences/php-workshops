<?php
    $dbhost = '127.0.0.1:50818';
    $dbname = 'localdb';
    $dbusername = 'azure';
    $dbpassword = '6#vWHD_$';

    $connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

    if (!$connection) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    $sql = "SELECT * FROM testtable";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["Name"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($connection);
?>