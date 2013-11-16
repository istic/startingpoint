<div class="row">
    <div class="col-md-4 col-md-push-4">
        <?php echo validation_errors(); ?>
        <form role="form" action="forgot" method="POST" >
            <fieldset>
                <p>No worries, just fill in your email address here, and we'll send along a reset code.</p>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" value="<?PHP echo set_value("email") ?>" />
            </div>
            
                <input type="submit" class="btn btn-primary pull-right" value="Reset Password" />
            </fieldset>
        </form>
    </div>
</div>