<?php
session_start();
if(isset($_POST['submit']))
{
	$uid = $_POST['id'];
	$password = $_POST['pass'];
	

		if(empty($uid) == true || empty($password) == true){
			echo "null submission!";
		}else{

			if($uid == $password){
				
				$_SESSION['id'] = $uid;
				$_SESSION['password'] = $password;
				header('location: uhome.php');
			}else{
				echo "invalid user id/password";
			}
		}

	}


?>