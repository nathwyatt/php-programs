
<?php
 $a = array(1,2,1,3,3,1,);
 $b = array_count_values( $a );
 $c = print_r ( $b , true);

 echo "<pre> $c </pre>";
 ?>