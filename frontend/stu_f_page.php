<?php
    
    session_start();
    $conn=mysqli_connect("localhost","root","","library");
    $stu_id=$_GET['sid'];

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .box
        {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to right,
                rgba(21,159,198,1),
                rgba(0,0,0,0));
        }
        .box1
        {
            width: 100%;
            height: 50px;
            position: absolute;
            top: 0%;
            left: 0%;
            background-color: black;
            opacity: 70%;
        }
    </style>
    <title>student front page</title>
</head>
<body>

    <img src="image/lib5.jpg"
         style="width: 100%;
                height: 100%;
                position: absolute;
                top: 0%;
                left: 0%;">
    <div class="box"></div>
    <div class="box1"></div>

    <a style="position: absolute;
              top: 1%;
              left: 12%;
              font-size: 25px;
              color: yellow;" href="stu_login.html"><b>GO BACK</b></a>
    <a style="position: absolute;
              top: 1%;
              left: 3%;
              font-size: 25px;
              color: yellow;" href="page2.html"><b>HOME</b></a>
    
    <a href="view_book.php?sid=<?php echo $stu_id; ?>"
       style="font-size: 50px;
              position: absolute;
              top: 15%;
              left: 3%;
              color: black;"><u><b>VIEW BOOKS</b></u></a>

    <a href="view_author.php?sid=<?php echo $stu_id; ?>" 
       style="font-size: 50px; 
              position: absolute;
              top: 30%;
              left: 3%;
              color: black;"><u><b>VIEW AUTHORS</b></u></a>

    <a href="view_publisher.php?sid=<?php echo $stu_id; ?>" 
       style="font-size: 50px; 
              position: absolute;
              top: 45%;
              left: 3%;
              color: black;"><u><b>VIEW PUBLISHERS</b></u></a>

    <a href="order_entry1.php?sid=<?php echo $stu_id; ?>" 
       style="font-size: 50px; 
              position: absolute;
              top: 60%;
              left: 3%;
              color: black;"><u><b>PLACE ORDER</b></u></a>

    <a href="view_order.php?sid=<?php echo $stu_id; ?>" 
       style="font-size: 50px; 
              position: absolute;
              top: 75%;
              left: 3%;
              color: black;"><u><b>VIEW MY ORDERS</b></u></a>
    
</body>
</html>