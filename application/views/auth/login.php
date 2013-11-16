
<div class="row contentblock">
    <div class="col-md-4 col-md-push-4">
        <?php echo validation_errors(); ?>
        <form action="login" method="POST" role="form">
            <fieldset>
            <input type="hidden" name="redirect_to" value="<?PHP echo set_value("redirect_to", $redirect_to) ?>" />
            <div class="form-group">
                <label for="email" class="text-left">Email</label>
                <input class="form-control" type="email" id="email" name="email" value="<?PHP echo set_value("email") ?>" />
            </div>
            <div class="form-group">
                <label for="password" class="text-left">Password</label>
                <input class="form-control" type="password" id="password" name="password" value="" />
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Login" />
            
            <div class="text-center">
            <a href="register" class="btn">Register</a> 
            <a href="forgot"   class="btn">Reclaim lost password</a>
            </div>
            </fieldset>
        </form>
    </div>
</div>