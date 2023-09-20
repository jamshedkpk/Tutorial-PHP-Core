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
<input type="radio" name="Language" value="English">
English
</input>	
</label>
<label>
<input type="radio" name="Language" value="Urdu">
Urdu
</input>	
</label>
<label>
<input type="radio" name="Language" value="Pushto">
Pushto
</input>	
</label>
<label>
<input type="radio" name="Language" value="Sindi">
Sindi
</input>	
</label>
<br>
<br>
<input type="submit" value="Submit" name="submit">
</form>
<hr>
<?php
if(isset($_POST['submit']))
{
if(isset($_POST['Language']))
{
$Language=$_POST['Language'];
echo($Language);
}
}
?>
</h2>
</center>
</body>
</html>