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
    <div class="course">
        <div></div>
        <div>
            <p><i class="fa-solid fa-book"></i> Courses </p>
        </div>
        <div></div>
    </div>
    <div class="box">
        <div class="branch">
            <div class="border">
                <h2>Diploma in Computer Sc. & Engineering</h2>
                <p>Duration : 3 Years</p>
                <p>Seats : 60</p>
                <button>Syllabus</button>
            </div>
        </div>
        <div class="branch">
            <div class="border">
                <h2>Diploma in Electrical Engineering</h2>
                <p>Duration : 3 Years</p>
                <p>Seats : 60</p>
                <button>Syllabus</button>
            </div>
        </div>
        <div class="branch">
            <div class="border">
                <h2>Diploma in Electronics & Comm. Engineering</h2>
                <p>Duration : 3 Years</p>
                <p>Seats : 60</p>
                <button>Syllabus</button>
            </div>
        </div>
    </div>
    <?php 
        include './include/footer.php'; 
        include './include/footerbar.php'; 
    ?>
</body>
</html>