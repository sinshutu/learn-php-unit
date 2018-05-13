<?php

class UnitTest{
 
}

class FizzBuzz {
}

var_dump(assert(1 == 1, '値が一致しません'));
$FizzBuzz = new FizzBuzz();
var_dump(assert($FizzBuzz->input(1) == 1, '値が一致しません'));
?>
