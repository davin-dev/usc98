<script>
    var slideIndex = 0;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "block";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    }

    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 6000); // Change image every 6 seconds
    }
</script>

<body onload="showSlides();">

<div class="content">


<br><br><br>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <?php foreach($news as $ns) { ?>
  <div class="mySlides fade">
    <img id="slider" src="<?= BASE_URL ?>public/img/<?php echo $ns["picture"]; ?>">
    <div dir="rtl" lang="fa" class="texty"> <a class="read" href="news/continued&id=<?php echo $ns["id"]; ?>" ><?php echo $ns["headline"];?></a></div>
    
  </div>
  
  <?php } // end of while ?>



  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- The dots/circles -->
<div style="text-align:center">
<?php $i = 1; foreach($news as $ns) {
  if( $i < 12 ){
  ?>
  <span class="dot" onclick="currentSlide(<?= $i ?>)"></span>
  <?php $i++;}} // end of while ?>
 
</div>

</div>




<?php while($cat = $category->fetch_assoc()){	// start of while ?>


<div dir="rtl" lang="fa" class="category">
<p><?= $cat["title"]; ?></p>
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