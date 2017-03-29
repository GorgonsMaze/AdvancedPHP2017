<?php if ( isset($errors) && is_array($errors) ) : ?>
<ul>
    <?php foreach ($errors as $error): ?>
    <span style="margin:10px 0;" class="tag is-danger"><?php echo $error; ?></span>
    <?php endforeach; ?>
</ul>
<?php endif; ?>