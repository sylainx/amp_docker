<?php

/**
 * validatiePassword
 * at least one lowercase char
 * at least one uppercase char
 * at least one digit
 * at least one special sign of @#-_$%^&+=!?
 * 
 * @param string $pwd
 * @return true or fals
 */
function validatePassword($pwd)
{
    return (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=!\?]{4,20}$/',$pwd));
}

/**
 * validatieString
 * only a to z 
 * or A to Z accepted
 * @param string $string
 * @return true or false
 */
function validateOnlyString($string)
{
    return (preg_replace('/[^a-zA-Z- ]/i', '', $string));
}

/**
 * validatieString
 * only a to z 
 * or A to Z accepted
 * @param string $string
 * @return true or false
 */
function validateString($string)
{
    return (preg_replace('/[^a-zA-Z- ]/i', '', $string));
}
