<?php  
			if(!empty($username) && !empty($password)) 
			{
				echo "Thanks for logging in!";
			}

			if(empty($username) && empty($password)) 
			{
				echo "Please enter username and password";
			}
?>
