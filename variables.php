<?php

// single line comment
/**
 * Multi-line comment
 */

// strings
/**
 * STRINGS
 * - array of characters
 * - wrapped between "" or ''
 */

$favoriteMeal = "Chapati and Beans";
$flourBrand = "EXE";
$oilBrand = "sunFlower";
// string concatenation
$meal = "John's favorite meal is {$favoriteMeal}"; // approach 1
$meal = "John's favorite meal is ".$favoriteMeal; // appraoch 2

// integers
/**
 * INTEGRS
 * - number betweeb -infinity and positive infinity 
 * - do not have decimalplaces
 */
 $numberOfBagsOfFlours = 10;
 $bottlesOfOil = 12;
 
// floats
/**
 * FLOATS
 * - have decimal places
 */
$priceOfOil = 200.50;
$priceOfFLour = 138.50;

// boolean
/**
 * BOOLEAN
 * - true or false outcomes
 */
$isReady =false;
$isBrown = true;

// arrays
/**
 * ARRAYS
 * -  complex datasctructures 
 * - harbour more than one element
 * - can be in initalized in two ways: (varibleName = []; or array(elementsComeHere))
 */

 $listOfSpices = ["corriander","balck-pepper", "white-pepper"]; // approach 1
 $listOfVegetables = array("potatoes","cabbages","carrots","corgets"); // approach 2

 /**
  * OUTPUTS
  * - var_dump : mostly used when youwould like to debug
  * - print()
  * - echo ...
  */

  var_dump($meal); // scenario 1
  print($numberOfBagsOfFlours);// scenario 2
  echo $meal; // scenario 3