<center>
<h2>
<?php
/*
$_SESSION[] : To create a session
session_start(): To start a session
session_destroy(): To destroy a session
*/
include_once("PHP-1 Database Connection.php");
if(isset($_POST['Submit']))
{
$email=htmlentities(mysqli_real_escape_string($con,trim($_POST['email'])));
$password=htmlentities(mysqli_real_escape_string($con,trim($_POST['password'])));
if(!empty($email)&&(!empty($password)))
{
$query=("select * from user where User_Email='$email' ");
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count>0)
{
while($row=mysqli_fetch_array($result))
{
$dbpassword=$row['User_Password'];
if(password_verify($password,$dbpassword))
{
session_start();
$id=$row['User_ID'];
$name=$row['User_Name'];
$_SESSION['id']=$id;
$_SESSION['name']=$name;
header("Location:PHP-9 Dashboard.php");
}
else
{
echo("Invalid Password Please Try Again");
}
}
}	
else
{
echo("Sorry You Are Not Registered");
}
}
else
{
echo("Please Enter Email And Password");	
}
}
?>
</h2>
</center>
<!DOCTYPE html>
<html>
<head>
<title>Session Start</title>
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
Welcome To Login Page
</h2>
<table>
<tr>
<td>
<label>
Email :
</label>
</td>
<td>
<input type="text" name="email"/>	
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