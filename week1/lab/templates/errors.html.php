<?php if ( isset($errors) && is_array($errors) ) : ?>
<div class="columns">
    <div class="column is-three-quarters is-offset-2"> 
        <ul>
            <?php foreach ($errors as $error): ?>
            <span style="margin:10px 0;" class="tag is-danger bounceIn animated"><?php echo $error; ?></span>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>