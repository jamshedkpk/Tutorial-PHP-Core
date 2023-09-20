<html>
<head>
<style>
</style>
</head>
<body>
<center>
<h2>
<br><br><br><br>
<form method="post" enctype="multipart/form-data">
<input type="text" name="name">
<input name="Submit" type="submit" value="Submit">
</form>
<hr>
<?php
if(isset($_POST['Submit']))
{
/*
The Function bin2hex is used to convert binary data to hexadecial Form it is usually used with other function like random_bytes() to
Create a random key....
*/
$key=bin2hex(random_bytes(32));
echo($key);
}
?>
</h2>
</center>
</body>
</html>