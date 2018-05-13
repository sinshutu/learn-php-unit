<?php

class FizzBuzz {
    function input($x) {
        return $x;
    }
}

$FizzBuzz = new FizzBuzz();
var_dump(assert($FizzBuzz->input(1) == 1, '値が一致しません'));
var_dump(assert($FizzBuzz->input(2) == 2, '値が一致しません'));
?>
