<?php

    require_once '../model/user/UserDB.php';
    session_start();
if (isset($_POST['connexion'])){
        extract($_POST);
        $user = verifierConnexion($email,$password);
    
        if($user != NULL){
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['etat'] = $user['etat'];
    
            header("location:http://localhost/mes_cours/liagegda/suivistock/accueil.php");
        }else{
            session_unset();
            header("location:http://localhost/mes_cours/liagegda/suivistock/?erreur");
        }
    }
    
    if(isset($_GET['btnDecon'])){
        session_unset();
        header("location:/suivistock");
    }