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
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
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
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "  
  </head>

  <body>
    
    ";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 88
        echo "

      
          ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "       

      <hr>

      <footer>
        <center><p>Mooc'Line © 2014 and Team Moocline UPD-7.</p></center>
      </footer>

  
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap3/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
      <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap3/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      ";
        // line 19
        echo "    ";
    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        // line 26
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
        // line 37
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
          <li><a href=\"login.php\">Se connecter</a></li>
          <li><a href=\"form.php\">S'inscrire</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    ";
    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        // line 92
        echo "          ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 92,  180 => 91,  125 => 37,  112 => 26,  109 => 25,  105 => 19,  101 => 17,  98 => 16,  95 => 15,  89 => 12,  84 => 11,  81 => 10,  75 => 8,  61 => 93,  59 => 91,  54 => 88,  52 => 25,  45 => 20,  43 => 15,  40 => 14,  38 => 10,  33 => 8,  24 => 1,);
    }
}
