<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/front/css/style.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/front/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/front/css/util.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/Linearicons-Free-v1.0.0/icon-font.min.css">
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
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            
            <a href="/about">About us</a>
            <a href="/contact">Contact us</a>
            <a href="/admin">Admin Panel</a>
            <li><form method="POST" > <p> Search <input type="text" name="q"> <input type="submit" formaction="/news/search" name="search" value="🔍" ></p></li>
        </ul>
    </div>
