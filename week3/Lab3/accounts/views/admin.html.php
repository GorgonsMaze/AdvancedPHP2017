<h1 class="title is-2 has-text-centered">Admin Page</h1>

<div class="columns">
    <div class="column is-4 is-offset-4">

        <div class="box">
            <article class="media">
                <div class="media-left">
                    <figure class="image is-64x64">
                        <img src="https://cdn1.iconfinder.com/data/icons/education-colored-icons-vol-2/128/077-512.png" alt="Image">
                    </figure>
                </div>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>User ID: </strong> <small style="padding-right:.5em;"><?php echo $userid ?> </small>
                            <strong>Email: </strong><small> <?php echo $email ?></small>
                            <br>
                            Welcome back, <?php echo ucfirst($name[0]); ?>! 
                        </p>
                    </div>
                    <form action="#" method="post">
                        <input class="button is-danger is-small is-pulled-right" type="submit" value="Logout"/>  
                    </form>

                </div>
            </article>
        </div>
    </div>
</div>
