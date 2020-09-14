<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "dbhotel";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn && $conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
        return;
    }

    //ELIMINA dalla tabella pagamenti la riga con id 8 (fatto in classe)
    /*$sql = "

        DELETE 
        FROM pagamenti
        WHERE id = 8

    ";*/

    //ELIMINA dalla tabella pagamenti la riga con pagante_id = 6 e con status = rejected
   /* $sql = "

        DELETE 
        FROM pagamenti
        WHERE status LIKE 'rejected' AND pagante_id = 6

    ";*/


    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {


    } elseif ($result) { 

        echo "0 results";

    } else {

        echo "query error";
    }
    $conn->close();
