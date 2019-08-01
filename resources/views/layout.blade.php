<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste - Bitzen</title>
    <link rel="stylesheet"href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/17753f41e8.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar-lg navbar-dark bg-dark mb-1 ">
        <div>
          <li class="navbar-brand">
            <a class="nav-link text-light" href="/home" tabindex="1">Página inicial</a>
          </li>
          <li class="navbar-brand">
            <a class="nav-link text-light" href="/categoria" tabindex="2">Categorias</a>
          </li>
          <li class="navbar-brand">
            <a class="nav-link text-light" href="/produto" tabindex="3">Produtos</a>
          </li>
          <li class="navbar-brand">
            <a class="nav-link text-light" href="/sobre" tabindex="4">Sobre/About</a>
          </li>
        </div>
      </nav>
      <div class="container">
        <div class="jumbotron jumbotron-fluid bg-dark">
          <h1 class="text-center display-5 text-white"><strong>@yield('titulo')<strong></h1>
        </div>
      </div>
      <div class="container">
        @yield('conteudo')
      </div>
      <footer class="container mt-5">
      </footer>
    </body>

  </html>
