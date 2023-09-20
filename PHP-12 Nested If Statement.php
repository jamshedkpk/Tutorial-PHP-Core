<html>
<head>
<title>Example Of PHP</title>
</head>
<body>
<center>
<?php
/*
Nested if statement is used to check multiple conditions inside another
Condition
*/
$card="yes";
$color="blue";
if($card=="yes")
{
if($color=="green")
{
echo("Please Sit On Vip Fancy Chair");
}
else if($color=="blue")
{
echo("Please Sit On Vip Chair");
}	
else if($color=="orange")
{
echo("Please Sit On Simple Chair");
}
else
{
echo("Invalid Card");
}
}
else
{
echo("Please Take A Card From Manager");
}
?>
</center>
</body>
</html>