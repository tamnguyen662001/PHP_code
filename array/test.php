<?php

function test(){
    static $x = 0 ; // biến tĩnh nên giá trị vẫn còn, sau khi thực thi 
    echo $x."\n";
    $x++;
}

test();
test();
test();



$a = 1;
$b=2;
function sum (){
    global $a,$b;
    echo $a+$b;
}
sum();
?>
