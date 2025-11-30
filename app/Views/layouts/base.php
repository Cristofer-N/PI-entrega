<?php
// Descobre se a rota atual é a home
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$isHome = ($path === '/' || $path === '/index.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-" 
    />
    <!--inicial com modo responsivo-->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <!--chama o css para ajuste do layout-->
    <title>Green Ltda.</title>
    <!--titulo-->
    <link rel="icon" type="image/png" href="/img/gn.jpg" />
    <!-- ícone exibido na aba do navegador -->
  </head>
  <body>
    <div class="superinfo-bg">
      <div class="superinfo">
        <p>Seg / Sex 09:00 as 22:00</p>
        <a href="+55 14 9999-9999"> +55 14 9999-9999</a>
        <!--link clicavel para o telefone-->
        <p>Jardim verde, 1420, cidade verde-SP</p>
      </div>
    </div>
    <header class="menu-bg">
      <div class="menu" id="menu">
        <div class="menu-logo">
          <img src="/img/gn.jpg">
        </div>
        <nav class="menu-nav">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/sobre">Quem Somos</a></li>
            <!--navegação interna usando âncoras -->
            <li><a href="/lista-usuario">Lista de Usuários</a></li>
            <li><a href="/cadastro-usuario">Cadastro</a></li>
            <li><a href="/cadastro-produto">Cadastro de Produtos</a></li>
            <li><a href="/login">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- CONTEÚDO DAS VIEWS -->
    <?= $content ?>

    <footer class="footer">
      <!--definindo class para o rodapé da página-->
      <h2>Green Ltda.</h2>
      <p>
        Muito mais do que apenas plantar.
      </p>
    </footer>

    <div class="home">
        <a href="#">
            <img class="topo" src="/img/home.png"/>
        </a>
    </div>

  </body>
</html>
