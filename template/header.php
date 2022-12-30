<?php include_once "autoload.php"; ?>
<!DOCTYPE html>
<html lang="<?= WEBSITE_LANG ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= strtoupper(WEBSITE_TITLE) . ' | ' . strtoupper($webPage ?? "----"); ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <?= file_exists("../css/" . strtolower($webPage ?? "----") . ".css") ? "<link rel='stylesheet' href=../css/" . strtolower($webPage ?? "----") . ".css>" : ""; ?>
    <link rel="shortcut icon" href="../assets/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,0" />
</head>

<body>
    <div id="alert-info" class="alert-info">
        <br>
        <div class="info">
            <iconify-icon icon="ic:outline-info" width="48" height="48"></iconify-icon> 
            <span>Site en construction...</span>
        </div>
        <iconify-icon id="close-alert" class="close-alert" icon="iconoir:cancel" width="48" height="48"></iconify-icon>
    </div>
    <header>
        <menu class="desktop-menu hexas">

            <a href="/pages/home.php" title="Go at home">
                <div class="hexa">
                    <iconify-icon class="hexa-empty <?= strtolower($webPage) == strtolower('home') ? 'active' : '' ?>" icon="ph:hexagon-thin" width="100" height="100"></iconify-icon>
                    <iconify-icon class="menu-logo" icon="ph:house" style="color: white;" width="36" height="36"></iconify-icon>
                    <iconify-icon class="hexa-plain" icon="ph:hexagon-fill" width="70" height="70"></iconify-icon>
                </div>
            </a>

            <a href="/pages/websites.php" title="Go at websites list">
                <div class="hexa">
                    <iconify-icon class="hexa-empty <?= strtolower($webPage) == strtolower('websites') ? 'active' : '' ?>" icon="ph:hexagon-thin" width="100" height="100"></iconify-icon>
                    <iconify-icon class="menu-logo" icon="mdi:web-check" style="color: white;" width="36" height="36"></iconify-icon>
                    <iconify-icon class="hexa-plain" icon="ph:hexagon-fill" width="70" height="70"></iconify-icon>
                </div>
            </a>

            <a href="/pages/contact.php" title="Go at contact">
                <div class="hexa">
                    <iconify-icon class="hexa-empty <?= strtolower($webPage) == strtolower('contact') ? 'active' : '' ?>" icon="ph:hexagon-thin" width="100" height="100"></iconify-icon>
                    <iconify-icon class="menu-logo" icon="mdi:contact" style="color: white;" width="36" height="36"></iconify-icon>
                    <iconify-icon class="hexa-plain" icon="ph:hexagon-fill" width="70" height="70"></iconify-icon>
                </div>
            </a>

            <a href="#">
                <div class="hexa">
                    <iconify-icon class="hexa-empty <?= strtolower($webPage) == strtolower('null') ? 'active' : '' ?>" icon="ph:hexagon-thin" width="100" height="100"></iconify-icon>
                    <iconify-icon class="menu-logo" icon="ic:baseline-share" style="color: white;" width="36" height="36"></iconify-icon>
                    <iconify-icon class="hexa-plain" icon="ph:hexagon-fill" width="70" height="70"></iconify-icon>
                </div>
            </a>

        </menu>

        <menu class="responsive-menu close">

            <nav class="responsive-navbar">

                <a href="/pages/home.php" title="Go at home">
                    <iconify-icon class="menu-logo" icon="ph:house" style="color: <?= strtolower($webPage) == strtolower('home') ? 'lightgreen' : 'white' ?>;" width="32" height="32"></iconify-icon>
                </a>
                <a href="/pages/websites.php" title="Go at websites list">
                    <iconify-icon class="menu-logo" icon="mdi:web-check" style="color: <?= strtolower($webPage) == strtolower('websites') ? 'lightgreen' : 'white' ?>;" width="32" height="32"></iconify-icon>
                </a>

                <div class="btn-start-cancel">
                    <iconify-icon class="menu-cancel" icon="iconoir:cancel" style="color: white;" width="48" height="48"></iconify-icon>
                    <iconify-icon class="menu-start" icon="iwwa:option-horizontal" style="color: white;" width="48" height="48"></iconify-icon>
                </div>

                <a href="/pages/contact.php" title="Go at contact">
                    <iconify-icon class="menu-logo" icon="mdi:contact" style="color: <?= strtolower($webPage) == strtolower('contact') ? 'lightgreen' : 'white' ?>;" width="32" height="32"></iconify-icon>
                </a>

                <a href="/pages" title="">
                    <iconify-icon class="menu-logo" icon="ic:baseline-share" style="color: <?= strtolower($webPage) == strtolower('null') ? 'lightgreen' : 'white' ?>;" width="32" height="32"></iconify-icon>
                </a>
            </nav>

        </menu>

    </header>

    <body>
        <h1 class="pageTitle"><?= strtoupper($webPage); ?></h1>