<html>
<head>
<title>Example Of PHP</title>
</head>
<body>
<center>
<?php
/*
Logical operator or || is used to check multiple conditions if one or more
Conditions are true then result will be true else result will be false
*/
$age=12;
$gender="Male";
if(($age>20)||($gender=="Male"))
{
echo("You Can Apply For The Post");
}
else
{
echo("You Can't Apply For The Post");
}
	?>
</center>
</body>
</html>