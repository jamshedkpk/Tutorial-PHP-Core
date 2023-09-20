<!DOCTYPE html>
<html>
<head>
<title>Delete Record</title>
</head>
<body>
<center>
<h2>
<?php
if(isset($_GET['id']))
{
include_once("PHP-1 Database Connection.php");
$id=$_GET['id'];
$query=("delete from user where User_ID='$id' ");
$result=mysqli_query($con,$query);
if($result)
{
header("Location:PHP-2 Search Reecord.php");
}
}
?>
</h2>
</center>
</body>
</html>