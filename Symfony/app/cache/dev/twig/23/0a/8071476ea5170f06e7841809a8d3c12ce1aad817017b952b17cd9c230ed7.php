<?php

/* mooclineCompteBundle:TableauDeBord:tableauBordEtudiant.html.twig */
class __TwigTemplate_230a8071476ea5170f06e7841809a8d3c12ce1aad817017b952b17cd9c230ed7 extends Twig_Template
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
        return array (  160 => 13,  129 => 73,  113 => 143,  104 => 72,  100 => 45,  76 => 33,  232 => 20,  228 => 19,  225 => 18,  205 => 7,  202 => 6,  155 => 120,  65 => 43,  263 => 20,  259 => 19,  256 => 18,  253 => 17,  239 => 8,  172 => 18,  165 => 18,  184 => 9,  180 => 26,  150 => 88,  292 => 85,  223 => 28,  216 => 10,  200 => 19,  188 => 10,  152 => 85,  23 => 1,  148 => 10,  118 => 142,  84 => 29,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 17,  190 => 77,  185 => 85,  178 => 71,  174 => 6,  137 => 61,  126 => 144,  70 => 24,  58 => 14,  257 => 105,  251 => 103,  236 => 7,  233 => 6,  222 => 17,  212 => 9,  207 => 78,  197 => 18,  161 => 53,  146 => 16,  134 => 81,  127 => 28,  110 => 140,  81 => 35,  53 => 91,  34 => 7,  114 => 141,  195 => 81,  191 => 12,  186 => 69,  175 => 78,  170 => 71,  153 => 88,  124 => 54,  90 => 38,  77 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 17,  140 => 55,  132 => 59,  128 => 50,  107 => 140,  61 => 12,  273 => 96,  269 => 94,  254 => 105,  243 => 9,  240 => 86,  238 => 98,  235 => 74,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 8,  204 => 20,  179 => 67,  159 => 94,  143 => 15,  135 => 61,  119 => 47,  102 => 50,  71 => 105,  67 => 104,  63 => 103,  59 => 14,  38 => 8,  94 => 34,  89 => 43,  85 => 31,  75 => 29,  68 => 23,  56 => 19,  87 => 115,  21 => 1,  26 => 12,  93 => 28,  88 => 31,  78 => 26,  46 => 7,  27 => 5,  44 => 21,  31 => 4,  28 => 4,  201 => 82,  196 => 38,  183 => 27,  171 => 77,  166 => 16,  163 => 62,  158 => 70,  156 => 12,  151 => 11,  142 => 8,  138 => 157,  136 => 68,  121 => 75,  117 => 74,  105 => 51,  91 => 27,  62 => 21,  49 => 15,  24 => 7,  25 => 1,  19 => 2,  79 => 18,  72 => 8,  69 => 29,  47 => 19,  40 => 10,  37 => 10,  22 => 3,  246 => 92,  157 => 162,  145 => 14,  139 => 62,  131 => 52,  123 => 37,  120 => 53,  115 => 51,  111 => 61,  108 => 73,  101 => 32,  98 => 43,  96 => 117,  83 => 114,  74 => 19,  66 => 23,  55 => 36,  52 => 21,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 8,  29 => 5,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 65,  168 => 19,  164 => 59,  162 => 17,  154 => 69,  149 => 67,  147 => 58,  144 => 158,  141 => 62,  133 => 78,  130 => 80,  125 => 76,  122 => 143,  116 => 41,  112 => 42,  109 => 34,  106 => 48,  103 => 136,  99 => 135,  95 => 28,  92 => 24,  86 => 37,  82 => 28,  80 => 31,  73 => 30,  64 => 27,  60 => 20,  57 => 19,  54 => 19,  51 => 26,  48 => 13,  45 => 22,  42 => 16,  39 => 15,  36 => 12,  33 => 6,  30 => 2,);
    }
}
