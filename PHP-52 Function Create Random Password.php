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
To create a random password in php function strsub() and Function str_shuffle() are used.
*/
$string="Hello How Are You";
$new=str_shuffle($string);// To shuffle a string
$password=substr($new,4,6);
echo("<br>");
echo($password);
?>
</h2>
</center>
</body>
</html>