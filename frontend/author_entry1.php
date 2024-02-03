<?php
  $title=$_GET['t'];
  $pname=$_GET['pn'];
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
        .box
        {
          width: 400px;
          height: 250px;
          background-color: black;
          position: absolute;
          top: 18%;
          left: 35.5%;
          opacity: 60%;
          filter: blur(1px);
        }
    </style>
    <title>Author Entry Page</title>
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

            <h1 style="position: absolute;top: 20%;left: 40%;color: rgb(28, 214, 255);"><u>AUTHOR ENTRY</u></h1>

            <form action="author_entry.php?t=<?php echo $title; ?> & pn=<?php echo $pname; ?>" method="post">

              <div>
                <label  style="font-size: 20px; position: absolute;top: 32.5%;left: 40.7%;color: white;" for="name"><b>Author Name</b></label>
                <input style="font-size: 20px; position: absolute;top: 36%;left: 40.5%;"
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  required />
              </div>

              <input style="font-size: 20px; position: absolute;top: 44%;left: 46%;" type="submit" value="SUBMIT"/>
            </form>

  </body>
</html>