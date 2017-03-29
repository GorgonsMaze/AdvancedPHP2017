<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Addresses</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css">
    </head>
    <body>
        <?php
        include './models/dbconnect.php';
        include './models/addressCRUD.php';
        
        $addressses = readAllAddress();
        
        include './templates/view-address.html.php';
      
        ?>
    </body>
</html>
