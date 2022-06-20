<?php 
	session_start();

	if(isset($_POST['submit'])){

		$userid 	= $_POST['userid'];
		$password 	= $_POST['password'];

		if($userid != ""){
			if($password != ""){
				
				$myfile = fopen('user.txt', 'r');
				$data = fread($myfile, filesize('user.txt'));
				fgets($myfile);
				feof($myfile);
				while
				
				$userid = explode('|', $data);		
				if($userid == trim($userid[0]) && $password == trim($userid[1])){
						$_SESSION['flag'] = 'true';
					setcookie('flag', 'true', time()+36000, '/');
						header('location: home.php');
				}else{
					echo "invalid userid/password";
				}	

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid userid....";
		}
	}
?>