<?php
    require_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TEMPLATE DO PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    
    <title>Blog Codar</title>
</head>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo"><img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar"></a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>/contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>
<body>
    

