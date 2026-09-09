<?php

function hello(): void {
    var_dump('Hello');
}

$hi = hello();
var_dump($hi);
hello();
hello();

function helloName($name ='nameless') {
    var_dump("Hello, $name");
}

helloName('jaskar');
helloName('nilbert');

function helloNameAndAge($name, $age) {
    var_dump("Hello, $name! You are $age years old.");
}

helloNameAndAge('jaskar', 25);
helloNameAndAge('nilbert', 30);

helloName();

$test = function(){

};

var_dump($test);

$numbers = [1, 2, 3, 4, 5];

$squares = array_map(function($n) {
    return $n * $n;
}, $numbers);
$squares = array_map(fn($n) => $n * $n, $numbers);
var_dump($squares);


function  cube(Int $a): Int | String {
    if($a < 0){
        return 'no negative!';
    }
    return $a * $a * $a;
    var_dump('niggeeeerr');
}

var_dump(cube(4));

$answer = cube(2.3);
$text = "Cube of 5 is $answer!";
echo $text;