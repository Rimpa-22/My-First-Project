<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="image.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="image">
        <div class="img">
            <!-- <img src="./image1.png" alt=""> -->
            <img src="./images/image1.png" alt="">
            <img src="./images/image2.png" alt="">
            <img src="./images/image3.png" alt="">
        </div>   
        <div class="notice">
        <p><i class="fa-solid fa-bell"></i> Notice Board</p>
            <div class="notice-box">
                <marquee behavior="" direction="up" scrollamount="8"  onmouseover="stop()"  onmouseleave="start()">
                    <?php
                        include './database/conn.php';
                        $sql = "SELECT * FROM notice";

                        $res = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($res)>0){
                            while($row = mysqli_fetch_assoc($res)){
                        
                    ?>
                    <a href>
                        <?php echo $row["notice"]; ?>
                    </a>
                    <hr>
                    <?php 
                        }
                        }else{
                            echo "record not found";
                        }
                    ?>
                </marquee>    
                
            
            </div>
        </div>
    </div>    
</body>
</html>