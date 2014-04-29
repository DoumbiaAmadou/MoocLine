<?php

/* mooclineCompteBundle:Register:formInscEns.html.twig */
class __TwigTemplate_8ed3c0d16ce554d42b5a7b6911a0e1f6624b7aaa5d120c2b5c15c85ee3ab8a19 extends Twig_Template
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
        return array (  152 => 85,  129 => 77,  237 => 110,  234 => 109,  226 => 99,  218 => 99,  215 => 98,  207 => 92,  202 => 90,  197 => 89,  192 => 87,  186 => 84,  174 => 78,  170 => 77,  167 => 76,  165 => 75,  126 => 39,  118 => 37,  97 => 21,  84 => 12,  76 => 10,  70 => 8,  53 => 24,  90 => 30,  77 => 28,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 100,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 70,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 111,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 102,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 27,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 20,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 20,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 13,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 7,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 13,  138 => 54,  136 => 56,  121 => 75,  117 => 74,  105 => 40,  91 => 27,  62 => 109,  49 => 15,  24 => 4,  25 => 1,  19 => 2,  79 => 11,  72 => 16,  69 => 25,  47 => 13,  40 => 8,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 14,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 71,  108 => 36,  101 => 32,  98 => 36,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 104,  52 => 19,  50 => 97,  43 => 8,  41 => 11,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 83,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 78,  130 => 41,  125 => 76,  122 => 38,  116 => 41,  112 => 42,  109 => 31,  106 => 36,  103 => 69,  99 => 68,  95 => 35,  92 => 21,  86 => 28,  82 => 32,  80 => 29,  73 => 19,  64 => 113,  60 => 6,  57 => 23,  54 => 10,  51 => 14,  48 => 20,  45 => 20,  42 => 12,  39 => 8,  36 => 7,  33 => 6,  30 => 7,);
    }
}
