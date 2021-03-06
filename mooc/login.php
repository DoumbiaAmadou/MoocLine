
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
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>plateforme de cours en ligne</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/fstyle.css">
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
               Cours en Ligne </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><span>         </span></li>
            <li class="active"><a href="index.php">Accueil</a></li>
            <li><a href="#about">Cours</a></li>
            <li><a href="contact.php">Universités</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Spécialité <b class="caret"></b></a>
			  <table border="0" width="100%" height="3%" align=center  cellspacing="1">
					<tr>
						<td>
							<CENTER>


					<IMG SRC="img/slide-4.JPG" BORDER="0" ALIGN="MIDDLE" WIDTH="800" HEIGHT="200">
						</CENTER><BR>
							</td>
									</tr>
			</table> 
              <ul class="dropdown-menu">
                 <li class="divider"></li>
                <li class="dropdown-header">Science</li>
                <li><a href="#">Mathématique</a></li>
                <li><a href="#">Physique</a></li>
                <li><a href="#">Informatique</a></li>
                <li><a href="#">SVT</a></li>
                 <li class="divider"></li>
                <li class="dropdown-header">Langue</li>
                <li><a href="#">Litérature</a></li>
                <li><a href="#">Lingustique</a></li>
                <li><a href="#">Anglais</a></li>
                <li><a href="#">Espagnol</a></li>
                <li class="divider"></li>btn btn-info btn-block
                <li class="dropdown-header">Economie</li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Communication</a></li>
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
		        echo "<li>".$_SESSION['Auth']['pseudo']."</li>";
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
    
    
      <!--<div class="container">
  <div class="col-md-4"></div>
  <div class="col-md-4">
      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <input type="password" class="form-control" placeholder="Password" required="">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      </div>
      <div class="col-md-3"></div>
    </div>
  -->

    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> Authentification <strong>MOOC</strong>'Line</h3>
            </div>
            <div class="panel-body">
              <form id="form" role="form" method="POST" action="traitement_login.php">
                <div class="form-group">
                  <input type="text" name="pseudo" id="pseudo" class="form-control input-sm" placeholder="Pseudo">
                </div>

                 <div class="form-group">
                  <input type="password" name= "password" id="password" class="form-control" placeholder="Mot de Passe" required="">
                </div>

                 <div class="form-group">
                  <label class="checkbox"> <input type="checkbox" value="remember-me"> Garder ma session active </label>
                </div>     

                <input type="submit" value="Connexion" class="btn btn-info btn-block">
                
                <!-- <a href="#" class="btn btn-info btn-block">valider <span class="glyphicon glyphicon-ok"></span></a> -->
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

</body>
</html>