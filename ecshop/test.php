<?php
$a =5;
$b = &$a;
$b =7;
echo $a;
unset ($a);
?>
