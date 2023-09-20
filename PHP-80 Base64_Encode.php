<center>
<h2>
<form method="post">
Encoding and Decoding Of Data Using Base64_Encode And Base64_Decode Functions Technique
<hr>
<input type="text" name="txt">
<button name="btn">Click On Me</button>
</form>
<?php 
/*
In php base64_incode() and base64_decode() are used to encode
And decode data but it not so secure
*/
if(isset($_POST['btn']))
{
$string=$_POST['txt'];
$chiperdata=base64_encode($string);
$plaindata=base64_decode($chiperdata);
echo("Encoded Data Is = ". $chiperdata);
echo("<hr>");
echo("Decoded Data Is = ". $plaindata);
}
?>
</h2>
</center>