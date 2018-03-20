<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<img src="logo2.jpg">
			<?php 
			if (isset($_SESSION['u_id'])) {
				echo '<form action="logout.php" method="GET">
												<button type="submit" name="submit">Log Out</button>
												</form>';
			}
			else{
					//	<!--if user is not log in show these-->
					echo '<form action="#" method="GET">
						<input id="i1" type="text" name="u_id" placeholder="User Name" required=>
						<input id="i2" type="password" name="pwd" placeholder="Password" required>
						<button type="submit" name="submit">Log In</button>
					</form>';
				}

			if (isset($_GET['submit'])) 
			{
				$con=new mysqli('localhost','root','','loginsystem');
				$uid=mysqli_real_escape_string($con,$_GET['u_id']);
				$pwd=mysqli_real_escape_string($con,$_GET['pwd']);
					if(empty($uid)||empty($pwd)){
							header("Location:home.php?login=empty");
							exit();
					}
					else
					{
						$sql="SELECT * FROM admin WHERE uid='$uid';";
						$result=mysqli_query($con,$sql);
						$resultch=mysqli_num_rows($result);
						if($resultch ==0){
							header("Location:home.php?login=error");
							exit();
						}
						else{
								if ($row = mysqli_fetch_assoc($result)) 
								{
									if($row['pwd']==$pwd){
											//<!--if user is log in show these-->
										echo '<form action="logout.php" method="GET">
												<button type="submit" name="submit">Log Out</button>
												</form>';	
										$_SESSION['u_id']=$row['id'];
										$_SESSION['u_first']=$row['f_name'];
										$_SESSION['u_last']=$row['l_name'];
										$_SESSION['u_email']=$row['email'];
										$_SESSION['u_uid']=$row['uid'];
									}	
								}
							}
					}
				}
				
			 ?>
	</header>
	<div id="left">
	<?php  if(isset($_SESSION['u_id']))
						{
							$user=$_SESSION['u_uid'];
							echo '<h3><img src="avater.png">'. $user.'</h3>';
						}
			else{
				echo '<h3><img src="avater.png"> Admin </h3>';
			}

	?>
		
		<form action="#" method="GET">
			<button class="b"  id="active" name="home">
			<span class="glyphicon glyphicon-home"></span> Home </button>
			<button class="b" name="movie">
				<span class="glyphicon glyphicon-play-circle"></span> Movie
				<button class="b b1" name="movie" value="Hollywood"> Hollywood</button>
				<button class="b b1" name="movie" value="Bollywood"> Bollywood</button>
				<button class="b b1" name="movie" value="Tollywood"> Tollywood</button>
			</button>
			<button class="b" name="ticket">
			<span class="glyphicon glyphicon-credit-card"></span> Ticket Book</button>
			<button class="b" name="new">
			<span class="glyphicon glyphicon-expand"></span> New Movies</button>
			<button class="b" name="setting">
			<span class="glyphicon glyphicon-cog"></span> Setting</button>
		</form>
	</div>


	<div id="right">

		
	<?php
		if (isset($_GET['home'])) {
			//Home page
			echo '<h2>Welcome To DashBoard !!</h2>
			<div id="homepage">
				Here is data for Home page
			</div>';
		//home page end
		}
		if (isset($_GET['ticket'])) {
			//			<!--Ticket Booked-->
		echo '<h2>Ticket Collections & Bokking!</h2>
		<div id="ticket">
			<table>
				<tr>
					<td>Total Collection :</td>
					<td id="m"> Rs 250000.00 /-</td>
				</tr>
				<tr>
					<td>Total Ticket Sold :</td>
					<td id="m"> 1500 </td>
				</tr>
				<tr>
					<td>Total Movies In Theater :</td>
					<td id="m"> 9 </td>
				</tr>
			</table>

			<h3 id="he">Movie Bokking Details : </h3>
			<div id="usertable">
				<table>
					<tr>
						<th style="width: 20px">Sr.No</th>
						<th>Name</th>
						<th style="width: 50px">No Of Ticket</th>
						<th>Name of Movie</th>
						<th>Price</th>
					</tr>
					<tr>
						<td style="width: 20px"> 1. </td>
						<td> Tushar Kadam </td>
						<td style="width: 50px"> 5 </td>
						<td>Iron Man </td>
						<td> 600/-</td>
					</tr>
					<tr>
						<td style="width: 2px"> 2. </td>
						<td> Jasdeep Sing </td>
						<td style="width: 50px"> 10 </td>
						<td>Iron Man </td>
						<td> 1500/-</td>
					</tr>
				</table>
			</div>

		</div>
			';
		}
		if (isset($_GET['new'])) {
			//<!-- these is for add new Movies button-->
			echo '
			<h2>Add New Movies In Theater !</h2>
			<div id="newadd">
				<form action="#" method="GET">
				<h4>Enter <b><i>Id</i></b> for the movie to store in database. <span id="r"> * </span></h4>
				<input type="text" placeholder="Enter id" name="id" required><br>
				<hr>
				<h4>Enter <b><i>Name</i></b> of the movie to store in database. <span id="r"> * </span></h4>
				<input type="text" placeholder="Enter Name " name="Name" required><br>
				<hr>
				<h4>Enter <b><i>Path</i></b> where image is saved to store in database. <span id="r"> * </span></h4>
				<input type="text" placeholder="Enter path" name="path" required><br>
				<hr>
				<h4>Enter <b><i>Type</i></b> of movie Hollywood/Bollywood etc. <span id="r"> * </span></h4>
				<input type="text" placeholder="Type" name="Type" required><br>
				<hr>
				<h4>Enter <b><i>Languge</i></b> for movie Marathi/English/hindi etc. <span id="r"> * </span></h4>
				<input type="text" placeholder="Enter Languge" name="Languge" required><br>
				<hr>
				<h4>Enter <b><i>Gener</i></b> for the movie to store in database. <span id="r"> * </span></h4>
				<input type="text" placeholder="Enter Gener" name="Gener" required><br>
				<hr>
				<h4>Enter <b><i>Price</i></b> for the movie to store in database. <span id="r"> * </span></h4>
				<input type="text" placeholder="Enter Price" name="Price" required><br>
				<hr>
				<h4>Enter <b><i>Rating</i></b> for the movie given by user in %x. <span id="r"> * </span></h4>
				<input type="text" placeholder="Enter Rating" name="Rating" required><br>
				<hr>
				<button class="btn">Add To DataBase</button>
			</form>
			</div>
			<div id="info">
				Here is Data!
				<img src="logo2.jpg">
				<p><b>Name:</b> Movie </p>
				<p><b>Languge:</b>  Marathi </p>
				<p><b>Type:</b>  BollyWood </p>
				<p><b>Price:</b>  Rs.120/- </p>
				<p><b>Rating:</b>  90% </p>
			</div>
			';
		}
		if (isset($_GET['setting'])) {
			//	<!-- Settings -->
			echo '		<h2>User Account Settings !</h2>
			<div id="main">
				<div id="imgdiv">
					<img src="avater.png">
				</div>
				<div id="userinfo">
					<p><b>Employ Id : </b>'.$_SESSION['u_id'].'</p>
					<p><b>Name : </b>'.$_SESSION['u_first']." ".$_SESSION['u_last'].'</p>
					<p><b>Gmail : </b>'.$_SESSION['u_email'].'</p>
					<p><b>User Id : </b>'.$_SESSION['u_uid'].'</p>
					<p><b>Timming : </b> 8.30 AM -9.30 PM</p>
					<p><b>Salary : </b> Rs 10000/-</p>
					</div>
			</div>
			<div id="data">
				<h3 id="h">Change Data Here !!</h3>
				<form action="change.php" method="GET">
					<h4>Enter <b><i> User Id</i></b> To change .</h4>
					<input type="text" placeholder="Enter New User Name " name="Name" required>
					<button class="btn" name="uidchange" value="u_id">Change</button>
				</form>
				<form action="change.php" method="GET">
					<hr>
					<h4>Enter <b><i>Password</i></b> to Change .</h4>
					<input type="text" placeholder="Enter  New Password" name="pass" required>
					<button class="btn" name="upwdchange" value="pwd">Change</button>
				</form>
					<hr>
				<form action="change.php" method="GET">
					<h4>Enter <b><i>Email</i></b> to Change .</h4>
					<input type="text" placeholder="Enter new Email" name="email" required>
					<button class="btn" name="uemailchange" value="email">Change</button>
					<hr>
					
				</form>

			</div>';
		}

    ?>
		
		

		
		
		
	
		



	</div>


</body>
</html>