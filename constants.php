<?php
// Valid constant names
define("FOO", "something");
define("FOO2", "something else");
define("FOO_BAR", "something more");

// Invalid constant names
define("2FOO","something");

// This is valid, but should be avoided:
// PHP may one day provide a magical constant
// that will break your script
define("__FOO__", "something");


const MIN_VALUE = 0.0;      // RIGHT - Works INSIDE of a class definition.
const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition.
