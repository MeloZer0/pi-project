<?php include('authentication.php');
include("inc/header.php");

include("actions.php");
$obj = new Actions();
$results = $obj->select('products');
?>


<main>
    <div id="menu" class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div>
                <h1 class="display-5 fw-bolder text-center">Categorias</h1>
                <ul class="nav justify-content-center pb-3 mb-3 mt-5 border-bottom">
                    <a class="text-secondary-emphasis fw-bold" href="#anchorclothes" style="text-decoration: none;">
                        <li class="nav-item" id="clothes">Roupas</li>
                    </a>
                    <a class="text-secondary-emphasis fw-bold" href="#anchorshoes" style="text-decoration: none;">
                        <li class="nav-item ms-3" id="shoes">Sapatos</li>
                    </a>
                    <a class="text-secondary-emphasis fw-bold" href="#anchorfragrances" style="text-decoration: none;">
                        <li class="nav-item ms-3" id="fragrances">Fragrâncias</li>
                    </a>
                </ul>
            </div>

            <div id="anchorclothes" class="products clothes border-bottom">
                <h1 class="display-5 fw-bolder text-center mt-5">Roupas</h1>
                <?php foreach ($results as $key => $data) : if ($data['category'] == "clothes") : ?>
                        <div id=<?= $key ?>>
                            <div class="row gx-4 gx-lg-5 align-items-center">
                                <div class="col-md-6 mt-5">
                                    <img class="card-img-top mb-5 mb-md-0" src=<?= "img/" . $data['image'] ?>>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="display-5 fw-bolder shop-item-name"><?= $data['name'] ?></h1>
                                    <div class="fs-5 mb-5">
                                        <span class="shop-item-price"><?= number_format((float) $data['price'], 2, '.', '') ?> €</span>
                                    </div>
                                    <p class="lead"><?= $data['description'] ?></p>
                                    <div class="d-flex">
                                        <button class="btn btn-primary btn-cart-add">Adicionar ao Carrinho</button>
                                    </div>
                                </div>
                        <?php endif;
                endforeach; ?>
                            </div>
                        </div>
            </div>


            <div id="anchorshoes" class="products shoes border-bottom">
                <h1 class="display-5 fw-bolder text-center mt-5">Sapatos</h1>
                <?php foreach ($results as $key => $data) : if ($data['category'] == "shoes") : ?>
                        <div id=<?= $key ?> class="row gx-4 gx-lg-5 align-items-center">
                            <div class="col-md-6 mt-5">
                                <img class="card-img-top mb-5 mb-md-0" src=<?= "img/" . $data['image'] ?>>
                            </div>
                            <div class="col-md-6">
                                <h1 class="display-5 fw-bolder shop-item-name"><?= $data['name'] ?></h1>
                                <div class="fs-5 mb-5">
                                    <span class="shop-item-price"><?= number_format((float) $data['price'], 2, '.', '') ?> €</span>
                                </div>
                                <p class="lead"><?= $data['description'] ?></p>
                                <div class="d-flex">
                                    <button class="btn btn-primary btn-cart-add">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                    <?php endif;
                endforeach; ?>
                        </div>
            </div>


            <div id="anchorfragrances" class="products fragrances border-bottom">
                <h1 class="display-5 fw-bolder text-center mt-5">Fragrâncias</h1>
                <?php foreach ($results as $key => $data) : if ($data['category'] == "fragrances") : ?>
                        <div id=<?= $key ?> class="row gx-4 gx-lg-5 align-items-center">
                            <div class="col-md-6 mt-5">
                                <img class="card-img-top mb-5 mb-md-0" src=<?= "img/" . $data['image'] ?>>
                            </div>
                            <div class="col-md-6">
                                <h1 class="display-5 fw-bolder shop-item-name"><?= $data['name'] ?></h1>
                                <div class="fs-5 mb-5">
                                    <span class="shop-item-price"><?= number_format((float) $data['price'], 2, '.', '') ?> €</span>
                                </div>
                                <p class="lead"><?= $data['description'] ?></p>
                                <div class="d-flex">
                                    <button class="btn btn-primary btn-cart-add">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                    <?php endif;
                endforeach; ?>
                        </div>
            </div>
        </div>
    </div>

    <!-- Carrinho -->
    <div id="anchorshoppingcart" class="cart-items mt-5 rounded-1 bg-light">
    <h1 class="display-5 fw-bolder text-center mb-3">Carrinho</h1>
    </div>
    <div class="cart-total">
        <strong class="cart-total-title">Total:</strong>
        <span class="cart-total-price">0€</span>
    </div>
    <button class="btn btn-primary btn-purchase" type="button">Comprar</button>
</main>
<?php include("inc/footer.php"); ?>