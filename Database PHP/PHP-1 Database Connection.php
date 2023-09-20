<center>
<h2>
<?php
/*
In order to connect to database function mysqli_connect
Is used. It takes 4 paramaters
(1) Host Name
(2) User Name
(3) User Password
(4) Database Name
We store result in a variable for further uses....
*/
$con=mysqli_connect("localhost","root","","dbtest");
if(!$con)
{
echo("<br>");
die("Database Is Not Connected". "<br>" .mysqli_connect_error());
}
?>
</h2>
</center>