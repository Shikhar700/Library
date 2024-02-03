<?php

  $conn = mysqli_connect('localhost','root','','library');
  $q = "SELECT * from book";
  $run = mysqli_query($conn, $q);

?>

<!DOCTYPE html>
<html>

<head>
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
        .box1
        {
          width: 400px;
          height: 300px;
          background-color: black;
          position: absolute;
          top: 15%;
          left: 36%;
          opacity: 60%;
          filter: blur(1px);
        }
  </style>
	<title>book remove page</title>
</head>

<body>
  <img src="image/lib4.jpg"
       style="width: 100%;
              height: 100%;
              position: absolute;
              top: 0%;
              left: 0%;
              opacity: 40%;">
  <div class="box"></div>
  <div class="box1"></div>

	<a style="position: absolute;
            top: 1%;
            left: 3%;
            color: yellow;
            font-size: 25px;" href="lib_f_page.html"><b>GO BACK</b></a>
    <h1 style="position: absolute;top: 20%;left: 41%;color: rgb(69, 198, 214);"><u>REMOVE BOOK</u></h1>
	<form action="remove_b.php" method="post">
          <select name="book_id" required style="font-size: 30px; position: absolute;top: 35%;left: 42.5%;">
            <option value="" disabled selected hidden>Select Book Id</option>
            <?php
                while($r = mysqli_fetch_array($run))
                {
            ?>
                <option><?php echo $r['book_id']?></option>
            <?php
                }
            ?>
          </select>
        <input style="font-size: 25px; position: absolute;top: 45%;left: 45.5%;" type="submit" value="REMOVE">
	</form>
</body>

</html>