<?php

    session_start();
    $conn = mysqli_connect('localhost','root','','library');

    $stu_id = $_GET['sid'];
    $book_id = $_GET['bid'];

    $stat = "Available";

    $query = "UPDATE book SET status='$stat' WHERE book_id=$book_id";
    $run = mysqli_query($conn, $query);
    echo '<script language="javascript">';
    echo 'alert("Book Returned")';
    echo '</script>';
    echo "<script> window.location.assign('view_order.php?sid='+'$stu_id'); </script>";

?>