<html>
<head>
<title>Test</title>
</head>
<body>
<center>
<h2>
<?php    
/*
Multi dimensional Array are used to store an array inside another
Array...
*/
$contact=array
(
$student_1=array
(
"ID"=>1,
"Name"=>"Jamshed",
"Address"=>"Lakki Marwat"
),
$student_2=array
(
"ID"=>2,
"Name"=>"Naila",
"Address"=>"Karak"
),$student_3=array
(
"ID"=>3,
"Name"=>"Irfan",
"Address"=>"Bannu"
)
);
$count=count($contact);
echo("Total Students Are = ".$count);
echo("<br>");
echo("<hr>");
echo("<br>");

print_r($contact);

echo("<br>");
echo("<hr>");
echo("<br>");

for($i=0;$i<$count;$i++)
{
foreach($contact[$i] as $key=>$value)
{
echo($key. " Is = " .$value);	
echo("<br>");
}	
}
?>  
</h2>
</center>
</body>
</html>