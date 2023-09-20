<center>
<h2>
<?php
session_start();
if(isset($_POST['btn1']))
{
$_SESSION['user']='Jamshed Khan';
/* 
 When a session is created then server sends an
 ID which is stored as a cookie in our browser.
 Sometime hacker can steel this cookie and can 
 Access our data called session hijecking. In Order to prevent this type of
 Attack we use session_regenerate_id(true); 
 Function. In this case when browser is
 Refreshed then this cookie value is changed....
*/
session_regenerate_id(true);
echo("Session Is Started");
echo("<br>");
echo("The name of your session is = ".$_SESSION['user']);
}
if (isset($_POST['btn2']))
{
echo("Session Is Destroyed");
session_destroy();
}
?>
<form method="post">
<button name="btn1">Start A Session</button>
<button name="btn2">Destroy A Session</button>
</form>
</h2>
</center>

