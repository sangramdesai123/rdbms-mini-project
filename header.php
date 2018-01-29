<?php
 session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		* {box-sizing: border-box}
		#l1{
		  width: 250px;
		  height: 55px;
		  margin: 0px;
		}
		.l1{
		  text-align: center;
		  background-color: #ffcc00;
		}
		.l1 #se{
			/*serch button on yellow header*/
			font-family: arial;
			font-size: 18px;
			color: white;
			cursor: pointer;
			border: solid 2px green;
			background-color: #209e20;
			letter-spacing: 2px;
			text-align: left;
			position: relative;
			float: right;
			top: -45px;
			right: 10px;
			width: 350px;
			height: 35px;
			z-index: 1;   
		}
		.l1 #s{
			font-size: 15px;
			padding: 0px;
		}
		.l1 #se:hover{
			background-color: green;
		}
 
	</style>
</head>
<body>
	<header>
		<nav>
			<div class="main-wrapper">
				<ul >
					<li class="an1"><a  href="#"><img src="images/logo.jpg" class="logo" style="width: 16%;height:50px; position:absolute;"></a>
					</li>
					<li style="background-color: green"><a class="an" href="Home.php"> Home</a></li>
					<li><a class="an" href="contact.php">Contact</a></li>
					<li><a class="an" href="about.php">About</a></li>
					<li><a class="an" href="offers.php">Offers</a></li>
				</ul>

				<div class="nav-login">
					<?php  

						if(isset($_SESSION['u_id']))
						{
							$user=$_SESSION['u_uid'];
						echo '<p class="para">'.$user.'</p>'.'<form action="logout.php" method="POST">
							<button class="log" type="submit" name="submit">LogOut!
							</button>
							
							</form>';

						}
						else{
						echo '<form action="my.php" method="POST">
						<input type="text" name="uid" placeholder="UserName">
						<input type="password" name="pwd" placeholder="password">
						<button type="submit" name="submit">
							Log In!
						</button>

						<a class="new" href="signup.php">New User</a>
						</form>';
						}
					?>
				</div>
			</div>
		</nav>
	</header>
	<!--yellow hwader-->
	  <div class="l1"><img id="l1" src="images/logo2.jpg">
	 	 <form method="GET" action="search.php">
			  <button id="se"><i class="fa fa-search" id="s" aria-hidden="true" name="g" value="gt"></i> Serarch For More Movies</button>	  	
		 </form>
	 </div>
</body>
</html>
