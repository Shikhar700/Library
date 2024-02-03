<?php

   $id = $_POST['id'];
   $password = $_POST['password'];
 
   $conn = new mysqli('localhost','root','','library');
   if($conn->connect_error)
   {
   	die('Connection failed: '.$conn->connect_error);
   }
   else
   {
   	$stmt= $conn->prepare("insert into login(user_id, password) values(?, ?)");
   	$stmt->bind_param("ss", $id, $password);
   	$stmt->execute();
   	echo '<script language="javascript">';
      echo 'alert("Account Created")';
      echo '</script>';
      echo "<script> window.location.assign('stu_login.html'); </script>";
   	$stmt->close();
      $conn->close();
   }
?>


