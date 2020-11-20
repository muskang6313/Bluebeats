<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Asia/Kolkata");

$con = mysqli_connect("localhost", "root", "", "userregistration"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>
<?php
mysqli_select_db($con, 'userregistration');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$s = "SELECT * from usertable where email='$email'";

$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);


$reg=mysqli_query($con,"INSERT INTO usertable(fname, lname, email, password, cpassword) VALUES ('$fname' , '$lname' , '$email' , '$password' , '$cpassword')");

?>