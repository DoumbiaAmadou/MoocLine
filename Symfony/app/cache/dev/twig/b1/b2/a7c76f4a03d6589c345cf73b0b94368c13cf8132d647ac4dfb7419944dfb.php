<?php

/* mooclineExoBundle:Exo:ajouter.html.twig */
class __TwigTemplate_b1b2a7c76f4a03d6589c345cf73b0b94368c13cf8132d647ac4dfb7419944dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
   
\t<link rel=\"stylesheet\" href=\"style.css\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Inscription Mooc'Line</title>

    <!-- Bootstrap -->
   
   ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fstyle.css\">
     <script src=\"js/bootstrap.min.js\"></script>
     <script src=\"js/bootstrap.min.js\"></script>
     
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"./js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"./js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"./lib/jquery.validate/dist/jquery.validate.js\"></script>
    <script type=\"text/javascript\" src=\"./lib/jquery.validate/dist/additional-methods.js\"></script>
    <script type=\"text/javascript\" src=\"./js/script.js\"></script>
    <script type=\"text/javascript\" src=\"./js/js.js\"></script>

    <noscript>
        Le formulaire a besoin de JavaScript activÃ© pour Ãªtre rempli !!
        <style>form { display:none; }</style>
    </noscript>

  </head>
 <body>

  
    <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        
          <a class=\"navbar-brand\" href=\"#\">
            <img src=\"img/livre.jpg\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">
              'Line</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><span>         </span></li>
            <li class=\"active\"><a href=\"index.php\">Accueil</a></li>
            <li><a href=\"#about\">Cours</a></li>
            <li><a href=\"contact.php\">Institutions</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">SpÃ©cialitÃ© <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                 <li class=\"divider\"></li>
                <li class=\"dropdown-header\">Science</li>
                <li><a href=\"#\">MathÃ©matique</a></li>
                <li><a href=\"#\">Physique</a></li>
                <li><a href=\"#\">Chimie</a></li>
                <li><a href=\"#\">Informatique</a></li>
                <li><a href=\"#\">Science et vie de la Terre</a></li>
                <li class=\"divider\"></li>
                <li class=\"dropdown-header\">Langue</li>
                <li><a href=\"#\">Anglais</a></li>
                <li><a href=\"#\">FranÃ§ais</a></li>
                <li><a href=\"#\">Espagnol</a></li>
                <li><a href=\"#\">Chinois</a></li>
                <li><a href=\"#\">Arabe</a></li>
                <li class=\"divider\"></li>
                <li class=\"dropdown-header\">Economie</li>
                <li><a href=\"#\">Marketing</a></li>
                <li><a href=\"#\">Communication</a></li>
                 <li><a href=\"#\">Management</a></li>
              </ul>
            </li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
          <li>
         \t<form class=\"navbar-form navbar-left\" role=\"search\">
        \t\t<div class=\"form-group\">
        \t\t  <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        \t\t</div>
    \t\t   <!-- <button type=\"submit\" class=\"btn btn-default\">Submit</button  -->
\t\t      </form>
  \t\t </li>
            <li><a><span style=â€‹\"margin:â€‹3px -5px 0px 2px;â€‹â€‹\">â€‹|â€‹</span></a></li>
            <li><a href=\"login.php\">Se connecter</a></li>
             <li>
              <a href=\"#\">S'inscrire</a>
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>
 
<!--    carousels 
\t
\t    <div class=â€‹\"region-banner\"    style=\" margin-bottom:100px \">
\t    
\t    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t  <!-- Indicators 
\t  <ol class=\"carousel-indicators\">
\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t  </ol>
\t  -->
\t  <!-- Wrapper for slides 
\t  <div class=\"carousel-inner\" style=\" margin-left : 300px \">
\t    <div class=\"item active\">
\t      <img src=\"img/architecture.jpg\" alt=\"base de donnÃ©es \">
\t      <div class=\"carousel-caption\">
\t       sture de donnÃ©es 
\t      </div>
\t    </div>
\t    <div class=\"item \">
\t      <img src=\"img/bda.jpg\" alt=\"base de donnÃ©es \">
\t      <div class=\"carousel-caption\">
\t       sture de donnÃ©es 
\t      </div>
\t    </div>
\t\t <div class=\"item\">
\t      <img src=\"img/bda.jpg\" alt=\"base de donnÃ©es \">
\t      <div class=\"carousel-caption\">
\t       sture de donnÃ©es 
\t      </div>
\t    </div>
\t  </div> -->
\t  <!-- Controls 
\t  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\"  style= \" color : black \">
\t    <span class=\"glyphicon glyphicon-chevron-left\"  </span>
\t  </a>
\t  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\"  style= \" color : black \">
\t    <span class=\"glyphicon glyphicon-chevron-right\" </span>
\t  </a>
\t</div>
    </div> -->
        
    
  
      
    <!-- ---------------------------------------- debut du formulaire --------------------------------------------------------- -->

\t\t<h3> Formulaire de Creation d'exercice</h3>
\t\t
\t\t<div class=\"well\">
\t\t  <form method=\"post\" ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t    ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t    <input type=\"submit\" class=\"btn btn-primary\" />
\t\t  </form>
\t\t 


\t</div>
    <!-- ----------------------------------------- fin du formulaire ---------------------------------------------------------- -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  

