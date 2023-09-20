<!DOCTYPE html>
<html>
<head>
<title>Test</title>
</head>
<body>
<center>
<h2>
<?php
/*
Function end() is used to pick last index in an array
Generally it is used for identifing extention of a file.
*/
$filename="File.jpeg";
$new=explode(".",$filename);
$extention=end($new);
echo("<br>");
echo("Extention Of Your File Is = ".$extention);
?>
</h2>
</center>
</body>
</html>