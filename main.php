<?php

class FizzBuzz {
    function input($x) {
        if($x % 15 === 0) return 'fizzbuzz';
        if($x % 3 === 0) return 'fizz';
        if($x % 5 === 0) return 'buzz';
        return $x;
    }
}

$FizzBuzz = new FizzBuzz();
var_dump(assert($FizzBuzz->input(1) == 1, '値が一致しません'));
var_dump(assert($FizzBuzz->input(2) == 2, '値が一致しません'));
var_dump(assert($FizzBuzz->input(3) == 'fizz', '値が一致しません'));
var_dump(assert($FizzBuzz->input(4) == 4, '値が一致しません'));
var_dump(assert($FizzBuzz->input(5) == 'buzz', '値が一致しません'));
var_dump(assert($FizzBuzz->input(6) == 'fizz', '値が一致しません'));
var_dump(assert($FizzBuzz->input(10) == 'buzz', '値が一致しません'));
var_dump(assert($FizzBuzz->input(15) == 'fizzbuzz', '値が一致しません'));

var_dump(assert($FizzBuzz->input(-1) == '-1', '値が一致しません'));
var_dump(assert($FizzBuzz->input(-3) == 'fizz', '値が一致しません'));
var_dump(assert($FizzBuzz->input(-5) == 'buzz', '値が一致しません'));
var_dump(assert($FizzBuzz->input(-15) == 'fizzbuzz', '値が一致しません'));
?>
