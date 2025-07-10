<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <?php  
        include './include/logo.php';
        include './include/navbar.php'; 
        include './include/notice.php'; 
    ?>
    <div class="about">
        <div></div>
        <div>
            <p ><i class="fa-solid fa-users"></i> Faculty </p>
        </div>
        <div></div>
    </div>
    
    <div class="main-card" style="display:flex; flex-wrap: wrap; margin: 40px 10%;gap: 30px;">
        <div class="flip-card" style="background-color: transparent; width: 350px; height: 300px; perspective: 1200px;">
            <div class="flip-card-inner" style=" position: relative; width: 100%; height: 100%; text-align: center; transition: transform .8s ease; transform-style: preserve-3d;">
                <div class="flip-card-front">
                <img style=" border-radius: 50%; height: 120px; margin-top: 20px;" src="./images/rasmimam.png" alt="">
                <div style="line-height: 20px;">
                    <p style="margin: 20px 10px 20px 10px;">Mrs Rashmi </p>
                    <p style="font-size: 19px; color: black;">Principal I/C</p>
                </div>
                </div>
                
                <div class="flip-card-back">
                <div style="margin-top: 20px;width: 80%;" >
                    <p style="margin: 20px 0 15px 0;">Mrs Rashmi</p>
                    <p style="font-size: 19px; color: black; line-height: 30px;"><strong>Department</strong>: Electronics & Communication Engineering</p>
                </div>
                </div>
            
            </div>
        </div>
        <div class="flip-card" style="background-color: transparent; width: 350px; height: 300px; perspective: 1200px;">
            <div class="flip-card-inner" style=" position: relative; width: 100%; height: 100%; text-align: center; transition: transform .8s ease; transform-style: preserve-3d;">
                <div class="flip-card-front">
                <img style=" border-radius: 60%; height: 120px; width: 120px; margin-top: 20px;" src="./images/shobha.png" alt="">
                <div style="line-height: 20px;">
                    <p style="margin: 20px 10px ;">Dr. Shobha Agarwal</p>
                    <p style="font-size: 19px; color: black;">Lecturer (Electrical Engineering)</p>
                </div>
                </div>
                
                <div class="flip-card-back">
                <div style="margin-top: 20px;width: 80%;" >
                    <p style="margin: 20px 0 15px 0;">Dr. Shobha Agarwal</p>
                    <p style="font-size: 19px; color: black; line-height: 30px;"><strong>Department</strong>: Electrical Engg.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="flip-card" style="background-color: transparent; width: 350px; height: 300px; perspective: 1200px;">
            <div class="flip-card-inner" style=" position: relative; width: 100%; height: 100%; text-align: center; transition: transform .8s ease; transform-style: preserve-3d;">
                <div class="flip-card-front">
                <img style=" border-radius: 55%; height: 130px; width:130px; margin-top: 20px;" src="./images/abdul.png" alt="">
                <div style="line-height: 20px;">
                    <p style="margin: 15px 25px;">Mr. Abdul Hannan Akhtar</p>
                    <p style="font-size: 19px; color: black;">Lecturer -SG (Electrical &amp; Communication Engineering</p>
                </div>
                </div>
                
                <div class="flip-card-back">
                <div style="margin-top: 20px;width: 80%;" >
                    <p style="margin: 20px 0 15px 0;">Mr. Abdul Hannan Akhtar</p>
                    <p style="font-size: 19px; color: black; line-height: 30px;"><strong>Department</strong>:Electrical & Comm. Engg.</p>
                </div>
                </div>
            </div>
        </div>
</div>
<div class="main-card" style="display:flex; flex-wrap: wrap; margin: 0px 10%;gap: 30px;" >

    <div class="flip-card" style="background-color: transparent; width: 350px; height: 300px; perspective: 1200px;">
        <div class="flip-card-inner" style=" position: relative; width: 100%; height: 100%; text-align: center; transition: transform .8s ease; transform-style: preserve-3d;">
            <div class="flip-card-front">
                <img style=" border-radius: 50%; height: 120px; width: 120px; margin-top: 20px;" src="./images/nehamam.png" alt="">
                <div style="line-height: 20px;">
                    <p style="margin: 20px 10px 20px 10px;">Mrs Neha Tripathi</p>
                    <p style="font-size: 19px; color: black;">Lecturer (CSE)</p>
                </div>
            </div>
                
            <div class="flip-card-back">
                <div style="margin-top: 20px;width: 80%;" >
                    <p style="margin: 20px 0 15px 0;">Mrs Neha Tripathi</p>
                    <p style="font-size: 19px; color: black; line-height: 30px;"><strong>Department</strong>: Computer Science &amp; Engineering </p>
                </div>
            </div>
        </div>
    </div>
    <div class="flip-card" style="background-color: transparent; width: 350px; height: 300px; perspective: 1200px;">
        <div class="flip-card-inner" style=" position: relative; width: 100%; height: 100%; text-align: center; transition: transform .8s ease; transform-style: preserve-3d;">
            <div class="flip-card-front">
                <img style=" border-radius: 50%; height: 120px; width: 120px; margin-top: 20px;" src="./images/anjumam.png" alt="">
                <div style="line-height: 20px;">
                    <p style="margin: 20px 10px 20px 10px;">Mrs Anju Lata</p>
                    <p style="font-size: 19px; color: black;">Lecturer (Physics)</p>
                </div>
            </div>
                
            <div class="flip-card-back">
                <div style="margin-top: 20px;width: 80%;" >
                    <p style="margin: 20px 0 15px 0;">Mrs Anju Lata</p>
                    <p style="font-size: 19px; color: black; line-height: 30px;"><strong>Department</strong>:Physics</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flip-card" style="background-color: transparent; width: 350px; height: 300px; perspective: 1200px;">
        <div class="flip-card-inner" style=" position: relative; width: 100%; height: 100%; text-align: center; transition: transform .8s ease; transform-style: preserve-3d;">
            <div class="flip-card-front">
                <img style="border-radius: 50%; height: 120px; width: 120px; margin-top: 20px;" src="./images/komalmam.png" alt="">
                <div style="line-height: 20px;">
                    <p style="margin: 20px 10px 20px 10px;">Mrs Komal Kumari</p>
                    <p style="font-size: 19px; color: black;">Lecturer (CSE)</p>
                </div>
            </div>
                
            <div class="flip-card-back">
                <div style="margin-top: 20px;width: 80%;" >
                    <p style="margin: 20px 0 15px 0;">Mrs Komal Kumari</p>
                    <p style="font-size: 19px; color: black; line-height: 30px;"><strong>Department</strong>:Computer Science &amp; Engineering</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-card" style="display:flex; flex-wrap: wrap; margin: 0px 10%;gap: 30px;">        
    <div class="flip-card" style="background-color: transparent; width: 350px; height: 300px; perspective: 1200px;">
        <div class="flip-card-inner" style=" position: relative; width: 100%; height: 100%; text-align: center; transition: transform .8s ease; transform-style: preserve-3d;">
            <div class="flip-card-front">
                <img style=" border-radius: 50%; height: 120px; width: 120px; margin-top: 20px;" src="./images/nimmimam.png" alt="">
                <div style="line-height: 20px;">
                    <p style="margin: 20px 10px 20px 10px;">Mrs Nimmi A Ekka</p>
                    <p style="font-size: 19px; color: black;">Lecturer (CSE)</p>
                </div>
            </div>
                
            <div class="flip-card-back">
                <div style="margin-top: 20px;width: 80%;" >
                    <p style="margin: 20px 0 15px 0;">Mrs Nimmi A Ekka</p>
                    <p style="font-size: 19px; color: black; line-height: 30px;"><strong>Department</strong>:Computer Science &amp; Engineering</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flip-card" style="background-color: transparent; width: 350px; height: 300px; perspective: 1200px;">
        <div class="flip-card-inner" style=" position: relative; width: 100%; height: 100%; text-align: center; transition: transform .8s ease; transform-style: preserve-3d;">
            <div class="flip-card-front">
                <img style=" border-radius: 50%; height: 120px; margin-top: 20px;" src="./images/anjunilam.png" alt="">
                <div style="line-height: 20px;">
                    <p style="margin: 20px 10px 20px 10px;">Mrs Anju Bhagat</p>
                    <p style="font-size: 19px; color: black;">Lecturer (CSE)</p>
                </div>
            </div>
                
            <div class="flip-card-back">
                <div style="margin-top: 20px;width: 80%;" >
                    <p style="margin: 20px 0 15px 0;">Mrs Anju Bhagat</p>
                    <p style="font-size: 19px; color: black; line-height: 30px;"><strong>Department</strong>: Computer Science &amp; Engineering</p>
                </div>
            </div>
        </div>
    </div>
        

</div>
<div class="lecturer"style="text-align: center;" >
    <p style="margin: 100px 0  15px 0 ; font-size: 32px;">Need Based Lecturers</p>
    <table class="table table-bordered" style="margin-left:200px; width: 70%; height: 450px;" >
        <tr>
			<th>Sl No.</th>
            <th>Name</th>
            <th>Department</th>
		</tr>
        <?php
        include './database/conn.php';
        $sql="SELECT * FROM faculty";

           $res = mysqli_query($conn, $sql);
           if(mysqli_num_rows($res)>0){
               while($row = mysqli_fetch_assoc($res)){
                echo"
                <tr>
                    <td>{$row['slno']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['department']}</td>
                </tr>";
                }
            }else{
                echo"record not found";
            }

        ?>
		
	</table>
    <div style="height:100px;"></div>
</div>

    <?php 
        include './include/footer.php'; 
        include './include/footerbar.php'; 
    ?>
</body>
</html>