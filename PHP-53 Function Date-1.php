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
In php function date() function is used to display date. It requires three parameters
d for date, m for month and y for year if you want to display day,month and year complete name then
D for Day, M for Month and Y for year.
Hyper(-) or forward slashes are used to seperator one another.
For time H for hour, i for minutes and s for seconds
*/
$date1=date("d:m:y");
echo("<br>");
echo("Current Date Is = ".$date1);
echo("<br>");
echo("<br>");
$date2=date("D-M-Y");
echo("Current Date Is = ".$date2);
echo("<br>");
echo("<br>");
$date3=date("d-M-y");
echo("Current Date Is =".$date3);
echo("<br>");
echo("<br>");
$date4=date("d-M-Y  (H:i:s)");
echo("Current Date Is =".$date4);
?>
</h2>
</center>
</body>
</html>