<?php

/**
 * Class that handles validation
 *
 * @author 001241129
 */
class Validator {

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
