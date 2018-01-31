
<?php 
	include_once 'header.php'
 ?>
 <style type="text/css">
 	#hdiv{
 		padding-bottom: 20PX;
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
 </style>
 <body>
	<section class="main-container">
		<div class="main-wrapper">
			<div id="hdiv">
		      <h3 id="ofe">ABOUT US</h3>
		      <br>
		    </div>
<p class="m">Our Responsive Team Member"Meet The Team" </p>
<p class="m">"Meet The Team".</p>
<br>
			<?php 
			 if(isset($_SESSION['u_id']))
			 {
			 	echo "You Are Log In Now";
			 }

			 ?>
		</div>
	</section>
</body>
<?php 
	include_once 'footer.php'
 ?>