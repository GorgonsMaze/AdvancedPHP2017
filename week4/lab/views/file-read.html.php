

<div class="columns">
    <!-- File Details Column -->
    <div class="column is-half-desktop is-offset-3-desktop">

        <div class="card">
            <div class="card-content" id="card-details">
                <p class="title">
                    File Details:
                </p>
                <p><strong>File Type: </strong><?php echo $type; ?></p>
                <p><strong>File Size: </strong><?php echo filesize($file) . " bytes"; ?></p>
                <p><strong>Date Created: </strong><?php echo date("l F j, Y, g:i a", $finfo->getMTime()); ?></p>
            </div>
            <footer class="card-footer">
                <p class="card-footer-item">
                    <a class="button is-danger" href="./file-display.php?deleteFile=<?php echo $filename; ?>">
                        <i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
                </p>
            </footer>
        </div>
    </div>
</div>

<div class="columns"> 
    <!-- Display of photo/pdf/txt column -->
    <div class="column is-8 is-offset-2">
        <figure class="image">
            <?php echo $displayFile; ?>
        </figure>
    </div>
</div>
