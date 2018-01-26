<?php 
	include_once 'header.php'
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		#n button{
			color: black;
			letter-spacing: 2px;
			font-family: sans-serif;
			background-color: white;
			border: solid 1px grey;
			width: 100%;
			height: 30px;
			padding: 2px;
			margin-bottom: 2px;
			font-size: 15px;
			margin-left: 10px;
		}
		#n button:hover{
			border: solid 2px green; 
			margin-left: 6px;
			margin-bottom: 5px;
			color: #222;
		}
		#n{
			background-color: #bf0c8c;
			text-align: center;
			padding: 20px;
			color: white;
			padding-right: 50px;
			width: 300px;
			border:solid 2px yellow;
			position: relative;
		}
		#n h3{
			padding: 2px;
			font-size: 20px;
			border-bottom: 2px solid #ffc107;
			letter-spacing: 2px;
			text-shadow: 4px 4px black;
		}
		#f{
			letter-spacing: 2px;
			font-size: 30px;
			font-weight: 1;
			font-family: comic;
			border:solid 4px #ffc107;
			width: 260px;
			text-shadow: 4px 4px black;
		}
		*.col2{
			  width: 65%;  
		

		}*.col1{
			  width: 35%;
			  position: absolute;
			  left: 0px;
			  top: 100px;

		}
#m_container{
	position: absolute;
    left: 270px;
    top: 120px;
    width: 82%;
    overflow: auto;
    height: 780px;
    padding: 10px;
    margin: 0px;
    padding-right: 0px;
}
 .container {
  position: relative;
  float: left;
  text-align: center;
  width: 320px;
  margin-left: 30px;
  margin-bottom: 10px;
  height: 270px;
    padding:0px;
    color: #444;
    background-color: white;
    border:solid 2px red;
}
.image {
  display: block;
}

.overlay {
  position: absolute;
  bottom: 100%;
  background-color: black;
  overflow: hidden;
  width: 100%;
  height:0;
  opacity: 0.8;
  transition: .5s ease;
}
 .container:hover .overlay {
  bottom: 67px;
  height: 200px;
}
.text1 {
  color: white;
  font-size: 20px;
  position: relative;
  top: 55%;  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.container .data{
	letter-spacing: 1px;
	font-size: 14px;
	background-color: white;	
}
.b1{
	text-align: center;
    background-color: #c02c39;
    padding: 10px;
    height: 40px;
    width: 100%;
    color: #FFF;
    font-size: 18px;
    border: none;
}
.b1:hover{
	background-color: red;
}
#he{
	display: inline-block;
	text-align: center;
	width: 600px;
	padding: 10px;
    color: #212121;
    letter-spacing: 5px;
    line-height: 20px;
    font-size: 22px;
    text-transform: uppercase;
    border-bottom: 2px solid #ffc107;
    width: 250px;
    font-weight: 1;
}
#hdiv{
	text-align: center;
	padding: 5px;
}
#pa{
		text-align: center;
	color: #444;
	margin-top: 25px;
	letter-spacing: 2px;
	line-height: 25px;
	font-size: 18px;
}
	</style>

	</style>
</head>
<body>
<frameset cols="28%,*">
<div id="big_container">
			<nav id="n">
			<ul>
				<form action="#" method="GET">

				<h2 id="f">Filter By</h2><br>
				 <h3 id="head">TYPE</h3><br>
				 	<li><button name="Type" value="HollyWood">HollyWood</button></li>
					<li><button name="Type" value="BollyWood">BollyWood</button></li>
					<li><button name="Type" value="TollyWood">TollyWood</button></li>
				 <br><h3 id="head">LANGUAGE</h3><br>
					<li><button name="Language1" value="Hindi">Hindi</button></li>
					<li><button name="Language1" value="Marathi">Marathi</button></li>
					<li><button name="Language1" value="English">English</button></li>
					<li><button name="Language1" value="Gujarati">Gujarati</button></li>
					<li><button name="Language1" value="Punjabi">Punjabi</button></li>
					<li><button name="Language1" value="Tamil">Tamil</button></li>
				 <br><h3 id="head">GENRE</h3><br>
				 	<li><button name="Genre" value="Action">Action</button></li>
					<li><button name="Genre" value="Adventure">Adventure</button></li>
					<li><button name="Genre" value="Animation">Animation</button></li>
					<li><button name="Genre" value="History">History</button></li>
					<li><button name="Genre" value="Comedy">Comedy</button></li>
					<li><button name="Genre" value="Science-fi">Science-fi</button></li>
					</form>
				</ul>
			</nav>
			<div id="m_container">
				<div id="hdiv">
						<h3 id="he">Movies Serch</h3>
						<br>
						<p id="pa">win a maximum of 5 discount codes every month. <br>
						To know more,visit our TicketNew Referral Page</p>
					</div>
				<?php
				include 'login.php';
				$sql='SELECT * FROM movies';
				$res=mysqli_query($con,$sql);

				while ($row=mysqli_fetch_array($res)) {
				echo "<div class='container'>";?><img src="<?php echo 
				$row["path"];?>" height="200" width="316" class="image">
				<?php echo "<div class='overlay'>";?>
				<?php echo " <div class='text1'>" .$row["Name"]."</div>";
				?>
				<?php echo "</div><div id='lable'>";?>
							  <div class="data">
							    <h3>Amazon Pay </h3> 
							    <p>Offer is valid on 16th Jan to 31st Jan 2018</p> 
							    <button class="b1">BOOK NOW</button>
						      </div>
				<?php echo "</div></div>";
				}
				 ?>
		

			</div>
</frameset>
</div>
</body>
</html>


<?php 
	include_once 'footer.php'
 ?>