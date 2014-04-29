<?php

/* mooclineExoBundle:Create:index.html.twig */
class __TwigTemplate_dd64309277527d5e23bd0e0b1f1486e92c5f9fd3d5c58816610b2dcbfe6914d4 extends Twig_Template
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
        echo "<?php 
\tsession_start(); 
\trequire_once (\"auth.php\"); 
?>

<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Mooc'Line</title>

\t
\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "   
\t
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
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
            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">
              'Line</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><span>         </span></li>
            <li class=\"active\"><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Accueil</a></li>
            <li><a href=\"#\">Cours</a></li>
            <li><a href=\"#\">Institutions</a></li>
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
\t\t    <li><a href=\"login.php\">Se connecter</a></li>
\t\t    <li><a href=\"form.php\">S'inscrire</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

\t<div class=\"container\">
        <div class=\"row centered-form\">
\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t    \t\t<h2 class=\"panel-title\"> <strong>Creation Exercice</strong></small></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t    <a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createQuestion", array("type" => "QCM"));
        echo "\">CREER Exercice Type QCM</a><br/>
\t\t\t\t\t    <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createQuestion", array("type" => "QRF"));
        echo "\">CREER Exercice Type QRF</a><br/>
\t\t\t\t\t\t<!--a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createQuestion", array("type" => "P"));
        echo "\">CREER Exercice Type Programme</a><br/-->
\t\t\t\t\t\t<a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createQuestion", array("type" => "QL"));
        echo "\">CREER Exercice Type Libre</a><br/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
  <footer></footer>
</body>
</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Create:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 23,  134 => 108,  194 => 7,  191 => 6,  290 => 19,  287 => 18,  284 => 17,  274 => 8,  266 => 6,  245 => 178,  228 => 173,  155 => 115,  231 => 20,  211 => 8,  206 => 7,  185 => 22,  150 => 111,  251 => 18,  248 => 17,  242 => 9,  233 => 175,  212 => 18,  198 => 134,  195 => 133,  161 => 120,  153 => 113,  146 => 111,  127 => 101,  65 => 45,  114 => 141,  110 => 140,  180 => 122,  172 => 12,  160 => 13,  148 => 111,  23 => 1,  113 => 143,  152 => 85,  129 => 77,  237 => 176,  234 => 109,  226 => 99,  218 => 99,  215 => 19,  207 => 137,  202 => 90,  197 => 89,  192 => 24,  186 => 129,  174 => 78,  170 => 118,  167 => 11,  165 => 121,  126 => 144,  118 => 142,  97 => 21,  84 => 12,  76 => 10,  70 => 8,  53 => 91,  90 => 30,  77 => 28,  34 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 20,  285 => 89,  283 => 88,  278 => 9,  268 => 85,  264 => 84,  258 => 20,  252 => 80,  247 => 78,  241 => 177,  229 => 100,  220 => 70,  214 => 69,  177 => 127,  169 => 17,  140 => 55,  132 => 51,  128 => 102,  107 => 140,  61 => 13,  273 => 96,  269 => 7,  254 => 19,  243 => 88,  240 => 111,  238 => 8,  235 => 74,  230 => 6,  227 => 19,  224 => 18,  221 => 17,  219 => 20,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 116,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 31,  67 => 15,  63 => 15,  59 => 14,  38 => 17,  94 => 20,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 20,  87 => 29,  21 => 1,  26 => 6,  93 => 28,  88 => 13,  78 => 55,  46 => 7,  27 => 4,  44 => 26,  31 => 7,  28 => 6,  201 => 92,  196 => 38,  183 => 27,  171 => 119,  166 => 117,  163 => 117,  158 => 115,  156 => 12,  151 => 11,  142 => 110,  138 => 109,  136 => 56,  121 => 75,  117 => 74,  105 => 40,  91 => 27,  62 => 25,  49 => 15,  24 => 4,  25 => 1,  19 => 1,  79 => 11,  72 => 16,  69 => 49,  47 => 13,  40 => 22,  37 => 10,  22 => 3,  246 => 90,  157 => 118,  145 => 14,  139 => 108,  131 => 73,  123 => 47,  120 => 40,  115 => 43,  111 => 71,  108 => 36,  101 => 52,  98 => 36,  96 => 31,  83 => 40,  74 => 51,  66 => 15,  55 => 104,  52 => 19,  50 => 97,  43 => 8,  41 => 11,  35 => 5,  32 => 10,  29 => 5,  209 => 17,  203 => 9,  199 => 8,  193 => 73,  189 => 71,  187 => 84,  182 => 21,  176 => 13,  173 => 126,  168 => 118,  164 => 10,  162 => 116,  154 => 113,  149 => 84,  147 => 58,  144 => 110,  141 => 48,  133 => 78,  130 => 41,  125 => 76,  122 => 143,  116 => 41,  112 => 42,  109 => 31,  106 => 36,  103 => 136,  99 => 135,  95 => 35,  92 => 46,  86 => 28,  82 => 32,  80 => 29,  73 => 19,  64 => 113,  60 => 6,  57 => 23,  54 => 10,  51 => 26,  48 => 20,  45 => 20,  42 => 21,  39 => 15,  36 => 7,  33 => 6,  30 => 11,);
    }
}
