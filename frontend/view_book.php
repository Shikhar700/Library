<?php

  $mysqli = new mysqli('localhost','root','','library');
  $stu_id = $_GET['sid'];

  if($mysqli->connect_error)
  {
    die('Connection failed: '.$mysqli->connect_error);
  }
  
  $sql = "SELECT * FROM book ";
  $result = $mysqli->query($sql);
  $mysqli->close();

?>

<!DOCTYPE html>
<html>
  
<head>
    <title>view books</title>
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
               left: 46%;"><u>BOOKS</u></h1>

    <table style="position: absolute;
                  top: 20%;
                  left: 23%;">
        <tr>
            <th>Book id</th>
            <th>Title</th>
            <th>Publishing Year</th>
            <th>Publisher Name </th>
            <th>Status</th>
        </tr>
            
      <?php   
        while($rows=$result->fetch_assoc())
        {
      ?>
          <tr>
              <td><?php echo $rows['book_id'];?></td>
              <td><?php echo $rows['title'];?></td>
              <td><?php echo $rows['pub_year'];?></td>
              <td><a style="color: white;" href="view_publisher.php?sid=<?php echo $stu_id; ?>"><?php echo $rows['pub_name'];?></a></td>
              <td><?php echo $rows['status']?></td>
          </tr>
      <?php 
        }
      ?>
      
    </table>
        
</body>
  
</html>