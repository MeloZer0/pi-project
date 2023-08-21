<?php
session_start();
include('config.php');

if(isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $clearTextPassword = $_POST['password'];

    try {
        $user = $auth->getUserByEmail("$email");

        try{
            $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
            $idTokenString = $signInResult->idToken();

            try {
                $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                $uid = $signInResult->firebaseUserId();

                $_SESSION['verified_user_id'] = $uid;
                $_SESSION['idTokenString'] = $idTokenString;
                
                $_SESSION['status'] = "Entrou";
                header('Location: index.php');
                exit();

            } catch (Exception $e) {
                echo 'The token is invalid: '.$e->getMessage();
            }

        }
        catch(Exception $e){
            $_SESSION['status'] = "Palavra-passe incorreta";
            header('Location: login.php');
            exit();
        }


    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        // echo $e->getMessage();
        $_SESSION['status'] = "Email incorreto";
        header('Location: login.php');
        exit();
    }
}
else{
    $_SESSION['status'] = "Não autorizado";
    header('Location: login.php');
    exit();
}

?>