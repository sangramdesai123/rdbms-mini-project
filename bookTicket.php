<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
/* Full-width input fields */
input {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    
}

/* Set a style for all buttons */
.newbtn{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.newbtn:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
}
.cancelbtn:hover{
      background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: animatezoom 0.6s
}
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.contain{
 width: 500px;
 height: 400px;
 margin-left: 10px;
 margin: 20px;
}
#Videos{
	position:absolute;
	width: 780px;
	height: 400px;
	top: 140px;
	left: 550px;
	background-color: white;
}
img{
	height: 400px;
	width: 500px;
}
.book button{
	display: block;
	margin: 0 auto;
	width: 30%;
	height: 40px;
	background-color: red;
	border: none;
	font-family: arial;
	font-size: 16px;
	color: white;
	cursor: pointer;
}
.book button:hover{
	background-color:red;
	 box-shadow: 3px 5px #888888;
	}
 #in{
    padding: 20px;
    width: 700px;

 }   
</style>
</head>
<body>
<?php 
include 'login.php';
$name1=$_GET["book"];
$sql="SELECT * FROM movies WHERE Name='$name1'";
$res=mysqli_query($con,$sql);
if (!$res) {
	printf("Error: %s\n", mysqli_error($con));
}
else{
$row=0;
while ($row=mysqli_fetch_array($res)){
	echo '<div class="contain">';?>
	<img src="<?php echo $row['path'];?>">
	<?php echo "</div>";}
} ?>
<div id="Videos">

</div>
<?php
//if user is loged in
if (isset($_SESSION['u_id'])) {
  ?>
              <div id="Videos">
                    <form class="book" action="Email.php" method="GET">
                    <div id="in">
                        <input type="text" name="con" placeholder="How Many Seats" required>
                        <input type="text" name="last" placeholder="LastName" required>
                        <input type="text" name="email" placeholder="Email" required>
                        <input type="text" name="uid" placeholder="UserName" required>
                        <button type="submit" name="submit" value="<?php echo $name1; ?>">
                            Book My Ticket
                        </button>
                        <br>
                        <br>
                    </div>
                    </form>
              </div>


<?php
}
else{
 include 'booklogin.html';
}
?>
</body>
</html>

<?php
	include 'footer.php';
?>