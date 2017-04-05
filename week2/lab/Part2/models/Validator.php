<?php

/**
 * Class that handles validation
 *
 * @author 001241129
 */
class Validator {

    /**
     * Method to check validatoin of zipcode
     *  
     * @param String $zip
     * @return boolean
     */
    function isZipValid($zip) {
        $zipRegex = '/^[0-9]{5}$/';

        if (preg_match($zipRegex, $zip)) {
            return true;
        }

        return false;
    }

    /**
     * Method to validate date entered
     * 
     * @param String $birthday
     * @return type
     */
    function isDateValid($birthday) {
        return (bool) strtotime($birthday);
    }

    /**
     * Method to validate email entered
     * 
     * @param String $email
     * @return boolean
     */
    function isEmailValid($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        return false;
    }

}
