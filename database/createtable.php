<?php
    include 'conn.php';
    $sql = "CREATE TABLE notice(
    id INT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    notice VARCHAR (500),
    file VARCHAR (30),
    date DATE)";
    if($conn->query(query:$sql) === TRUE){
        echo "<br>table created";
    }else{
        echo "<br>not created";
    }
?>