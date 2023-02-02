<?php

function getMissingNo ($a, $n)
{
	$total = ($n + 1) * ($n + 2) / 2;
	for ( $i = 0; $i < $n; $i++)
		$total -= $a[$i];
	return $total;
}

// Driver Code
$arr = array(1, 2, 3, 5);
$N = 4;
$miss = getMissingNo($arr, $N);
echo($miss);

// This code is contributed by Ajit.
?>
