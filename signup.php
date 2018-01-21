<?php 
	include_once 'header.php'
 ?>
	<section class="main-container">
		<div class="main-wrapper">
			<h2>Signup</h2>
			<!--if user heat buuton and filds are empty-->
		<?php 
			 if(isset($_GET['signup']))
			 {
			 	if($_GET['signup']=="empty")
				{
				 echo "".'<script type="text/javascript">alert("Fill The Form Correctly");</script> ' ;
				}
			}
		?>
			<form class="signup-form" action="psignup.php" method="POST">
						<input type="text" name="first" placeholder="FirstName">
						<input type="text" name="last" placeholder="LastName">
						<input type="text" name="email" placeholder="Email">
						<input type="text" name="uid" placeholder="UserName">
						<input type="password" name="pwd" placeholder="password">
						<button type="submit" name="submit">
							Sign Up
						</button>
						<br>
						<br>

			</form>
		</div>
	</section>

<?php 
	include_once 'footer.php'
 ?>