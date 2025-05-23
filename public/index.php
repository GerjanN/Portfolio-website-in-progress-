<?php

require_once '../config.php';
require_once '../libs/helper.php';

?>
<html lang="<?= $_ENV['LANG'] ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_ENV['TITLE'] ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="js/scroll.js" defer></script>
</head>

<body class="">

    <?php $page = getPage() ?>

    <?php require_once $page ?>

</body>

</html>