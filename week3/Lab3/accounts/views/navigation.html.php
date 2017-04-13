<nav class="nav has-shadow">
    <div class="nav-left">
        <a class="nav-item is-tab is-hidden-mobile is-active is-disabled">Week 3 - Lab</a>
    </div>

    <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
    <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
    </span>

    <span class="nav-item">
        <?php if (isset($_SESSION['user_id'])) { ?>
            <a class="button is-info" href="../accounts/admin.php">
                <span class="icon">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
                <span>Admin</span>
            </a>
        <?php } else { ?>
            <a class="button" href="../accounts/signup.php">
                <span class="icon">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                </span>
                <span>Signup</span>
            </a>
            <a class="button is-primary" href="../accounts/login.php">
                <span class="icon">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </span>
                <span>Login</span>
            </a>
            <a class="button is-info" href="../accounts/admin.php">
                <span class="icon">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
                <span>Admin</span>
            </a>
        <?php } ?>



    </span>
</div>
</nav>