<?php if ( isset($errors) && is_array($errors) ) : ?>
<div class="columns">
    <div class="column is-4 is-offset-4"> 
        <ul>
            <?php foreach ($errors as $error): ?>
            <span class="tag is-danger bounceIn animated"><?php echo $error; ?></span>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>