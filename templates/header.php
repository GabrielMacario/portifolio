<?php

require_once('globals.php');


$screenWidth = 768;

$dataSize = ($screenWidth <= 768) ? 'medium' : 'large';

$dataType = ($screenWidth <= 768) ? 'VERTICAL' : 'HORIZONTAL';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Gabriel Macario</title>
    <link rel="icon" type="img/favicon.ico" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
        <div class="name-add">
            <nav>
                <ul>
                    <h1>Gabriel Macario</h1>
                    <li><a href="<?= $BASE_URL ?>index.php">Home</a></li>
                    <li><a href="<?= $BASE_URL ?>#projects">Projetos</a></li>
                    <li><a href="<?= $BASE_URL ?>/contacts.php">Contatos</a></li>
                </ul>
            </nav>
        </div>
</header>
