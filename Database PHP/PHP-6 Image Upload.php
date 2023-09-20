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
$filename=$_FILES['image']['name'];
// Select Size of file
$filesize=$_FILES['image']['size'];
// Convert name of file into array on the basis of . Dot
$fileext=explode(".",$filename);
// Select End index of file after Dot
$fileextension=strtolower(end($fileext));
// Select Teporary location of file store in server..
$filetmp=$_FILES['image']['tmp_name'];
// Select Actual location of file to be stored.......
$filestore="Uploaded/".$filename;
if(empty($filename))
{
echo("Please Updoad An Image File");	
}
else if($filesize>3000000)
{
echo("File Size Is Exceeding Than 3 MB");	
}
else if((($fileextension!='jpg')&&($fileextension!='jpeg')&&($fileextension!='png')&&($fileextension!='ico')&&($fileextension!='gif')))
{
echo("Invalid File Format Please Select An Image File");	
}
else
{
move_uploaded_file($filetmp,$filestore);
$query=("update user set User_Image='$filestore' where User_ID='$id' ");
$result=mysqli_query($con,$query);
if($result)
{
header("Location:PHP-2 Search Reecord.php");
}
else
{
echo("Image Is Not Uploaded");
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
Select An Image File :
</label>
</td>
<td>
<input type="file" name="image"/>
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