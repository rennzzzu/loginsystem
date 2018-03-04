

		<h2>CONTACT US</h2>
		<form class="signup-form" action="includes/contactus.inc.php" method="POST">
			<input type="text" name="name" placeholder="Name">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="subject" placeholder="Subject">
			<input type="text" name="message" placeholder="Message">
			<button type="submit" name="submit">Submit</button>



		<?php
			$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			if(strpos($fullurl, "contact=empty")==true){
				echo "YOU DID NOT FILL IN ALL FIELDS!";
			}
			elseif (strpos($fullurl, "contact=email")==true){
				echo "INVALID EMAIL ADDRESS";
			}
			elseif (strpos($fullurl, "contact=name")==true){
				echo "INVALID CHARACTER";
			}

		 ?>


	</div>
</section>
