<div class="columns">
    <div class="column is-4 is-offset-4 has-text-centered">
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] <= 0) {
            exit("<div class='notification is-danger'>You are not allowed here!\nPlease <a class='button is-small' href='./login.php'>login</a></div>");
        }
        ?>

    </div>
</div>
