<html>
<head>
<style>
</style>
</head>
<body>
<center>
<h2>
<?php
/*
Page Redirect: Page is redirected in php by two ways
(1)- By using php function header("Location:page to be redirected")
(2)- By using javascript function window.location.assign('url')
if you want to redirecte a page after some specefic time then you can user_error
header("refresh:5; url=www.google.com")
*/
header("Location:www.google.com");
?>
</h2>
</center>
</body>
</html>