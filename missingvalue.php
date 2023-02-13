<?php
$cars = array(1,2,3,6,7);
echo print_r("the array of numbers before searching the missed numbers:");
echo print_r($cars);
function missing_number($num_list)
{
$new_arr = range($num_list[0],max($num_list));                                                    
// use array_diff to find the missing elements 
return array_diff($new_arr, $num_list);

}
echo print_r("the missed numbers are:");
print_r(missing_number(array(1,2,3,6,7)));
?>
