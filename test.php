<html>
<head>
<title>Exercise</title>
</head>
<body>
<?php
$j=$k=0;
for($i=1;$i<=75;$i++)
{
	echo $i." ";
	$j++;	
	$k++;	
	if ($j==3)
	{
		print "Foo";
		$j=0;
	}
	if ($k==5)
	{
		print "Bar";
		$k=0;
	}
	print "<br/>";}

?>

</body>
</head>