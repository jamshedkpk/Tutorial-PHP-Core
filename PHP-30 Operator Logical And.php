<html>
<head>
<title>Example Of PHP</title>
</head>
<body>
<center>
<?php
/*
Logical operator And && is used to check multiple conditions if all conditions
Are true then result will be true else result will be false.
*/
$age=22;
$gender="Male";
if(($age>20)&&($gender=="Male"))
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