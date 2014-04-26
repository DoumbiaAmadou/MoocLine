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
        return array (  160 => 92,  148 => 93,  146 => 91,  134 => 84,  129 => 83,  124 => 81,  20 => 1,  77 => 24,  70 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 23,  63 => 15,  59 => 14,  38 => 16,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 35,  56 => 20,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 14,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 80,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 27,  69 => 25,  47 => 18,  40 => 13,  37 => 10,  22 => 2,  246 => 90,  157 => 91,  145 => 46,  139 => 86,  131 => 52,  123 => 47,  120 => 40,  115 => 79,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 19,  50 => 10,  43 => 8,  41 => 7,  35 => 15,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 25,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 10,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
