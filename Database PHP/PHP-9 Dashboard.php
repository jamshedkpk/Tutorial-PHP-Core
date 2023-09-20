<center>
<h2>
<?php
include_once("PHP-1 Database Connection.php"); 
session_start();
if(!isset($_SESSION['id']))
{
header("Location:PHP-3 Add Record.php");
}
else
{
$id=$_SESSION['id'];
$name=$_SESSION['name'];
echo("Welcome To " .$name. "<br>");
// If user wants to update his record
if(isset($_POST['Submit']))
{
$name=htmlentities(mysqli_real_escape_string($con,trim($_POST['name'])));
$password=htmlentities(mysqli_real_escape_string($con,trim($_POST['password'])));
$password=password_hash($password, PASSWORD_DEFAULT);
$email=htmlentities(mysqli_real_escape_string($con,trim($_POST['email'])));
if((!empty($name))&&(!empty($email)))
{
$query=("update user set User_Name='$name', 
	User_Email='$email' where User_ID='$id' ");
$result=mysqli_query($con,$query);
$result=mysqli_query($con,$query);
}
if((!empty($name))&&(!empty($password))&&(!empty($email)))
{
$query=("update user set User_Name='$name', User_Email='$email',User_Password='$password' where User_ID='$id' ");
$result=mysqli_query($con,$query);
}
}
}
?>
</h2>
</center>
<hr>
<!DOCTYPE html>
<html>
<head>
<title>
Dashboard
</title>
<style>
table
{
border:1px solid;
padding:20px;
border-radius:20px;
background:lightblue;	
}
hr
{
height:10px;
background:gray;
border-radius:10px;
}	
label
{
font-family:calibri;
font-weight:600px;
font-size:25px;
}	
#Submit
{
width:160px;
background:green;
font-size:20px;
color:white;
}	
</style>
</head>
<body>
<center>
<h2>
<form method="post" action="" enctype="multipart/form-data">
<center>
<table>
<tbody>
<?php
$query=("Select * from user where User_ID=$id");
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)):
?>
<tr>
<td>
<label>
Name :
</label>
</td>
<td>
<input type="text" name="name" value="<?php echo($row['User_Name']);?>"/>	
</td>
</tr>
<tr>
<td>
<label>
Password :
</label>
</td>
<td>
<input type="text" name="password"/>	
</td>
</tr>
<tr>
<td>
<label>
Email :
</label>
</td>
<td>
<input type="text" name="email" value="<?php echo($row['User_Email']);?>"/>	
</td>
</tr>
<tr>
<td>
<a href="PHP-10 Function Session Destroy.php">Sign Out</a>
</td>
<td>
<input type="submit" id="Submit" name="Submit" value="Submit"/>
</td>
</tr>
<?php endwhile;?>
</tbody>
</table>
<hr>
</center>
</form>
</h2>
</center>
</body>
</html>