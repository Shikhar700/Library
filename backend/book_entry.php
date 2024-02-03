<?php

   $title = $_POST['title'];
   $pName = $_POST['pName'];
   $pYear = $_POST['pYear'];
 
   $stat = "Available";

   $conn = new mysqli('localhost','root','','library');
   if($conn->connect_error){
   		die('Connection failed: '.$conn->connect_error);
   }
   else
   {
   	$stmt= $conn->prepare("insert into book(title, pub_year, pub_name, status) values(?, ?, ?, ?)");
   	$stmt->bind_param("siss",$title, $pYear, $pName, $stat);
   	$stmt->execute();
   	echo '<script language="javascript">';
      echo 'alert("Values Inserted")';
      echo '</script>';
      echo "<script> window.location.assign('author_entry1.php?t='+'$title & pn='+'$pName'); </script>";
   	$stmt->close();
    $conn->close();
   }
?>