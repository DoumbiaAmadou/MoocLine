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
 
<!--    carousels -->
	
	    <div class=​"region-banner"    style=" margin-bottom:100px ">
	    
	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
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
	  </div>
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"  style= " color : black ">
	    <span class="glyphicon glyphicon-chevron-left"  </span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"  style= " color : black ">
	    <span class="glyphicon glyphicon-chevron-right" </span>
	  </a>
	</div>
    </div>
        
    
  
      <!-- Main component for a primary marketing message or call to action -->
        <!-- debut du contenu -->
    <center>
    <div class="col-md-2"></div>
    <div class="col-md-7">
      
     <div class="row">
      
      <div class="col-md-3 col-md-offset-1">
       <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/infographie.jpg"  style="height : 200px ; width : 200px">
          <h3>Infographie</h3>
          <p>Le graphisme de l'art.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        
         <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/mecaniquefluides.jpg"  style="height : 200px ; width : 200px">
          <h3>Mécanique des fluides</h3>
          <p> Suivez le mouvement.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>

      </div>
      <div class="col-md-3 col-md-offset-1">
        
          <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/chimie.jpg"  style="height : 200px ; width : 200px">
          <h3>Chimie de démain</h3>
          <p>La vie est faite de réaction.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
      </div>
    </div>

      <div class="row">
      
      <div class="col-md-3 col-md-offset-1">
       
           <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/livre.jpg"  style="height : 80px ; width : 80px">
          <h3>Infographie</h3>
          <p>le graphisme c'aussi de l'art.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        
          <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/livre.jpg"  style="height : 80px ; width : 80px">
          <h3>Mécanique des fluides</h3>
          <p> suivez le mouvement .</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>

      </div>
      <div class="col-md-3 col-md-offset-1">
        
         <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/livre.jpg"  style="height : 80px ; width : 80px">
          <h3>chimie de démain</h3>
          <p>la vie est faite de réaction.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>

      </div>
    </div>

     <div class="row">
      
      <div class="col-md-3 col-md-offset-1">
       
           <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/livre.jpg"  style="height : 80px ; width : 80px">
          <h3>Infographie</h3>
          <p>le graphisme c'aussi de l'art.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        
          <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/livre.jpg"  style="height : 80px ; width : 80px">
          <h3>Mécanique des fluides</h3>
          <p> suivez le mouvement avec .</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>

      </div>
      <div class="col-md-3 col-md-offset-1">
        
         <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/livre.jpg"  style="height : 80px ; width : 80px">
          <h3>chimie de démain</h3>
          <p>la vie est faite de réaction.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>

      </div>
    </div>
      
       <div class="row">
      
      <div class="col-md-3 col-md-offset-1">
       
           <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/livre.jpg"  style="height : 80px ; width : 80px">
          <h3>Infographie</h3>
          <p>le graphisme c'aussi de l'art.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        
          <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/livre.jpg"  style="height : 80px ; width : 80px">
          <h3>Mécanique des fluides</h3>
          <p> suivez le mouvement .</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>

      </div>
      <div class="col-md-3 col-md-offset-1">
        
          <img class="img-circle img-rounded" data-src="holder.js/alt=80x80" alt="80x80" src="img/livre.jpg"  style="height : 80px ; width : 80px">
          <h3>chimie de démain</h3>
          <p>la vie est faite de réaction.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>

      </div>
    </div>


    </div>
      <!-- fin du contenu -->
      
</div> <!-- /container -->
</center>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

</body>
</html>