<?php
// Cookies are used to store information for user on client side
// And send this information to server to identify that user
setcookie("Name","Jamshed",strtotime('+1 day'),"/","","",0);
if(isset($_COOKIE['Name']))
{
echo($_COOKIE['Name']);
}
?>