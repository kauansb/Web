<?php
        include_once("../config/url.php");
        include_once("../config/processamento.php");
 ?>

    <html lang="pt_BR">
        <head>
            <meta charset="UTF-8">
            <title>Agenda de Contatos</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="<?= $BASE_URL?>/../css/style.css">
        </head>
        <body>
 
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="<?= $BASE_URL?>/index.php">
                    <img src="<?= $BASE_URL?>/../img/logo.jpeg" alt="Agenda">
                </a>
                <div>
                    <div class="navbar-nav">
                    <a class="nav-link active" href="<?= $BASE_URL?>/index.php">Agenda</a>
                    <a class="nav-link active" href="<?= $BASE_URL?>/create.php">Adicionar Contato</a>
                    </div>
                </div>
            </nav>
        </header>
        