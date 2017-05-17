<?php

/**
 * Description of Accounts
 *
 * @author 001241129
 */
class Accounts extends DBSpring {

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

 

}
