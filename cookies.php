<?php

$value = "investree";
$cookie_name = "TestingCookie";

setcookie($cookie_name, $value, time() + (86400 * 30), "/");

echo $_COOKIE[$cookie_name];

// delete cookies
// setcookie($cookie_name, "", time()-3600);

?>