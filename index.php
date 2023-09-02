<?php
include('authentication.php');
include('inc/header.php');
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php
                if (isset($_SESSION['status'])) {
                    echo '<p class="alert alert-success mb-4 mt-3">' . $_SESSION['status'] . '</p>';
                    unset($_SESSION['status']);
                }
                ?>

            </div>
        </div>
    </div>

    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner img-fluid mx-auto p-1" style="width: 1200px;">
            <div class="carousel-item active">
                <img src="img/carousel/carousel2.jpg" class="d-block w-100 rounded" alt="L'armoire de Melo">
            </div>
            <div class="carousel-item">
                <img src="img/carousel/carousel1.jpg" class="d-block w-100 rounded" alt="L'armoire de Melo">
            </div>
            <div class="carousel-item">
                <img src="img/carousel/carousel3.jpg" class="d-block w-100 rounded" alt="L'armoire de Melo">
            </div>
        </div>
    </div>
</main>
<?php include('inc/footer.php') ?>