<?php

/* mooclineExoBundle:Create:apercuEx.html.twig */
class __TwigTemplate_1b818ead8962b74bbed0540a283755ebaa0ec463c2d8e14508f15d20e955635b extends Twig_Template
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
  Apercu Exercice
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
              <h2 class=\"panel-title\"> <strong>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["nomEx"]) ? $context["nomEx"] : $this->getContext($context, "nomEx")), "html", null, true);
        echo " type : ";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo " <br/>nombre de Questions : ";
        echo twig_escape_filter($this->env, (isset($context["numbQuestion"]) ? $context["numbQuestion"] : $this->getContext($context, "numbQuestion")), "html", null, true);
        echo " </strong> </small></h2>
          </div>
          <div class=\"panel-body\">
            


            <form  method=\"POST\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            


            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Questions"));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 25
            echo "

            <h4>";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "question"), 'label');
            echo "</h4><br/>
            ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "question"), 'widget');
            echo "

            ";
            // line 30
            if ((((isset($context["vtype"]) ? $context["vtype"] : $this->getContext($context, "vtype")) == "QCM") || ((isset($context["vtype"]) ? $context["vtype"] : $this->getContext($context, "vtype")) == "QRF"))) {
                // line 31
                echo "                <h4>Reponses</h4>
                <ul class=\"Reponses\">
                ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "Reponses"));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 34
                    echo "                   <li>";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), 'row');
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                </ul>
            ";
            }
            // line 38
            echo "            <br/>
            <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
           
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'row');
        echo " <br/>
\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "exporter"), 'row');
        echo " <br/>
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauvegarder"), 'row');
        echo " <br/>

            </form>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => (isset($context["vtype"]) ? $context["vtype"] : $this->getContext($context, "vtype")))), "html", null, true);
        echo "\">Reprendre</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Create:apercuEx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  58 => 21,  180 => 26,  160 => 13,  174 => 82,  170 => 81,  165 => 79,  148 => 10,  97 => 47,  152 => 85,  129 => 77,  153 => 73,  150 => 87,  146 => 16,  134 => 81,  126 => 144,  118 => 142,  113 => 143,  104 => 36,  100 => 71,  53 => 15,  34 => 6,  23 => 1,  256 => 116,  253 => 115,  250 => 114,  236 => 103,  233 => 102,  225 => 107,  223 => 101,  194 => 88,  188 => 85,  184 => 89,  172 => 18,  167 => 76,  127 => 39,  110 => 140,  65 => 118,  124 => 44,  114 => 141,  77 => 10,  70 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 65,  169 => 17,  140 => 66,  132 => 46,  128 => 45,  107 => 140,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 103,  240 => 86,  238 => 105,  235 => 74,  230 => 101,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 99,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 15,  135 => 53,  119 => 42,  102 => 49,  71 => 31,  67 => 16,  63 => 20,  59 => 14,  38 => 8,  94 => 28,  89 => 42,  85 => 30,  75 => 28,  68 => 24,  56 => 18,  87 => 31,  21 => 2,  26 => 12,  93 => 28,  88 => 42,  78 => 21,  46 => 23,  27 => 5,  44 => 21,  31 => 4,  28 => 4,  201 => 92,  196 => 38,  183 => 27,  171 => 61,  166 => 16,  163 => 62,  158 => 67,  156 => 12,  151 => 11,  142 => 8,  138 => 49,  136 => 65,  121 => 75,  117 => 74,  105 => 40,  91 => 33,  62 => 21,  49 => 15,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 25,  69 => 25,  47 => 13,  40 => 8,  37 => 7,  22 => 3,  246 => 104,  157 => 74,  145 => 14,  139 => 45,  131 => 63,  123 => 58,  120 => 40,  115 => 43,  111 => 71,  108 => 38,  101 => 52,  98 => 43,  96 => 24,  83 => 31,  74 => 25,  66 => 15,  55 => 26,  52 => 19,  50 => 15,  43 => 10,  41 => 20,  35 => 8,  32 => 8,  29 => 3,  209 => 93,  203 => 78,  199 => 90,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 20,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 78,  130 => 80,  125 => 76,  122 => 143,  116 => 41,  112 => 42,  109 => 51,  106 => 50,  103 => 136,  99 => 135,  95 => 34,  92 => 46,  86 => 28,  82 => 20,  80 => 28,  73 => 18,  64 => 17,  60 => 22,  57 => 15,  54 => 14,  51 => 26,  48 => 14,  45 => 11,  42 => 16,  39 => 15,  36 => 7,  33 => 6,  30 => 2,);
    }
}
