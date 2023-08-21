<?php
session_start();

unset($_SESSION['verified_user_id']);
unset($_SESSION['idTokenString']);

if(isset($_SESSION['expiry_status'])){
    $_SESSION['status'] = "Sessão expirada";
}
else{
    $_SESSION['status'] = "Saiu";
}
$_SESSION['status'] = "Saiu";

header('Location: login.php');
exit();

?>