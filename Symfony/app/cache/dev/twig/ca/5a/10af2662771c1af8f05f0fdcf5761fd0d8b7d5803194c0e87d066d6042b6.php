<?php

/* mooclineCoursBundle:Default:pagination.html.twig */
class __TwigTemplate_ca5a10af2662771c1af8f05f0fdcf5761fd0d8b7d5803194c0e87d066d6042b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "


      
<div class=\"pagination pagination-centered\">
    
        ";
        // line 8
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page") > 1)) {
            // line 9
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route"), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params"), array("page" => 1))), "html", null, true);
            // line 10
            echo "\"><<</a></li>
            <li> <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route"), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params"), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page") - 1)))), "html", null, true);
            // line 12
            echo "\"><</a></li>
        ";
        }
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page") - 4), 1), min(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page") + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "        <li> <a";
            if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page"))) {
                echo " class=\"current-page\"";
            }
            echo " 
href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route"), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params"), array("page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p"))))), "html", null, true);
            // line 19
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        ";
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page") < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count"))) {
            // line 22
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route"), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params"), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page") + 1)))), "html", null, true);
            // line 23
            echo "\">></a></li>
        <li><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route"), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params"), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count")))), "html", null, true);
            // line 25
            echo "\">>></a></li>
        ";
        }
        // line 27
        echo "    
</div>
    ";
    }

    public function getTemplateName()
    {
        return "mooclineCoursBundle:Default:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 13,  129 => 73,  113 => 143,  104 => 72,  100 => 45,  76 => 33,  232 => 20,  228 => 19,  225 => 18,  205 => 7,  202 => 6,  155 => 120,  65 => 43,  263 => 20,  259 => 19,  256 => 18,  253 => 17,  239 => 8,  172 => 18,  165 => 18,  184 => 9,  180 => 26,  150 => 88,  292 => 85,  223 => 28,  216 => 10,  200 => 19,  188 => 10,  152 => 85,  23 => 1,  148 => 73,  118 => 142,  84 => 29,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 17,  190 => 77,  185 => 85,  178 => 71,  174 => 6,  137 => 61,  126 => 59,  70 => 30,  58 => 14,  257 => 105,  251 => 103,  236 => 7,  233 => 6,  222 => 17,  212 => 9,  207 => 78,  197 => 18,  161 => 53,  146 => 16,  134 => 81,  127 => 28,  110 => 140,  81 => 27,  53 => 91,  34 => 6,  114 => 141,  195 => 81,  191 => 12,  186 => 69,  175 => 78,  170 => 71,  153 => 88,  124 => 54,  90 => 38,  77 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 17,  140 => 55,  132 => 59,  128 => 50,  107 => 140,  61 => 12,  273 => 96,  269 => 94,  254 => 105,  243 => 9,  240 => 86,  238 => 98,  235 => 74,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 8,  204 => 20,  179 => 67,  159 => 94,  143 => 70,  135 => 61,  119 => 47,  102 => 50,  71 => 105,  67 => 104,  63 => 103,  59 => 14,  38 => 8,  94 => 34,  89 => 38,  85 => 31,  75 => 24,  68 => 23,  56 => 18,  87 => 35,  21 => 1,  26 => 12,  93 => 28,  88 => 42,  78 => 26,  46 => 10,  27 => 8,  44 => 9,  31 => 4,  28 => 4,  201 => 82,  196 => 38,  183 => 27,  171 => 77,  166 => 16,  163 => 62,  158 => 70,  156 => 12,  151 => 11,  142 => 8,  138 => 157,  136 => 68,  121 => 75,  117 => 74,  105 => 51,  91 => 27,  62 => 21,  49 => 10,  24 => 7,  25 => 1,  19 => 2,  79 => 18,  72 => 23,  69 => 22,  47 => 19,  40 => 9,  37 => 12,  22 => 3,  246 => 92,  157 => 162,  145 => 14,  139 => 62,  131 => 52,  123 => 37,  120 => 53,  115 => 51,  111 => 52,  108 => 73,  101 => 32,  98 => 43,  96 => 117,  83 => 34,  74 => 19,  66 => 21,  55 => 18,  52 => 21,  50 => 15,  43 => 15,  41 => 14,  35 => 11,  32 => 10,  29 => 9,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 65,  168 => 19,  164 => 59,  162 => 17,  154 => 69,  149 => 67,  147 => 58,  144 => 158,  141 => 62,  133 => 78,  130 => 80,  125 => 76,  122 => 58,  116 => 41,  112 => 42,  109 => 34,  106 => 48,  103 => 49,  99 => 135,  95 => 41,  92 => 24,  86 => 37,  82 => 34,  80 => 37,  73 => 28,  64 => 18,  60 => 22,  57 => 19,  54 => 19,  51 => 26,  48 => 17,  45 => 22,  42 => 16,  39 => 15,  36 => 12,  33 => 6,  30 => 4,);
    }
}
