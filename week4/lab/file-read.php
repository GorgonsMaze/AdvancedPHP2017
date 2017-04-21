<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>File Read</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css">
        <link rel='stylesheet' type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    </head>
    <body>
        <?php
        include './views/navigation.html.php';
        echo filter_input(INPUT_GET, 'filename');
        ?>
    </body>
</html>
