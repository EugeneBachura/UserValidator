<?php
// Class connection UserValidator
require_once 'UserValidator.php';

// Creating an instance of UserValidator class
$validator = new UserValidator();

// Example of testing
$email = "ex@google.com";
$password = "Haslo3!!";

// Email validation check
if ($validator->validateEmail($email)) {
    echo "Email is valid.\n";
} else {
    echo "Email is invalid.\n";
}

// Password validation check
if ($validator->validatePassword($password)) {
    echo "Password is valid.\n";
} else {
    echo "Password is invalid.\n";
}
