<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
  <title>L'armoire de Melo</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6C757D;">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/logowhite.png" alt="L'armoire de Melo" width="150" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active text-light" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="about.php">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="products.php#anchorshoppingcart">Carrinho</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">Produtos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="products.php#anchorclothes">Roupas</a></li>
              <li><a class="dropdown-item" href="products.php#anchorshoes">Sapatos</a></li>
              <li><a class="dropdown-item" href="products.php#anchorfragrances">Fragâncias</a></li>
            </ul>
          </li>
        </ul>

        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item me-3">
            <a class="nav-link text-light" href="login.php">Entrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="logout.php">Sair</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link text-light" href="admin.php">Inserir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>