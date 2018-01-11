<?php


$a= 1;
$b=10;


function test(){
    $GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
}

test();
echo $c . "   " . count($GLOBALS) . " ";
print_r( $GLOBALS);

?>