<?php
    include_once("config/url.php");
  

?>  

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>
    
  
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand"href="<?=$BASE_URL?>index.php">
        <img src="<?=$BASE_URL?>img/agenda.png" width="60px" height="50px"alt="Agenda"></img>
    </a>
    <div class="navbar-nav">
    <a class="nav-link active" id="home-link"href="<?=$BASE_URL?>index.php">Agenda</a>
    <a class="nav-link active" id="home-link"href="<?=$BASE_URL?>create.php">Adicionar Contato</a>

    </div>

    </nav>
</header>