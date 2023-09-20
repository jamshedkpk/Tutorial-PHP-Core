<center>
<h2>
<form method="post">
Encryption And Decryption Of Data Using MD-5 Technique
<hr>
<input type="text" name="txt">
<button name="btn">Click On Me</button>
</form>
<?php 
if(isset($_POST['btn']))
{
/*
Using md5 we can incrypt data but it can't be decrypted it
Is one way incryption. It is not so secure some website nowdays 
Can decrypt md5 data.....
*/
$string=$_POST['txt'];
$chiperdata=md5($string);
$plaindata=base64_decode($chiperdata);
echo("Encrypted Data Is = ". $chiperdata);
}
?>
</h2>
</center>