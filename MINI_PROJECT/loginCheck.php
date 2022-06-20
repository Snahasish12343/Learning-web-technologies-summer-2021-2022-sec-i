<?php 
	session_start();

	if(isset($_POST['submit'])){

		$userid 	= $_REQUEST['userid'];
		$password 	= $_REQUEST['password'];

		if($userid == null || $password == null)
		{
			echo"invalid";
		}else{
			
				$myfile = fopen('user.txt', 'r');
				
				while
				{
				$line = fgets($file);
				$user = explode('|', $data);
                print_r($user);
				echo"<br>";
				if($user == trim($user[0]) && $password == trim($user[1]))
				{
						
					setcookie('status', 'true', time()+36000, '/');
					
						header('location: home.php');
				
				}
				}
				
					echo "invalid userid/password";
				}	

			
		
		
	}
?>