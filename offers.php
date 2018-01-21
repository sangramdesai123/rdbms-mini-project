
<?php 
	include_once 'header.php'
 ?>
 <!DOCTYPE html>
<html>
<head>
<style>
p{
	text-align: center;
	color: #444;
	margin-top: 25px;
	letter-spacing: 2px;
	line-height: 25px;
	font-size: 18px;
}
#hdiv{
	text-align: center;
	padding: 5px;
}
#ofe{
    display: inline;
    color: #212121;
    letter-spacing: 10px;
    line-height: 20px;
    font-size: 22px;
    text-transform: uppercase;
    border-bottom: 2px solid #ffc107;
	}
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
    transition: 0.3s;
    width: 43%;
    margin: 30px;
    float: left;
    position: relative;
    display: block;
}

.card:hover {
	margin-left: 2px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
}
#of{
	position: relative;
	align-self: center;

}	

.container {
    padding: 2px 16px;
}
.main-container{
	position: relative;
	z-index: 999;
}

body{
	background-color:#0002;
}
footer {
width: 100%;
height: 100px;
background-color: black;
color: white;
padding: 15px;
text-align: center;
position: relative;

}
</style>
</head>
<body>
<div>
	<section class="main-container">
	<div class="main-wrapper">
		<div id="hdiv">
			<h3 id="ofe">OFFERS</h3>
			<br>
			<p>Good News for you! Make your friends to book movie tickets on TicketNew, and win a maximum of 5 discount codes every month. <br>
To know more,visit our TicketNew Referral Page</p>
		</div>
		
<!--first-->
			<div class="card">
			  <img src="images/of1.jpg" alt="Avatar" style="width:100%">
			  <div class="container">
			    <h4><b>John Doe</b></h4> 
			    <p>Architect & Engineer</p> 
		      </div>
		    </div>
			

<!--second-->		
		<div class="card">
			  <img src="images/of8.jpg" alt="Avatar" style="width:100%">
			  <div class="container">
			    <h4><b>John Doe</b></h4> 
			    <p>Architect & Engineer</p> 
			  </div>
		</div>

<!--Thied-->		
		<div class="card">
			  <img src="images/of2.jpg" alt="Avatar" style="width:100%">
			  <div class="container">
			    <h4><b>John Doe</b></h4> 
			    <p>Architect & Engineer</p> 
			  </div>
		</div>

<!--fourth-->		
		<div class="card">
			  <img src="images/of3.jpg" alt="Avatar" style="width:100%">
			  <div class="container">
			    <h4><b>John Doe</b></h4> 
			    <p>Architect & Engineer</p> 
			  </div>
		</div>

<!--fifth-->		
		<div class="card">
			  <img src="images/of4.jpg" alt="Avatar" style="width:100%">
			  <div class="container">
			    <h4><b>John Doe</b></h4> 
			    <p>Architect & Engineer</p> 
			  </div>
		</div>

<!--six-->		
		<div class="card">
			  <img src="images/of5.jpg" alt="Avatar" style="width:100%">
			  <div class="container">
			    <h4><b>John Doe</b></h4> 
			    <p>Architect & Engineer</p> 
			  </div>
		</div>

<!--seven-->		
		<div class="card">
			  <img src="images/of6.jpg" alt="Avatar" style="width:100%">
			  <div class="container">
			    <h4><b>John Doe</b></h4> 
			    <p>Architect & Engineer</p> 
			  </div>
		</div>

<!--eight-->		
		<div class="card">
			  <img src="images/of7.jpg" alt="Avatar" style="width:100%">
			  <div class="container">
			    <h4><b>John Doe</b></h4> 
			    <p>Architect & Engineer</p> 
			  </div>
		</div>
	</div>

	</section>

</div>

</body>
</html> 

