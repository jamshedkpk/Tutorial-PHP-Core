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
 Function htmlspecialchars() is used to eliminate any tags of html Or javascript. It is used to prevent cross site sripting attacks from Hackers...
*/
$name=trim(htmlspecialchars($_POST['name']));
echo($name);
}
?>
</h2>
</center>
</body>
</html>