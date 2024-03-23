<?php

/**
 * Anonymous functions, also known as closures, 
 * allow the creation of functions which have no specified name.
 * They are most useful as the value of callable parameters, but they have many other uses.
 * 
 */
 
// outputs helloWorld
 echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world');

// function variable assignment
$greet = function($name) {
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');

/**
 * Read more here:
 * https://www.php.net/manual/en/functions.anonymous.php
 * 
 */