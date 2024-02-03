<?php

  session_start();
  $conn = mysqli_connect('localhost','root','','library');

  $order_no=$_GET['on'];
  $stu_id=$_GET['sid'];
  $fine=$_GET['f'];
  $amount="$fine";

  if($fine=="Paid")
  {
  	$stmt= $conn->prepare("update orders set fine='$fine' where order_no=$order_no");
    $stmt->execute();
    echo '<script language="javascript">';
    echo 'alert("Fine Already Paid")';
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
          width: 420px;
          height: 400px;
          background-color: black;
          position: absolute;
          top: 15%;
          left: 33.5%;
          opacity: 60%;
          filter: blur(1px);
        }
	</style>
	<title>payment page</title>
</head>

<body style="background-color: black;">
	<img src="image/lib8.jpg"
	     style="width: 100%;
	            height: 100%;
	            position: absolute;
	            top: 0%;
	            left: 0%;
	            filter: blur(8px);">
	<div class="box"></div>
	<div class="box1"></div>
	<a style="position: absolute;
              top: 1%;
              left: 3%;
              color: yellow;
              font-size: 25px;" href="view_order.php?sid=<?php echo $stu_id; ?>"><b>GO BACK</b></a>
	<form action="payment.php?sid=<?php echo $stu_id; ?>&on=<?php echo $order_no; ?>&f=<?php echo $fine; ?>" method="post">
		<label style="font-size: 25px;
		       position: absolute;
		       top: 30%;
		       left: 35%;
		       color: white;">
		<b>FINE in rupees</b></label>

		<input style="font-size: 30px;
		              position: absolute;
		              top: 35%;
		              left: 35%;" 
		       type="number" name="fi" value="<?php echo $amount ?>" readonly>

		<input style="font-size: 30px;
		              position: absolute;
		              top: 45%;
		              left: 45.8%;" 
		       type="submit" name="sub" value="PAY">
	</form>
</body>

</html>