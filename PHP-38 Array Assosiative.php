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
Another way to declare an assosiative array
*/
$student["ID"]=1;
$student["Name"]="Jamshed";
$student["Age"]="30";
$student["Marks"]=800;
$count=count($student);
echo("<br>");
echo("<br>");
echo("Total Records Are = ".$count);
echo("<br>");
echo("<hr>");
echo("<br>");
print_r($student);
echo("<br>");
echo("<hr>");
echo("<br>");
foreach($student as $key=>$value)
{
echo($key ." Is = ".$value );
echo("<br>");
echo("<br>");
}
?>
</h2>
</center>
</body>
</html>