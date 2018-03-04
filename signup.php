<?php
	include_once 'header.php'
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="Firstname">
			<input type="text" name="last" placeholder="lastname">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>
</section>
<?php
	$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if(strpos($fullurl, "signup=empty")==true){
		echo "YOU DID NOT FILL IN ALL FIELDS!";
	}
	elseif (strpos($fullurl, "signup=email")==true){
		echo "INVALID EMAIL ADDRESS";
	}
	elseif (strpos($fullurl, "signup=name")==true){
		echo "INVALID CHARACTER";
	}
	elseif (strpos($fullurl, "signup=usertaken")==true){
		echo "USER ALREADY TAKEN ";
	}


 ?>

<?php
include_once 'footer.php'
?>
