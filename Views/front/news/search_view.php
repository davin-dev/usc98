
<div dir="rtl" lang="fa" class="content">
 
    <div class="post">
        <div class="category"><h3><?= $news["category"]; ?></h3></div>
        <div class="title"><h1><?= $news['headline'] ?></h1></div>
        <div class="pic"><img src="<?= BASE_URL ?>public/img/<?= $news['picture'] ?>"/></div>
        <div class="note"><?= $news['excerpt']; ?></div>
        <a class="continue" href="<?= BASE_URL ?>news/continued&id=<?php echo $news["id"]; ?>">Continue Reading</a>
    </div>
    <br><hr>
 
</div>