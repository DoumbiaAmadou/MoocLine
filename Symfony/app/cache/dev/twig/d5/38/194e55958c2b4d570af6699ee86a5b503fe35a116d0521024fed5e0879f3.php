<?php

/* mooclineExoBundle:Create:creationExL.html.twig */
class __TwigTemplate_d538194e55958c2b4d570af6699ee86a5b503fe35a116d0521024fed5e0879f3 extends Twig_Template
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
        // line 11
        echo "\t
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Mooc'Line</title>

\t
\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "   
\t
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
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
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">
              'Line</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><span>         </span></li>
            <li class=\"active\"><a href=\"";
        // line 51
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

\t\t      </form>
  \t\t </li>
            <li><a><span style=​\"margin:​3px -5px 0px 2px;​​\">​|​</span></a></li>
\t\t    <li><a href=\"login.php\">Se connecter</a></li>
\t\t    <li><a href=\"form.php\">S'inscrire</a></li>
          </ul>
        </div>
      </div>
    </div>


\t<div class=\"container\">
        <div class=\"row centered-form\">
\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t    \t\t<h2 class=\"panel-title\"> <strong> ";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo " n° ";
        echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
        echo " </strong> </small></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<form  method=\"POST\" ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question"), 'label');
        echo "<br/>
            ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question"), 'widget');
        echo "
\t\t\t\t\t\t
            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
           
\t\t\t\t\t  <br/><br/>";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'row');
        echo " <br/> 
            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauvegarder"), 'row');
        echo " <br/>
            <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_exo_apercu", array("type" => (isset($context["vtype"]) ? $context["vtype"] : $this->getContext($context, "vtype")))), "html", null, true);
        echo "\">Aperçu</a><br/>
            <a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("moocline_exo_create");
        echo "\">Quitter sans sauvegarder</a>
          
          </form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
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
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Create:creationExL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 20,  215 => 19,  212 => 18,  209 => 17,  203 => 9,  199 => 8,  194 => 7,  191 => 6,  170 => 118,  166 => 117,  162 => 116,  158 => 115,  153 => 113,  148 => 111,  144 => 110,  139 => 108,  128 => 102,  74 => 51,  65 => 45,  40 => 22,  38 => 17,  30 => 11,  28 => 6,  21 => 1,);
    }
}
