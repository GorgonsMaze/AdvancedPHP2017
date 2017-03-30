
<div class="columns is-desktop">
    <div class="column is-half is-offset-one-quarter">
        <h1 class="title is-2 has-text-centered">Add Address</h1>
        <form action="#" method="post" id="addressForm"> 
            <div class="field">
                <label class="label">Full Name</label>
                <input class="input" name="fullname" value="<?php echo $fullname; ?>" />
            </div>
            <div class="field">
                <label class="label">Email</label>
                <input class="input" name="email" value="<?php echo $email; ?>" />
            </div>
            <div class="field">
                <label class="label">Address1</label>
                <input class="input" name="addressline1" value="<?php echo $addressline1; ?>" />
            </div>
            <div class="field">
                <label class="label">City</label>
                <input class="input" name="city" value="<?php echo $city; ?>" />
            </div>

            <div class="field">
                <label class="label">State</label>
                <p class="control">
                <span class="select">
                <select name="state">
                    <option selected="true" disabled="disabled" value="">Please Select One...</option>
                    <?php foreach ($states as $key => $value): ?> 
                      <option value="<?php echo $key; ?>" <?php if ( $state == $key ): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select>
                </span>
                </p>
            </div>

            <div class="field">
                <label class="label">Zip</label>
                <input class="input" name="zip" value="<?php echo $zip; ?>" />
            </div>
            <div class="field">
                <label class="label">Birthday</label>
                <input class="input" name="birthday" type="date" value="<?php echo $birthday; ?>" />
            </div>

            <div class="field is-grouped has-addons has-addons-centered">
                <p class="control">
                    <input class="button is-primary" type="submit" value="Submit" class="btn btn-primary" />
                </p>
                <p class="control level">
                    <button class="button is-small level-item" type="reset">Cancel</button>
                </p>
            </div>

        </form>

    </div>
</div>