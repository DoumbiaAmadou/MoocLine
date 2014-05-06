<?php

/* mooclineCompteBundle:TableauDeBord:tableauBordEnseignant.html.twig */
class __TwigTemplate_50e396ac76ac08fee26d94a3c3375736f248ac9a040f5f6d4a97c431dfec246c extends Twig_Template
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
                <article>
                    <h3><img   class=\"ico_categorie\" />BIENVENUE SUR ESPACE PROFESSEUR</h3>
          
    <div id=\"Gestion des cours\">
        <h4>Gestion de cours</h4>
               
        <b>
        <a href=\"#\">Création de cours</a><br/>
        <a href=\"#\">Création des transparents</a><br/>
        
                
        </b>
    </div>

    <div id=\"Mes cours dispensés\">
        <h4>Mes cours dispensés</h4>
               
        <b>
        <a href=\"#\">Cours de Réseaux et Télécommunication</a><br/>
        <a href=\"#\">Cours de Bases de données</a><br/>
        <a href=\"#\">Cours d' Interfaces graphiques</a><br/>
        <a href=\"#\">Cours de Java</a><br/>
        <a href=\"#\">Cours d' Infographie</a><br/>
        <a href=\"#\">Cours de Génie Logiciel Avancé</a><br/>        
        </b>
    </div>

    <div id=\"notif\">
        <h4>Notifications</h4>
        <b>
        
        <a href=\"#\"><font color=\"\">Devoirs corrigés</font></a><br/>
        </b>
    </div>
    
    <div id=\"devoirs\">
        <h4>Devoirs</h4>
        <b>
        <a href=\"#\">Création de devoirs</a><br/>
        
        
        
        <br/>
        
                </article>
                <aside>
                    <h4><a href=\"#\"> STEFANO ZACK </a></h4>
                    <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bulle.png"), "html", null, true);
        echo "\" alt=\"\" id=\"fleche_bulle\" />
                    <p id=\"photo_gayllord\"><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/student.png"), "html", null, true);
        echo "\" alt=\"Photo de Gayllord\" /></p>
                    <a href=\"#\">Email:professeur.univ@gmail.com</a>
                    <p></p>
                    <p><a href=\"https://www.facebook.com/\"><img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\" /></a><a href=\"https://www.twitter.com/\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\" /></a><a href=\"https://vimeo.com/\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/vimeo.png"), "html", null, true);
        echo "\" alt=\"Vimeo\" /></a><a href=\"https://www.flickr.com/\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flickr.png"), "html", null, true);
        echo "\" alt=\"Flickr\" /></a><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rss.png"), "html", null, true);
        echo "\" alt=\"RSS\" /></p></p>
                </aside>
            </section>

            <br/>
            <br/>
                 <br/>
                      <br/>

            
            <footer>
        <center><p>Mooc'Line © 2014 and Team Moocline Université Paris Diderot-P7.</p></center>
      </footer>
        </div>
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
        return "mooclineCompteBundle:TableauDeBord:tableauBordEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 26,  160 => 13,  174 => 82,  170 => 81,  165 => 79,  148 => 10,  97 => 47,  152 => 85,  129 => 77,  153 => 73,  150 => 87,  146 => 16,  134 => 81,  126 => 79,  118 => 77,  113 => 143,  104 => 72,  100 => 71,  53 => 91,  34 => 6,  23 => 1,  256 => 116,  253 => 115,  250 => 114,  236 => 103,  233 => 102,  225 => 107,  223 => 101,  194 => 88,  188 => 85,  184 => 89,  172 => 18,  167 => 76,  127 => 39,  110 => 31,  65 => 118,  124 => 36,  114 => 55,  77 => 10,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 65,  169 => 17,  140 => 66,  132 => 51,  128 => 49,  107 => 140,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 103,  240 => 86,  238 => 105,  235 => 74,  230 => 101,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 99,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 15,  135 => 53,  119 => 57,  102 => 49,  71 => 31,  67 => 16,  63 => 20,  59 => 14,  38 => 8,  94 => 28,  89 => 42,  85 => 41,  75 => 17,  68 => 33,  56 => 20,  87 => 21,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 21,  46 => 23,  27 => 5,  44 => 21,  31 => 4,  28 => 4,  201 => 92,  196 => 38,  183 => 27,  171 => 61,  166 => 16,  163 => 62,  158 => 67,  156 => 12,  151 => 11,  142 => 8,  138 => 54,  136 => 65,  121 => 75,  117 => 74,  105 => 40,  91 => 27,  62 => 25,  49 => 15,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 34,  69 => 23,  47 => 13,  40 => 9,  37 => 10,  22 => 3,  246 => 104,  157 => 74,  145 => 14,  139 => 45,  131 => 63,  123 => 58,  120 => 40,  115 => 43,  111 => 71,  108 => 73,  101 => 52,  98 => 43,  96 => 24,  83 => 31,  74 => 25,  66 => 15,  55 => 26,  52 => 19,  50 => 10,  43 => 10,  41 => 20,  35 => 8,  32 => 8,  29 => 5,  209 => 93,  203 => 78,  199 => 90,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 20,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 78,  130 => 80,  125 => 76,  122 => 67,  116 => 41,  112 => 42,  109 => 51,  106 => 50,  103 => 139,  99 => 68,  95 => 20,  92 => 46,  86 => 28,  82 => 20,  80 => 39,  73 => 18,  64 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 26,  48 => 12,  45 => 11,  42 => 16,  39 => 15,  36 => 7,  33 => 6,  30 => 2,);
    }
}