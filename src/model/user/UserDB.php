<?php
       $serveur = 'localhost';
       $nombd = 'suivistock';
       $user = 'root';
       $mdp = '';
       
       try {
           $base = new PDO('mysql:host='.$serveur.';dbname='.$nombd,$user,$mdp,
               [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                   PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
       } catch (PDOException $e) {
           echo "Erreur lors de la connexion à la BD ".$e->getMessage();
       }

    function verifierConnexion($email,$password){
        $req = "SELECT * FROM user WHERE email='$email' AND 
                password = '$password' ";
        global $base;
       return $base->query($req)->fetch();
    }
    