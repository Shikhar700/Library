<?php

    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'library');

    $stu_id=$_GET['sid'];
    $dd=$_GET['dd'];
    $dm=$_GET['dm'];
    $order_no=$_GET['on'];
    $status=$_GET['stat'];
    $book_id=$_GET['bid'];
    $do=$_GET['do'];
    $mo=$_GET['mo'];

    if($status=="Returned")
    {
      $stmt= $conn->prepare("update orders set status='$status' where order_no=$order_no");
      $stmt->execute();
      echo '<script language="javascript">';
      echo 'alert("Book Already Returned")';
      echo '</script>';
      echo "<script> window.location.assign('view_order.php?sid='+'$stu_id'); </script>";
      $stmt->close();
      $conn->close();
    }
?>

<!DOCTYPE html>

<html>

<head>
    <style>
        .box
        {
          width: 100%;
          height: 8%;
          position: absolute;
          top: 0%;
          left: 0%;
          background-color: black;
          opacity: 75%;
        }
        .box1
        {
          width: 400px;
          height: 400px;
          background-color: black;
          position: absolute;
          top: 15%;
          left: 35.5%;
          opacity: 60%;
          filter: blur(1px);
        }
    </style>
</head>

<body>
  <img src="image/lib4.jpg"
       style="width: 100%;
              height: 100%;
              position: absolute;
              top: 0%;
              left: 0%;
              opacity: 40%;">
  <div class="box"></div>
  <div class="box1"></div>
  <form action="return2.php?sid=<?php echo $stu_id; ?>&dd=<?php echo $dd; ?>&do=<?php echo $do; ?>&mo=<?php echo $mo; ?>&dm=<?php echo $dm; ?>&on=<?php echo $order_no; ?>&stat=<?php echo $status; ?>&bid=<?php echo $book_id; ?>" method="post">

    <a style="position: absolute;
              top: 1%;
              left: 3%;
              color: yellow;
              font-size: 25px;" href="view_order.php?sid=<?php echo $stu_id; ?>"><b>GO BACK</b></a>

    <h1 style="position: absolute;top: 110px;left: 41%;color: rgb(69, 198, 214);"><u>RETURN BOOK</u></h1>

    <label style="position: absolute;left: 41%; top: 31%; font-size: 20px;color: white;" for="rd"><b>Return Day</b></label>
    <input style="position: absolute;left: 41%;top: 35%; font-size: 20px;" type="number" name="rd" placeholder="in number format">

    <label style="position: absolute;left: 41%; top: 46%; font-size: 20px;color: white;" for="rm"><b>Return Month</b></label>
    <input style="position: absolute;left: 41%;top: 50%; font-size: 20px;" type="number" name="rm" placeholder="in number format">

    <input style="position: absolute;right: 46.7%;top: 60%; font-size: 20px;" type="submit" name="sub" value="SUBMIT">
  </form>
</body>

</html>