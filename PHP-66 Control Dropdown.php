<html>
<head>
<style>
</style>
</head>
<body>
<center>
<h2>
<br><br><br><br>
<form method="post" action="">
Please Select A Country
<br>
<br>
<select name="Country">
<option value="Pakistan">
Pakistan	
</option>
<option value="India">
India	
</option>
<option value="Japan">
Japan	
</option>
<option value="Turkey">
Turkey	
</option>
<option value="Iran">
Iran	
</option>
<option value="Canada">
Canada	
</option>
</select>
<input type="submit" name="submit" value="Submit">
</form>
<hr>
<?php
/*
To receive a value from dropdown list when user click the button 
*/
if(isset($_POST['submit']))
{
$countryname=$_POST['Country'];
echo("The Name Of Your Selected Country Is = ".$countryname);
}
?>
</h2>
</center>
</body>
</html>