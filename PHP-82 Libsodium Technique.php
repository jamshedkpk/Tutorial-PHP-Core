<center>
<h2>
<form method="post">
Encryption And Decryption Of Data Using Libsodium Technique
<hr>
<input type="text" name="txt">
<button name="btn">Click On Me</button>
</form>
<?php 
if(isset($_POST['btn']))
{
/*
 Libsodium is the latest and more secure way used for encryption of Data. Using libsodium technique we define a key and a nonce
 Key is used to random and encrypt data while nonce is used
 To decrypt the encrypted data...

Steps which are used for Libsodium technique...
Step-1: Go to xammp/php and copy a file libsodium.dll
Step-2: Go to Xammp/php/ext and past it here..
Step-3: Go to Xammp/apach/bin and past it here..
Step-4: Go to Xammp and past it here...
Step-5: Go to php.ini file and change ;extension=sodium to extension=sodium
for e.g. add an extension 
Note: It is supported by php7 or higher...
*/
$string=$_POST['txt'];
$key=random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);
$nonce=random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
$chiperdata=sodium_crypto_secretbox($string,$nonce,$key);
echo("Encrypted Data Is = ". $chiperdata);
echo("<hr>");
$plaindata=sodium_crypto_secretbox_open($chiperdata,$nonce,$key);
echo("Decrypted Data Is = ". $plaindata);
}
?>
</h2>
</center>