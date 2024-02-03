<?php

  $mysqli = new mysqli('localhost','root','','library');
  $stu_id = $_GET['sid'];
  if($mysqli->connect_error)
  {
    die('Connection failed: '.$mysqli->connect_error);
  }
  
  $sql = "SELECT * FROM orders WHERE usn='$stu_id'";
  $result = $mysqli->query($sql);
  $mysqli->close();
?>

<!DOCTYPE html>
<html>
  
<head>
    <title>view order</title>
    <style>
        .box
        {
          width: 100%;
          height: 8%;
          position: absolute;
          top: 0%;
          left: 0%;
          background-color: black;
          opacity: 75%;
        }
        table
        {
          border-collapse: collapse;
          margin: 35px 0;
          font-size: 20px;
          min-width: 500px;
          border-radius: 5px 5px 5px 5px; 
          overflow: hidden;
          box-shadow: 0 0 10px grey;
          margin-left: auto;
          margin-right: auto;
        }
        th
        {
          background-color: rgb(59, 134, 168);
          color: black;
          font-weight: bold;
          text-align: left;
        }
        th, td
        {
          padding: 15px 20px;
          border-bottom: 1px solid black;
          border-right: 1px solid black;
        }
        td
        {
          background-color: rgba(0, 0, 0, 0.5);
          color: white;
          font-weight: bold;
        }
    </style>
</head>

<body>
    <img src="image/lib4.jpg"
       style="width: 100%;
              height: 100%;
              position: absolute;
              top: 0%;
              left: 0%;
              opacity: 40%;
              position: fixed;">
        <div class="box"></div>
        <a style="position: absolute;
                  top: 1%;
                  left: 3%;
                  color: yellow;
                  font-size: 25px;" href="stu_f_page.php?sid=<?php echo $stu_id; ?>"><b>GO BACK</b></a>
        
        <h1 style="position: absolute;
                   top: 12%;
                   left: 46%"><u>ORDERS</u></h1>

        <table style="position: absolute;
                      top: 20%;
                      left: 12%;">
            <tr>
                <th>Order Number</th>
                <th>USN</th>
                <th>Book Id</th>
                <th>Date Out</th>
                <th>Due Date</th>
                <th>Fine</th>
                <th>Status</th>
                <th>Return</th>
                <th>Payment</th>
            </tr>
            
            <?php   
                while($rows=$result->fetch_assoc())
                {
                	$m1=$rows['month_out'];
                	$m2=$rows['due_month'];

                	if($m1==1){ $mo="Jan"; }
                	elseif($m1==2){ $mo="Feb"; }
                	elseif($m1==3){ $mo="Mar"; }
                	elseif($m1==4){ $mo="Apr"; }
                	elseif($m1==5){ $mo="May"; }
                	elseif($m1==6){ $mo="Jun"; }
                	elseif($m1==7){ $mo="Jul"; }
                	elseif($m1==8){ $mo="Aug"; }
                	elseif($m1==9){ $mo="Sep"; }
                	elseif($m1==10){ $mo="Oct"; }
                	elseif($m1==11){ $mo="Nov"; }
                	elseif($m1==12){ $mo="Dec"; }

                	if($m2==1){ $dmo="Jan"; }
                	elseif($m2==2){ $dmo="Feb"; }
                	elseif($m2==3){ $dmo="Mar"; }
                	elseif($m2==4){ $dmo="Apr"; }
                	elseif($m2==5){ $dmo="May"; }
                	elseif($m2==6){ $dmo="Jun"; }
                	elseif($m2==7){ $dmo="Jul"; }
                	elseif($m2==8){ $dmo="Aug"; }
                	elseif($m2==9){ $dmo="Sep"; }
                	elseif($m2==10){ $dmo="Oct"; }
                	elseif($m2==11){ $dmo="Nov"; }
                	elseif($m2==12){ $dmo="Dec"; }
             ?>
            <tr>
                <td><?php echo $rows['order_no'];?></td>
                <td><?php echo $rows['usn'];?></td>
                <td><?php echo $rows['book_id'];?></td>
                <td><?php echo $rows['day_out'];?> - <?php echo $mo ?></td>
                <td><?php echo $rows['due_day'];?> - <?php echo $dmo ?></td>
                <td><?php echo $rows['fine']?></td>
                <td><?php echo $rows['status']?></td>
                <td><a style="color: white" href="return1.php?on=<?php echo $rows['order_no'];?>&sid=<?php echo $stu_id; ?>&stat=<?php echo $rows['status'];?>&do=<?php echo $rows['day_out'];?>&mo=<?php echo $rows['month_out'];?>&dd=<?php echo $rows['due_day'];?>&dm=<?php echo $rows['due_month'];?>&bid=<?php echo $rows['book_id'];?>">return</a></td>
                <td><a style="color: white;" href="payment1.php?on=<?php echo $rows['order_no'];?>&sid=<?php echo $stu_id; ?>&f=<?php echo $rows['fine'];?>">pay fine</a></td>
            </tr>
            <?php 
                }
             ?>
        </table>
        
</body>
  
</html>


