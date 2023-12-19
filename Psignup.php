<?php

if (empty($_users["name"])) {
    die("Name Is Required");
}

if ( ! filter_var($_users["email"]. FILTER_VALIDATE_EMAIL)) {
    die("Valid Email Is Required");
}
if (strlen($_users["password"]) < 8) {
    die("Password Must Be At Least 8 Characters");
}
if ( ! preg_match("/[a-z]/i", $_users["password"])) {
    die("Password Must Contain At Least One Letter");
}
if ( ! preg_match("/[0-9]/", $_users["password"])) {
    die("Password Must Contain At Least One Number");
}
if ($_users["password"] !== $_users["confirmpassword"]) {
    die("Password Must Match");
}

print_r($_users);