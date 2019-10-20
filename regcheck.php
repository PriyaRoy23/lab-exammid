<?php
session_start();
if(isset($_POST['submit']))
{
	$password = $_POST['pass'];
	$cpassword = $_POST['cpass'];
	$name = $_POST['name'];

		if(empty($password) == true || empty($cpassword) == true){
			echo "null submission!";
		}else{

			if($password == $cpassword){
				
				$_SESSION['pass'] = $password;
				$_SESSION['cpass'] = $cpassword;
				$_SESSION['name'] = $name;
				header('location: login.php');
			}else{
				echo "invalid username/password";
			}
		}

	}else{
		header('location: registration.php');
	}


?>