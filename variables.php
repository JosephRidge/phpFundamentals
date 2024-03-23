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

  // *************************** NOTES *******************************************
  /**
 * Variables in PHP are represented by a dollar sign followed by 
 * the name of the variable.
 *  The variable name is case-sensitive.
 * variable declaration rules:
 * 1.start with dollar sign($)
 * 2.first letter of variable name comes from a-zA-z_
 * 3.next letters of variable name comes from a-zA-Z0-9_
 * 4.no space,no syntex
 * Variable are mainly Two types
 * 1.Predefined Variable
 * 2.User Define Variable
 * Predefined Variable
 * There are 12 predefined variables in php 8
 * 1.$GLOBALS
 * 2.$_SERVER
 * 3.$_REQUEST
 * 4.$_FILES
 * 5.$_ENV
 * 6.$_SESSION
 * 7.$_COOKIE
 * 8.$_GET
 * 9.$_POST
 * 10.$http_response_header
 * 11.$argc
 * 12.$argv
 * User Define Variable
 * User Define variable are 3 types
 * 1.variable scope
 * 2.variable variables
 * 3.reference variable
 * Variable Scope
 * variable scope are 3 types
 * 1.local scope
 * 2.global scope
 * 3.static variable
 */