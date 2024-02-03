<?php

      $usn = $_POST['usn'];
      $book_id = $_POST['book_id'];
      $day = $_POST['day'];
      $month = $_POST['month'];
      $stu_id=$_GET['sid'];
      $status="Not Returned";
      $fin=0;

      if($day>30 || $month>12)
      {
         echo '<script language="javascript">';
         echo 'alert("Invalid Date")';
         echo '</script>';
         echo "<script> window.location.assign('order_entry1.php?sid='+'$stu_id'); </script>";
      }

      elseif($month==12)
      {
         if($day>20)
         {
            echo '<script language="javascript">';
            echo 'alert("Enter dates for which due dates are in same year")';
            echo '</script>';
            echo "<script> window.location.assign('order_entry1.php?sid='+'$stu_id'); </script>";
         }
      }
      else
      {
      
         if($day>20)
         {
            $dd=10-(30-$day);
            $dm=$month+1;
         }
         else
         {
            $dd=$day+10;
            $dm=$month;
         }

         $conn = new mysqli('localhost','root','','library');
         if($conn->connect_error){
   		   die('Connection failed: '.$conn->connect_error);
         }
         else
         {
   	     $stmt= $conn->prepare("insert into orders(usn, day_out, month_out, due_day, due_month, book_id, fine, status) values(?, ?, ?, ?, ?, ?, ?, ?)");
   	     $stmt->bind_param("siiiiiis", $usn, $day, $month, $dd, $dm, $book_id, $fin, $status);
   	     $stmt->execute();
           echo "<script> window.location.assign('book_status.php?sid='+'$stu_id&bid='+'$book_id'); </script>";
   	     $stmt->close();
           $conn->close();
         }
      }
?>

