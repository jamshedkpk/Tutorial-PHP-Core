<html>
<head>
<style>
</style>
</head>
<body>
<center>
<h2>
<br>
<form method="post" action="">
Please Choose Your Favourite Language
<br>
<br>
<label>
<input type="checkbox" name="Language[]" value="English">
English
</input>	
</label>
<label>
<input type="checkbox" name="Language[]" value="Urdu">
Urdu
</input>	
</label>
<label>
<input type="checkbox" name="Language[]" value="Pushto">
Pushto
</input>	
</label>
<label>
<input type="checkbox" name="Language[]" value="Sindi">
Sindi
</input>	
</label>
<br>
<br>
<input type="submit" value="Submit" name="submit">
</form>
<hr>
<?php
/*
To receive values of checkbox fields  
*/
if(isset($_POST['submit']))
{
if(!empty($_POST['Language']))
{
foreach($_POST['Language'] as $selected)
{
print_r("You Have Selected = ".$selected. "<br>");
}
}
}
?>
</h2>
</center>
</body>
</html>