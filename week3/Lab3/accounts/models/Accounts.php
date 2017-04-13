<?php

/**
 * Description of Accounts
 *
 * @author 001241129
 */
class Accounts extends DB {

    /**
     * Constructor
     */
    public function __construct() {
        $dbConfig = array(
            "DB_DNS" => 'mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017',
            "DB_USER" => 'root',
            "DB_PASSWORD" => ''
        );
        parent::__construct($dbConfig);
    }

    /**
     * 
     * @param type $email
     * @param type $password
     * @return boolean
     */
    public function signup($email, $password) {
        $db = $this->getDb();
        $stmt = $db->prepare("INSERT INTO users SET email = :email, password = :password, created = NOW()");
        $binds = array(
            ":email" => $email,
            ":password" => password_hash($password, PASSWORD_DEFAULT)
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }

        return false;
    }

    /**
     * Method to return user_id if logged in
     * 
     * @param type $email
     * @param type $password
     * @return int
     */
    public function login($email, $password) {
        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");

        $binds = array(
            ":email" => $email
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $results['password'])) {
                return $results['user_id'];
            }
        }

        return 0;
    }

    /**
     * Method to check if email is already registered before signup is allowed
     * 
     * @param type $email
     * @return boolean
     */
    public function isEmailRegistered($email) {
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");

        $binds = array(
            ":email" => $email
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }

        return false;
    }

    /**
     * Method to get user email 
     * 
     * @param type $userid
     * @return string
     */
    public function getUserEmail($userid) {
        $db = $this->getDb();
        $stmt = $db->prepare("SELECT * FROM users WHERE user_id = :user_id LIMIT 1");

        $binds = array(
            ":user_id" => $userid
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            return $results['email'];
        }

        return '';
    }

}
