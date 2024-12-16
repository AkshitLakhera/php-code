<?php
//A cookie is a small piece of data that a server sends to the user's browser. The browser stores the cookie and sends it back to the server with every subsequent request. Cookies can be used to remember user preferences, login details, and more.
setcookie("username", "akshit", time() + 3600, "/");
echo "cookie is set";
if (isset($_COOKIE["username"])) {
    echo "Welcome " . $_COOKIE["username"];
}
//session
//A session is similar to a cookie, but the data is stored on the server rather than the browser. Sessions are used for more sensitive data (like user authentication) and can store more information.

session_start();
$_SESSION["username"] = "piyu";
echo "session is setup";
if (isset($_SESSION["username"])) {
    echo "Welcome " . $_SESSION["username"];
}
