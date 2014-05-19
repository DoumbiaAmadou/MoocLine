<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
  </head>
  
  <body>
    
    ";
        // line 21
        $this->displayBlock('navbar', $context, $blocks);
        // line 75
        echo "
    ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo " 
    <footer>
      <center><p>Mooc'Line © 2014 and Team Moocline UPD-7.</p></center>
    </footer>

    ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "
  </body>
</html>";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap3/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      
      <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        // line 22
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
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">'Line
            </a>
          </div>
          <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
              <li class=\"active\"><span>         </span></li>
              <li class=\"active\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Accueil</a></li>
              <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("moocline_cours_list");
        echo "\">Cours</a></li>
              <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Institutions</a></li>
              
               <form class=\"navbar-form navbar-left\" role=\"search\">
        \t\t<div class=\"form-group\">
        \t\t  <input type=\"search\" class=\"form-control\" placeholder=\"Search\">
                        <!--  <button type=\"submit\" class=\"btn btn-default\">Submit</button> -->
                        </div>
    \t\t
               </form>
              </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              <li><a><span style=​\"margin:​3px -5px 0px 2px;​​\">​|​</span></a></li>
            ";
        // line 53
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 54
            echo "              <li class=\"dropdown\">
                <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("home");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "
                  <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Etudiant", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\">Tableau de bord</a></li>
                  <li><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vue_Etudiant", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\">Profil</a></li>
                  <li><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modification_Etudiant", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\">Edition Profil</a></li>
                </ul>
              </li>
                <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            ";
        } else {
            // line 67
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
             <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>
            ";
        }
        // line 70
        echo "            </ul> 
          </div><!--/.nav-collapse -->
        </div>
      </div>
    ";
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "       
      ";
        // line 78
        $this->displayBlock('container', $context, $blocks);
        // line 84
        echo "
    ";
    }

    // line 78
    public function block_container($context, array $blocks = array())
    {
        // line 79
        echo "        
        ";
        // line 80
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 82
        echo "    
      ";
    }

    // line 80
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 81
        echo "        ";
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap3/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  236 => 93,  233 => 92,  230 => 91,  226 => 81,  223 => 80,  218 => 82,  216 => 80,  213 => 79,  210 => 78,  205 => 84,  203 => 78,  200 => 77,  197 => 76,  189 => 70,  184 => 68,  179 => 67,  174 => 65,  168 => 62,  164 => 61,  160 => 60,  153 => 56,  149 => 55,  146 => 54,  144 => 53,  128 => 40,  124 => 39,  120 => 38,  111 => 32,  99 => 22,  96 => 21,  90 => 14,  86 => 13,  80 => 11,  77 => 10,  71 => 8,  65 => 95,  63 => 91,  56 => 86,  54 => 76,  51 => 75,  49 => 21,  42 => 16,  40 => 10,  35 => 8,  26 => 1,);
    }
}
