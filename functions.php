<?php

// simple function 
function greetings($arg_1, $arg_2)
{
    echo "Example function"; // statement
    return $arg_1;// return statement
}

// conditional function
$morning = true;
if ($morning) {
    function greetGoodmorning()
    {
        echo "Good morning, I don't exist until program execution reaches me.\n";
    }
}

///executing it:
if ($morning)
    greetGoodmorning();

/// functions within functions
function foo()
{
    function bar()
    {
        echo "I don't exist until foo() is called.\n";
    }
}

/* We can't call bar() yet
   since it doesn't exist. */

foo();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */

bar();

// recursive functions
function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}
/**
 * Information may be passed to functions via the argument list,
 *  which is a comma-delimited list of expressions. 
 * The arguments are evaluated from left to right,
 * before the function is actually called (eager evaluation)
 * https://www.php.net/manual/en/functions.arguments.php
 */

//NOTE:
/**
 * PHP does not support function overloading, nor is it possible to undefine or redefine previously-declared functions.
 * Function names are case-insensitive for the ASCII characters A to Z, though it is usually good form to call functions as they appear in their declaration.
 * Recursive function/method calls with over 100-200 recursion levels can smash the stack and cause a termination of the current script. Especially, infinite recursion is considered a programming error
 */