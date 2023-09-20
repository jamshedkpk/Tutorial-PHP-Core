<html>
<head>
<title>Example Of PHP</title>
</head>
<body>
<center>
<?php
/*
Switch statement is used to check multiple conditions it can be used
Instead of if else if statement.
*/
$marks=850;
switch($marks)
{
case($marks>1000):echo("Your Grade Is A");
Break;
case($marks>700):echo("Your Grade Is B");
break;
case($marks>400):echo("Your Grade Is C");
break;
case($marks<400):echo("Sorry You Are Fail");
break;
default:echo("Invalid Marks");
}
?>
</center>
</body>
</html>