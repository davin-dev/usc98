<br> <div class="alert alert-danger <?= $errors == 1 ? "show" : ""; ?>">Full name is required</div>
<div class="content contact-us-content">
    <p>enter your message to admin of this site. please be polite while you writing your message :) </p>

    <form method="POST">
        <div class="form-group">
            <label for="">Full name:
                <span class="require">*</span>
            </label>
            <input type="text" name="fullname">
        </div>

        <div class="form-group">
            <label for="">Email:</label>
            <input type="text" name="email">
        </div>

        <div class="form-group">
            <label for="">Message:
                <span class="require">*</span>
            </label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" formaction="/Contact/addmessage" name="message" value="Send" />
        </div>
    </form>
    <br> <div class="alert alert-success <?=  $errors == 0 ? "show" : ""; ?>">Your message was sent successfully.</div>
</div>