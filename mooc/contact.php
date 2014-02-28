<?php 
	session_start(); 
	require_once ("auth.php"); 
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mooc'Line</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
     <script src="js/bootstrap.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 <body>

  
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
          <a class="navbar-brand" href="#">
            <img src="img/livre.jpg" alt="Home" href="#" style="heigh:20px ; width : 40px">
              'Line</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><span>         </span></li>
            <li class="active"><a href="index.php">Accueil</a></li>
            <li><a href="#about">Cours</a></li>
            <li><a href="contact.php">Institutions</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Spécialité <b class="caret"></b></a>
              <ul class="dropdown-menu">
                 <li class="divider"></li>
                <li class="dropdown-header">Science</li>
                <li><a href="#">Mathématique</a></li>
                <li><a href="#">Physique</a></li>
                <li><a href="#">Chimie</a></li>
                <li><a href="#">Informatique</a></li>
                <li><a href="#">Science et vie de la Terre</a></li>
                 <li class="divider"></li>
                <li class="dropdown-header">Langue</li>
                <li><a href="#">Anglais</a></li>
                <li><a href="#">Français</a></li>
                <li><a href="#">Espagnol</a></li>
                 <li><a href="#">Chinois</a></li>
                  <li><a href="#">Arabe</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Economie</li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Communication</a></li>
                 <li><a href="#">Management</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li>
         	<form class="navbar-form navbar-left" role="search">
        		<div class="form-group">
        		  <input type="text" class="form-control" placeholder="Search">
        		</div>
    		   <!-- <button type="submit" class="btn btn-default">Submit</button  -->
		      </form>
  		 </li>
            <li><a><span style=​"margin:​3px -5px 0px 2px;​​">​|​</span></a></li>
            <?php 
		      if(auth::islogged() ){
		        echo '<li><a href="#">'.$_SESSION['Auth']['pseudo'].'</a></li>';
		        echo '<li><a href="deconnexion.php">Se Déconnecter</a></li>';
		      }
		      else {
		        echo '<li><a href="login.php">Se connecter</a></li>
		              <li><a href="form.php">S\'inscrire</a></li>';
		      }
		  ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
 


<form class="form-horizontal" method="POST" action="">
<fieldset>

<!-- Form Name -->
<legend style="">Nous Conctater</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="email" placeholder="veuillez entrer votre Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom-prenom">Nom &amp; Prenom</label>  
  <div class="col-md-5">
  <input id="nom-prenom" name="nom-prenom" type="text" placeholder="veuillez entrer votre nom et prénom" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tel">Téléphone</label>  
  <div class="col-md-5">
  <input id="tel" name="tel" type="text" placeholder="veuillez entrer votre téléphone" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="type">Vous êtes</label>
  <div class="col-md-5">
    <select id="type" name="type" class="form-control">
      <option value="">- Non -</option>
      <option value="">Étudiant</option>
      <option value="">Professeur</option>
      <option value="">Journaliste</option>
      <option value="">Université</option>
      <option value="">Autres</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sujet">Sujet</label>
  <div class="col-md-5">
    <select id="sujet" name="sujet" class="form-control">
      <option value="">- Select -</option>
      <option value="">Inscription et Activation</option>
      <option value=""></option>
      <option value=""></option>
      <option value=""></option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="autres">Autres</label>  
  <div class="col-md-5">
  <input id="autres" name="autres" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="taille">Taille Organisation</label>  
  <div class="col-md-5">
  <input id="taille" name="taille" type="text" placeholder="nombre approximatif accepté" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="message">Message</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="message" name="message">Informations supplémantaires</textarea>
  </div>
</div>

<!-- valider -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sujet"></label>
  <div class="col-md-5">
    <!-- <a href="#" class="btn btn-lg btn-primary">Valider<span class="glyphicon glyphicon-chevron-right"></span></a> -->
    <a href="#" class="btn btn-block btn-lg btn-primary">Valider<span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>
</div>

</fieldset>
</form>


	  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
  <footer></footer>
</body>
</html>