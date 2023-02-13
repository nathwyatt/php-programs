<?php
function EvenOddSum($arr, $n)
{
    $even_sum = 0;
    $odd_sum = 0;
    $even_product = 1;
    $odd_product = 1;
    for ($i = 0; $i < $n; $i++)
    {
         
        if ($i % 2 == 0)
            $even_sum += $arr[$i];
            

        else
            $odd_sum += $arr[$i];
            
    }
    for ($i = 0; $i < $n; $i++)
    {
         
        if ($i % 2 == 0)
            
             $even_product *= $arr[$i];

        else
            
             $odd_product *= $arr[$i];
    }
    
 
    echo("sum of even number " . $even_sum);
    echo("\nproduct of odd number " . $even_product);
    echo("\n sum of odd number " . $odd_sum);
    echo("\n product of odd number " . $odd_product);
}
 
// Driver Code
$arr = array( 1, 2, 3, 4, 5, 6 );
$n = sizeof($arr);
 
EvenOddSum($arr, $n);
 ?>