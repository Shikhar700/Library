<?php
session_start();
$conn=mysqli_connect('localhost','root','','library');

if(isset($_POST['login'])){
    $name=$_POST['log'];
    $pwd=$_POST['password'];
    $query="SELECT password from l_login where user_id='$name'";
    $sql=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($sql);
    if($name==NULL)
    {
        echo '<script language="javascript">';
        echo 'alert("enter User Id")';
        echo '</script>';
        echo "<script> window.location.assign('lib_login.html'); </script>";
    }
    if($pwd==NULL)
    {
        echo '<script language="javascript">';
        echo 'alert("Enter Password")';
        echo '</script>';
        echo "<script> window.location.assign('lib_login.html'); </script>";
    }
    if($pwd==$row["password"]){
    
        echo '<script language="javascript">';
        echo 'alert("Login successful")';
        echo '</script>';
        echo "<script> window.location.assign('lib_f_page.html'); </script>";

    }
    else{
        echo '<script language="javascript">';
        echo 'alert("incorrect password")';
        echo '</script>';
        echo "<script> window.location.assign('lib_login.html'); </script>";

    }
}

?>
