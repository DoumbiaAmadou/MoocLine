<?php

/* mooclineCompteBundle:Dashboard:EtuDashboard_radierCours.html.twig */
class __TwigTemplate_158ddf5fe6490a87056eee2f6f648de8da8d240209343058c80c8b4e8791978e extends Twig_Template
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
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">
              'Line</a>
        </div>\t\t\t\t\t\t <!-- \$user->email -->
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><span>         </span></li>
            <li class=\"\"><a href=\"";
        // line 42
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
            <li class=\"active\"><a href=\"#\">Nguyen Tam</a></li>
             <li>
              <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vue_Etudiant", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\">Gérer mon compte</a>
            </li>
            <li>
              <a href=\"#\">Se deconnecter</a>
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>
 


            <div id=\"menu\" style=\"height:500px;width:500px;float:left;\">
            <h1>Gérer ma liste de cours</h1><br>
                <ul  >
                  <li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Etudiant_listCours", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" class=\"userCommandsItem\">Liste de mes cours</a>
                  </li><li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Etudiant_radierCours", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" class=\"userCommandsItem\">Me radier d'un cours</a>
                  </li><li><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Etudiant_platformCours", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" class=\"userCommandsItem\">Tous les cours de la plateforme</a>
                  </li>
                </ul>
            </div>
            <div id=\"content\" style=\"height:200px;width:400px;float:left;\"> <!-- background-color:#EEEEEE; -->
                <h1>Liste de mes cours</h1><br>
            
          
            <ul>
            ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCours"]) ? $context["listCours"] : $this->getContext($context, "listCours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 110
            echo "              <li ><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom"), "html", null, true);
            echo " <i class=\"icon-trash\"></i></a></li> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            </ul>
            </div>
            <!-- \$Id: course_tree.tpl.php 13997 2012-02-06 10:53:25Z zefredz \$ -->
<br />

\t  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
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
        return "mooclineCompteBundle:Dashboard:EtuDashboard_radierCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 9,  180 => 8,  174 => 6,  150 => 110,  134 => 100,  126 => 98,  292 => 85,  236 => 39,  216 => 21,  212 => 19,  206 => 17,  191 => 12,  188 => 10,  152 => 160,  148 => 159,  23 => 1,  233 => 93,  223 => 28,  215 => 82,  213 => 80,  210 => 79,  207 => 78,  202 => 84,  200 => 19,  197 => 18,  194 => 17,  186 => 70,  181 => 68,  165 => 62,  161 => 61,  153 => 56,  146 => 109,  90 => 14,  65 => 95,  124 => 39,  114 => 27,  77 => 10,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 60,  140 => 55,  132 => 51,  128 => 40,  107 => 82,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 20,  179 => 69,  159 => 112,  143 => 56,  135 => 53,  119 => 42,  102 => 25,  71 => 105,  67 => 104,  63 => 103,  59 => 14,  38 => 11,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 86,  87 => 115,  21 => 1,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 10,  31 => 4,  28 => 6,  201 => 92,  196 => 13,  183 => 82,  171 => 65,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 157,  136 => 56,  121 => 35,  117 => 28,  105 => 40,  91 => 27,  62 => 32,  49 => 21,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 25,  47 => 11,  40 => 16,  37 => 17,  22 => 3,  246 => 90,  157 => 162,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 38,  115 => 43,  111 => 32,  108 => 29,  101 => 32,  98 => 31,  96 => 117,  83 => 114,  74 => 14,  66 => 15,  55 => 36,  52 => 27,  50 => 10,  43 => 17,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 67,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 55,  147 => 58,  144 => 158,  141 => 48,  133 => 55,  130 => 99,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 32,  99 => 22,  95 => 28,  92 => 21,  86 => 13,  82 => 20,  80 => 11,  73 => 18,  64 => 42,  60 => 16,  57 => 15,  54 => 96,  51 => 75,  48 => 13,  45 => 22,  42 => 16,  39 => 22,  36 => 5,  33 => 9,  30 => 12,);
    }
}
