<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Address</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css">
        <link rel='stylesheet' type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <?php
        session_start();
        include './autoload.php';

        include './views/navigation.html.php';

        $util = new Util();
        $accounts = new Accounts();



        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        if ($util->isPostRequest()) {
            $loginInfo = $accounts->login($email, $password);

            if ($loginInfo > 0) {
                //echo " you logged in!";
                $_SESSION['user_id'] = $loginInfo;
                $util->redirect("admin.php");
            } else {
                //echo "oh crap! your login is invalid!";
            }
        }

        
        // TODO: Error handling
        
        include './views/login.html.php';
        ?>
    </body>
</html>
