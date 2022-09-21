<?php
$temp = "";
for ($i = 1;$i <= 5; $i++)
{
	for ($j=1;$j<=$i;$j++)
	$temp = $temp . $j;
	$temp =$temp . "<br>";
}
echo ($temp);
?>