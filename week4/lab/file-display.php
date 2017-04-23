<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>File List</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css">
        <link rel='stylesheet' type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        include './autoload.php';
        include './views/navigation.html.php';
        include './views/errors.html.php';

        $fileDelete = filter_input(INPUT_GET, 'deleteFile');
        if (is_string($fileDelete)) {
            $file = '.' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $fileDelete;
            if (is_file($file)) {
                unlink($file);
            }
        }

        $folder = './uploads';
        if (!is_dir($folder)) {
            die('Folder <strong>' . $folder . '</strong> does not exist');
        }
        $directory = new DirectoryIterator($folder);


        include './views/file-display.html.php';
        ?>
    </body>
</html>
