<?php

/**
 * CONDITIONS
 * - if ...
 * - if....else
 * - tenary operator ? true : false
 */

 $name="John Doe";
 $password = "1234567890"; // usually hashed in real worlds  situation
 $years =10;
 $age ='10';

 // using if
 if($years === $age){
    print("Welcome Home");
}

if($years == $age){
    print("Welcome Home");
}

if($name === "John Doe"){
    print("Welcome Home");
}


 // using if.. else
if($name == "John Doe"){
    print("Welcome home");
}else{
    print("You need to travell home John");
}

// ternary operator 
/**
 * conditon
 * if the condition is met run first section
 * else run second section
 * ----> do not nest your ternary operators it will make it complex to read 
 */

 $output = $name == "John Does" ? "Welcome John Doe!":"Kinldy identify yourself";