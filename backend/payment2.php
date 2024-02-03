<?php

  session_start();
  $conn = mysqli_connect('localhost','root','','library');

  $order_no=$_GET['on'];
  $stu_id=$_GET['sid'];
  $fine=$_GET['f'];

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

  else
  {
    echo "<script> window.location.assign('payment1.php?sid='+'$stu_id & on='+'$order_no & f='+'$fine'); </script>"; 
  }

?>