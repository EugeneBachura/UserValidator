<?php

class UserValidator
{
    public function validateEmail(string $email): bool
    {
        // Regular expression for email address validation
        /* 
            Contains the @ character. Before @ there should be one or more letters;
            After @ should be a domain (e.g. example.com) that contains a period (.);
            At least two letters after the period;
        */
        $pattern = '/^(?=[^@]*[a-zA-Z])[\w.%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

        // Compliance check
        if (preg_match($pattern, $email)) {
            return true;
        } else {
            return false;
        }
    }
}
