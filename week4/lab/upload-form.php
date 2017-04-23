<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Address</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css">
        <link rel='stylesheet' type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php       
        require './autoload.php';
        include './views/navigation.html.php';
        include './views/upload.html.php';


        // initialize errors array
        $errors = [];


        $filehandler = new Filehandler();

        if (count($_FILES) > 0) {
            try {
                $fileName = $filehandler->upLoad('upfile');
            } catch (RuntimeException $e) {
                $errors[] = $e->getMessage();
            }
        }

        include './views/errors.html.php';
        ?>

        <?php if (isset($fileName)) : ?>
            <div class="columns">
                <div class="column is-4 is-offset-4"> 
                    <ul>
                        <span class="tag is-success bounceIn animated"><?php echo $fileName; ?> has uploaded successfully</span>
                    </ul>
                </div>
            </div>
        <?php endif; ?>


    </body>
</html>
