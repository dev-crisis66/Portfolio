<?php include_once "tools/autoload.php"; ?>
<!DOCTYPE html>
<html lang="<?= WEBSITE_LANG ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= WEBSITE_TITLE ?> | <?= WEBSITE_PAGE; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <?= file_exists("scripts/" . WEBSITE_PAGE) ? "<link  rel='stylesheet' href=css/" . WEBSITE_PAGE . ".css>" : ""; ?>
    <link rel="shortcut icon" href="assets/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,0" />
</head>

<body>
    <header>
        <iconify-icon icon="ic:outline-sensor-occupied" width="48" height="48"></iconify-icon>
    </header>