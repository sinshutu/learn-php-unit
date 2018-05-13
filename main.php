<?php

class FizzBuzz {
    function input() {
        return 1;
    }
}

$FizzBuzz = new FizzBuzz();
var_dump(assert($FizzBuzz->input(1) == 1, '値が一致しません'));
?>
