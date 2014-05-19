<?php

/* mooclineExoBundle:Create:importExo.html.twig */
class __TwigTemplate_adaa334702a1c334e1ecc9d4585f23e1917f7cc9e2a7896b6b430d16bc1f90e0 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 
  Mooc'Line - Exercice - Importation
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"container\">
        <div class=\"row centered-form\">
      <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
              <h2 class=\"panel-title\"> <strong> Importation d'exercice </strong> </small></h2>
          </div>
          <div class=\"panel-body\">
    <form  method=\"POST\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">     
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'row');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo " 
            <br/><br/>
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauver"), 'row');
        echo " <br/>
            <h5>Veuillez ne sélectionner qu'un seul fichier</h5><br/>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("moocline_exo_create");
        echo "\"> Retour</a>
          
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
        return "mooclineExoBundle:Create:importExo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 20,  250 => 17,  244 => 9,  198 => 134,  195 => 133,  81 => 29,  137 => 50,  58 => 19,  160 => 13,  170 => 81,  97 => 47,  129 => 47,  113 => 40,  104 => 36,  100 => 71,  34 => 6,  127 => 45,  110 => 39,  84 => 28,  76 => 27,  53 => 91,  232 => 6,  228 => 19,  225 => 18,  222 => 17,  205 => 7,  155 => 120,  263 => 20,  259 => 19,  256 => 19,  253 => 18,  239 => 8,  172 => 68,  118 => 36,  184 => 89,  180 => 26,  174 => 82,  150 => 87,  134 => 46,  126 => 144,  292 => 85,  236 => 7,  216 => 10,  212 => 9,  206 => 17,  191 => 12,  188 => 10,  152 => 54,  148 => 10,  23 => 3,  233 => 6,  223 => 28,  215 => 82,  213 => 80,  210 => 79,  207 => 78,  202 => 6,  200 => 19,  197 => 18,  194 => 17,  186 => 129,  181 => 68,  165 => 66,  161 => 120,  153 => 117,  146 => 52,  90 => 25,  65 => 45,  124 => 45,  114 => 41,  77 => 28,  70 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 139,  177 => 127,  169 => 17,  140 => 50,  132 => 51,  128 => 40,  107 => 140,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 9,  240 => 8,  238 => 85,  235 => 7,  230 => 92,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 8,  204 => 20,  179 => 69,  159 => 112,  143 => 50,  135 => 53,  119 => 42,  102 => 37,  71 => 25,  67 => 21,  63 => 20,  59 => 19,  38 => 17,  94 => 34,  89 => 30,  85 => 30,  75 => 26,  68 => 25,  56 => 18,  87 => 25,  21 => 1,  26 => 12,  93 => 28,  88 => 32,  78 => 26,  46 => 10,  27 => 4,  44 => 9,  31 => 4,  28 => 6,  201 => 92,  196 => 38,  183 => 27,  171 => 65,  166 => 16,  163 => 62,  158 => 67,  156 => 12,  151 => 47,  142 => 51,  138 => 49,  136 => 65,  121 => 44,  117 => 74,  105 => 38,  91 => 33,  62 => 21,  49 => 13,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 25,  69 => 23,  47 => 13,  40 => 8,  37 => 7,  22 => 3,  246 => 90,  157 => 118,  145 => 14,  139 => 45,  131 => 48,  123 => 43,  120 => 57,  115 => 43,  111 => 52,  108 => 37,  101 => 30,  98 => 36,  96 => 29,  83 => 34,  74 => 21,  66 => 23,  55 => 18,  52 => 19,  50 => 15,  43 => 9,  41 => 9,  35 => 4,  32 => 10,  29 => 3,  209 => 137,  203 => 136,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 126,  168 => 67,  164 => 59,  162 => 65,  154 => 58,  149 => 84,  147 => 58,  144 => 158,  141 => 48,  133 => 78,  130 => 80,  125 => 44,  122 => 143,  116 => 41,  112 => 34,  109 => 33,  106 => 32,  103 => 49,  99 => 35,  95 => 34,  92 => 26,  86 => 31,  82 => 22,  80 => 28,  73 => 27,  64 => 21,  60 => 53,  57 => 16,  54 => 20,  51 => 17,  48 => 14,  45 => 11,  42 => 16,  39 => 15,  36 => 7,  33 => 6,  30 => 3,);
    }
}
