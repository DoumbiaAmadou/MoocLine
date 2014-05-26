<?php

/* mooclineExoBundle:Create:apercuexport.xml.twig */
class __TwigTemplate_c87f605c742e6311658388eee3358a8127c5a9a973f44dfd90e6f310e6c56c84 extends Twig_Template
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
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<feuilleEx>
<exercice type=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\">

\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exercice"]) ? $context["exercice"] : $this->getContext($context, "exercice")), "questions"));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo "    
        <question>
            <text>
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "question"), "html", null, true);
            echo "
           </text>
           <tip></tip>
\t\t   ";
            // line 11
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "qcm")) {
                // line 12
                echo "\t\t\t\t<answers>
\t\t\t\t\t<answer good=\"true\">
\t\t\t\t\t";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "reponses"));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    echo " 
\t\t\t\t\t\t";
                    // line 15
                    if (($this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "correct") == true)) {
                        // line 16
                        echo "\t\t\t\t\t\t\t<text>  ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "reponse"), "html", null, true);
                        echo " </text>    
\t\t\t\t\t\t";
                    }
                    // line 18
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "\t\t\t\t\t</answer>
\t\t\t\t\t<answer good=\"false\">
\t\t\t\t\t";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "reponses"));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 22
                    echo "\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "correct") == false)) {
                        // line 23
                        echo "\t\t\t\t\t\t\t<text> ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "reponse"), "html", null, true);
                        echo " </text>
\t\t\t\t\t\t";
                    }
                    // line 25
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t\t
\t\t\t";
            }
            // line 28
            echo "                </answer>
            </answers>
        </question>   
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
</exercice>
</feuilleEx>";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Create:apercuexport.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 20,  250 => 17,  244 => 9,  198 => 134,  160 => 49,  129 => 39,  113 => 40,  104 => 32,  100 => 36,  76 => 22,  232 => 6,  228 => 19,  225 => 18,  205 => 7,  202 => 6,  155 => 120,  65 => 45,  263 => 20,  259 => 19,  256 => 19,  253 => 18,  239 => 8,  172 => 18,  165 => 121,  184 => 9,  180 => 26,  150 => 88,  292 => 85,  223 => 28,  216 => 10,  200 => 19,  188 => 10,  152 => 85,  23 => 3,  148 => 73,  118 => 36,  84 => 29,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 17,  190 => 77,  185 => 85,  178 => 71,  174 => 6,  137 => 61,  126 => 59,  70 => 30,  58 => 19,  257 => 105,  251 => 103,  236 => 7,  233 => 6,  222 => 17,  212 => 9,  207 => 78,  197 => 18,  161 => 120,  146 => 113,  134 => 40,  127 => 101,  110 => 140,  81 => 27,  53 => 91,  34 => 6,  114 => 141,  195 => 133,  191 => 12,  186 => 129,  175 => 78,  170 => 71,  153 => 117,  124 => 44,  90 => 32,  77 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 139,  177 => 127,  169 => 17,  140 => 55,  132 => 59,  128 => 45,  107 => 140,  61 => 20,  273 => 96,  269 => 94,  254 => 105,  243 => 9,  240 => 8,  238 => 98,  235 => 7,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 8,  204 => 20,  179 => 67,  159 => 94,  143 => 51,  135 => 61,  119 => 47,  102 => 50,  71 => 19,  67 => 104,  63 => 103,  59 => 14,  38 => 17,  94 => 34,  89 => 38,  85 => 25,  75 => 24,  68 => 19,  56 => 16,  87 => 35,  21 => 1,  26 => 12,  93 => 28,  88 => 42,  78 => 26,  46 => 10,  27 => 8,  44 => 12,  31 => 4,  28 => 5,  201 => 82,  196 => 38,  183 => 27,  171 => 77,  166 => 16,  163 => 62,  158 => 70,  156 => 12,  151 => 54,  142 => 8,  138 => 157,  136 => 48,  121 => 43,  117 => 74,  105 => 51,  91 => 26,  62 => 18,  49 => 15,  24 => 7,  25 => 1,  19 => 1,  79 => 23,  72 => 21,  69 => 22,  47 => 19,  40 => 22,  37 => 7,  22 => 3,  246 => 92,  157 => 118,  145 => 52,  139 => 62,  131 => 52,  123 => 37,  120 => 53,  115 => 51,  111 => 52,  108 => 73,  101 => 30,  98 => 43,  96 => 35,  83 => 34,  74 => 51,  66 => 21,  55 => 18,  52 => 21,  50 => 15,  43 => 15,  41 => 9,  35 => 11,  32 => 10,  29 => 3,  209 => 137,  203 => 136,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 126,  168 => 19,  164 => 50,  162 => 17,  154 => 69,  149 => 67,  147 => 58,  144 => 158,  141 => 62,  133 => 78,  130 => 46,  125 => 76,  122 => 58,  116 => 35,  112 => 34,  109 => 38,  106 => 32,  103 => 49,  99 => 135,  95 => 28,  92 => 33,  86 => 23,  82 => 22,  80 => 28,  73 => 28,  64 => 18,  60 => 54,  57 => 19,  54 => 15,  51 => 26,  48 => 14,  45 => 22,  42 => 11,  39 => 15,  36 => 8,  33 => 6,  30 => 11,);
    }
}
