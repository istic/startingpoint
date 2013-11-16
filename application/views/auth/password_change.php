<div class="row contentblock">
    <div class="col-md-4 col-md-push-4">
        <?php echo validation_errors(); ?>
        <form role="form" action="change_password" method="POST" class="loginform">
                
                <div class="form-group">
                    <label for="oldpassword">Current Password</label>
                    <input class="form-control" type="password" name="oldpassword" />
                </div>
                <p>Please enter your new password. Twice, this time.</p>
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <div class="form-group">
                    <label for="password2">New Password Again</label>
                    <input class="form-control" type="password" name="password2" />
                </div>
                <input type="submit" class="btn btn-default pull-right" value="Reset Password" />
                <br class="clear"/>

        </form>

    </div>
</div>