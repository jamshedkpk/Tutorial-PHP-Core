<html>
<head>
<style>
</style>
</head>
<body>
<center>
<h2>
<br><br><br><br>
<form method="post" enctype="multipart/form-data" action="">
<input type="file" name="file"/>
<input name="Submit" type="submit" value="Submit">
</form>
<hr>
<?php
/*
To receive value of file control 
*/
if(isset($_POST['Submit']))
{
if(!isset($_FILES['file']['name']))
{
echo("Please Choose A File");	
}
else
{
$filename=$_FILES['file']['name'];
$filesize=$_FILES['file']['size'];
echo("Name Of Your File Is = ". $filename);
echo("<br>");
echo("<br>");
echo("Size Of Your File Is = ".$filesize);
echo("<br>");
echo("<br>");
$ext=explode(".",$filename);
$fileextension=end($ext);
echo("Extension Of Your File Is =".$fileextension);
$filetmp=$_FILES['file']['tmp_name'];
echo("<br>");
echo("<br>");
echo("Temporary Location Of Your File Is =".$filetmp);
}
}
?>
</h2>
</center>
</body>
</html>