
   
    <div class="post" dir="rtl" lang="fa">
        <div class="category"><h3><?= $news["category"]; ?></h3></div>
        <div class="title"><h1><?= $news['headline'] ?></h1></div>
        <div class="pic"><img id="pic" src="<?= BASE_URL ?>public/img/<?= $news['picture'] ?>"/></div>
        <div class="note"><?= $news['excerpt']; ?></div>
        <div class="text"><?= $news['content']; ?></div><hr>
    </div>

        <div class="count">view count : <?= $news['view_count']; ?></div>
        <a href="/news/like&id=<?= $news['id'] ?>" class="likes">❤ <?= $news['likes']; ?></a>
        
        <hr><div class="comments"><h2>Comments ✏ </h2>
        <?php foreach($news as $ns) { if(isset($ns['name'])){?>
            <div class="text">Name : <?= $ns['name']; ?></div>
            <div class="text">Comment : <?= $ns['text']; ?></div><hr class="cm">
            <?php }} // end of foreach ?>
        </div>
            
            <br> <div class="alert alert-danger <?= $errors == 1 ? "show" : ""; ?>">Full name is required</div>
            <div class="content contact-us-content">
                <p>please be polite while you writing your message </p>

                <form method="POST" action="/news/addcomment&id=<?= $news['id'] ?>">
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
                        <input type="submit" value="Send" />
                    </div>
                </form>
                <br> <div class="alert alert-success <?=  $errors == 0 ? "show" : ""; ?>">Your message was sent successfully.</div>
            </div>

        <a href="/news">Back to News List</a>
    </div>
   
</div>