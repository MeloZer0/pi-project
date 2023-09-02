<?php
// Criar Objetos e Funções
include('actions.php');

$obj = new Actions();

if (isset($_POST['insert'])) {
    $ref = 'products/';
    $fields = [
        'name'  => $_POST['name'],
        'price' => $_POST['price'],
        'image' => basename($_FILES['image']['name']),
        'description' => $_POST['description'],
        'category' => $_POST['category']
    ];

    $obj->insert($ref, $fields);
}

if (isset($_GET['delete'])) {
    $key = $_GET['delete'];
    $ref = 'products';
    $obj->delete($ref, $key);
}


// if (isset($_POST['update'])) {
//     $key = $_POST['id'];
//     $ref = 'products';
//     $fields = [
//         'name'  => $_POST['newname'],
//         'price' => $_POST['newprice']
//     ];

//     $obj->update($ref, $key, $fields);
// }
?>