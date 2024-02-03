<?php
   $usn = $_POST['usn'];
   $name = $_POST['name'];
   $branch = $_POST['branch'];
   $address = $_POST['address'];

   $conn = new mysqli('localhost','root','','library');
   if($conn->connect_error){
   		die('Connection failed: '.$conn->connect_error);
   }
   else
   {
   	$stmt= $conn->prepare("insert into student values(?, ?, ?, ?)");
   	$stmt->bind_param("ssss", $usn, $name, $branch, $address);
   	$stmt->execute();
      echo '<script language="javascript">';
      echo 'alert("Values Inserted")';
      echo '</script>';
      echo "<script> window.location.assign('lib_f_page.html'); </script>";
   	$stmt->close();
    $conn->close();
   }
?>


