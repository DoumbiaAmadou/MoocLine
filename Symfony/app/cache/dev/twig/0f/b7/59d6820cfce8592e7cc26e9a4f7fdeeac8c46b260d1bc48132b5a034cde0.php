<?php

/* mooclineCompteBundle:Modification:EnsVue.html.twig */
class __TwigTemplate_0fb759d6820cfce8592e7cc26e9a4f7fdeeac8c46b260d1bc48132b5a034cde0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Mooc'Line</title>

\t ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "  </head>
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
            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">
              'Line</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><span>         </span></li>
            <li class=\"\"><a href=\"index.php\">Accueil</a></li>
            <li><a href=\"#about\">Cours</a></li>
            <li><a href=\"contact.php\">Institutions</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Spécialité <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                 <li class=\"divider\"></li>
                <li class=\"dropdown-header\">Science</li>
                <li><a href=\"#\">Mathématique</a></li>
                <li><a href=\"#\">Physique</a></li>
                <li><a href=\"#\">Chimie</a></li>
                <li><a href=\"#\">Informatique</a></li>
                <li><a href=\"#\">Science et vie de la Terre</a></li>
                 <li class=\"divider\"></li>
                <li class=\"dropdown-header\">Langue</li>
                <li><a href=\"#\">Anglais</a></li>
                <li><a href=\"#\">Français</a></li>
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
            <li><a><span style=​\"margin:​3px -5px 0px 2px;​​\">​|​</span></a></li>
            <li><a href=\"index.html\">";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo "</a></li>
             <li class=\"active\">
              <a href=\"#\">Gérer mon compte</a>
            </li>
            <li>
              <a href=\"#\">Se deconnecter</a>
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>
 


<form class=\"form-horizontal\" method=\"POST\" action=\"\">
<fieldset>

<!-- Form Name -->
<legend style=\"\" align=\"center\">Mon compte</legend>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Professor name</label>  
  <div class=\"col-md-5\">
  <input id=\"username\" name=\"username\" type=\"username\" class=\"form-control input-md\" value=\"enseignant\">
  </div>
</div>

<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Email</label>  
  <div class=\"col-md-5\">
  <input id=\"email\" name=\"email\" type=\"email\" class=\"form-control input-md\" value=\"ens@informatique.univ-paris-diderot.fr\"> 
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"nom-prenom\">Nom &amp; Prenom</label>  
  <div class=\"col-md-5\">
  <input id=\"nom-prenom\" name=\"nom-prenom\" type=\"text\" value=\"Nguyen tam\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"tel\">Téléphone</label>  
  <div class=\"col-md-5\">
  <input id=\"tel\" name=\"tel\" type=\"text\" value=\"0102030405\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"type\">Vous êtes</label>
  <div class=\"col-md-5\">
    <label class=\"form-control input-md\">Professor</label>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"tel\">Date joint:</label>  
  <div class=\"col-md-5\">
  <label class=\"form-control input-md\">20/1/2014</label>  
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"tel\">Image utilisateur</label>  
  <div class=\"col-md-5\">
   <dd>
\t<input type=\"file\" name=\"picture\" id=\"picture\" /><br />
\t\t<span class=\"notice\" >
\t\t\tla taille maximum est de 150x200, 102400 bytes                    
\t\t</span>
   </dd>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"tel\">Old password</label>  
  <div class=\"col-md-5\">
    <input class=\"form-control input-md\" type=\"password\" name=\"pass\" value=\"\"> 
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"tel\">New password</label>  
  <div class=\"col-md-5\">
    <input class=\"form-control input-md\" type=\"password\" name=\"pass\" value=\"\"> 
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"tel\">Confirm new password</label>  
  <div class=\"col-md-5\">
    <input class=\"form-control input-md\" type=\"password\" name=\"pass\" value=\"\"> 
  </div>
</div>

<!-- valider -->
<div class=\"form-group\" align=\"right\"><br><br>
  <label class=\"col-md-4 control-label\" for=\"sujet\"></label>
  <div class=\"col-md-2\" align=\"left\">
    <a href=\"#\" class=\"btn btn-block btn-lg btn-primary\">Sauver</a>
  </div>
  <div class=\"col-md-2\" align=\"right\">
    <a href=\"#\" class=\"btn btn-block btn-lg btn-primary\">Annuler</a>
  </div>
</div>

</fieldset>
</form>


\t  <!-- Bootstrap core JavaScript
    ================================================== -->
  
  <footer></footer>
</body>
</html>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" >
\t";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "\t <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
     <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t ";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Modification:EnsVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 20,  259 => 19,  256 => 18,  253 => 17,  239 => 8,  172 => 20,  118 => 96,  184 => 9,  180 => 8,  174 => 6,  150 => 110,  134 => 100,  126 => 99,  292 => 85,  236 => 7,  216 => 21,  212 => 19,  206 => 17,  191 => 12,  188 => 10,  152 => 9,  148 => 8,  23 => 4,  233 => 6,  223 => 28,  215 => 82,  213 => 80,  210 => 79,  207 => 78,  202 => 84,  200 => 19,  197 => 18,  194 => 17,  186 => 70,  181 => 68,  165 => 18,  161 => 61,  153 => 56,  146 => 109,  90 => 14,  65 => 95,  124 => 39,  114 => 27,  77 => 10,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 60,  140 => 55,  132 => 51,  128 => 40,  107 => 82,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 9,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 20,  179 => 69,  159 => 112,  143 => 56,  135 => 53,  119 => 42,  102 => 25,  71 => 105,  67 => 104,  63 => 103,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 37,  87 => 115,  21 => 1,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 10,  31 => 4,  28 => 6,  201 => 92,  196 => 13,  183 => 82,  171 => 65,  166 => 71,  163 => 62,  158 => 67,  156 => 10,  151 => 63,  142 => 6,  138 => 157,  136 => 56,  121 => 35,  117 => 28,  105 => 40,  91 => 27,  62 => 32,  49 => 21,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 25,  47 => 11,  40 => 16,  37 => 17,  22 => 3,  246 => 90,  157 => 162,  145 => 7,  139 => 45,  131 => 52,  123 => 47,  120 => 38,  115 => 43,  111 => 32,  108 => 29,  101 => 32,  98 => 31,  96 => 117,  83 => 114,  74 => 14,  66 => 15,  55 => 36,  52 => 27,  50 => 10,  43 => 17,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 67,  173 => 65,  168 => 19,  164 => 59,  162 => 17,  154 => 58,  149 => 55,  147 => 58,  144 => 158,  141 => 48,  133 => 55,  130 => 99,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 81,  99 => 22,  95 => 28,  92 => 21,  86 => 13,  82 => 20,  80 => 11,  73 => 18,  64 => 42,  60 => 16,  57 => 15,  54 => 96,  51 => 75,  48 => 13,  45 => 22,  42 => 16,  39 => 22,  36 => 5,  33 => 6,  30 => 12,);
    }
}
