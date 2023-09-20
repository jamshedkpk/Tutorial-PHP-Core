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
/* Assosiative Array
Associative arrays are arrays that 
use named keys that you assign to them.
*/
$rooms=array
(
"Room-1"=>540,
"Room-2"=>670,
"Room-3"=>600,
"Room-4"=>640,
"Room-5"=>700,
);
$count=count($rooms);
echo("<br>");
echo("<br>");
echo("Total Rooms Are = ".$count);
echo("<br>");
echo("<hr>");
echo("<br>");
print_r($rooms);
echo("<br>");
echo("<hr>");
echo("<br>");
foreach($rooms as $name=>$value)
{
echo("The Price Of ".$name. " Is = ".$value);
echo("<br>");
}
?>
</h2>
</center>
</body>
</html>