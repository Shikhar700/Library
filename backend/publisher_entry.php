<?php
   $pub_name = $_POST['pub_name'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
 

   $conn = new mysqli('localhost','root','','library');
   if($conn->connect_error){
   		die('Connection failed: '.$conn->connect_error);
   }
   else
   {
   	$stmt= $conn->prepare("insert into publisher(pub_name, address, phone) values(?, ?, ?)");
   	$stmt->bind_param("ssi", $pub_name, $address, $phone);
   	$stmt->execute();
   	echo '<script language="javascript">';
      echo 'alert("Values Inserted")';
      echo '</script>';
      echo "<script> window.location.assign('lib_f_page.html'); </script>";
   	$stmt->close();
    $conn->close();
   }
?>

