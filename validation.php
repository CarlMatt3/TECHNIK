<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name= '$name' && password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:index.html');
}else{
    $message = "Invalid Username / Password!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo '<body style="background-image: linear-gradient(to right bottom, #e04aff, #c442f3, #a93ae6, #8d32d9, #712bcb);">
    <form><center><input type="button" value="Go back to previous page." onClick="javascript:history.go(-1)" 
    style="margin-top:350px;background-image: linear-gradient(to right bottom, #e04aff, #c442f3, #a93ae6, #8d32d9, #712bcb);color:white;">
    </form></body>';
}

?>