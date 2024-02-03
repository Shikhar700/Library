<?php

  $mysqli = new mysqli('localhost','root','','library');
  if($mysqli->connect_error)
  {
    die('Connection failed: '.$mysqli->connect_error);
  }
  
  $sql = "SELECT DISTINCT author_name FROM author";
  $result = $mysqli->query($sql);
  $mysqli->close(); 
  
?>

<!DOCTYPE html>
<html>
  
<head>
    <title>view author</title>
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
                  font-size: 25px;" href="lib_f_page.html"><b>GO BACK</b></a>
        <h1 style="position: absolute;
                   top: 12%;
                   left: 43.5%;"><u>AUTHORS</u></h1>

        <table style="position: absolute;
                      top: 20%;
                      left: 32.5%;">
            <tr>
                <th>Author Name</th>
            </tr>
            
            <?php   
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><a style="color: white;" href="lauthor.php?an=<?php echo $rows['author_name']?>"><?php echo $rows['author_name'];?></a></td>
            </tr>
            <?php 
                }
             ?>
        </table>
</body>
  
</html>