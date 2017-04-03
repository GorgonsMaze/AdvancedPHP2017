<?php if (isset($message) && strlen($message)) : ?>
    <div class="notification is-success has-text-centered bounceInUp animated" id="successAlert">
        <button class="delete" onclick="deleteAlert()"></button>
        <?php echo $message; ?>
    </div>
    <!--<p class="alert alert-success has-text-centered"></p>-->
<?php endif; ?>
