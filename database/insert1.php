<?php
    include 'conn.php';

    $sql = "INSERT INTO faculty(slno, name,department ) VALUES('07', 'Vibha Oraon', 'Chemistry')";

    if(mysqli_query($conn, $sql)){
        echo "data inserted";
    }else{
        echo "not inserted"; 
    }

?>