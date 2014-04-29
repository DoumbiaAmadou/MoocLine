<?php

/* ::layout.html.twig */
class __TwigTemplate_efeacc919d4c5251f7af53bf33cc9556cc1df93f423e6c5c162b990a3985f651 extends Twig_Template
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
        // line 97
        echo "    
    ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo " 
    <footer>
      <center><p>Mooc'Line © 2014 and Team Moocline UPD-7.</p></center>
    </footer>

    ";
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
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
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                  </div>
                  <!-- <button type=\"submit\" class=\"btn btn-default\">Submit</button  -->
                </form>
              </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              <li><a><span style=​\"margin:​3px -5px 0px 2px;​​\">​|​</span></a></li>
            ";
        // line 75
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 76
            echo "              <li class=\"dropdown\">
                <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("home");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "
                  <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">Tableau de bord</a></li>
                  <li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
                  <li><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Edition Profil</a></li>
                </ul>
              </li>
              <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            ";
        } else {
            // line 89
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
              <li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>
            ";
        }
        // line 92
        echo "            </ul> 
          </div><!--/.nav-collapse -->
        </div>
      </div>
    ";
    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        // line 99
        echo "      ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 102
        echo "    
    ";
    }

    // line 99
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 100
        echo "
      ";
    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        // line 110
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 111
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
        return array (  240 => 111,  237 => 110,  234 => 109,  229 => 100,  226 => 99,  221 => 102,  218 => 99,  215 => 98,  207 => 92,  202 => 90,  197 => 89,  192 => 87,  186 => 84,  182 => 83,  174 => 78,  170 => 77,  167 => 76,  165 => 75,  126 => 39,  122 => 38,  118 => 37,  109 => 31,  97 => 21,  94 => 20,  88 => 13,  84 => 12,  79 => 11,  76 => 10,  70 => 8,  64 => 113,  62 => 109,  55 => 104,  53 => 98,  50 => 97,  48 => 20,  41 => 15,  39 => 10,  34 => 8,  25 => 1,);
    }
}
