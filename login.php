<?php
session_start();
?>
<html>
<body>
<form method="POST" action="logincheck.php">
<fieldset>
<legend><b> LOGIN </b></legend>
User Id <br>
<input type="text" name="id" /> <br>
Password <br>
<input type="text" name="pass" /> <br>
<hr>
<input type="submit" name="submit" value="Login"/> 
<a href="registration.php"> Register </a>

</fieldset>
</form>
</body>
</html>