<?php

/* mooclineCompteBundle:Registration:index.html.twig */
class __TwigTemplate_1456465ed092d37c0ee0e8f26d643f5d142c4b85147d8ec61620624d15c7b418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("mooclineCompteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mooclineCompteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Accueil
  ";
    }

    // line 9
    public function block_container($context, array $blocks = array())
    {
        // line 10
        echo "  
   <!-- Main component for a primary marketing message or call to action -->
    <!-- debut du contenu -->
    <center>
    <div class=\"container row-fluid\">
      <div class=\"col-md-2\"></div>
      <div class=\"col-md-7\">    
        <div class=\"row\">
          <div class=\"col-md-3 col-md-offset-1\">
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/infographie.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
            <h3>Infographie</h3>
            <p>Le graphisme de l'art.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">  
             <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/mecaniquefluides.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
              <h3>Mécanique des fluides</h3>
              <p> Suivez le mouvement.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">
              <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/chimie.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
              <h3>Chimie de démain</h3>
              <p>La vie est faite de réaction.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-3 col-md-offset-1\">
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/compiler.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
            <h3>Compilation</h3>
            <p>Le compilation du langages.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">  
             <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/iOS.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
              <h3>Programmation iOS</h3>
              <p> Programme sous iOS.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">
              <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/chimie_anvance.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
              <h3>Chimie organique avancée</h3>
              <p>La vie est faite de réaction.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-3 col-md-offset-1\">
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/architecture.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
            <h3>Architecture d'ordinateur</h3>
            <p>L'Architecture d'ordinateur.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">  
             <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bda.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
              <h3>Base de donnée</h3>
              <p> Base de donnée.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">
              <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/portrait.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
              <h3>Dessin portrait</h3>
              <p>L'art du portrait.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-3 col-md-offset-1\">
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/numerique.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
            <h3>Numerique</h3>
            <p>Numerique.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">  
             <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/web.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
              <h3>Web avance</h3>
              <p> Programmation Web avancée.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">
              <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/robotic.jpg"), "html", null, true);
        echo "\"  style=\"height : 200px ; width : 200px\">
              <h3>Programmation robotique</h3>
              <p>Programmation robotique.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
        </div>
      </div>
        <!-- fin du contenu --> 
    </div> <!-- /container -->
    </center>
  ";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Registration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 94,  150 => 88,  141 => 82,  129 => 73,  120 => 67,  111 => 61,  99 => 52,  90 => 46,  81 => 40,  69 => 31,  60 => 25,  51 => 19,  40 => 10,  37 => 9,  32 => 6,  29 => 5,);
    }
}
