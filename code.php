<?php 
session_start();
include('config.php');

if(isset($_POST['register_btn'])){
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'password' => $password,
        'displayName' => $name,
    ];
    
    $createdUser = $auth->createUser($userProperties);

    if($createdUser){
        $_SESSION['status'] = "Utilizador criado com sucesso!";
        header('Location: register.php');
        exit();
    }
    else{
        $_SESSION['status'] = "Erro na criação do utilizador...";
        header('Location: register.php');
        exit();
    }
}

?>