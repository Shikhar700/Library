<?php

    session_start();
    $conn = mysqli_connect('localhost','root','','library');

    $author = $_GET['an'];
    $stu_id = $_GET['sid'];

    $query = "SELECT  DISTINCT b.book_id, b.title FROM book b, author a WHERE a.author_name='$author' AND b.book_id=a.book_id";
    $run = mysqli_query($conn, $query);

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
              opacity: 40%;">
    <div class="box"></div>
	<a style="position: absolute;
              top: 1%;
              left: 3%;
              color: yellow;
              font-size: 25px;" href="view_author.php?sid=<?php echo $stu_id; ?>"><b>GO BACK</b></a>
    <div style="text-align: left;
                position: absolute;
                top: 15%;
                left: 40%;
                font-size: 30px;">
    	<b><u>Author name: <?php echo $author ?></u></b>
    </div>
	<table style="position: absolute;
	              top: 20%;
	              left: 33%;">

		<tr>
			<th>Book Id</th>
			<th>Title</th>
		</tr>

		<?php
		  while($row = mysqli_fetch_array($run))
		  {
		?>
		<tr>
			<td><?php echo $row['book_id']?></td>
			<td><?php echo $row['title']?></td>
		</tr>
		<?php
		  }
		?>

	</table>
</body>

</html>