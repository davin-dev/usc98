<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/front/css/style.css">
</head>

<body>
    <div class="site-header">
        <h1>
            <a class="site-title" href="<?= BASE_URL ?>">News Website</a>
        </h1>
    </div>

    <div class="navbar">
        <ul>
            <a href="/">Home</a>
            <a href="/news">News</a>
            
                <div class="dropdown">
                    <button class="dropbtn">Categories
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <?php while($cat = $category->fetch_assoc()){	 ?>
                        <a href="<?= BASE_URL ?>news/category?id=<?php echo $cat["id"]; ?>">    <?= $cat["title"]; ?>     </a>
                        <?php } ?>
                    </div>
                </div>
            
            <a href="/about">About us</a>
            <a href="/contact">Contact us</a>
            <a href="/admin">Admin Panel</a>
            <li><form method="POST" > <p> Search <input type="text" name="q"> <input type="submit" formaction="/news/search" name="search" value="🔍" ></p></li>
        </ul>
    </div>
