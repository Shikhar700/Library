<?php

    session_start();
    $conn = mysqli_connect('localhost','root','','library');

    $book_id = $_GET['book_id'];

    $query = "DELETE FROM orders WHERE book_id=$book_id";
    $run = mysqli_query($conn, $query);

    if($run)
    {
        echo '<script language="javascript">';
        echo 'alert("Book Removed")';
        echo '</script>';
        echo "<script> window.location.assign('remove_book.php'); </script>";
    }

?>