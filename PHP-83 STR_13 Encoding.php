<center>
<h2>
<form method="post">
Encoding And Decoding Of Data Using ROT-13 Technique
<hr>
<input type="text" name="txt">
<button name="btn">Click On Me</button>
</form>
<?php 
/*
In php str_rot13() function is used to encode and decore data but It not so Secure it rotates every letter by 13 like a to n, b to o etc....
*/
if(isset($_POST['btn']))
{
$string=$_POST['txt'];
$chiperdata=str_rot13($string);
$plaindata=str_rot13(str_rot13($string));
echo("Encoded Data Is = ". $chiperdata);
echo("<hr>");
echo("Decoded Data Is = ". $plaindata);
}
?>
</h2>
</center>