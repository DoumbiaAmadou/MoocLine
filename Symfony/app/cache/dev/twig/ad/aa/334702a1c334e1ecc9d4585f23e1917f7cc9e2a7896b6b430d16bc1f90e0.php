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
  Importation d'Exercice
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauvegarder"), 'row');
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
        return array (  81 => 29,  84 => 28,  260 => 20,  244 => 9,  232 => 6,  198 => 134,  195 => 133,  186 => 129,  161 => 120,  76 => 27,  58 => 21,  180 => 26,  160 => 13,  174 => 82,  170 => 81,  165 => 37,  148 => 10,  97 => 47,  152 => 85,  129 => 77,  153 => 117,  150 => 87,  146 => 51,  134 => 100,  126 => 97,  118 => 94,  113 => 40,  104 => 36,  100 => 71,  53 => 15,  34 => 6,  23 => 1,  256 => 19,  253 => 18,  250 => 17,  236 => 103,  233 => 102,  225 => 107,  223 => 101,  194 => 88,  188 => 85,  184 => 89,  172 => 18,  167 => 76,  127 => 45,  110 => 39,  65 => 45,  124 => 44,  114 => 141,  77 => 10,  70 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 139,  177 => 127,  169 => 38,  140 => 66,  132 => 46,  128 => 98,  107 => 89,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 103,  240 => 8,  238 => 105,  235 => 7,  230 => 101,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 99,  208 => 68,  204 => 91,  179 => 69,  159 => 35,  143 => 102,  135 => 53,  119 => 42,  102 => 34,  71 => 25,  67 => 21,  63 => 20,  59 => 19,  38 => 17,  94 => 28,  89 => 31,  85 => 30,  75 => 26,  68 => 25,  56 => 18,  87 => 31,  21 => 1,  26 => 12,  93 => 32,  88 => 42,  78 => 24,  46 => 10,  27 => 5,  44 => 21,  31 => 4,  28 => 6,  201 => 92,  196 => 38,  183 => 27,  171 => 61,  166 => 16,  163 => 62,  158 => 67,  156 => 12,  151 => 11,  142 => 8,  138 => 49,  136 => 65,  121 => 95,  117 => 74,  105 => 35,  91 => 31,  62 => 21,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 25,  69 => 23,  47 => 13,  40 => 8,  37 => 7,  22 => 3,  246 => 104,  157 => 118,  145 => 14,  139 => 101,  131 => 63,  123 => 43,  120 => 40,  115 => 43,  111 => 91,  108 => 38,  101 => 52,  98 => 36,  96 => 24,  83 => 31,  74 => 51,  66 => 23,  55 => 18,  52 => 19,  50 => 15,  43 => 9,  41 => 20,  35 => 4,  32 => 7,  29 => 3,  209 => 137,  203 => 136,  199 => 90,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 20,  173 => 126,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 78,  130 => 80,  125 => 76,  122 => 143,  116 => 41,  112 => 42,  109 => 51,  106 => 50,  103 => 136,  99 => 135,  95 => 34,  92 => 46,  86 => 28,  82 => 29,  80 => 28,  73 => 27,  64 => 21,  60 => 17,  57 => 15,  54 => 20,  51 => 17,  48 => 14,  45 => 11,  42 => 16,  39 => 15,  36 => 7,  33 => 6,  30 => 3,);
    }
}
