<?php 
	session_start(); 
	require_once ("auth.php"); 

	if(auth::islogged() ){
		header('Location: index.php') ; 
	}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription Mooc'Line</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/fstyle.css">
     <script src="js/bootstrap.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./lib/jquery.validate/dist/jquery.validate.js"></script>
    <script type="text/javascript" src="./lib/jquery.validate/dist/additional-methods.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/js.js"></script>

    <noscript>
        Le formulaire a besoin de JavaScript activé pour être rempli !!
        <style>form { display:none; }</style>
    </noscript>

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
            <li><a href="login.html">Se connecter</a></li>
             <li>
              <a href="#">S'inscrire</a>
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>
 
<!--    carousels 
	
	    <div class=​"region-banner"    style=" margin-bottom:100px ">
	    
	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators 
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>
	  -->
	  <!-- Wrapper for slides 
	  <div class="carousel-inner" style=" margin-left : 300px ">
	    <div class="item active">
	      <img src="img/architecture.jpg" alt="base de données ">
	      <div class="carousel-caption">
	       sture de données 
	      </div>
	    </div>
	    <div class="item ">
	      <img src="img/bda.jpg" alt="base de données ">
	      <div class="carousel-caption">
	       sture de données 
	      </div>
	    </div>
		 <div class="item">
	      <img src="img/bda.jpg" alt="base de données ">
	      <div class="carousel-caption">
	       sture de données 
	      </div>
	    </div>
	  </div> -->
	  <!-- Controls 
	  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"  style= " color : black ">
	    <span class="glyphicon glyphicon-chevron-left"  </span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"  style= " color : black ">
	    <span class="glyphicon glyphicon-chevron-right" </span>
	  </a>
	</div>
    </div> -->
        
    
  
      
    <!-- ---------------------------------------- debut du formulaire --------------------------------------------------------- -->


    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Inscription à <strong>MOOC</strong>'Line <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form id="form" role="form" method="POST" action="traitement_inscription.php" onsubmit="return verifForm(this)">
			    			
			    			<div class="form-group">
			    				<input type="text" name="pseudo" id="pseudo" class="form-control input-sm required" placeholder="Pseudo" onblur="verifPseudo(this)" required>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                			<input type="text" name="prenom" id="prenom" class="form-control input-sm" placeholder="Prénom" onblur="verifPseudo(this)" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="nom" id="nom" class="form-control input-sm" placeholder="Nom" onblur="verifPseudo(this)" required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" onblur="verifMail(this)" required>
			    			</div>


			    			<div class="row">
			    				<div class="col-xs-3 col-sm-3 col-md-3">
			    					<div class="form-group">
			                			<label for="niveau">Niveau</label>
			    					</div>
			    				</div>
			    				<div class="col-xs-9 col-sm-9 col-md-9">
			    					<div class="form-group">
			    						<select id="niveau" name="niveau" class="form-control">
										    <option value="dc">Doctarant(e)</option>
										    <option value="mst">Master / Ingénieur</option>
										    <option value="lc">Licence</option>
										    <option value="ly">Lycée</option>
										    <option value="clg">Collège</option>
										    <option value="prm">Primaire</option>
			    						</select>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" onblur="verifPass(this)" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" onblur="verifPass(this)" required>
			    					</div>
			    				</div>
			    			</div>

			    			<input type="submit" value="s'incrire" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

    
    <!-- ----------------------------------------- fin du formulaire ---------------------------------------------------------- -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  

</body>
</html>