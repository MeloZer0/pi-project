<!-- NOTIFICAÇÕES -->
<?php
include("inc/header.php");

if (isset($_GET['msg'])) {
    $added = "Produdo Inserido!";
    $updated = "Produto Apagado!";

    $notify =  ($_GET['msg'] == "inserted") ? $added : (($_GET['msg'] == "deleted") ? $updated : '');

    echo '<p class="alert alert-success mb-4 mt-3">' . $notify . '</p>';
}

include("actions.php");

$obj = new Actions();
$results = $obj->select('products');
?>
<!-- FORMULÁRIO PARA EDITAR PRODUTO 
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div id="for-update" class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-white">
                    <div class="card-body p-5">
                        <div id="close-update">Voltar</div>
                        <form class="mb-3 mt-md-1" action="functions.php" method="post"> 
                            <h2 class="fw-bold mt-4 mb-4 text-uppercase ">Atualizar Produto</h2>

                            <input type="hidden" name="id" value= abrir php aqui// echo $id;?>">
                            <div class="mb-3">
                                <label class="form-label ">Nome</label>
                                <input type="text" class="form-control" name="newname" placeholder="Atualizar nome">
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">Preço</label>
                                <input type="text" class="form-control" name="newprice" placeholder="Atualizar preço">
                            </div>
                            <div class="mb-3 mt-4">
                                <input type="submit" class="form-control" name="update" value="Atualizar">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<!-- FORMULÁRIO PARA ADICIONAR PRODUTO -->
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-white">
                    <div class="card-body p-5">

                        <form class="mb-3 mt-md-1" action="functions.php" method="post" enctype="multipart/form-data">
                            <h2 class="fw-bold mb-4 text-uppercase ">Adicionar Produto</h2>

                            <div class="mb-3">
                                <label class="form-label ">Nome</label>
                                <input type="text" class="form-control" name="name" placeholder="Nome do produto" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Preço</label>
                                <input type="number" class="form-control" name="price" placeholder="Preço do produto" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Imagem</label>
                                <input type="file" class="form-control" name="image" placeholder="Imagem do produto" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Descrição</label>
                                <textarea name="description" class="form-control" id="description" rows="2"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Tipo do produto</label>
                                <select class="form-select" name="category" aria-label="category" required>
                                    <option value="clothes">Roupa</option>
                                    <option value="shoes">Sapato</option>
                                    <option value="fragrances">Fragrância</option>
                                </select>
                            </div>

                            <div class="mb-3 mt-4">
                                <input type="submit" class="form-control" name="insert" placeholder="Adicionar produto" required>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- CATEGORIAS -->
<!-- Roupas -->
<div id="menu" class="py-5">
    <div class="container px-4 px-lg-5 my-5">
    <h1 class="display-5 fw-bolder text-center">Roupas</h1> 
    <?php foreach ($results as $key => $data): if($data['category'] == "clothes") : ?>
        <div id=<?= $key ?> class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 mt-5">
                        <img class="card-img-top mb-5 mb-md-0" src=<?="img/".$data['image']?>>
                    </div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?= $data['name'] ?></h1>
                        <div class="fs-5 mb-5">
                            <span><?= number_format((float) $data['price'], 2, '.', '') ?> €</span>
                        </div>
                        <p class="lead"><?= $data['description'] ?></p>
                        <div class="d-flex">
                            <a class="text-secondary-emphasis" href="functions.php?delete=<?= $key ?>" class="text-primary fw-bold" style="text-decoration: none;">
                                <div data-id=<?= $key ?>>Apagar</div>
                            </a>
                        </div>
                    </div>
            <?php endif; endforeach; ?>
        </div>
    </div>
</div>

<!-- Sapatos -->
<div id="menu" class="py-5">
    <div class="container px-4 px-lg-5 my-5">
    <h1 class="display-5 fw-bolder text-center">Sapatos</h1> 
    <?php foreach ($results as $key => $data): if($data['category'] == "shoes") : ?>
        <div id=<?= $key ?> class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 mt-5">
                        <img class="card-img-top mb-5 mb-md-0" src=<?="img/".$data['image']?>>
                    </div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?= $data['name'] ?></h1>
                        <div class="fs-5 mb-5">
                            <span><?= number_format((float) $data['price'], 2, '.', '') ?> €</span>
                        </div>
                        <p class="lead"><?= $data['description'] ?></p>
                        <div class="d-flex">
                            <a class="text-secondary-emphasis" href="functions.php?delete=<?= $key ?>" class="text-primary fw-bold" style="text-decoration: none;">
                                <div data-id=<?= $key ?>>Apagar</div>
                            </a>
                        </div>
                    </div>
            <?php endif; endforeach; ?>
        </div>
    </div>
</div>

<!-- Fragrâncias -->
<div id="menu" class="py-5">
    <div class="container px-4 px-lg-5 my-5">
    <h1 class="display-5 fw-bolder text-center">Fragrâncias</h1> 
    <?php foreach ($results as $key => $data): if($data['category'] == "fragrances") : ?>
        <div id=<?= $key ?> class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 mt-5">
                        <img class="card-img-top mb-5 mb-md-0" src=<?="img/".$data['image']?>>
                    </div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?= $data['name'] ?></h1>
                        <div class="fs-5 mb-5">
                            <span><?= number_format((float) $data['price'], 2, '.', '') ?> €</span>
                        </div>
                        <p class="lead"><?= $data['description'] ?></p>
                        <div class="d-flex">
                            <a class="text-secondary-emphasis" href="functions.php?delete=<?= $key ?>" class="text-primary fw-bold" style="text-decoration: none;">
                                <div data-id=<?= $key ?>>Apagar</div>
                            </a>
                        </div>
                    </div>
            <?php endif; endforeach; ?>
        </div>
    </div>
</div>
<?php include("inc/footer.php"); ?>