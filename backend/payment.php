<?php
  
  $conn = mysqli_connect('localhost','root','','library');

  $order_no=$_GET['on'];
  $stu_id=$_GET['sid'];
  $fine=$_GET['f'];

  $fin = "Paid";
  $query = "UPDATE orders SET fine='$fin' WHERE order_no=$order_no";
  $run = mysqli_query($conn,$query);

  if($run)
  {
    echo '<script language="javascript">';
    echo 'alert("Payment Successful")';
    echo '</script>';
    echo "<script> window.location.assign('view_order.php?sid='+'$stu_id'); </script>";
  }
  else
  {
  	echo "Payment Unsuccessful";
  }

?>