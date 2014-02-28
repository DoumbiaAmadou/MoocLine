<?php

/* A supprimer */
ini_set('display_errors', 'On'); 
error_reporting(E_ALL);
require_once "db.class.php";


if (!empty($_POST)){


    $pseudo = addslashes($_POST['pseudo']);
    $nom = addslashes($_POST['nom']);
    $prenom = addslashes($_POST['prenom']);
    $email = addslashes($_POST['email']);
    $password = sha1($_POST['password']);
    $token = sha1(uniqid(mt_rand(), true));
    $niveau = addslashes($_POST['niveau']);
    $profil = 'etudiant' ;
    

    $q = array('pseudo' => $pseudo, 'nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'password' => $password, 'token' => $token,
         'niveau' => $niveau, 'profil' => $profil);
    $sql = 'INSERT INTO users (pseudo, nom, prenom, email, password, token, niveau, profil) 
        values (:pseudo, :nom, :prenom, :email, :password, :token, :niveau, :profil)';

    try {
   /* ------------------------------------- Connexion et Requêtes BDD --------------------------------------------- */
    $DB = new DB();
    //$query = "SELECT * from users where pseudo =".$pseudo;

    $DB->query($sql,$q);

    header('Location: http://localhost/moocline/login.html');
    //echo "<h1> Connexion reussie !!! </h1>";
           
    }catch(PDOException $e) {
	   echo $e->getMessage();
    }
} // Fin If (!empty(...))
?>
