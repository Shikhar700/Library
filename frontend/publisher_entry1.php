<?php

   session_start();
   $conn = mysqli_connect('localhost','root','','library');

   $pname=$_GET['pn'];
   
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
        .box
        {
          width: 400px;
          height: 420px;
          background-color: black;
          position: absolute;
          top: 12.5%;
          left: 35.5%;
          opacity: 60%;
          filter: blur(1px);
        }
    </style>
    <title>Publisher Entry Page</title>
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

            <h1 style="position: absolute;top: 13%;left: 38.5%;"><u>PUBLISHER ENTRY</u></h1>
            <form action="publisher_entry.php" method="post">
              
              <div>
               <label style="font-size: 20px; position: absolute;top: 25.5%;left: 40.7%;color:white;" for="pub_name"><b>Publisher Name</b></label>
               <input style="font-size: 20px; position: absolute;top: 29%;left: 40.5%;"
                 type="text"
                 class="form-control"
                 id="pub_name"
                 name="pub_name"
                 value="<?php echo $pname ?>" readonly>
              </div>

              <div>
                <label style="font-size: 20px; position: absolute;top: 37.5%;left: 40.7%;color:white;" for="address"><b>Address</b></label>
                <input style="font-size: 20px; position: absolute;top: 41%;left: 40.5%;"
                  type="text"
                  class="form-control"
                  id="address"
                  name="address"
                  required />
              </div>

              <div>
                <label style="font-size: 20px; position: absolute;top: 49.5%;left: 40.7%;color:white;" for="phone"><b>Phone Number</b></label>
                <input style="font-size: 20px; position: absolute;top: 53%;left: 40.5%;"
                  type="number"
                  class="form-control"
                  id="phone"
                  name="phone"
                  required />
              </div>

              <input style="font-size: 20px; position: absolute;top: 61%;left: 46%;" type="submit" value="SUBMIT" />
            </form>
  </body>
</html>