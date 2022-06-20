<?php 
	//session_start();

	

		$userid 	= $_REQUEST['userid'];
		$name 		= $_REQUEST['name'];
		$password 	= $_REQUEST['password'];

		if($userid != ""){
			if($password != ""){
				if($name !=""){

					$_SESSION['userid'] = $userid;
					$_SESSION['password'] = $password;
					$_SESSION['name'] = $name;

					setcookie('userid', $userid, time()+36000, '/');
					setcookie('password', $password, time()+36000, '/');
					setcookie('name', $name, time()+36000, '/');

					$myfile = fopen('user.txt', 'w');
					$myuser = $userid."|".$password."|".$name;
					fwrite($myfile, $myuser);
					fclose($myfile);

					$myfile = fopen('user.txt', 'a');
					$myuser = $userid."|".$password."|".$name."\r\n";
					fwrite($myfile, $myuser);
					fclose($myfile);

					header('location: login.html');
				}else{
					echo "invalid name....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid userid....";
		}
	
?>