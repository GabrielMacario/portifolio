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
<div id='linkedin-ico' class="badge-base LI-profile-badge" data-locale="pt_BR" data-size="<?= $dataSize ?>" data-theme="dark" data-type="<?= $dataType ?>" data-vanity="gabriel-macario-dev" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://br.linkedin.com/in/gabriel-macario-dev?trk=profile-badge"></a></div>
   <div class="name-add">
        <nav>
            <ul>
                <li><a href="<?= $BASE_URL ?>index.php">Home</a></li>
                <li><a href="<?= $BASE_URL ?>#projects">Projetos</a></li>
                <li><a href="<?= $BASE_URL ?>/contacts.php">Contatos</a></li>
            </ul>
        </nav>
    </div>
</header>
