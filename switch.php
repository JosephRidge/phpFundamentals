<?php
// This switch statement:
    /**
     * PHP continues to execute the statements until the end of the switch block,
     *  or the first time it sees a break statement. 
     * If you don't write a break statement at the end of a case's statement list,
     *  PHP will go on executing the statements of the following case
     */

     //SYNTAX APPROACH 1
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
        //A special case is the default case. This case matches anything that wasn't matched by the other cases
    default:
        echo "i is not equal to 0, 1 or 2";
}

// Is equivalent to:
if ($i == 0) {
    echo "i equals 0";
} elseif ($i == 1) {
    echo "i equals 1";
} elseif ($i == 2) {
    echo "i equals 2";
}else{
    echo "i is not equal to 0, 1 or 2";
}

// SYNTAX APPROACH 2: using semicolon
switch ($i):
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
endswitch;

/**
 * SWITCH may be faster in execution time as opposed to If statemnts
 * - try performing 1 million iterations 
 */