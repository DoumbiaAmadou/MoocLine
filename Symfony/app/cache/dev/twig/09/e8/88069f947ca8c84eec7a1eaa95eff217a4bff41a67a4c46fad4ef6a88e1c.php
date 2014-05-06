<?php

/* mooclineCompteBundle:Register:formInscEns.html.twig */
class __TwigTemplate_09e888069f947ca8c84eec7a1eaa95eff217a4bff41a67a4c46fad4ef6a88e1c extends Twig_Template
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
  <div class=\"container\">
    <div class=\"row centered-form\">
      <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        <div class=\"panel panel-default\">
              
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><h3>Inscription <strong>MOOC</strong>'Line</h3>
          </div>

          <div class=\"panel-body\">
            <form method=\"post\" ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formb"]) ? $context["formb"] : $this->getContext($context, "formb")), 'enctype');
        echo ">
              ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formb"]) ? $context["formb"] : $this->getContext($context, "formb")), 'widget');
        echo "
              <input type=\"submit\" value=\"s'incrire\" class=\"btn btn-info btn-block\" />
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Register:formInscEns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 85,  129 => 77,  153 => 88,  150 => 87,  146 => 16,  134 => 81,  126 => 79,  118 => 77,  113 => 75,  104 => 72,  100 => 71,  53 => 24,  34 => 8,  23 => 4,  256 => 116,  253 => 115,  250 => 114,  236 => 103,  233 => 102,  225 => 107,  223 => 101,  194 => 88,  188 => 85,  184 => 84,  172 => 78,  167 => 76,  127 => 39,  110 => 31,  65 => 118,  124 => 36,  114 => 27,  77 => 10,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 65,  169 => 77,  140 => 55,  132 => 51,  128 => 49,  107 => 70,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 103,  240 => 86,  238 => 105,  235 => 74,  230 => 101,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 99,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 15,  135 => 53,  119 => 37,  102 => 25,  71 => 8,  67 => 16,  63 => 114,  59 => 14,  38 => 6,  94 => 28,  89 => 13,  85 => 12,  75 => 17,  68 => 14,  56 => 20,  87 => 21,  21 => 2,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 7,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 13,  138 => 54,  136 => 56,  121 => 75,  117 => 74,  105 => 40,  91 => 27,  62 => 32,  49 => 15,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 25,  47 => 13,  40 => 10,  37 => 10,  22 => 3,  246 => 104,  157 => 56,  145 => 14,  139 => 45,  131 => 52,  123 => 38,  120 => 40,  115 => 43,  111 => 71,  108 => 73,  101 => 32,  98 => 21,  96 => 24,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 19,  50 => 10,  43 => 8,  41 => 11,  35 => 8,  32 => 4,  29 => 5,  209 => 93,  203 => 78,  199 => 90,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 79,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 78,  130 => 80,  125 => 76,  122 => 78,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 69,  99 => 68,  95 => 20,  92 => 21,  86 => 28,  82 => 20,  80 => 11,  73 => 18,  64 => 17,  60 => 16,  57 => 15,  54 => 99,  51 => 98,  48 => 13,  45 => 17,  42 => 15,  39 => 8,  36 => 7,  33 => 6,  30 => 7,);
    }
}