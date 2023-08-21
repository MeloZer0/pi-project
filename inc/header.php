<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
  <title>L'armoire de Melo</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" alt="L'armoire de Melo" width="150" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Carrinho</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Produtos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Roupas</a></li>
              <li><a class="dropdown-item" href="#">Sapatos</a></li>
              <li><a class="dropdown-item" href="#">Fragâncias</a></li>
            </ul>
          </li>
        </ul>

        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item me-3">
            <a href="login.php">
              <img src="img/user-circle.svg" alt="utilizador">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Sair</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>