<?php

/* mooclineCompteBundle:TableauDeBord:tableauBordEtudiant.html.twig */
class __TwigTemplate_9e23d72c4397eab879091570d1fda41cf213c8d149395a413254051f39c73c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "  
  </head>

  <body>
    
    ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 91
        echo "    
    <section>
      <article>
        <h3><img   class=\"ico_categorie\" />BIENVENUE SUR ESPACE ETUDIANT</h3>
        <div id=\"gestionc\">
          <h4>Gestion de cours</h4>
          <b>
            <a href=\"#\">M'inscrire à un cours</a><br/>
            <a href=\"#\">Me désinscrire à un cours</a>
          </b>
        </div>
        <div id=\"notif\">
          <h4>Notifications</h4>
          <b>
            <a href=\"#\"><font color=\"\">Devoirs corrigés</font></a><br/>
            <a href=\"#\"><font color=\"\">Devoirs en attente</font></a><br/>
          </b>
        </div>
        <div id=\"cours\">
          <h4>Mes cours</h4>  
          <b>
            <a href=\"#\">Cours de Réseaux et Télécommunication</a><br/>
            <a href=\"#\">Cours de Bases de données</a><br/>
            <a href=\"#\">Cours d' Interfaces graphiques</a><br/>
            <a href=\"#\">Cours de Java</a><br/>
          </b>
        </div>
        <div id=\"devoirs\">
          <h4>Devoirs</h4>
          <br/>
          <b>Devoirs commencés</b>
          <br/>
          <ul>
            <li><a href=\"#\">Devoir Mindstorm</a></li>
            <li><a href=\"#\">Devoir Dazibao</a></li>
          </ul>
          <b>Nouveaux Devoirs</b><br/>
          <ul>
            <li><a href=\"#\">Devoir Socket</a></li>
            <li><a href=\"#\">Devoir Génie Logiciel</a></li>
          </ul>
      </article>
      <aside>
        <h4><a href=\"#\"> GAYLLORD YAPO </a></h4>
        <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bulle.png"), "html", null, true);
        echo "\" alt=\"\" id=\"fleche_bulle\" />
        <p id=\"photo_gayllord\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/student2.png"), "html", null, true);
        echo "\" alt=\"Photo de Gayllord\" /></p>
        <a href=\"#\">Email: etudiant.univ@gmail.com</a>
        <p></p>
        <p>
          <a href=\"https://www.facebook.com/\"><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\" /></a>
          <a href=\"https://www.twitter.com/\"><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\" /></a>
          <a href=\"https://vimeo.com/\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/vimeo.png"), "html", null, true);
        echo "\" alt=\"Vimeo\" /></a>
          <a href=\"https://www.flickr.com/\"><img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flickr.png"), "html", null, true);
        echo "\" alt=\"Flickr\" /></a>
          <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rss.png"), "html", null, true);
        echo "\" alt=\"RSS\" />
        </p>
      </aside>
    </section>
            
    <footer>
      <center><p>Mooc'Line © 2014 and Team Moocline Université Paris Diderot-P7.</p></center>
    </footer>
  
  </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Mooc'Line";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap3/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"  type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
      <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap3/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      ";
        // line 20
        echo "    ";
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        // line 27
        echo "      <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
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
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">
                'Line</a>
          </div>
          <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
              <li class=\"active\"><span>         </span></li>
              <li class=\"active\"><a href=\"#\">Accueil</a></li>
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
            <form class=\"navbar-form navbar-left\" role=\"search\">
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
              </div>
             <!-- <button type=\"submit\" class=\"btn btn-default\">Submit</button  -->
            </form>
         </li>
              <li><a><span style=​\"margin:​3px -5px 0px 2px;​​\">​|​</span></a></li>
          <li><a href=\"#\">Se connecter</a></li>
          <li><a href=\"#\">S'inscrire</a></li>
          <li><a href=\"#\">Se deconnecter</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      ";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:TableauDeBord:tableauBordEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 141,  110 => 140,  180 => 26,  172 => 18,  160 => 13,  148 => 10,  23 => 1,  113 => 143,  152 => 85,  129 => 77,  237 => 110,  234 => 109,  226 => 99,  218 => 99,  215 => 98,  207 => 92,  202 => 90,  197 => 89,  192 => 87,  186 => 84,  174 => 78,  170 => 77,  167 => 76,  165 => 75,  126 => 144,  118 => 142,  97 => 21,  84 => 12,  76 => 10,  70 => 8,  53 => 91,  90 => 30,  77 => 28,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 100,  220 => 70,  214 => 69,  177 => 65,  169 => 17,  140 => 55,  132 => 51,  128 => 49,  107 => 140,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 111,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 102,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 31,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 20,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 20,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 13,  78 => 21,  46 => 7,  27 => 4,  44 => 21,  31 => 7,  28 => 4,  201 => 92,  196 => 38,  183 => 27,  171 => 61,  166 => 16,  163 => 62,  158 => 67,  156 => 12,  151 => 11,  142 => 8,  138 => 54,  136 => 56,  121 => 75,  117 => 74,  105 => 40,  91 => 27,  62 => 25,  49 => 15,  24 => 4,  25 => 1,  19 => 2,  79 => 11,  72 => 16,  69 => 25,  47 => 13,  40 => 8,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 14,  139 => 45,  131 => 73,  123 => 47,  120 => 40,  115 => 43,  111 => 71,  108 => 36,  101 => 52,  98 => 36,  96 => 31,  83 => 40,  74 => 14,  66 => 15,  55 => 104,  52 => 19,  50 => 97,  43 => 8,  41 => 11,  35 => 5,  32 => 8,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 83,  176 => 20,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 78,  130 => 41,  125 => 76,  122 => 143,  116 => 41,  112 => 42,  109 => 31,  106 => 36,  103 => 136,  99 => 135,  95 => 35,  92 => 46,  86 => 28,  82 => 32,  80 => 29,  73 => 19,  64 => 113,  60 => 6,  57 => 23,  54 => 10,  51 => 26,  48 => 20,  45 => 20,  42 => 16,  39 => 15,  36 => 7,  33 => 6,  30 => 7,);
    }
}
