<!DOCTYPE html>
<html class="h-100">
<?php wp_head(); ?>
<head>
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="min-vh-100 d-flex flex-column justify-content-between">
<header>
    <nav class="navbar navbar-expand navbar-dark bg-dark ">
        <div class="container">
            <a class="navbar-brand" href="#">Test</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse bd-highlight" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="goods">Продукция</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
