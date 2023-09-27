<?php
session_start();

if (isset($_GET["mail_input"]) && isset($_GET["passwd_input"])) {
    // Récupération des valeurs de login
    $login_mail = $_GET["mail_input"];
    $login_passwd = $_GET["passwd_input"];

    require_once '../models/Models.php';    

    // Appel de la classe AdminAction pour vérifier l'authentification
    $admin = new AdminAuth($login_mail, $login_passwd);
    if ($admin->auth()) {
        // L'authentification a réussi, définir la variable "loggedin" à true
        $_SESSION['loggedin'] = true;
        $_SESSION['user_mail'] = $login_mail;
        header('Location: ../admin/admin.php');
        exit();
    } else {
        require_once 'loginLoad.php';
        loginLoad("Authentification Error!");
        
    }
} else {
    // Rediriger vers la page du formulaire (ou faire quelque chose d'autre si nécessaire)
    require_once 'loginLoad.php';
    loginLoad("");
    exit();
}
?>