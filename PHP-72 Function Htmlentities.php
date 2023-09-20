<html>
<head>
<style>
</style>
</head>
<body>
<center>
<h2>
<br><br><br><br>
<form method="post" action="">
First Name : <input type="text" id="firstname" name="firstname">
Last Name : <input type="text" id="lastname" name="lastname">
<input type="submit" value="Submit">
</form>
<hr>
<?php
/*
Function htmlentities is used to read html tags
As a normal text. It is used for avoid sql injection
*/
if(isset($_POST['firstname'])&&(isset($_POST['lastname'])))
{
$firstname=htmlentities($_POST['firstname']);
$lastname=htmlentities($_POST['lastname']);
echo("Your First Name Is = ".$firstname. " And Last Name Is = ".$lastname);
}
?>
</h2>
</center>
</body>
</html>