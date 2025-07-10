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
    <div class="header-library">
        <div></div>
        <div>
            <p><i class="fa-solid fa-building"></i> Library </p>
        </div>
        <div></div>
    </div>
    <div class="section-library">
        <img src="./images/library.png" alt="">
        <p style="margin-left: 10px;">
            The Govt. Women's Polytechnic Ranchi has its own library is an invaluable resource for student, and
            faculties diploma engineering. The college library occupies a position of pride and importance at GWP. The
            library has over the year built a robust collection of over 1,89,270 books, 30,000 bound volumes.The GWP
            library is an authentic knowledge of repository knowledge with over 3000 titles, 31022 copies, 10 National
            journals/periodicals and also contain a number of magazines of repute. Every year new books are added in the
            library as per need. The library has set contacts with libraries for getting articles,copies or books which
            are not available in our library. <br>
            The library remains operational for extended hours to provide the best possible services to all section of
            its users.
        </p>
    </div>
    <div class="text-library">
        <div class="txt" >
            <h2><i class="fa-solid fa-quote-left"></i><br></h2>
            <table cellspace="0" style=" margin-top: 30px; border-collapse: collapse; width: 70%; opacity:0.9; text-align: left;">
                <tr>
                    <th>Days</th>
                    <th>Issue hours</th>
                    <th>Returns hours</th>
                </tr>
                <tr>
                    <td>Monday-Saturday</td>
                    <td>10:00AM to 1:00PM</td>
                    <td>2:00PM to 5:00PM</td>
                </tr>
            </table>
            <p style="opacity: 0.6; margin: 10px 0 50px -89%;">Library Timing</p>
            <p style="font-size: 18px;"><i class="fa-regular fa-hand-point-right"></i> Self-operated photocoping machine is available in the college. Students can avail the facilities on paid basis.</p>
            <p style="font-size: 18px; margin: -10px 50px 10% -45%"><i class="fa-solid fa-users"></i> During the office hour 60 students can avail the facilities of reading section.</p>
        </div>
    </div>
    <?php 
        include './include/footer.php'; 
        include './include/footerbar.php'; 
    ?>
</body>
</html>