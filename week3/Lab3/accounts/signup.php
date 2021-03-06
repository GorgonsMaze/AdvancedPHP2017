<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css">
        <link rel='stylesheet' type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <?php 
        session_start();
        session_regenerate_id();
        include './autoload.php';

        include './views/navigation.html.php';

        $util = new Util();
        $accounts = new Accounts();
        $validator = new Validator();

        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");

        // initialize errors array
        $errors = [];


        if ($util->isPostRequest()) {

            // If email is invalid throw error
            if ($validator->isEmailValid($email) === false) {
                $errors[] = 'Email is not valid';
            }

            if ($accounts->isEmailRegistered($email)) {
                $errors[] = 'Email is already registered';
            }
            
            if (count($errors) === 0) {
                if ($accounts->signup($email, $password)) {
                    //echo "Signup worked!";
                    $util->redirect("login.php", array("email" => $email));
                }
            }
        }

        // validate email and password
        // including email that already exists


        include './views/errors.html.php';
        include './views/signup.html.php';
        ?>
    </body>
</html>
