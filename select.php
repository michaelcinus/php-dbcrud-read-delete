<?php
    $servername = "localhost";
    $username = "guybrush";
    $password = "code";
    $dbname = "dbhotel";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn && $conn->connect_error) {

        echo "Connection failed: " . $conn->connect_error;
        return;
        
    }
    $sql = "

        SELECT *
        FROM pagamenti

    ";
    
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {

        echo '<ul>';
       
        while($row = $result->fetch_assoc()) {

            echo $row['id'] ." - " .$row['status'] ." - " .$row['price'] . '<br>';
            echo '</li>';

        }

    } elseif ($result) {

        echo "0 results";

    } else {

        echo "query error";

    }
    $conn->close();