<?php

/* ::layout.html.twig */
class __TwigTemplate_481eb6d2bbfd59ac8a35bff9ffa9a6ace5e851831f8f92e4a95a3cad4efc68ff extends Twig_Template
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
        // line 92
        echo "
    ";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo " 
    <footer style=\"margin-top:5%;\">
      <center><p>
        <strong>MOOC</strong>'Line © 2014 and <strong>Mooc</strong>'Line Team at Université Paris Diderot (<strong>UPD-7</strong>).
      </p></center>
    </footer>

    ";
        // line 107
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
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
            <a class=\"navbar-brand\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">
              <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" style=\"heigh:20px ; width : 40px\">'Line
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
        echo $this->env->getExtension('routing')->getPath("moocline_cours_list");
        echo "\">Cours</a></li>
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Institutions<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("contact_ecole_partenaire");
        echo "\">Ecole & Partenaire</a></li>
                  <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("inscription_Enseignant");
        echo "\">Inscription Enseignant</a></li>
                  ";
        // line 46
        echo "                </ul>
              </li>
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Contact<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <!--<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("contact_ecole_partenaire");
        echo "\">Ecole & Partenaire</a></li>-->
                  <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("contact_particulier");
        echo "\">Nous écrire</a></li>
                  <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("qui_sommes_nous");
        echo "\">Qui sommes nous</a></li>
                </ul>
              </li>
              <li>
               <form class=\"navbar-form navbar-left\" role=\"search\">
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
               </form>
              </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              <li><a><span style=​\"margin:​3px -5px 0px 2px;​​\">​|​</span></a></li>
            ";
        // line 66
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 67
            echo "              <li class=\"dropdown\">
                <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("home");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "
                  <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                  ";
            // line 73
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"))) {
                // line 74
                echo "                  <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Enseignant", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
                echo "\">Tableau de bord</a></li>
                  ";
            } elseif (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"))) {
                // line 76
                echo "                  <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Admin", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
                echo "\">Tableau de bord</a></li>
                  ";
            }
            // line 78
            echo "                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vue_Etudiant", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\">Profil</a></li>
                  <li><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modification_Etudiant", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\">Edition Profil</a></li>
                </ul>
              </li>
                <li><a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            ";
        } else {
            // line 84
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
              <li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>
            ";
        }
        // line 87
        echo "            </ul> 
          </div><!--/.nav-collapse -->
        </div>
      </div>
    ";
    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
        // line 94
        echo "       
      ";
        // line 95
        $this->displayBlock('container', $context, $blocks);
        // line 98
        echo "
    ";
    }

    // line 95
    public function block_container($context, array $blocks = array())
    {
        // line 96
        echo "    
      ";
    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        // line 108
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 109
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
        return array (  264 => 109,  261 => 108,  258 => 107,  253 => 96,  250 => 95,  245 => 98,  243 => 95,  240 => 94,  237 => 93,  229 => 87,  224 => 85,  219 => 84,  214 => 82,  208 => 79,  203 => 78,  197 => 76,  191 => 74,  189 => 73,  182 => 69,  178 => 68,  175 => 67,  173 => 66,  157 => 53,  153 => 52,  149 => 51,  142 => 46,  138 => 43,  134 => 42,  127 => 38,  123 => 37,  114 => 31,  110 => 30,  99 => 21,  96 => 20,  90 => 13,  86 => 12,  81 => 11,  78 => 10,  72 => 8,  66 => 111,  64 => 107,  55 => 100,  53 => 93,  50 => 92,  48 => 20,  41 => 15,  39 => 10,  34 => 8,  25 => 1,);
    }
}
