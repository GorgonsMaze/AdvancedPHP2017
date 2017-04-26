<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css">
        <link rel='stylesheet' type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <?php
        session_start();
        session_regenerate_id();
        include './autoload.php';

        include './views/navigation.html.php';
        include './views/session-access.html.php';

        $util = new Util();
        $accounts = new Accounts();

        // Get ther user id to display
        $userid = $_SESSION['user_id'];

        // Gets the email to display
        $email = $accounts->getUserEmail($_SESSION['user_id']);


        $name = explode("@", $email);

        // when user logsout - redirect user to login page
        // unset the session user id when logging out        
        if ($util->isPostRequest()) {
            unset($_SESSION['user_id']);
            $util->redirect("login.php");
        }
        
        include './views/admin.html.php';
        ?>
        
        
    
    </body>
</html>
