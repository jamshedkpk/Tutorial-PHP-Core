<center>
<h2>
<?php
// Include a database connectin file
include_once("PHP-1 Database Connection.php");
// When user click the submit button
if(isset($_POST['Submit']))
{
/*
Pick values from text fields.....
To avoid html tags and read it as a normal string we Use htmlentities() function for security reasons.
To avoid special characters and read it as a normal String we use mysqli_real_escape_string() function for Security reasons.
To avoid any space given in the start we use trim() Function.
To provide more security to our website we store Password in encripted form we use either md5() Function to encript our password or password_hash() Function to encript our password for Security reasons.
*/	
$name=htmlentities(mysqli_real_escape_string($con,trim($_POST['name'])));
$password=htmlentities(mysqli_real_escape_string($con,trim($_POST['password'])));
$password=password_hash($password, PASSWORD_DEFAULT);
$email=htmlentities(mysqli_real_escape_string($con,trim($_POST['email']))); 
$image='None';
$resume='None';
if(!empty($name)&&!empty($password)&&(!empty($email)))
{
$query=("insert into user (User_ID,User_Name,User_Password,User_Email,User_Image,User_Resume) values('none','$name','$password','$email','$image','$resume');");
$result=mysqli_query($con,$query);
if($result)
{
header("Location:PHP-2 Search Reecord.php");
}
else
{
echo("Record Is Not Stored");	
}
}
else
{
echo("Please Fill All The Fields");	
}
}
?>
</h2>
</center>
<!DOCTYPE html>
<html>
<head>
<title>
Add Record	
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
Welcome To Registration Section
</h2>
<table>
<tr>
<td>
<label>
Name :
</label>
</td>
<td>
<input type="text" name="name"/>	
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
<input type="text" name="email"/>	
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
</body>
</html>