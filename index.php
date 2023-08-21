<?php 
include('authentication.php');
include('inc/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php
            if(isset($_SESSION['status'])){
                echo '<p class="alert alert-success mb-4">'.$_SESSION['status'].'</p>';
                unset($_SESSION['status']);
                }
            ?>

            <h2>Home Page</h2>
        </div>
    </div>
</div>

<?php include('inc/footer.php')?>