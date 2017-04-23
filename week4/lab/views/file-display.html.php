<?php
$counter = 1;
?>                  
<table class="table">
    <thead>
        <tr>
            <th>Number</th>
            <th>File Name</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($directory as $fileInfo) : ?>
            <?php if ($fileInfo->isFile()) : ?>
                <tr>
                    <th><?php echo $counter++; ?></th>
                    <td><?php echo$fileInfo->getFileName(); ?> </td>
                    <td><a class="button is-default" href="file-read.php?filename=<?php echo $fileInfo->getFileName();?>">
                            <i class="fa fa-eye" aria-hidden="true"></i>  View</a></td>
                    <td><a class="button is-danger" href="?deleteFile=<?php echo $fileInfo->getFileName(); ?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>Delete</a></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>

    </tbody>
</table>