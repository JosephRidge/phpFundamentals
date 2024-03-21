<?php

// loops
/**
 * LOOPS
 * - iterations
 * - foreach
 * - for loop
 * - while loop
 */

 $spices = ["corriander","balck-pepper", "white-pepper"]; // approach 1
 $vegetables = array("potatoes","cabbages","carrots","corgets"); // approach 2

 // for loop
/**
 * for(initializer;condition;incrementot or decrementer)
 */
 for($start = 0 ; $start< count($spices); $start++){
    print($spices[$start]);
 }

 //foreach 
 foreach($vegetables as $vegetable){
    print($vegetable);
}

// while
// starting point of your loop
$start = 0;
// the condition is set that start point will not be greater than the size of the vegetable array 
while($start < count($vegetables)){
    // print out our vegetable
    print($vegetables[$start]);
    // increment strat point by one
    $start++;
}