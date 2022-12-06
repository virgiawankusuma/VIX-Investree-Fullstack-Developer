<?php

// start the session
session_start();

// set session variable
$_SESSION["username"] = "investree";
$_SESSION["password"] = "123456";

echo "Session variables are set.";

// get session variable
echo "Username is " . $_SESSION["username"] . " and password is " . $_SESSION["password"];
// using template literals
echo "Username is {$_SESSION["username"]} and password is {$_SESSION["password"]}";

// remove session variable
unset($_SESSION["username"]);

// check if session variable is set

if (isset($_SESSION["username"])) {
    echo "Username is set.";
} else {
    echo "Username is not set.";
}

// remove all session variables
session_unset();

// destroy session
session_destroy();

?>