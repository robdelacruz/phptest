<?php

setcookieval("userid", 456);
$userid = getcookieval("userid");

$vartype = gettype($userid);
print("userid type is '$vartype'\n");
print("userid: '$userid'\n");

function setcookieval($k, $v) {
    setcookie($k, $v);
    $_COOKIE[$k] = $v;
}
function getcookieval($k) {
    if (isset($_COOKIE[$k]))
        return $_COOKIE[$k];
    return null;
}

?>
