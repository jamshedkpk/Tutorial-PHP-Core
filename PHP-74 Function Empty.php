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
To check empty text we use a function empty()
*/
if(isset($_POST['Submit']))
{
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
if(empty($fname)&&empty($lname))
{
echo("Please Fill The Required Fields");
}
else
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
echo("Your First Name Is = ".$firstname. " And Last Name Is = ".$lastname);
}
}
?>
</h2>
</center>
</body>
</html>