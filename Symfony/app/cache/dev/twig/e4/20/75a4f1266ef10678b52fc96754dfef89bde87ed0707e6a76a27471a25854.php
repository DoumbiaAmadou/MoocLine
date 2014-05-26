<?php

/* mooclineExoBundle:Create:importExo.html.twig */
class __TwigTemplate_e42075a4f1266ef10678b52fc96754dfef89bde87ed0707e6a76a27471a25854 extends Twig_Template
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
        return array (  260 => 20,  250 => 17,  244 => 9,  198 => 134,  160 => 49,  129 => 47,  113 => 40,  104 => 32,  100 => 36,  76 => 27,  232 => 6,  228 => 19,  225 => 18,  205 => 7,  202 => 6,  155 => 120,  65 => 45,  263 => 20,  259 => 19,  256 => 19,  253 => 18,  239 => 8,  172 => 68,  165 => 66,  184 => 9,  180 => 26,  150 => 88,  292 => 85,  223 => 28,  216 => 10,  200 => 19,  188 => 10,  152 => 85,  23 => 3,  148 => 73,  118 => 41,  84 => 28,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 17,  190 => 77,  185 => 85,  178 => 71,  174 => 6,  137 => 50,  126 => 59,  70 => 30,  58 => 19,  257 => 105,  251 => 103,  236 => 7,  233 => 6,  222 => 17,  212 => 9,  207 => 78,  197 => 18,  161 => 120,  146 => 52,  134 => 40,  127 => 101,  110 => 39,  81 => 27,  53 => 91,  34 => 6,  114 => 41,  195 => 133,  191 => 12,  186 => 129,  175 => 78,  170 => 71,  153 => 117,  124 => 45,  90 => 32,  77 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 139,  177 => 127,  169 => 17,  140 => 55,  132 => 59,  128 => 45,  107 => 140,  61 => 20,  273 => 96,  269 => 94,  254 => 105,  243 => 9,  240 => 8,  238 => 98,  235 => 7,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 8,  204 => 20,  179 => 67,  159 => 94,  143 => 51,  135 => 48,  119 => 47,  102 => 37,  71 => 25,  67 => 21,  63 => 20,  59 => 19,  38 => 17,  94 => 34,  89 => 30,  85 => 30,  75 => 26,  68 => 25,  56 => 16,  87 => 35,  21 => 1,  26 => 12,  93 => 28,  88 => 32,  78 => 26,  46 => 10,  27 => 8,  44 => 12,  31 => 4,  28 => 5,  201 => 82,  196 => 38,  183 => 27,  171 => 77,  166 => 16,  163 => 62,  158 => 70,  156 => 12,  151 => 53,  142 => 51,  138 => 157,  136 => 48,  121 => 44,  117 => 74,  105 => 38,  91 => 33,  62 => 21,  49 => 15,  24 => 7,  25 => 1,  19 => 1,  79 => 23,  72 => 26,  69 => 23,  47 => 19,  40 => 8,  37 => 7,  22 => 3,  246 => 92,  157 => 118,  145 => 52,  139 => 62,  131 => 48,  123 => 37,  120 => 42,  115 => 51,  111 => 52,  108 => 37,  101 => 30,  98 => 36,  96 => 35,  83 => 34,  74 => 51,  66 => 23,  55 => 18,  52 => 21,  50 => 15,  43 => 9,  41 => 9,  35 => 4,  32 => 10,  29 => 3,  209 => 137,  203 => 136,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 126,  168 => 67,  164 => 50,  162 => 65,  154 => 54,  149 => 67,  147 => 58,  144 => 158,  141 => 62,  133 => 78,  130 => 46,  125 => 76,  122 => 58,  116 => 35,  112 => 34,  109 => 38,  106 => 32,  103 => 49,  99 => 35,  95 => 34,  92 => 33,  86 => 31,  82 => 22,  80 => 28,  73 => 27,  64 => 21,  60 => 54,  57 => 19,  54 => 20,  51 => 17,  48 => 14,  45 => 22,  42 => 11,  39 => 15,  36 => 8,  33 => 6,  30 => 3,);
    }
}
