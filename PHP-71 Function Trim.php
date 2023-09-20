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
Function trim() is used to eleminate White space before any characters....
*/
if(isset($_POST['firstname'])&&(isset($_POST['lastname'])))
{
$firstname=trim($_POST['firstname']);
$lastname=trim($_POST['lastname']);
echo("Your First Name Is = ".$firstname. " And Last Name Is = ".$lastname);
}
?>
</h2>
</center>
</body>
</html>