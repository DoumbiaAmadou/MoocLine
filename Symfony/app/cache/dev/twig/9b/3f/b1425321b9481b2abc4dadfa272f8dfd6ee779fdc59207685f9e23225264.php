<?php

/* mooclineCompteBundle:Register:index.html.twig */
class __TwigTemplate_9b3fb1425321b9481b2abc4dadfa272f8dfd6ee779fdc59207685f9e23225264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "      ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
  ";
    }

    // line 9
    public function block_body($context, array $blocks = array())
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
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/infographie.jpg\"  style=\"height : 200px ; width : 200px\">
            <h3>Infographie</h3>
            <p>Le graphisme de l'art.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">  
             <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/mecaniquefluides.jpg\"  style=\"height : 200px ; width : 200px\">
              <h3>Mécanique des fluides</h3>
              <p> Suivez le mouvement.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">
              <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/chimie.jpg\"  style=\"height : 200px ; width : 200px\">
              <h3>Chimie de démain</h3>
              <p>La vie est faite de réaction.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-3 col-md-offset-1\">
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/livre.jpg\"  style=\"height : 80px ; width : 80px\">
            <h3>Infographie</h3>
            <p>le graphisme c'aussi de l'art.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/livre.jpg\"  style=\"height : 80px ; width : 80px\">
            <h3>Mécanique des fluides</h3>
            <p> suivez le mouvement .</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/livre.jpg\"  style=\"height : 80px ; width : 80px\">
            <h3>chimie de démain</h3>
            <p>la vie est faite de réaction.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
        </div>

        <div class=\"row\">        
          <div class=\"col-md-3 col-md-offset-1\">           
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/livre.jpg\"  style=\"height : 80px ; width : 80px\">
            <h3>Infographie</h3>
            <p>le graphisme c'aussi de l'art.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">            
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/livre.jpg\"  style=\"height : 80px ; width : 80px\">
            <h3>Mécanique des fluides</h3>
            <p> suivez le mouvement avec .</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">           
            <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/livre.jpg\"  style=\"height : 80px ; width : 80px\">
            <h3>chimie de démain</h3>
            <p>la vie est faite de réaction.</p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
        </div>
        
        <div class=\"row\">  
          <div class=\"col-md-3 col-md-offset-1\">
              <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/livre.jpg\"  style=\"height : 80px ; width : 80px\">
              <h3>Infographie</h3>
              <p>le graphisme c'aussi de l'art.</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">
              <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/livre.jpg\"  style=\"height : 80px ; width : 80px\">
              <h3>Mécanique des fluides</h3>
              <p> suivez le mouvement .</p>
              <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details »</a></p>
          </div>
          <div class=\"col-md-3 col-md-offset-1\">
              <img class=\"img-circle img-rounded\" data-src=\"holder.js/alt=80x80\" alt=\"80x80\" src=\"images/livre.jpg\"  style=\"height : 80px ; width : 80px\">
              <h3>chimie de démain</h3>
              <p>la vie est faite de réaction.</p>
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
        return "mooclineCompteBundle:Register:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
