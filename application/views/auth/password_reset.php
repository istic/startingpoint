<div class="row contentblock">
    <div class="col-md-4 col-md-push-4">
        <?php echo validation_errors(); ?>
        <form action="<?PHP echo $user->reset_code ?>" method="POST">
            <fieldset>
            <p>Hello <?PHP echo $user->name ?>. Please enter your new password. Twice, this time.</p>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" />
            </div>

            <div class="form-group">
                <label for="password2">Same Password</label>
                <input class="form-control" type="password" name="password2" />
            </div>

            <input type="submit" class="btn btn-primary btn-block" value="Reset Password" />
            </fieldset>
        </form>
    </div>
</div>