<?php

/* mooclineCompteBundle:Registration:etuForm.html.twig */
class __TwigTemplate_ec8e277101df45900a312313d264b12f376c9e14ccbfe5fcf76a90d552520c5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("mooclineCompteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'compte_body' => array($this, 'block_compte_body'),
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
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Inscription ";
    }

    // line 7
    public function block_compte_body($context, array $blocks = array())
    {
        // line 8
        echo "    
\t<div class=\"container\">
        <div class=\"row centered-form\">
        \t<div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        \t\t<div class=\"panel panel-default\">
        \t\t\t
        \t\t\t<div class=\"panel-heading\">
\t\t\t    \t\t<h3 class=\"panel-title\"><h3>Inscription <strong>MOOC</strong>'Line</h3>
\t\t\t \t\t</div>

\t\t\t \t\t<div class=\"panel-body\">
\t\t\t\t\t  <form method=\"post\" ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t\t    <input type=\"submit\" value=\"s'incrire\" class=\"btn btn-info btn-block\" />
\t\t\t\t\t  </form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Registration:etuForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 77,  113 => 75,  104 => 72,  100 => 71,  76 => 33,  232 => 20,  228 => 19,  225 => 18,  205 => 7,  202 => 6,  155 => 120,  65 => 43,  263 => 20,  259 => 19,  256 => 18,  253 => 17,  239 => 8,  172 => 20,  165 => 18,  184 => 9,  180 => 8,  150 => 87,  292 => 85,  223 => 28,  216 => 10,  200 => 19,  188 => 10,  152 => 85,  23 => 4,  148 => 8,  118 => 77,  84 => 29,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 17,  190 => 77,  185 => 75,  178 => 71,  174 => 6,  137 => 54,  126 => 79,  70 => 26,  58 => 14,  257 => 105,  251 => 103,  236 => 7,  233 => 6,  222 => 17,  212 => 9,  207 => 78,  197 => 18,  161 => 53,  146 => 16,  134 => 81,  127 => 28,  110 => 53,  81 => 11,  53 => 24,  34 => 8,  114 => 43,  195 => 81,  191 => 12,  186 => 69,  175 => 73,  170 => 71,  153 => 88,  124 => 36,  90 => 32,  77 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 68,  140 => 55,  132 => 51,  128 => 50,  107 => 70,  61 => 12,  273 => 96,  269 => 94,  254 => 105,  243 => 9,  240 => 86,  238 => 98,  235 => 74,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 8,  204 => 20,  179 => 67,  159 => 112,  143 => 15,  135 => 61,  119 => 47,  102 => 50,  71 => 105,  67 => 104,  63 => 103,  59 => 14,  38 => 8,  94 => 34,  89 => 43,  85 => 31,  75 => 29,  68 => 23,  56 => 20,  87 => 115,  21 => 1,  26 => 12,  93 => 28,  88 => 31,  78 => 26,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 82,  196 => 13,  183 => 140,  171 => 61,  166 => 128,  163 => 62,  158 => 63,  156 => 10,  151 => 63,  142 => 13,  138 => 157,  136 => 68,  121 => 75,  117 => 74,  105 => 51,  91 => 27,  62 => 21,  49 => 15,  24 => 7,  25 => 1,  19 => 2,  79 => 18,  72 => 8,  69 => 18,  47 => 13,  40 => 9,  37 => 17,  22 => 2,  246 => 92,  157 => 162,  145 => 14,  139 => 62,  131 => 52,  123 => 37,  120 => 57,  115 => 43,  111 => 71,  108 => 73,  101 => 32,  98 => 49,  96 => 117,  83 => 114,  74 => 19,  66 => 26,  55 => 36,  52 => 19,  50 => 10,  43 => 10,  41 => 9,  35 => 6,  32 => 9,  29 => 5,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 64,  173 => 65,  168 => 19,  164 => 59,  162 => 17,  154 => 58,  149 => 84,  147 => 58,  144 => 158,  141 => 57,  133 => 78,  130 => 80,  125 => 76,  122 => 78,  116 => 41,  112 => 42,  109 => 34,  106 => 81,  103 => 69,  99 => 68,  95 => 28,  92 => 24,  86 => 12,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 16,  57 => 19,  54 => 19,  51 => 15,  48 => 12,  45 => 22,  42 => 9,  39 => 8,  36 => 7,  33 => 4,  30 => 2,);
    }
}
