<center>
<h2>
<?php
include_once("PHP-1 Database Connection.php");
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
// Select Name of file
$filename=$_FILES['resume']['name'];
// Select Size of file
$filesize=$_FILES['resume']['size'];
// Convert name of file into array on the basis of . Dot
$fileext=explode(".",$filename);
// Select End index of file after Dot
$fileextension=strtolower(end($fileext));
// Select Teporary location of file store in server..
$filetmp=$_FILES['resume']['tmp_name'];
// Select Actual location of file to be stored.......
$filestore="Uploaded/".$filename;
if(empty($filename))
{
echo("Please Updoad A Resume File");	
}
else if($filesize>3000000)
{
echo("File Size Is Exceeding Than 3 MB");	
}
else if((($fileextension!='pdf')&&($fileextension!='pptx')&&($fileextension!='xlsx')&&($fileextension!='docx')&&($fileextension!='doc')&&($fileextension!='ppt')))
{
echo("Invalid File Format Please Select A Valid File");	
}
else
{
move_uploaded_file($filetmp,$filestore);
$query=("update user set User_Resume='$filestore' where User_ID='$id' ");
$result=mysqli_query($con,$query);
if($result)
{
header("Location:PHP-2 Search Reecord.php");
}
else
{
echo("resume Is Not Uploaded");
}
}
}
}
else
{
echo("User ID Is Not Set In URL");
}
?>
</h2>
</center>
<!DOCTYPE html>
<html>
<head>
<title>
File Upload
</title>
<style>
table
{
border:1px solid;
border-radius:5px;
padding:20px;
background:lightblue;
margin-top:100px;
}	
label
{
font-family:calibri;
font-weight:600px;
font-size:25px;
}	
#Submit
{
width:88px;
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
<table>
<tbody>
<tr>	
<td>
<label>
Select A Resume File :
</label>
</td>
<td>
<input type="file" name="resume"/>
</td>
</tr>	
<tr>
<td>
</td>
<td>
<input type="submit" id="Submit" name="submit" value="Submit"/>
</td>
</tr>
</tbody>
</table>
</h2>
</center>
</form>
</body>
</html>