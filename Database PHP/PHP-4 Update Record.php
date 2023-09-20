<center>
<h3>
<?php
include_once("PHP-1 Database Connection.php");
// Receive User ID through URL
if(isset($_GET['id']))
$id=$_GET['id'];
// If user id found
if($id)
{
// When user press the update button
if(isset($_POST['Submit']))
{
/*
Pick the values from text fields
To avoid html tags and read it as a normal string we Use htmlentities() function for security reasons.
To avoid special characters and read it as a normal String we use mysqli_real_escape_string() function for Security reasons.
To avoid any space given in the start we use trim() Function.
To provide more security to our website we store Password in encripted form we use either md5() Function to encript our password or password_hash() Function to encript our password for Security reasons.
*/	
$name=htmlentities(mysqli_real_escape_string($con,trim($_POST['name'])));
$password=htmlentities(mysqli_real_escape_string($con,trim($_POST['password'])));
$password=password_hash($password, PASSWORD_DEFAULT);
$email=htmlentities(mysqli_real_escape_string($con,trim($_POST['email'])));
if((!empty($name))&&(!empty($email))&&(!empty($password)))
{
$query=("update user set User_Name='$name',User_Password='$password',User_Email='$email' where User_ID='$id' ");
}
else if((!empty($name))&&(!empty($email)))
{
$query=("update user set User_Name='$name',User_Email='$email' where User_ID='$id' ");
}
$result=mysqli_query($con,$query);
if($result)
{
header("Location:PHP-2 Search Reecord.php");
}
else
{
echo("Record Is Not Updated");
}
}	
}
// If user id is not found in URL
else
{
echo("User ID Not Found Please Send User ID Through URL");
}
?>
</h3>	
</center>
<!DOCTYPE html>
<html>
<head>
<title>
Update Record	
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
<hr>
<form method="post" action="" enctype="multipart/form-data">
<center>
<h2>
Welcome To The Update Section
</h2>
<table>
<?php
$id=$_GET['id'];
$query=("select * from user where User_ID='$id' ");
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
<input type="text" name="name" value='<?php echo($row['User_Name']);?>'/>	
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
<input type="text" name="email" value='<?php echo($row['User_Email']);?>'/>	
</td>
<tr>
<td></td>
<td>
<input type="submit" id="Submit" name="Submit" value="Submit"/>
</td>
</tr>
</table>
<hr>
</center>
</form>
<?php endwhile;?>
</body>
</html>