<?php

    session_start();
    $conn = mysqli_connect('localhost','root','','library');

    $stu_id = $_GET['sid'];
    $book_id = $_GET['bid'];

    $stat="Not Available";

    $query = "UPDATE book SET status='$stat' WHERE book_id=$book_id";
    $run = mysqli_query($conn, $query);
    if($run)
    echo '<script language="javascript">';
    echo 'alert("Order Placed")';
    echo '</script>';
    echo "<script> window.location.assign('order_entry1.php?sid='+'$stu_id'); </script>";
    
?>