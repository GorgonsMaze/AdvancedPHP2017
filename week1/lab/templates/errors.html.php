<?php if ( isset($errors) && is_array($errors) ) : ?>
<ul>
    <?php foreach ($errors as $error): ?>
        <span class="tag is-danger"><?php echo $error; ?></span>
    <?php endforeach; ?>
</ul>
<?php endif; ?>