<?php

  if (!isset($_SESSION)) session_start();

  if (!isset($_SESSION['id'])) {
      session_destroy();
      header("Location: index.html"); exit;
  }

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donar</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/perfil.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,0,200" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/218777f784.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar">
        <div id="logo">
            <a href="index.html"><img src="./img/logo.svg" alt="Logo Donar"></a>
        </div>
        <ul id="navbar_menu" class="nav-menu">
            <li><a href="./pages/projetos.html">Projetos</a></li>
            <li><a href="apoiadores.HTML">Apoiadores</a></li>
            <li><a href="quemsomos.html">Quem Somos</a></li>
            <li><a href="fac.html">FAQ</a></li>
            <a href="login.html"><li id="login"><span class="material-symbols-outlined">
                login
                </span>Login</li></a>

        </ul>
        <span id="hamburger_menu" class="material-symbols-outlined">menu</span>
    </nav>

    <main>
        <aside class="menu">
            <div class="user">
                <img src="./img/avatar.jpg" alt="Foto de perfil" id="avatar">
                <h1>Olá, <?php echo $_SESSION['nome'] ?></h1>
                <p><?php echo $_SESSION['email'] ?></p>
            </div>
            <ul>
                <li><i class="fa-solid fa-user"></i></i><p> Conta</p></li>
                <li><i class="fa-solid fa-hand-holding-dollar"></i><p>Doações</p></li>
                <li><i class="fa-regular fa-clock"></i><p> Histórico</p></li>
                <li><i class="fa-solid fa-gear"></i><p> Configurações</p></li>
            </ul>
        </aside>
        <div class="info">
            <section>
                <h1>Finanças</h1>
            </section>
        </div>
    </main>
    <footer>
        <div class="footer-menu">
            <ul>
                <p class="footer-menu-titulo">donar</p>
                <li>Causas</li>
                <li>Quem Somos</li>
                <li>Área do Cliente</li>
                <li>Atendimento ao Doador</li>
                <li>Termos de Uso</li>
                <li>Política de Privacidadde</li>
            </ul>
            <ul>
                <p class="footer-menu-titulo">causas</p>
                <li>Crianças e Adolescentes</li>
                <li>Defesa aos Animais</li>
                <li>Apoio para pessoas com câncer</li>
                <li>Preservação do Meio Ambiente</li>
                <li>Direitos Humanos</li>
                <li>Desenvolvimento Comunitário</li>
                <li>Cultura e Arte</li>
            </ul>
            <div class="vl"></div>
            <ul>
                <p class="footer-menu-titulo">acessibilidade</p>
                <li id="tamanho_texto">Tamanho do Texto <span class="material-symbols-outlined">text_increase</span><span class="material-symbols-outlined">text_decrease</span></li>
                <li>Modo Noturno</li>
                <li>Alto Contraste</li>
                <li>Weblibras</li>
                <li>Deficiência Visual</li>
            </ul>
        </div>
        <hr>
        <div class="footer-info">
            <p>Todos os direitos reservados ©</p>
            <div id="footer_redes_sociais">
                <i id="rede_social_logo" class="fa-brands fa-facebook-f fa-xl" ></i>
                <i id="rede_social_logo" class="fa-brands fa-twitter fa-xl"></i>
                <i id="rede_social_logo" class="fa-brands fa-instagram fa-xl"></i>
            </div>
        </div>
    </footer>   
</body>
</html>