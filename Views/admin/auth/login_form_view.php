<div class="content">
    <div class="login-form">
        <fieldset>
            <legend color='white'>Admin login form</legend>

            <div class="alert alert-danger <?= isset($errors) ? "show" : ""; ?>">
                <?= isset($errors) ? $errors : ""; ?>
            </div>
            <form method="POST">
                <div class="form-group">
                    <input type="text" placeholder="username" name="admin_username" /><br/>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="*******" name="admin_password" /><br/>
                </div>
                <div class="form-group">
                    <input type="submit" formaction="<?= BASE_URL ?>admin/login" name="login" value="Send">
                </div>
            </form>
        </fieldset>
    </div>

</div>