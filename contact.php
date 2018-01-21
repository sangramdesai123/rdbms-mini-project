<?php 
	include_once 'header.php'
 ?>
<!DOCTYPE html>
<html>
<head>
<style>
html {
  box-sizing: border-box;
}


.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
  width: 320px;
  margin-bottom: 50px;
  margin: 18px;
}
.card:hover{
	position: relative;
	 transition: 0.6s;
	 top: 10px;
	 animation-duration: 0.3s;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);

}

.container {
  padding: 0 16px;
  line-height: 40px;
  padding: 10px;
  letter-spacing: 1px;
  font-size: 18;
  background-color: white;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  font-size: 20px;
  margin: 5px;
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  height: 50px;
  color: white;
  background-color:green;
  text-align: center;
  cursor: pointer;
  width: 97%;
}
p{
	font-size: 20px;
}
h3{
	font-size: 28px;
	text-align: center;
	font-family: sans-serif;
	background-color: skyblue;
}
.m{
	text-align: center;
}
.mainContainerfor{
	border: solid 1px black;
	margin-bottom: 10s0px;
}
#meet{
	border: solid 1px white;
	text-align: left;
	color: white;
	font-weight: 1;
	letter-spacing: 2px;
	line-height: 25px;
	padding: 20px;
	background-color: #ff0000;

}
.button:hover {
  background-color: #555;
}body{
		background-color:#0002;
}

</style>
</head>
<body>
	<section class="main-container">
		<div class="main-wrapper">
			<h2>Contacts</h2>

<p class="m">Responsive "Meet The Team" Section</p>
<p class="m">Resize the browser window to see the effect.</p>
<br>
<div class="mainContainerfor">
<div class="row">

<h3 id="meet">Meet The Team</h3>

  <div class="column">
    <div class="card">
      <img src="images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h3>Jane Doe</h3>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p><e>example@example.com</e></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h3>Mike Ross</h3>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h3>John Doe</h3>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>		
		</div>
	</section>
</body>
</html>


<?php 
	include_once 'footer.php'
 ?>