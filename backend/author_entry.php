<?php

   session_start();
   $conn=mysqli_connect('localhost','root','','library');

   $name = $_POST['name'];
   $title = $_GET['t'];
   $pname=$_GET['pn'];

   $query="SELECT book_id FROM book WHERE title='$title'";
   $run=mysqli_query($conn, $query);
   $r=mysqli_fetch_row($run);
   $bid=$r[0];
   $q2="INSERT INTO author(book_id, author_name) VALUES($bid, '$name')";
   $ext=mysqli_query($conn, $q2);
   echo '<script language="javascript">';
   echo 'alert("Values Inserted")';
   echo '</script>';
   echo "<script> window.location.assign('publisher_entry1.php?pn='+'$pname'); </script>";

?>


