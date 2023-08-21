<?php
session_start();

if(isset($_SESSION['verified_user_id'])){
  $_SESSION['status'] = "Já tem a sessão iniciada";
  header('Location: index.php');
  exit();
}

include('inc/header.php');
?>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="card bg-white">
              <div class="card-body p-5 bg-light">
                <form class="mb-3 mt-md-4" action="code.php" method="POST">
                  <h2 class="fw-bold mb-4 text-uppercase ">L'armoire de Melo</h2>

                  <?php
                  if(isset($_SESSION['status'])){
                    echo '<p class="alert alert-success mb-4">'.$_SESSION['status'].'</p>';
                    unset($_SESSION['status']);
                  }
                  ?>

                  <p class=" mb-4">Registar</p>

                  <div class="mb-3">
                    <label class="form-label ">Nome</label>
                    <input class="form-control" name="user_name" placeholder="Maria">
                  </div>

                  <div class="mb-3">
                    <label class="form-label ">Email</label>
                    <input type="email" class="form-control" name="user_email" placeholder="exemplo@exemplo.com">
                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label ">Password</label>
                    <input type="password" class="form-control" name="user_password" placeholder="*******">
                  </div>
                  
                  <div class="d-grid">
                    <button class="btn btn-outline-dark" type="submit" name="register_btn">Registar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php include('inc/footer.php')?>