<?php

    session_start();
    $conn = mysqli_connect('localhost','root','','library');

    $book_id = $_GET['book_id'];

    $query = "DELETE FROM author WHERE book_id=$book_id";
    $run = mysqli_query($conn, $query);

    if($run)
    {
        echo "<script> window.location.assign('remove_o.php?book_id='+'$book_id'); </script>";
    }

?>