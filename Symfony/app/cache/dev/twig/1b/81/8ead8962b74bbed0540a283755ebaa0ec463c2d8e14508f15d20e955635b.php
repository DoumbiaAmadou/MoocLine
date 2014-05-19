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
  Mooc'Line - Exercice - Apercu 
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
        echo twig_escape_filter($this->env, (isset($context["ctype"]) ? $context["ctype"] : $this->getContext($context, "ctype")), "html", null, true);
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
            if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "qcm") || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "qrf"))) {
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
        // line 43
        if ((!(isset($context["import"]) ? $context["import"] : $this->getContext($context, "import")))) {
            // line 44
            echo "\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'row');
            echo " <br/>
           ";
        }
        // line 46
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauvegarder"), 'row');
        echo " <br/>

            </form>
\t\t\t";
        // line 49
        if ((isset($context["import"]) ? $context["import"] : $this->getContext($context, "import"))) {
            // line 50
            echo "\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("moocline_exo_create");
            echo "\">Retour</a>
\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
            echo "\">Reprendre</a>
\t\t\t";
        }
        // line 54
        echo "          </div>
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
        return array (  81 => 27,  137 => 70,  58 => 19,  160 => 13,  170 => 81,  97 => 47,  129 => 39,  113 => 143,  104 => 36,  100 => 71,  34 => 6,  127 => 28,  110 => 140,  84 => 29,  76 => 27,  53 => 91,  232 => 20,  228 => 19,  225 => 18,  222 => 17,  205 => 7,  155 => 120,  263 => 20,  259 => 19,  256 => 18,  253 => 17,  239 => 8,  172 => 18,  118 => 36,  184 => 89,  180 => 26,  174 => 82,  150 => 87,  134 => 40,  126 => 144,  292 => 85,  236 => 7,  216 => 10,  212 => 9,  206 => 17,  191 => 12,  188 => 10,  152 => 54,  148 => 10,  23 => 1,  233 => 6,  223 => 28,  215 => 82,  213 => 80,  210 => 79,  207 => 78,  202 => 6,  200 => 19,  197 => 18,  194 => 17,  186 => 70,  181 => 68,  165 => 79,  161 => 61,  153 => 73,  146 => 52,  90 => 25,  65 => 43,  124 => 38,  114 => 141,  77 => 21,  70 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 17,  140 => 50,  132 => 51,  128 => 40,  107 => 140,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 9,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 8,  204 => 20,  179 => 69,  159 => 112,  143 => 43,  135 => 53,  119 => 42,  102 => 49,  71 => 19,  67 => 104,  63 => 20,  59 => 14,  38 => 8,  94 => 34,  89 => 38,  85 => 30,  75 => 24,  68 => 24,  56 => 18,  87 => 31,  21 => 1,  26 => 12,  93 => 28,  88 => 42,  78 => 26,  46 => 10,  27 => 8,  44 => 9,  31 => 4,  28 => 4,  201 => 92,  196 => 38,  183 => 27,  171 => 65,  166 => 16,  163 => 62,  158 => 67,  156 => 12,  151 => 47,  142 => 73,  138 => 49,  136 => 65,  121 => 75,  117 => 74,  105 => 51,  91 => 33,  62 => 25,  49 => 15,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 25,  69 => 22,  47 => 13,  40 => 8,  37 => 7,  22 => 3,  246 => 90,  157 => 48,  145 => 14,  139 => 45,  131 => 46,  123 => 43,  120 => 57,  115 => 43,  111 => 52,  108 => 38,  101 => 30,  98 => 43,  96 => 117,  83 => 34,  74 => 20,  66 => 21,  55 => 18,  52 => 19,  50 => 15,  43 => 15,  41 => 9,  35 => 11,  32 => 10,  29 => 3,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 65,  168 => 19,  164 => 59,  162 => 17,  154 => 58,  149 => 84,  147 => 58,  144 => 158,  141 => 48,  133 => 78,  130 => 80,  125 => 44,  122 => 143,  116 => 41,  112 => 34,  109 => 33,  106 => 32,  103 => 49,  99 => 135,  95 => 34,  92 => 26,  86 => 23,  82 => 22,  80 => 28,  73 => 28,  64 => 18,  60 => 53,  57 => 19,  54 => 14,  51 => 26,  48 => 14,  45 => 11,  42 => 16,  39 => 15,  36 => 7,  33 => 6,  30 => 4,);
    }
}
