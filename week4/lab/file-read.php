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
        //echo filter_input(INPUT_GET, 'filename');

        $filename = filter_input(INPUT_GET, 'filename');


        /*         * ***************UPDATE FILE**************** */
        $file = '.' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $filename;

        //http://php.net/manual/en/fileinfo.constants.php
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $type = $finfo->file($file);

        var_dump($type);

        //http://php.net/manual/en/function.filesize.php
        var_dump(filesize($file));

        /*
         * To delete a file use unlink
         *     unlink($file);
         */


        // http://php.net/manual/en/class.splfileinfo.php
        $finfo = new SplFileInfo($file);

        if ($finfo->isFile()) {
            var_dump($finfo->getRealPath(), '<br/><br/>');
            var_dump($finfo->getFilename(), '<br/><br/>');
            var_dump(date("l F j, Y, g:i a", $finfo->getMTime()), '<br/><br/>');
            var_dump($finfo->getSize(), '<br/><br/>');
            var_dump($finfo->getPathname(), '<br/><br/>');
        }
        ?>
        <!-- File Type -->
        <h2 class="is-2 title"><?php echo $type; ?></h2>
        <!-- File Size -->
        <h2 class="is-2 title"><?php echo filesize($file) . " bytes"; ?></h2>
        <!-- File Creation Date -->
        <h2 class="is-2 title"><?php echo date("l F j, Y, g:i a", $finfo->getMTime()); ?></h2>
        <a class="button is-primary" href="#?deleteFile=<?php echo $fileInfo->getFileName(); ?>">Delete</a>
    </body>
</html>
