<?php

session_start(); 

/* A supprimer */
ini_set('display_errors', 'On'); 
error_reporting(E_ALL);
require_once "db.class.php";
require_once ("auth.php"); 

if(auth::islogged() ){
	header('Location: index.php') ; 
} else {

	if (!empty($_POST)){

		$pseudo = addslashes($_POST['pseudo']);
	    $password = sha1($_POST['password']);
	    $q = array('pseudo' => $pseudo, 'password' => $password);

	    try {
	   /* ------------------------------------- Connexion et Requêtes BDD --------------------------------------------- */
	    $DB = new DB();
	    $query = "SELECT pseudo, password from users where pseudo =:pseudo and password= :password";
	    $resultSql = $DB->query($query,$q);

	    if ($resultSql==null) {
	    	header('Location: http://localhost/moocline/login.php');	
	    }else {

	    	$_SESSION['Auth'] = array(
						'pseudo'=> $pseudo,
						'password'  => $password			
			); 
			header('Location: http://localhost/moocline/index.php');	
	    }
	    
	    
	    //echo "<h1> Connexion reussie !!! </h1>";
	           
	    }catch(PDOException $e) {
		   echo $e->getMessage();
	    }

	}
}