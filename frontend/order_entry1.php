<?php
  $stu_id=$_GET['sid'];
  $conn = mysqli_connect('localhost','root','','library');
  $q = "SELECT * FROM book WHERE status='Available'";
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
          width: 415px;
          height: 510px;
          background-color: black;
          position: absolute;
          top: 15%;
          left: 35%;
          opacity: 60%;
          filter: blur(1px);
        }
    </style>
    <title>Order Entry Page</title>
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
    <div class="box1"></div>
    <h1 style="position: absolute;top: 15%;left: 41%;color: rgb(69, 198, 214);"><u>ORDER ENTRY</u></h1>
    <form action="order_entry.php?sid=<?php echo $stu_id; ?>" method="post">

      <div class="form-group">
          <label style="font-size: 20px; position: absolute;top: 27.5%;left: 40.7%;color: white;" for="usn"><b>USN</b></label>
          <input style="font-size: 20px; position: absolute;top: 31%;left: 40.5%;"
                 type="text" id="usn" name="usn" value="<?php echo $stu_id ?>" required readonly/>
      </div>

      <div >
          <label style="font-size: 20px; position: absolute;top: 39.5%;left: 40.7%;color: white;"><b>Book Id</b></label>
          <select name="book_id" required style="font-size: 20px; position: absolute;top: 43%;left: 40.5%;">
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
      </div>

      <div>
          <label style="font-size: 20px; position: absolute;top: 51.5%;left: 40.7%;color: white;" for="day"><b>Day Out</b></label>
          <input style="font-size: 20px; position: absolute;top: 55%;left: 40.5%;"
                 placeholder="in number format (1-30)" type="number" class="form-control" id="day" name="day" required/>
      </div>

      <div>
                <label style="font-size: 20px; position: absolute;top: 63.5%;left: 40.7%;color: white;" for="month"><b>Month Out</b></label>
                <input style="font-size: 20px; position: absolute;top: 67%;left: 40.5%;"
                  placeholder="in number format (1-12)" type="number" class="form-control" id="month" name="month" required/>
      </div>
              
      <input style="font-size: 20px; position: absolute;top: 75%;left: 45.5%;" type="submit" value="SUBMIT">
      
      <a style="position: absolute;
                top: 1%;
                left: 3%;
                color: yellow;
                font-size: 25px;" href="stu_f_page.php?sid=<?php echo $stu_id; ?>"><b>GO BACK</b></a>

    </form>
  </body>
</html>