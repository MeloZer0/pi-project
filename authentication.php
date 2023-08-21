<?php 
session_start();
include('config.php');


if(isset($_SESSION['verified_user_id'])){
    $uid = $_SESSION['verified_user_id'];
    $idTokenString = $_SESSION['idTokenString'];

    try {
        $verifiedIdToken = $auth->verifyIdToken($idTokenString);
        // echo "Funcional";
    } catch (Exception $e) {
    //echo 'The token is invalid: '.$e->getMessage();
    $_SESSION['expiry_status'] = "Sessão expirada. Entre novamente";
    header('Location: logout.php');
    exit();

}
}
else{
    $_SESSION['status'] = "Entre para acessar esta página";
    header('Location: login.php');
    exit();
}
