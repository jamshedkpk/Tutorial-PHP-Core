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
// Index Array
echo("<br>");
$student=array();
$student[0]="Jamshed";
$student[1]="Irfan";
$student[2]="Kamran";
$student[3]="Khalid";
$student[4]="Naila";
$name=($student[4]);
// Count function is used to count total element in array
$count=count($student);
echo("Total Students Are =".$count);
echo("<br>");
echo("<br>");
print_r($student); // To print an array
echo("<br>");
echo("<br>");
echo("The Name Of Selected Student Is =".$name);
?>
</h2>
</center>
</body>
</html>