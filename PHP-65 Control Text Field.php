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
<input type="submit" value="Submit" name="Submit">
</form>
<hr>
<?php
/*
To receive value of text fields $_POST is used 
*/
if(isset($_POST['Submit']))
{
if(isset($_POST['firstname'])&&(isset($_POST['lastname'])))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
echo("Your First Name Is = ".$firstname. " And Last Name Is = ".$lastname);
}
}?>
</h2>
</center>
</body>
</html>