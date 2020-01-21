
<div dir="rtl" lang="fa" class="content">
    <?php foreach($news as $ns) { ?>
    <div class="post">
        <div class="category"><h3><?= $ns["category"]; ?></h3></div>
        <div class="title"><h1><?= $ns['headline'] ?></h1></div>
        <div class="pic"><img id="pic" src="<?= BASE_URL ?>public/img/<?= $ns['picture'] ?>"/></div>
        <div class="note"><?= $ns['excerpt']; ?></div>
        <a class="continue" href="news/continued&id=<?php echo $ns["id"]; ?>">Continue Reading</a>
    </div>
    <br><hr>
    <?php } // end of foreach ?>
</div>