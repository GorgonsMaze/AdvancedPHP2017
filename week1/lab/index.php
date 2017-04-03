<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Addresses</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css">
        <link rel='stylesheet' type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <a href="index.php"></a>
        <?php
        include './models/dbconnect.php';
        include './models/addressCRUD.php';
        include './templates/navigation.html.php';

        $addressses = readAllAddress();

        include './templates/view-address.html.php';
        ?>
    </body>
</html>
