<?php
  
  $stu_id = $_GET['sid'];
  $dd = $_GET['dd'];
  $dm = $_GET['dm'];
  $order_no = $_GET['on'];
  $status = $_GET['stat'];
  $book_id = $_GET['bid'];
  $do = $_GET['do'];
  $mo = $_GET['mo'];
  $rd = $_GET['rd'];
  $rm = $_GET['rm'];

  $var = "Returned";

  $x = $rm-$dm;
  $y = $rd-$dd;
  if($rm>$dm)
  {
    if($x>2)
    {
      $a=($x-1)*30;
    }
    else
    {
      $a=0;
    }
    $b=(30-$dd)+$rd;
    $fin=($a+$b)*10;
  }

  elseif($dm>$rm)
  {
    $fin="Paid";
  }

  elseif($rm==$dm)
  {
    if($rd>$dd)
    {
      $fin=$y*10;
    }
    else
    {
      $fin="Paid";
    }
  }

  $conn = new mysqli('localhost','root','','library');
  if($conn->connect_error)
  {
    die('Connection failed: '.$conn->connect_error);
  }
  else
  {
    $stmt= $conn->prepare("update orders set fine='$fin', status='$var' where order_no=$order_no");
    $stmt->execute();
    echo "<script> window.location.assign('book_status1.php?sid='+'$stu_id&bid='+'$book_id'); </script>";
    $stmt->close();
    $conn->close();
  }
?>