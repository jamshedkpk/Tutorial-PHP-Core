<!DOCTYPE html>
<html>
<head>
<title>
Search Record
</title>
<style>
table
{
background:lightblue;
border: 1px solid;
padding: 20px;
border-radius: 20px;	
}	
table tr td, table tr th
{
padding:5px;
color:black;
border-radius:5px;
background:white;
text-align: center;
border:1px solid;
}
img
{
height:60px;
width:60px;
border-radius:5px;
border:1px solid;
}
hr
{
height:10px;
background: green;
border-radius:10px;
}
</style>
</head>
<body>
<center>
<h2>
Record Is Displayed In The Form Of Table
</h2>
<a href="PHP-3 Add Record.php">Add New Record</a>
<table>
<thead>
<tr>
<th>
User-ID
</th>
<th>
User-Name
</th>
<th>
User-Email
</th>
<th>
User-Image
</th>
<th>
User-Resume
</th>
<th colspan="2">
Action
</th>
</tr>
</thead>
<tbody>
<?php
// Include database connection file
include_once("PHP-1 Database Connection.php");
// Write select query
$query=("select * from user");
/*
Pass query through mysqli_query function which takes 2 parameters connection file and query string
*/
$result=mysqli_query($con,$query);
/*
Check if record exit or not
*/
$count=mysqli_num_rows($result);
if($count>0):
/*
Fetch record from database in the form of array
*/
while($row=mysqli_fetch_array($result)):
?>
<tr>
<td>
<?php echo($row['User_ID']);?>
</td>
<td>
<?php echo($row['User_Name']);?>
</td>
<td>
<?php echo($row['User_Email']);?>
</td>
<td>
<a href="PHP-6 Image Upload.php?id=<?php echo($row['User_ID']);?>">
<img src="<?php echo($row['User_Image']);?>"/>
</a>
</td>
<td>
<a href="PHP-7 File Upload.php?id=<?php echo($row['User_ID']);?>">Upload</a>
<hr>
<a href="<?php echo($row['User_Resume']);?>">Download</a>
</td>
<td>
<a href="PHP-4 Update Record.php?id=<?php echo($row['User_ID']);?>">Update</a>
</td>
<td>
<a  href="PHP-5 Delete Record.php?id=<?php echo($row['User_ID']);?>">Delete</a>
</td>
</tr>	
<?php
endwhile;
endif;
?>
</tbody>
</table>
<hr>
</center>
<form method="post" action="" enctype="multipart/form-data">
<center>
<h2>
<h2>Record Is Displayed In The Form Of Text Fields</h2>
</h2>
<table>
<tbody>	
<?php
$query=("select * from user limit 1");
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)):
?>
<tr>
<td>Name :</td>
<td>
<input type="text" name="name" value="<?php echo($row['User_Name']);?>" />	
</td>
</tr>
<tr>
<td>Password :</td>
<td>
<input type="text" name="password" value="<?php echo($row['User_Password']);?>" />	
</td>
</tr>
<tr>
<td>Email :</td>
<td>
<input type="text" name="email" value="<?php echo($row['User_Email']);?>" />	
</td>
<?php endwhile; ?>
</tbody>
</table>
<hr>
</center>
</form>
<center>
<h2>
Record Is Displayed In The Form Of Dropdown List
</h2>
<h3>
Select Name Of User
</h3>
<br>
<select name='name'>
<?php
$query=("select * from user");
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)):
?>
<option value='<?php echo($row['User_Name']);?>'>
<?php echo($row['User_Name']);?>
</option>
<?php
endwhile;
?>
</select>
</center>
<hr>
<center>
<h2>
Record Is Displayed In The Form Of Checkboxes
</h2>
<?php
$query=("select * from user");
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)):
?>
<label>
<input type="checkbox" name="name" value="<?php echo($row['User_Name']);?>	
">
<?php echo($row['User_Name']);?>	
</input>
</label>
<?php endwhile; ?>
</center>
<hr>
<center>
<h2>
Record Is Displayed In The Form Of Radio Buttons
</h2>
<?php
$query=("select * from user");
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)):
?>
<label>
<input type="radio" name="name" value="<?php echo($row['User_Name']);?>	
">
<?php echo($row['User_Name']);?>	
</input>
</label>
<?php endwhile; ?>
</center>
</body>
</html>