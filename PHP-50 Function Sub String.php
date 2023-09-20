<html>
<head>
<style>
</style>
</head>
<body>
<center>
<h2>
<?php
/*
In php function substr() is used for substring. A substring is a string inside another string 
For e.g. My name is jamshed khan in this string name is a substring.
*/
$string="My name is Jamshed Khan and i my age is 30 years";
$substring=substr($string,11,12);
//(String,Starting Index, Length of String)
echo($substring);
?>	
</h2>
</center>
</body>
</html>