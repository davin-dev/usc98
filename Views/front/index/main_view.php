<div class="content">
<?php while($cat = $category->fetch_assoc()){	// start of while ?>


<div dir="rtl" lang="fa" class="category">
<?= $cat["title"]; ?>
<hr>

<?php $i = 0;
    foreach($news as $ns) {
    if ($i == 5) { break; }
    if($cat["id"] == $ns["news_cat"]){
    ?>
    
<a class="read" href="news/continued&id=<?php echo $ns["id"]; ?>"><?php echo $ns["headline"]; $i++ ?></a><br>
<?php }} // end of foreach ?>


</div>

<?php } // end of while ?>

    </div>