<html>
<head>
<title>Example Of PHP</title>
</head>
<body>
<center>
<h2>
<?php
/*
Array: Array are used to store more than one values
in a single variable in php there are three types of 
an array
(1)-Index Array
(2)-Assosiative Array
(3)-Multi Dimesion Array
*/
// Another way to create index arry
// Function print_r is used to display an array
echo("<br>");
echo("<hr>");
echo("<br>");
$color[0]="Green";
$color[1]="Orange";
$color[2]="Black";
$color[3]="White";
$color[4]="Pink";
$color[5]="Red";
$count=count($color);
echo("Total Colors Are =".$count);
echo("<br>");
echo("<br>");
print_r($color); // To print an array
echo("<br>");
echo("<br>");
for($i=0;$i<$count;$i++)
{
echo($color[$i]);	
echo("<br>");
}
?>
</h2>
</center>
</body>
</html>