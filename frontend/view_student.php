<?php
  $mysqli = new mysqli('localhost','root','','library');
  
  if($mysqli->connect_error)
  {
    die('Connection failed: '.$mysqli->connect_error);
  }
  
  $sql = "SELECT * FROM student";
  $result = $mysqli->query($sql);
  $mysqli->close(); 
?>

<!DOCTYPE html>
<html>
  
<head>
    <title>view student</title>
    <style>
      table, th, td {border: 1px solid black;}
    </style>
</head>

<body>
    <section>
        
        <h1 style="text-align: center;margin-top: 100px;font-size: 30px;"><u>STUDENT</u></h1>

        <table style="margin-left: auto;margin-right: auto;margin-top: 50px;font-size: 30px;text-align: center;">
            <tr style="text-align: left; background-color: grey;">
                <th>USN&emsp;</th>
                <th>Name&emsp;</th>
                <th>Branch&emsp;</th>
                <th>Address</th>
            </tr>
            
            <?php   
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['usn'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['branch'];?></td>
                <td><?php echo $rows['address'];?></td>
            </tr>
            <?php 
                }
             ?>
        </table>
    </section>
</body>
  
</html>