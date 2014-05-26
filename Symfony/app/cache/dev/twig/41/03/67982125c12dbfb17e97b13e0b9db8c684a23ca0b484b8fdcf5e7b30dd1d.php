<?php

/* mooclineExoBundle:Correction:resolveFEx.html.twig */
class __TwigTemplate_410367982125c12dbfb17e97b13e0b9db8c684a23ca0b484b8fdcf5e7b30dd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'choice_widget' => array($this, 'block_choice_widget'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " 
  Mooc'Line - Exercice - Resolve Feuille
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
  <div class=\"container\" >
        <div class=\"row centered-form\">
      <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-4 col-md-offset-3\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
              <h2 class=\"panel-title\"> <strong>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["titreFEx"]) ? $context["titreFEx"] : $this->getContext($context, "titreFEx")), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo " </strong> </small></h2>
          </div>
          <div class=\"panel-body\">

      ";
        // line 19
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 54
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  
";
    }

    // line 19
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 20
        echo "         ";
        $context["i"] = 0;
        // line 21
        echo "  <form class=\"form-horizontal\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
          ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "
          
            ";
            // line 25
            if (twig_in_filter((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")))) {
                // line 26
                echo "              <hr/>
              <h4>Exercice  ";
                // line 27
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
                echo " </h4>
              <hr/>
            ";
            }
            // line 30
            echo "          
            ";
            // line 31
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 32
            echo "               ";
            if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "block_prefixes")) && !twig_in_filter("submit", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "block_prefixes")))) {
                // line 33
                echo "                   <li>
                   ";
                // line 34
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
                echo " <br/>
                   ";
                // line 35
                if (!twig_in_filter("choice", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "block_prefixes"))) {
                    // line 36
                    echo "                       ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
                    echo "
                   ";
                } elseif (twig_in_filter("choice", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "block_prefixes"))) {
                    // line 38
                    echo "                   ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 39
                        echo "                       ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
                        echo " 
                        ";
                        // line 40
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'label');
                        echo " <br/>
                    
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "                    ";
                }
                // line 44
                echo "                   </li>
                    <br/><hr/>
               ";
            }
            // line 47
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "              
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'row');
        echo " <br/>
\t\t\t
          </form>
      ";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Correction:resolveFEx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 49,  129 => 39,  113 => 143,  104 => 31,  100 => 45,  76 => 33,  232 => 20,  228 => 19,  225 => 18,  205 => 7,  202 => 6,  155 => 120,  65 => 43,  263 => 20,  259 => 19,  256 => 18,  253 => 17,  239 => 8,  172 => 18,  165 => 18,  184 => 9,  180 => 26,  150 => 88,  292 => 85,  223 => 28,  216 => 10,  200 => 19,  188 => 10,  152 => 85,  23 => 1,  148 => 73,  118 => 36,  84 => 29,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 17,  190 => 77,  185 => 85,  178 => 71,  174 => 6,  137 => 61,  126 => 59,  70 => 30,  58 => 19,  257 => 105,  251 => 103,  236 => 7,  233 => 6,  222 => 17,  212 => 9,  207 => 78,  197 => 18,  161 => 53,  146 => 44,  134 => 40,  127 => 28,  110 => 140,  81 => 27,  53 => 91,  34 => 6,  114 => 141,  195 => 81,  191 => 12,  186 => 69,  175 => 78,  170 => 71,  153 => 88,  124 => 38,  90 => 25,  77 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 17,  140 => 55,  132 => 59,  128 => 50,  107 => 140,  61 => 12,  273 => 96,  269 => 94,  254 => 105,  243 => 9,  240 => 86,  238 => 98,  235 => 74,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 8,  204 => 20,  179 => 67,  159 => 94,  143 => 43,  135 => 61,  119 => 47,  102 => 50,  71 => 19,  67 => 104,  63 => 103,  59 => 14,  38 => 8,  94 => 34,  89 => 38,  85 => 31,  75 => 24,  68 => 23,  56 => 18,  87 => 35,  21 => 1,  26 => 12,  93 => 28,  88 => 42,  78 => 26,  46 => 10,  27 => 8,  44 => 9,  31 => 4,  28 => 4,  201 => 82,  196 => 38,  183 => 27,  171 => 77,  166 => 16,  163 => 62,  158 => 70,  156 => 12,  151 => 47,  142 => 8,  138 => 157,  136 => 68,  121 => 75,  117 => 74,  105 => 51,  91 => 27,  62 => 21,  49 => 15,  24 => 7,  25 => 1,  19 => 2,  79 => 18,  72 => 23,  69 => 22,  47 => 19,  40 => 9,  37 => 12,  22 => 3,  246 => 92,  157 => 48,  145 => 14,  139 => 62,  131 => 52,  123 => 37,  120 => 53,  115 => 51,  111 => 52,  108 => 73,  101 => 30,  98 => 43,  96 => 117,  83 => 34,  74 => 20,  66 => 21,  55 => 18,  52 => 21,  50 => 15,  43 => 15,  41 => 9,  35 => 11,  32 => 10,  29 => 9,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 65,  168 => 19,  164 => 50,  162 => 17,  154 => 69,  149 => 67,  147 => 58,  144 => 158,  141 => 62,  133 => 78,  130 => 80,  125 => 76,  122 => 58,  116 => 35,  112 => 34,  109 => 33,  106 => 32,  103 => 49,  99 => 135,  95 => 27,  92 => 26,  86 => 23,  82 => 22,  80 => 37,  73 => 28,  64 => 18,  60 => 54,  57 => 19,  54 => 19,  51 => 26,  48 => 17,  45 => 22,  42 => 16,  39 => 15,  36 => 12,  33 => 6,  30 => 4,);
    }
}
