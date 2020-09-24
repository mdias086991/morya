<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/article.css">
    <script src="https://kit.fontawesome.com/385c7d7d19.js" crossorigin="anonymous"></script>
    <title><?php bloginfo('title')?></title>
</head>
<body>


<header>
  <div class="menu">
  <div class="logo">
    <img src="<?php bloginfo('template_url')?>/assets/images/imap.png" alt="Eleições Imap">
  </div>
    <nav class="navigation_menu">
    <i id="menu_hbm" class="fas fa-bars fa-2x" onclick="side_hidden()"></i>
      <ul class="list_nav">
          <li><a class="link_menu" href="/">Home</a></li>
          <li><a class="link_menu" href="/calendario">Calendário</a></li>
          <li><a class="link_menu" href="/conteudo">Conteúdo</a></li>
          <li><a class="link_menu" href="/contato">Contato</a></li>
          <li><a class="link_menu" target="_blank" href="http://imap.org.br">Quem faz</a></li>
      </ul>
    </nav>

    <div id="sideBar" class="sideBar">
    <i id="menu_hbm" class="fas fa-times fa-2x" onclick="side_hidden()"></i>
    <div class="iten_menu">
      <ul class="itens_menu">
          <li><a class="link_menu" href="/">Home</a></li>
          <li><a class="link_menu" href="/calendario">Calendário</a></li>
          <li><a class="link_menu" href="/conteudo">Conteúdo</a></li>
          <li><a class="link_menu" href="/contato">Contato</a></li>
          <li><a class="link_menu" target="_blank" href="http://imap.org.br">Quem faz</a></li>
        </ul>
    </div>
    </div>
  </div>
</header>


    
