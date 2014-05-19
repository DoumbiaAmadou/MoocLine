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
        return array (  137 => 70,  58 => 14,  160 => 13,  170 => 81,  97 => 47,  129 => 77,  113 => 143,  104 => 72,  100 => 71,  34 => 6,  127 => 28,  110 => 140,  84 => 29,  76 => 33,  53 => 91,  232 => 20,  228 => 19,  225 => 18,  222 => 17,  205 => 7,  155 => 120,  263 => 20,  259 => 19,  256 => 18,  253 => 17,  239 => 8,  172 => 18,  118 => 142,  184 => 89,  180 => 26,  174 => 82,  150 => 87,  134 => 81,  126 => 144,  292 => 85,  236 => 7,  216 => 10,  212 => 9,  206 => 17,  191 => 12,  188 => 10,  152 => 85,  148 => 10,  23 => 1,  233 => 6,  223 => 28,  215 => 82,  213 => 80,  210 => 79,  207 => 78,  202 => 6,  200 => 19,  197 => 18,  194 => 17,  186 => 70,  181 => 68,  165 => 79,  161 => 61,  153 => 73,  146 => 16,  90 => 32,  65 => 43,  124 => 39,  114 => 141,  77 => 10,  70 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 17,  140 => 66,  132 => 51,  128 => 40,  107 => 140,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 9,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 8,  204 => 20,  179 => 69,  159 => 112,  143 => 15,  135 => 53,  119 => 57,  102 => 49,  71 => 31,  67 => 104,  63 => 20,  59 => 14,  38 => 8,  94 => 34,  89 => 38,  85 => 41,  75 => 17,  68 => 33,  56 => 20,  87 => 35,  21 => 1,  26 => 12,  93 => 28,  88 => 42,  78 => 26,  46 => 10,  27 => 5,  44 => 9,  31 => 4,  28 => 4,  201 => 92,  196 => 38,  183 => 27,  171 => 65,  166 => 16,  163 => 62,  158 => 67,  156 => 12,  151 => 11,  142 => 73,  138 => 157,  136 => 65,  121 => 75,  117 => 74,  105 => 51,  91 => 27,  62 => 25,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 34,  69 => 23,  47 => 13,  40 => 9,  37 => 10,  22 => 3,  246 => 90,  157 => 74,  145 => 14,  139 => 45,  131 => 63,  123 => 58,  120 => 57,  115 => 43,  111 => 52,  108 => 73,  101 => 52,  98 => 43,  96 => 117,  83 => 34,  74 => 25,  66 => 26,  55 => 13,  52 => 19,  50 => 15,  43 => 10,  41 => 8,  35 => 5,  32 => 8,  29 => 5,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 65,  168 => 19,  164 => 59,  162 => 17,  154 => 58,  149 => 84,  147 => 58,  144 => 158,  141 => 48,  133 => 78,  130 => 80,  125 => 76,  122 => 143,  116 => 41,  112 => 42,  109 => 51,  106 => 50,  103 => 49,  99 => 135,  95 => 41,  92 => 46,  86 => 13,  82 => 34,  80 => 37,  73 => 28,  64 => 18,  60 => 22,  57 => 15,  54 => 14,  51 => 26,  48 => 12,  45 => 11,  42 => 16,  39 => 15,  36 => 7,  33 => 6,  30 => 4,);
    }
}
