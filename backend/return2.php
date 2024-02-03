<?php
  
  $stu_id = $_GET['sid'];
  $dd = $_GET['dd'];
  $dm = $_GET['dm'];
  $order_no = $_GET['on'];
  $status = $_GET['stat'];
  $book_id = $_GET['bid'];
  $do = $_GET['do'];
  $mo = $_GET['mo'];
  $rd = $_POST['rd'];
  $rm = $_POST['rm'];

  if($rm<$mo)
  {
    echo '<script language="javascript">';
    echo 'alert("Return date can not be a date before date out")';
    echo '</script>';
    echo "<script> window.location.assign('return1.php?sid='+'$stu_id&bid='+'$book_id&dd='+'$dd&dm='+'$dm&on='+'$order_no&stat='+'$status&do='+'$do&mo='+'$mo'); </script>";
  }

  elseif($rm==$mo)
  {
    if($rd<$do)
    {
      echo '<script language="javascript">';
      echo 'alert("Return date can not be a date before date out")';
      echo '</script>';
      echo "<script> window.location.assign('return1.php?sid='+'$stu_id&bid='+'$book_id&dd='+'$dd&dm='+'$dm&on='+'$order_no&stat='+'$status&do='+'$do&mo='+'$mo'); </script>";
    }
    else
    {
      echo "<script> window.location.assign('return.php?sid='+'$stu_id&bid='+'$book_id&dd='+'$dd&dm='+'$dm&on='+'$order_no&stat='+'$status&do='+'$do&rd='+'$rd&rm='+'$rm&mo='+'$mo'); </script>";
    }
  }
  else
  {
    echo "<script> window.location.assign('return.php?sid='+'$stu_id&bid='+'$book_id&dd='+'$dd&dm='+'$dm&on='+'$order_no&stat='+'$status&do='+'$do&rd='+'$rd&rm='+'$rm&mo='+'$mo'); </script>";
  }
?>