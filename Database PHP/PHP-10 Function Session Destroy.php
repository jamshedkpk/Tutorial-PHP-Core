<center>
<h2>
<?php
session_start();
if(isset($_SESSION['id']))
{
session_destroy();
echo("You Have Successfully Log Out <br><br>");
echo('<a href="PHP-8 Function Session Start.php">Sign In</a>');
}
?>
</h2>
</center>
