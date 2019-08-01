<?php 
include("../../config.php");

if(!isset($_POST['username'])){
	echo "ERROR";
	exit();
}
if(!isset($_POST['oldPassword']) || !isset($_POST['newPassword1'])||!isset($_POST['newPassword2'])){
	echo "not all passoword set";
	exit();	
}
if($_POST['oldPassword']=="" || $_POST['newPassword1']==""||$_POST['newPassword2']==""){
	echo "Please fill in all filled";
	exit();	
}
$username=$_POST['username'];
$oldPassword=$_POST['oldPassword'];
$newPassword1=$_POST['newPassword1'];
$newPassword2=$_POST['newPassword2'];
$oldmd5=md5($oldPassword);
$passwordCheck=mysqli_query($con,"SELECT * FROM users WHERE username='$username' and password='$oldmd5'");
if(mysqli_num_rows($passwordCheck)!=1){
	echo "Password is incorrect";
	exit();
}
if($newPassword1!=$newPassword2){
	echo "your new pass did not match";
}
if(preg_match('/[^A-Za-z0-9]/',$newPassword1)){
	echo "you Password must only contain letter or numbers";
	exit();
}
if(strlen($newPassword1)>30||strlen($newPassword1)<5){
	echo "your password must be between 5 and 30";
	exit();
}
$newMd5=md5($newPassword1);
$query=mysqli_query($con,"UPDATE users set password='$newMd5' WHERE username='$username'");
echo "update sucessful";

 ?>