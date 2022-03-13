<!DOCTYPE html>
<html lang="en">
<link rel="apple-touch-icon" sizes="76x76" href="./public/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./public/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./public/img/favicon/favicon-16x16.png">
<link rel="manifest" href="./public/img/favicon/site.webmanifest">
<meta name="msapplication-TileColor" content="#00aba9">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Leon Weiss</title>
    <?php
    $cssPath = './public/css/';
    $cssFiles = scandir($cssPath);
    $cssFiles = array_diff(scandir($cssPath), array('.', '..'));
    foreach ($cssFiles as $file) {
    ?>
        <link rel='stylesheet' type='text/css' href='<?php echo $cssPath . $file;  ?>'>
    <?php
    }

    $jsPath = './public/js/';
    $jsFiles = scandir($jsPath);
    $jsFiles = array_diff(scandir($jsPath), array('.', '..'));
    foreach ($jsFiles as $file) {
    ?>
        <script src="<?php echo $jsPath . $file;  ?>"></script>
    <?php } ?>
    <script src="https://kit.fontawesome.com/d7bdf347ca.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand hover-underline-animation" href="#home" id="logo">Leon Weiss</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link hover-underline-animation" href="#home"><?php echo 'Home'; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-underline-animation" href="#projects"><?php echo 'Projects'; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-underline-animation" href="#skills"><?php echo 'Skills'; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-underline-animation" href="#contact"><?php echo 'Contact'; ?></a>
                </li>
            </ul>
        </div>
    </nav>