<?php

require_once 'UserValidator.php';

$validator = new UserValidator();

$email = "ex@google.com";
$password = "Haslo3!!";

if ($validator->validateEmail($email)) {
    echo "Email is valid.\n";
} else {
    echo "Email is invalid.\n";
}

if ($validator->validatePassword($password)) {
    echo "Password is valid.\n";
} else {
    echo "Password is invalid.\n";
}
