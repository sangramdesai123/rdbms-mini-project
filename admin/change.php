<?php session_start(); ?>

<?php 

$con=new mysqli('localhost','root','','loginsystem');

if(isset($_GET['uidchange'])){
	$u=$_GET['Name'];
	$i=$_SESSION['u_id'];
	$sql="UPDATE admin SET uid='$u' WHERE id='$i'";
	mysqli_query($con,$sql);
	unset($_SESSION['u_uid']);//these unset oly one sessions
	$_SESSION['u_uid']=$_GET['Name'];
	header("Location:home.php?setting=#");
	exit();
}
if(isset($_GET['upwdchange'])){
	$p=$_GET['pass'];
	$i=$_SESSION['u_id'];
	$sql="UPDATE admin SET pwd='$p' WHERE id='$i'";
	mysqli_query($con,$sql);
	header("Location:home.php?setting=#");
	exit();
}
if(isset($_GET['uemailchange'])){
	$e=$_GET['email'];
	$i=$_SESSION['u_id'];
	$sql="UPDATE admin SET email='$e' WHERE id='$i'";
	mysqli_query($con,$sql);
	unset($_SESSION['u_email']);//these unset oly one sessions
	$_SESSION['u_email']=$_GET['email'];
	header("Location:home.php?setting=#");
	exit();
}

 ?>