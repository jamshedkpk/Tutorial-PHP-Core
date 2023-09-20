<html>
<head>
<style>
</style>
</head>
<body>
<?php
/*
In php include_once and require_once functions are used to link an external php file only once.
When we use include_once function then it links an external file but if it does not find any
External file then it display an error and contineoue further code reading. 
When we use require_once function then it links an external file but if it does not find any
External file then it display an error and stop further reading of code.
*/
include_once("PHP-49 External File.php");
include_once("PHP-49 External File.php");
include_once("PHP-49 External File.php");
?>
</body>
</html>