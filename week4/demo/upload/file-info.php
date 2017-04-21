<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* ****************UPDATE FILE**************** */        
        $file = '.'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'img_4b1d2d957081aa43e60eca2f37eb5ac3ae920fd7.jpg';
        
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
        
        if ( $finfo->isFile() ) {
            var_dump($finfo->getRealPath(), '<br/><br/>');
            var_dump($finfo->getFilename(), '<br/><br/>');
            var_dump(date("l F j, Y, g:i a", $finfo->getMTime()), '<br/><br/>');
            var_dump($finfo->getSize(), '<br/><br/>');
            var_dump($finfo->getPathname(), '<br/><br/>');
            
        }
        
        
        ?>
    </body>
</html>
