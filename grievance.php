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
    include './database/conn.php';
        if(isset($_POST['register'])){
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $branch = $_POST['branch'];
            $semester = $_POST['semester'];
            $brollno = $_POST['brollno'];
            $grititle = $_POST['grititle'];
            $grievance = $_POST['grievance'];

            $check = $conn->query("SELECT * FROM grievance WHERE email='$email'");

            if($check->num_rows > 0){
                echo "email already registered.";
            }else{
                $query = "INSERT INTO grievance(mobile, email, name, dob, branch, semester, brollno, grititle, grievance) VALUES('$mobile','$email','$name','$dob','$branch','$semester','$brollno','$grititle','$grievance')";
                if($conn->query($query)){
                    header("Location: index.php");
                    //echo "student data inserted";
                }else{
                    echo "Error : .$conn->error";
                }
            }
        }

    ?>
     <?php 
        include './include/logo.php';
    ?>
    <div class="header7">
        <div></div>
        <div>
            <p><b><i class="fa-regular fa-envelope-open"></i> Grievance</b> </p>
        </div>
        <div></div>
    </div>
    <form action="grievance.php" method="post">
        <button  style="background: rgb(42, 179, 197); color: white; border: none; height: 35px; margin-left: 700px; border-radius: 5px; width: 180px;" >Check Grievance Status</button><br>
        <div class="cointainer">
            <div class="container2">
                <div class="inputbox">
                    <span class="inputtext">Mobile </span>
                    <input type="text" placeholder="Enter Mobile Number" name="mobile" required>
                </div>
                <div class="inputbox">
                    <span class="inputtext">E-Mail</span>
                    <input type="email" placeholder="Enter E-Mail" name="email" required>
                </div>
            </div>
            <div class="container2">
                <div class="inputbox">
                    <span class="inputtext">Name</span>
                    <input type="text" placeholder="Enter Your Name" name="name" required>
                </div>
                <div class="inputbox">
                    <span class="inputtext">Date of Birth</span>
                    <input type="date" placeholder="Enter Your Date of Birth" name="dob" required>
                </div>
            </div>
            <div class="container2">
                <div class="inputbox">
                    <span class="inputtext">Branch</span>
                    <select id="branch" name="branch" style="width: 291px; height: 35px;" name="branch" required>
                        <option value="">---Choose Branch---</option>
                        <option value="cse">Computer Sc. & Engineering</option>
                        <option value="ee">Electrical  Engineering</option>
                        <option value="ece">Electronics & Comm. Engineering</option>
                    </select>
                </div>
                <div class="inputbox">
                    <span class="inputtext">Semester</span>
                    <select id="branch" name="semester" style="width: 291px; height: 35px;" name="semester" required>
                        <option value="">---Choose Semester---</option>
                        <option value="First Semester">First Semester</option>
                        <option value="Second Semester">Second Semester</option>
                        <option value="Third Semester">Third Semester</option>
                        <option value="Fourth Semester">Fourth Semester</option>
                        <option value="Fifth Semester">Fifth Semester</option>
                        <option value="Sixth Semester">Sixth Semester</option>
                    </select>
                </div>
                <div class="inputbox">
                    <span class="inputtext">Board Roll No.</span>
                    <input style="width: 291px;" type="text" placeholder="Enter Your Board Roll NO." name="brollno" required>
                </div>
            </div>
           <div class="inputbox">
                <span class="inputtext">Grievance Title</span>
                <input style="width: 100%;" type="text" placeholder="Enter Grievance Title" name="grititle" required>
            </div>
            <div class="inputbox">
                <span class="inputtext">Grievance</span>
                <input style="width: 100%; height: 60px;" type="text" placeholder="" name="grievance">
            </div>
        </div>
        <div class="button" style="margin-left: 20px; margin-bottom: 40px;">
        <button style="background: rgb(69, 187, 198); border: none; height: 30px; border-radius: 3px; color: white; width: 70px" name="register">Submit</button>
        <button style="background: rgb(204, 70, 70); border: none; height: 30px; border-radius: 3px; color: white; width: 60px;">Reset</button>
        </div>
    </form>
</body>
</html>