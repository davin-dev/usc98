
<div dir="rtl" lang="fa" class="content">
 <?php if($data != NULL){ ?>
    <div class="post">
        <div class="category"><h3><?= $news["category"]; ?></h3></div>
        <div class="title"><h1><?= $news['headline'] ?></h1></div>
        <div class="pic"><img id="pic" src="<?= BASE_URL ?>public/img/<?= $news['picture'] ?>"/></div>
        <div class="note"><?= $news['excerpt']; ?></div>
        <a class="continue" href="<?= BASE_URL ?>news/continued&id=<?php echo $news["id"]; ?>">Continue Reading</a>
    </div>
 <?php }else{ ?>
    <div class="title">نتیجه ای برای جستجوی شما یافت نشد.</div>
    <br>
    <?php } ?>
 
</div>