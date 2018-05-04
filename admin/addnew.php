<?php session_start(); ?>
<?php 
	$con=new mysqli('localhost','root','','loginsystem');//making connection to database
	$id=$_GET['id'];
	$na=$_GET['Name'];
	$path=$_GET['path'];
	$type=$_GET['Type'];
	$lan=$_GET['Languge'];
	$gen=$_GET['Gener'];
	$price=$_GET['Price'];
	$rate=$_GET['Rating'];
	//echo $id." ".$na." ".$path." ".$type." ".$lan." ".$gen." ".$price." ".$rate." ";
	$sql=	"INSERT INTO movies VALUES ('$id','$na','$path','$type','$lan','$gen','$price','$rate');";
	$res=mysqli_query($con,$sql);
	if ($res) {
		header("Location:home.php?new=#scusses&id=$id");
		exit();
	}
	else{
		header("Location:home.php?new=#fail");
		exit();
	}
	
 ?>