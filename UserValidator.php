<?php

class UserValidator
{
    public function validateEmail(string $email): bool
    {
        // Regular expression for email address validation
        /* 
            Contains the @ character. Before @ there should be one or more letters: (?=[^@]*[a-zA-Z]);
            After @ should be a domain (e.g. example.com) that contains a dot (.);
            At least two letters after the dot;
        */
        $pattern = '/^(?=[^@]*[a-zA-Z])[\w.%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

        // Return compliance check
        if (preg_match($pattern, $email)) {
            return true;
        } else {
            return false;
        }
    }

    public function validatePassword(string $password): bool
    {
        // Password validation
        $lengthCheck = strlen($password) >= 8; // Minimum 8 characters
        $uppercaseCheck = preg_match('/[A-Z]/', $password); // Contains at least one uppercase letter
        $lowercaseCheck = preg_match('/[a-z]/', $password); // Contains at least one lowercase letter
        $digitCheck = preg_match('/\d/', $password); // Contains at least one digit
        $specialCharCheck = preg_match('/[\W]/', $password); // Contains one special sign

        // Return compliance check
        return $lengthCheck && $uppercaseCheck && $lowercaseCheck && $digitCheck && $specialCharCheck;
    }
}
