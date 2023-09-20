<center>
<?php
// When user click the button
if(isset($_POST['Submit']))
{
// Receive data from text fields....
$firstname=trim($_POST['firstname']);
$lastname=trim($_POST['lastname']);
$password=trim($_POST['password']);
$confirm=trim($_POST['confirm']);
$email=trim($_POST['email']);
$mobile=trim($_POST['mobile']);
$nicno=trim($_POST['nicno']);
$website=trim($_POST['website']);

// Reguler Expression for valid data
$validfirstname='/^[a-z ]+$/i';
$validlastname='/^[a-z ]+$/i';
$validemail='/^[a-z]+[_|-]?[a-z0-9]*[@][a-z]+[.][a-z]+$/i';
$validmobile='/^[0][0-9]{10,15}$/i';
$validnicno1='/^[0-9]{5}[-][0-9]{7}[-][0-9]$/i';
$validnicno2='/^[0-9]{13}$/i';
$validwebsite='/^[w]{3}[.][a-z]+[a-z0-9]*[.][a-z]+$/i';
if(empty($firstname))
{
$msg1=("Name is required");
}
else if(!preg_match($validfirstname,$firstname))
{
$msg1=("Invalid Name");
}
if(empty($lastname))
{
$msg2=("Name is required");	
}
else if(!preg_match($validlastname,$lastname))
{
$msg2=("Invalid Name");
}
if(empty($password))
{
$msg3=("Password is required");	
}
else if(strlen($password)<4)
{
$msg3=("Invalid size");	
}
else if($password!=$confirm)
{
$msg3=("Password do not match");	
}
if(empty($confirm))
{
$msg4=("Confirmed is required");
}
else if($confirm!=$password)
{
$msg4=("Password do not match");	
}
if(empty($email))
{
$msg5=("Email is required");
}
else if(!preg_match($validemail,$email))
{
$msg5=("Invalid Email");
}
if(empty($mobile))
{
$msg6=("Mobile no is required");
}
else if(!preg_match($validmobile,$mobile))
{
$msg6=("Invalid Mobile No");
}
if(empty($nicno))
{
$msg7=("Nic no is required");
}
else if(!preg_match($validnicno1,$nicno)&&(!preg_match($validnicno2,$nicno)))
{
$msg7=("Invalid Nic No");
}

if(!empty($website))
{
if(!preg_match($validwebsite,$website))	
{
$msg8=("Invalid URL");	
}
}

if(empty($_POST['gender']))
{
$msg9=("Gender is required");
}
if(($_POST['country'])=="Select A Country")
{
$msg10=("Country is requred");	
}
if(!empty($firstname)&&(!empty($lastname))&&(!empty($password))&&($password==$confirm)&&(!empty($confirm))&&(!empty($email))&&(!empty($mobile)&&(!empty($nicno))&&(!empty('gender'))&&($_POST['country']!="Select A Country")))
{
$gender=$_POST['gender'];	
$country=$_POST['country'];
echo(" First Name Is = ".$firstname);	
echo(" Last Name Is = ".$lastname);	
echo(" Password Is = ".$password);	
echo(" Confirm Is = ".$confirm);	
echo(" Email Is = ".$email);	
echo("Mobile No Is = ".$mobile);	
echo(" Nic No Is = ".$nicno);	
echo(" Gender Is = ".$gender);	
echo(" Country Is = ". $country);	
}
}
?>
</center>
<!DOCTYPE html>
<html>
<head>
<title>
Form Validation
</title>
<style>
body
{
font-family:calibri;
}
span
{
color:red;
}
table
{
border:1px solid;
padding:20px;
border-radius:10px;
text-align:center;
}
select
{
width:160px;
}
</style>
</head>
<body>
<form method="post">
<center>
<h2>Please Fill The Following Fields</h2>
<table>
<tbody>
<tr>
<td>
First Name:
</td>
<td>
<input type="text" name="firstname"/>
</td>
<td>
<span>
<?php 
if(isset($msg1))
echo($msg1);
?>	
</span>
</td>
<td>
Last Name:
</td>
<td>
<input type="text" name="lastname"/>
</td>
<td>
<span>
<?php 
if(isset($msg2))
echo($msg2);
?>	
</span>
</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type="text" name="password"/>
</td>
<td>
<span>
<?php 
if(isset($msg3))
{
echo($msg3);
}?>	
</span>
</td>
<td>
Confirm:
</td>
<td>
<input type="text" name="confirm"/>
</td>
<td>
<span>
<?php 
if(isset($msg4))
echo($msg4);
?>	
</span>
</td>
</tr>
<tr>
<td>
Email:
</td>
<td>
<input type="text" name="email"/>
</td>
<td>
<span>
<?php
if(isset($msg5))
{
echo($msg5);
}
?>	
</span>
</td>
<td>
Mobile:
</td>
<td>
<input type="text" name="mobile"/>
</td>
<td>
<span>
<?php
if(isset($msg6))
{
echo($msg6);
}
?>	
</span>
</td>
</tr>
<tr>
<td>
Nic No:
</td>
<td>
<input type="text" name="nicno"/>
</td>
<td>
<span>
<?php 
if(isset($msg7))
echo($msg7);
?>	
</span>
</td>
<td>
Website:
</td>
<td>
<input type="text" name="website"/>
</td>
<td>
<span>
<?php 
if(isset($msg8))
echo($msg8);
?>	
</span>
</td>
</tr>
<tr>
<td>
Gender:</td>
<td>
<label>
<input type="radio" name="gender" value="Male">Male</input>	
</label>
<label>
<input type="radio" name="gender" value="Female">Female</input>	
</label>
</td>
<td>
<span>
<?php 
if(isset($msg9))
echo($msg9);
?>	
</span>
</td>
<td>
Country:
</td>
<td>
<select name='country'>
<option>
Select A Country
</option>
<option>
Pakistan
</option>
<option>
Japan
</option>
<option>
India
</option>
<option>
Japan
</option>
<option>
Other
</option>
</select>
</td>
<td>
<span>
<?php 
if(isset($msg10))
echo($msg10);
?>	
</span>
</td>
</tr>
</tbody>
</table>
<br>
<input type="submit" name="Submit" value="Submit Form"/>
</center>
</form>
</body>
</html>