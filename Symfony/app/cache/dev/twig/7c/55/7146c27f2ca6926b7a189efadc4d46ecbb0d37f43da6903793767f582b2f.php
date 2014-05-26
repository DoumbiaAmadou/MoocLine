<?php

/* mooclineCompteBundle:Dashboard:EtuDashboard_listCours.html.twig */
class __TwigTemplate_7c557146c27f2ca6926b7a189efadc4d46ecbb0d37f43da6903793767f582b2f extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "  
  </head>

  <body>
    
    ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "
                <article>
                    <h3><img align='center'  class=\"ico_categorie\" />BIENVENUE SUR ESPACE ETUDIANT</h3>
                    <div id=\"gestionc\">
       <div id=\"menu\" style=\"height:500px;width:500px;float:left;\">
            <h3>Gérer ma liste de cours</h3><br>
                <ul  >
                  <li><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Etudiant_listCours", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" class=\"userCommandsItem\">Liste de mes cours</a>
                  </li><li><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Etudiant_radierCours", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" class=\"userCommandsItem\">Me radier d'un cours</a>
                  </li><li><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Etudiant_platformCours", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" class=\"userCommandsItem\">Tous les cours de la plateforme</a>
                  </li>
                </ul>
            </div>
            <div id=\"content\" style=\"height:200px;width:400px;float:left;\"> <!-- background-color:#EEEEEE; -->
                <h3>Liste de mes cours</h3><br>
            
          
            <ul>
            ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCours"]) ? $context["listCours"] : $this->getContext($context, "listCours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 115
            echo "              <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom"), "html", null, true);
            echo "</li></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "            </ul>
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
      </div>
                </article>
                <aside>
                    <h4>";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
        echo "</h4>
                    <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bulle.png"), "html", null, true);
        echo "\" alt=\"\" id=\"fleche_bulle\" />
                    <p id=\"photo_gayllord\"><img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/student2.png"), "html", null, true);
        echo "\" alt=\"Photo de Gayllord\" /></p>
                    <p>";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
                    <p></p>
                    <p><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\" /><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\" /><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/vimeo.png"), "html", null, true);
        echo "\" alt=\"Vimeo\" /><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flickr.png"), "html", null, true);
        echo "\" alt=\"Flickr\" /><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rss.png"), "html", null, true);
        echo "\" alt=\"RSS\" /></p>
                </aside>
            </section>
            
            <footer>
        <center><p>Mooc'Line © 2014 and Team Moocline Université Paris Diderot-P7.</p></center>
      </footer>
        </div>
    </body>
</html>

<!-- cho nay cua to nhe -->
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Mooc'Line";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap3/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"  type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
      <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap3/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      ";
        // line 21
        echo "    ";
    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        // line 28
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
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">
                'Line</a>
          </div>
          <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
              <li class=\"active\"><span>         </span></li>
              <li><a href=\"#\">Accueil</a></li>
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
            <li class=\"active\"><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Etudiant_listCours", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
        echo "</a></li>
             <li>
              <a href=\"";
        // line 85
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

      ";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Dashboard:EtuDashboard_listCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 85,  223 => 28,  216 => 21,  200 => 14,  188 => 11,  152 => 160,  23 => 1,  148 => 159,  118 => 47,  84 => 31,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 78,  190 => 77,  185 => 75,  178 => 71,  174 => 70,  137 => 54,  126 => 49,  70 => 26,  58 => 14,  257 => 105,  251 => 103,  236 => 39,  233 => 96,  222 => 91,  212 => 19,  207 => 78,  197 => 74,  161 => 53,  146 => 57,  134 => 42,  127 => 38,  110 => 42,  81 => 11,  53 => 10,  34 => 5,  114 => 43,  195 => 81,  191 => 12,  186 => 69,  175 => 73,  170 => 71,  153 => 61,  124 => 36,  90 => 13,  77 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 66,  169 => 68,  140 => 55,  132 => 51,  128 => 50,  107 => 39,  61 => 13,  273 => 96,  269 => 94,  254 => 105,  243 => 91,  240 => 86,  238 => 98,  235 => 74,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 68,  204 => 72,  179 => 67,  159 => 61,  143 => 56,  135 => 61,  119 => 47,  102 => 37,  71 => 105,  67 => 104,  63 => 103,  59 => 14,  38 => 11,  94 => 35,  89 => 33,  85 => 31,  75 => 29,  68 => 23,  56 => 17,  87 => 115,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 28,  46 => 7,  27 => 3,  44 => 10,  31 => 4,  28 => 4,  201 => 82,  196 => 13,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 63,  156 => 66,  151 => 63,  142 => 56,  138 => 157,  136 => 55,  121 => 47,  117 => 28,  105 => 40,  91 => 27,  62 => 21,  49 => 11,  24 => 2,  25 => 1,  19 => 2,  79 => 18,  72 => 8,  69 => 18,  47 => 11,  40 => 16,  37 => 10,  22 => 3,  246 => 92,  157 => 162,  145 => 58,  139 => 62,  131 => 52,  123 => 37,  120 => 40,  115 => 43,  111 => 42,  108 => 29,  101 => 32,  98 => 36,  96 => 117,  83 => 114,  74 => 19,  66 => 22,  55 => 13,  52 => 27,  50 => 9,  43 => 17,  41 => 9,  35 => 6,  32 => 9,  29 => 5,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 64,  154 => 58,  149 => 51,  147 => 58,  144 => 158,  141 => 57,  133 => 55,  130 => 50,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 32,  99 => 21,  95 => 28,  92 => 24,  86 => 12,  82 => 29,  80 => 19,  73 => 26,  64 => 19,  60 => 16,  57 => 19,  54 => 96,  51 => 15,  48 => 16,  45 => 22,  42 => 12,  39 => 7,  36 => 6,  33 => 9,  30 => 5,);
    }
}
