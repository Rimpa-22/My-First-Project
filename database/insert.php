<?php
    include 'conn.php';

    $sql = "INSERT INTO notice(notice, file, date) VALUES('Mandatory Disclosure', 'notice file', '05-07-2025')";

    if(mysqli_query($conn, $sql)){
        echo "data inserted";
    }else{
        echo "not inserted"; 
    }

?>