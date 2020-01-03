<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/front/css/style.css">
</head>

<body>
    <div class="site-header">
        <h1>
            <a class="title" href="<?= BASE_URL ?>">News Website</a>
        </h1>
    </div>

    <div class="navigation">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/news">News</a></li>
            <li><a href="/about">About us</a></li>
            <li><a href="/contact">Contact us</a></li>
            <li><a href="/admin">Admin Panel</a></li>
            <li><form method="POST" action="/news/search">Search <input type="text" name="q"> <input type="submit" value="🔍" /></li>
        </ul>
    </div>
