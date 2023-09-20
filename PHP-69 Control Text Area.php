<html>
<head>
<style>
</style>
</head>
<body>
<center>
<h2>
<form method="post" action="">
<textarea rows="10" cols="30" name='Comment'>
</textarea>
<input type="submit" name="Submit" value="Submit">
</form>
<hr>
<?php
/*
To receive value of textarea field
*/
if(isset($_POST['Submit']))
{
if(isset($_POST['Comment']))
{
$Comment=$_POST['Comment'];
echo("You Have Submitted The Following Comments");
echo("<br><hr>");
echo($Comment);	
}
}
?>
</h2>
</center>
</body>
</html>