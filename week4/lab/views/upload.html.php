<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="#" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
    <!-- Name of input element determines name in $_FILES array -->
    <!--    allow multiple files  multiple=""-->
    <div class="field is-grouped">
        <p class="control">
            <input class="button" name="upfile" type="file"/>
        </p>
        <p class="control">
            <input class="button is-primary" type="submit" value="Upload File"/>
        </p>
    </div>

</form>