<?php

/* mooclineCoursBundle:Cours:voir.html.twig */
class __TwigTemplate_0775d9c56fa816d978996d52d7226b2dbd7c67c02b9b8bb9e2ff3ba36e2f0ca6 extends Twig_Template
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
        echo " 
  ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Cours
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    
    <div class=\"container-fluid well\">
        
         <div class=\"panel panel-default\">
            <div class=\"span4 offset1\">
            ";
        // line 15
        echo $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "presentation");
        echo "
            </div>
        </div>
    </div>
   <form class=\"form-horizontal\" method=\"POST\" action=\"\">    
    <div class=\"form-group\">
        <div class=\"col-md-2\" align=\"left\">
        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_cours_edition", array("id" => $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-block btn-lg btn-primary\">Modifier</a>
        </div>
    </div>    
   </form>
        <br><br>
    
    
 
 ";
    }

    public function getTemplateName()
    {
        return "mooclineCoursBundle:Cours:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  180 => 26,  160 => 13,  174 => 82,  170 => 81,  165 => 79,  148 => 10,  97 => 47,  152 => 85,  129 => 77,  153 => 73,  150 => 87,  146 => 16,  134 => 81,  126 => 144,  118 => 142,  113 => 143,  104 => 72,  100 => 71,  53 => 15,  34 => 6,  23 => 1,  256 => 116,  253 => 115,  250 => 114,  236 => 103,  233 => 102,  225 => 107,  223 => 101,  194 => 88,  188 => 85,  184 => 89,  172 => 18,  167 => 76,  127 => 39,  110 => 140,  65 => 118,  124 => 36,  114 => 141,  77 => 10,  70 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 65,  169 => 17,  140 => 66,  132 => 51,  128 => 49,  107 => 140,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 103,  240 => 86,  238 => 105,  235 => 74,  230 => 101,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 99,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 15,  135 => 53,  119 => 57,  102 => 49,  71 => 31,  67 => 16,  63 => 20,  59 => 14,  38 => 8,  94 => 28,  89 => 42,  85 => 41,  75 => 28,  68 => 33,  56 => 20,  87 => 21,  21 => 2,  26 => 12,  93 => 28,  88 => 42,  78 => 21,  46 => 23,  27 => 5,  44 => 21,  31 => 4,  28 => 4,  201 => 92,  196 => 38,  183 => 27,  171 => 61,  166 => 16,  163 => 62,  158 => 67,  156 => 12,  151 => 11,  142 => 8,  138 => 54,  136 => 65,  121 => 75,  117 => 74,  105 => 40,  91 => 27,  62 => 21,  49 => 15,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 34,  69 => 25,  47 => 13,  40 => 9,  37 => 10,  22 => 3,  246 => 104,  157 => 74,  145 => 14,  139 => 45,  131 => 63,  123 => 58,  120 => 40,  115 => 43,  111 => 71,  108 => 73,  101 => 52,  98 => 43,  96 => 24,  83 => 31,  74 => 25,  66 => 15,  55 => 26,  52 => 19,  50 => 15,  43 => 10,  41 => 20,  35 => 8,  32 => 8,  29 => 5,  209 => 93,  203 => 78,  199 => 90,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 20,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 78,  130 => 80,  125 => 76,  122 => 143,  116 => 41,  112 => 42,  109 => 51,  106 => 50,  103 => 136,  99 => 135,  95 => 46,  92 => 46,  86 => 28,  82 => 20,  80 => 37,  73 => 18,  64 => 17,  60 => 22,  57 => 15,  54 => 14,  51 => 26,  48 => 12,  45 => 11,  42 => 16,  39 => 15,  36 => 7,  33 => 6,  30 => 2,);
    }
}
