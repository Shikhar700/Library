<?php
session_start();
$conn=mysqli_connect('localhost','root','','library');

if(isset($_POST['login']))
{
    $name=$_POST['uid'];
    $pwd=$_POST['password'];
    $query="SELECT password from login where user_id='$name'";
    $sql=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($sql);
    if($name==NULL)
    {
        echo '<script language="javascript">';
        echo 'alert("Enter User Id")';
        echo '</script>';
        echo "<script> window.location.assign('stu_login.html'); </script>";
    }
    if($pwd==NULL)
    {
        echo '<script language="javascript">';
        echo 'alert("Enter Password")';
        echo '</script>';
        echo "<script> window.location.assign('stu_login.html'); </script>";
    }
    if($pwd==$row["password"]){
    
        echo '<script language="javascript">';
        echo 'alert("Login Successful")';
        echo '</script>';
        echo "<script> window.location.assign('stu_f_page.php?sid='+'$name'); </script>";

    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Incorrect Password")';
        echo '</script>';
        echo "<script> window.location.assign('stu_login.html'); </script>";
    }
}

?>
