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
        // line 15
        echo "
  </head>
  
  <body>
    
    ";
        // line 20
        $this->displayBlock('navbar', $context, $blocks);
        // line 98
        echo "
    ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo " 
    <footer>
      <center><p>Mooc'Line © 2014 and Team Moocline UPD-7.</p></center>
    </footer>

    ";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
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
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 20
    public function block_navbar($context, array $blocks = array())
    {
        // line 21
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
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">'Line
            </a>
          </div>
          <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
              <li class=\"active\"><span>         </span></li>
              <li class=\"active\"><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Accueil</a></li>
              <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Cours</a></li>
              <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Institutions</a></li>
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
              <li>
               <form class=\"navbar-form navbar-left\" role=\"search\">
        \t\t<div class=\"form-group\">
        \t\t  <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                          <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                        </div>
    \t\t
               </form>
              </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              <li><a><span style=​\"margin:​3px -5px 0px 2px;​​\">​|​</span></a></li>
            ";
        // line 76
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 77
            echo "              <li class=\"dropdown\">
                <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("home");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "
                  <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">Tableau de bord</a></li>
                  <li><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                  <li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Edition Profil</a></li>
                </ul>
              </li>
                <li><a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            ";
        } else {
            // line 90
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
              <li><a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>
            ";
        }
        // line 93
        echo "            </ul> 
          </div><!--/.nav-collapse -->
        </div>
      </div>
    ";
    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        // line 100
        echo "       
      ";
        // line 101
        $this->displayBlock('container', $context, $blocks);
        // line 107
        echo "
    ";
    }

    // line 101
    public function block_container($context, array $blocks = array())
    {
        // line 102
        echo "        
        ";
        // line 103
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 105
        echo "    
      ";
    }

    // line 103
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 104
        echo "        ";
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        // line 115
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 116
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
        return array (  256 => 116,  253 => 115,  250 => 114,  246 => 104,  243 => 103,  238 => 105,  236 => 103,  233 => 102,  230 => 101,  225 => 107,  223 => 101,  220 => 100,  217 => 99,  209 => 93,  204 => 91,  199 => 90,  194 => 88,  188 => 85,  184 => 84,  176 => 79,  172 => 78,  169 => 77,  167 => 76,  127 => 39,  123 => 38,  119 => 37,  110 => 31,  98 => 21,  95 => 20,  89 => 13,  85 => 12,  80 => 11,  77 => 10,  71 => 8,  65 => 118,  63 => 114,  56 => 109,  54 => 99,  51 => 98,  49 => 20,  42 => 15,  35 => 8,  26 => 1,  75 => 28,  69 => 25,  62 => 21,  53 => 15,  43 => 9,  40 => 10,  34 => 5,  29 => 4,);
    }
}
