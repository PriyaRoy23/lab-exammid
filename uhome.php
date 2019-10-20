<?php
session_start();
if(isset($_SESSION['name'])){
?>
<html>
<body>
<form align ='center' method="POST">
<fieldset>
<h1> Welcome <?=$_SESSION['name']?> ! </h1>
<a href="profile.php"> Profile </a><br>
<a href="passchange.php"> Change Password </a><br>
<a href="users.php"> View Users </a><br>
<a href="login.php"> Logout </a>


</fieldset>
</form>
</body>
</html>
<?php		
	
}
?>