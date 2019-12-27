
<div dir="rtl" lang="fa" class="content">
   
    <div class="post">
        <div class="category"><h3><?= $news["category"]; ?></h3></div>
        <div class="title"><h1><?= $news['headline'] ?></h1></div>
        <div class="pic"><img src="<?= BASE_URL ?>public/img/<?= $news['picture'] ?>"/></div>
        <div class="note"><?= $news['excerpt']; ?></div>
        <div class="text"><?= $news['content']; ?></div><hr>
        <div class="count">view count : <?= $news['view_count']; ?></div>
        <a href="/news">Back to News List</a>
    </div>
   
</div>