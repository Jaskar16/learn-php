<?php

for ($i = 0; $i < 10; $i++) {
    var_dump($i);
}

for ($i = 9; $i >= 0; $i--) {
    var_dump($i);
}

for ($i = 2; $i < 1000000; $i*= 2) {
    var_dump($i);
}

$time = time();
$n = 0;
while ($time + 1 > time()) {
    $n++;
}
var_dump($n);

while(false) {
    var_dump('WHILE');
}

do {
    var_dump('DO');
} while(false);

$fruits = ['apple', 'banana', 'cherry'];

foreach ($fruits as $fruit) {
    var_dump($fruit);
}

foreach ($fruits as $key => $fruit) {
    var_dump($key, $fruit);
}