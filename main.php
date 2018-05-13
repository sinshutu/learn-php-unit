<?php

class FizzBuzz {
    function input($x) {
        if(is_string($x)) $x = (int)mb_convert_kana($x, "n", "utf-8");
        if($x === 0) return 'not break';
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

var_dump(assert($FizzBuzz->input(0) == 'not break', '値が一致しません'));

var_dump(assert($FizzBuzz->input('１') == 1,'値が一致しません'));
var_dump(assert($FizzBuzz->input('２') == 2,'値が一致しません'));
var_dump(assert($FizzBuzz->input('３') == 'fizz','値が一致しません'));
var_dump(assert($FizzBuzz->input('４') == 4,'値が一致しません'));
var_dump(assert($FizzBuzz->input('５') == 'buzz','値が一致しません'));
var_dump(assert($FizzBuzz->input('６') == 'fizz','値が一致しません'));
var_dump(assert($FizzBuzz->input('１０') == 'buzz','値が一致しません'));
var_dump(assert($FizzBuzz->input('１５') == 'fizzbuzz','値が一致しません'));
var_dump(assert($FizzBuzz->input('０') == 'not break','値が一致しません'));
?>
