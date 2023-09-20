<!DOCTYPE html>
<html>
<head>
<title>Test</title>
</head>
<body>
<center>
<h2>
<?php
echo("Your Form Is Successfully Submitted");
echo("<br>");
echo("<br>");
if(isset($_GET['id']))
{
$id=$_GET['id'];
echo("Your ID Is = ".$id);	
}
?>
</h2>
</center>
</body>
</html>