</body>
<footer>

 <script type=\"text/javascript\" src=\"./js/jquery.js\"></script>
";
        // line 183
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

";
        // line 186
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
  var \$container = \$('div#mooc_exobundle_exercice_QCM');
   var \$container1 = \$('div#mooc_exobundle_exercice_QCM_0_BadReponse');
    var \$container2 = \$('div#mooc_exobundle_exercice_QCM_0_BadReponse');

  // On ajoute un lien pour ajouter une nouvelle 
  var \$lienAjout = \$('<a href=\"#\" id=\"ajout_categorie\" class=\"btn\"> ajout de QCM</a>');
  \$container.append(\$lienAjout);
  \$container1.append(\$lienAjout);
  \$container2.append(\$lienAjout);

  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
  \$lienAjout.click(function(e) {
    ajouterCategorie(\$container , 0);
    ajouterCategorie(\$container1,1);
    ajouterCategorie(\$container2, 2 );
    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });

  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = \$container.find(':input').length;

  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
  if (index == 0) {
    ajouterCategorie(\$container ,0);
    ajouterCategorie(\$container1 ,1);
    ajouterCategorie(\$container2 ,2);
  } else {
    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
    \$container.children('div').each(function() {
      ajouterLienSuppression(\$(this));
    });
  }

  // La fonction qui ajoute un formulaire Categorie
  function ajouterCategorie(\$container , \$i ) {
  var  partie =\" \" ; 
  if(\$i == 0 )  partie = 'QCM n°' ; 
  else if(\$i == 1) partie = ' Bonne Reponse ';
  else partie = partie = 'Mauvaise reponse'  ;
  
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte \"__name__label__\" qu'il contient par le label du champ
    // - le texte \"__name__\" qu'il contient par le numéro du champ
    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, partie+ (index+1))
                                                        .replace(/__name__/g, index) 
                    );
 \t
 \t
    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    ajouterLienSuppression(\$prototype);

    // On ajoute le prototype modifié à la fin de la balise <div>
    \$container.append(\$prototype);

    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }

  // La fonction qui ajoute un lien de suppression d'une catégorie
  function ajouterLienSuppression(\$prototype) {
    // Création du lien
    \$lienSuppression = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

    // Ajout du lien
    \$prototype.append(\$lienSuppression);

    // Ajout du listener sur le clic du lien
    \$lienSuppression.click(function(e) {
      \$prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
});
</script>
<footer>
</html>";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" />
\t
\t";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Exo:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 13,  297 => 12,  213 => 186,  279 => 23,  276 => 22,  267 => 13,  263 => 12,  255 => 10,  234 => 184,  152 => 117,  137 => 111,  192 => 24,  188 => 23,  167 => 11,  34 => 15,  194 => 7,  191 => 6,  170 => 118,  290 => 19,  287 => 18,  284 => 17,  274 => 8,  266 => 6,  245 => 178,  237 => 176,  228 => 173,  172 => 12,  155 => 115,  231 => 20,  215 => 19,  211 => 8,  206 => 7,  185 => 22,  180 => 122,  150 => 111,  251 => 18,  248 => 17,  242 => 9,  233 => 175,  212 => 18,  207 => 183,  198 => 134,  195 => 133,  186 => 163,  165 => 120,  161 => 120,  153 => 113,  127 => 101,  65 => 45,  160 => 92,  148 => 116,  146 => 111,  134 => 108,  129 => 83,  124 => 81,  20 => 1,  77 => 24,  70 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 14,  298 => 91,  294 => 20,  285 => 89,  283 => 24,  278 => 9,  268 => 85,  264 => 84,  258 => 11,  252 => 80,  247 => 78,  241 => 177,  229 => 73,  220 => 70,  214 => 69,  177 => 127,  169 => 60,  140 => 55,  132 => 51,  128 => 102,  107 => 36,  61 => 22,  273 => 21,  269 => 7,  254 => 19,  243 => 88,  240 => 86,  238 => 8,  235 => 74,  230 => 183,  227 => 19,  224 => 18,  221 => 17,  219 => 20,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 116,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 23,  63 => 15,  59 => 14,  38 => 17,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 35,  56 => 20,  87 => 25,  21 => 1,  26 => 6,  93 => 28,  88 => 6,  78 => 55,  46 => 7,  27 => 4,  44 => 26,  31 => 5,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 119,  166 => 117,  163 => 117,  158 => 115,  156 => 118,  151 => 63,  142 => 113,  138 => 109,  136 => 56,  121 => 46,  117 => 80,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 27,  69 => 49,  47 => 18,  40 => 22,  37 => 10,  22 => 2,  246 => 90,  157 => 118,  145 => 46,  139 => 108,  131 => 52,  123 => 47,  120 => 40,  115 => 79,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 51,  66 => 15,  55 => 15,  52 => 19,  50 => 10,  43 => 8,  41 => 7,  35 => 17,  32 => 10,  29 => 5,  209 => 17,  203 => 9,  199 => 8,  193 => 73,  189 => 71,  187 => 84,  182 => 162,  176 => 13,  173 => 126,  168 => 118,  164 => 10,  162 => 116,  154 => 113,  149 => 51,  147 => 58,  144 => 110,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 25,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 21,  39 => 9,  36 => 7,  33 => 12,  30 => 11,);
    }
}
