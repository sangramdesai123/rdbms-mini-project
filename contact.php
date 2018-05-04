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
img{
  width: 320px;
  height: 300px;
}#hdiv{
  text-align: center;
  padding: 5px;
  padding-bottom: 20px;
}
#ofe{
    display: inline;
    color: #212121;
    letter-spacing: 10px;
    line-height: 20px;
    font-size: 22px;
    text-transform: uppercase;
    border-bottom: 2px solid #ffc107;
     background-color: #dddddd;
  }
</style>
</head>
<body>
	<section class="main-container">
		<div class="main-wrapper">
    <div id="hdiv">
      <h3 id="ofe">CONTACT US</h3>
      </div>

<p class="m">Our Responsive Team Member"Meet The Team" </p>
<p class="m">"Meet The Team".</p>
<br>
<div class="mainContainerfor">
<div class="row">

<h3 id="meet">Meet The Team Semicolon,</h3>

  <div class="column">
    <div class="card">
      <img src="images/team.jpg" alt="Jay" style="width:100px height:100px;">
      <div class="container">
        <h3>Jay Gala</h3>
        <p class="title">CEO & Founder</p>
        <p>Front End Developer C++ Expert </p>
        <p><e>jay.gala1@somaiya.edu</e></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/sangram.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h3>Sangram Desai</h3>
        <p class="title">Art Director</p>
        <p>Back End Developer.</p>
        <p>sangram.desai@somiya.edu</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h3>Tushar Kadam</h3>
        <p class="title">Designer</p>
        <p>Java Developer</p>
        <p>tushar.kadam@somaiya.edu</p>
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