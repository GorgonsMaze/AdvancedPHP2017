<?php

/**
 * Method to check validatoin of zipcode
 *  
 * @param type $zip
 * @return boolean
 */
function isZipValid($zip) {
    $zipRegex = '/^[0-9]{5}$/';
    
    if (preg_match($zipRegex, $zip)) {
        return true;
    }
    
    return false;
}

function isDateValid($birthday) {
    return (bool)strtotime($birthday);
}

function isEmailValid($email) {
    if ( filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
        
    } 
    
    return false;
    
}