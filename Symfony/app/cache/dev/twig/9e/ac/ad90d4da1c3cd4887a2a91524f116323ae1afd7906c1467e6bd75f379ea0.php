<?php

/* mooclineExoBundle:Create:apercuexport.xml.twig */
class __TwigTemplate_9eacad90d4da1c3cd4887a2a91524f116323ae1afd7906c1467e6bd75f379ea0 extends Twig_Template
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
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exercice"]) ? $context["exercice"] : $this->getContext($context, "exercice")), "questions"));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo "    
        <question>
            <text>
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "question"), "html", null, true);
            echo "
           </text>
           <tip></tip>
            <answers>
                <answer good=\"true\">
            ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "reponses"));
            foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                echo " 
                ";
                // line 13
                if (($this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "correct") == true)) {
                    // line 14
                    echo "                    <text>  ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "reponse"), "html", null, true);
                    echo " </text>    
                ";
                }
                // line 16
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                </answer>
                <answer good=\"false\">
            ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "reponses"));
            foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                // line 20
                echo "                ";
                if (($this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "correct") == false)) {
                    // line 21
                    echo "                    <text> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "reponse"), "html", null, true);
                    echo " </text>
                
                ";
                }
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                </answer>
            </answers>
        </question>   
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</exercice>
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
        return array (  260 => 20,  250 => 17,  244 => 9,  198 => 134,  195 => 133,  81 => 24,  137 => 70,  58 => 19,  160 => 13,  170 => 81,  97 => 47,  129 => 39,  113 => 143,  104 => 36,  100 => 71,  34 => 6,  127 => 101,  110 => 140,  84 => 29,  76 => 27,  53 => 91,  232 => 6,  228 => 19,  225 => 18,  222 => 17,  205 => 7,  155 => 120,  263 => 20,  259 => 19,  256 => 19,  253 => 18,  239 => 8,  172 => 18,  118 => 36,  184 => 89,  180 => 26,  174 => 82,  150 => 87,  134 => 40,  126 => 144,  292 => 85,  236 => 7,  216 => 10,  212 => 9,  206 => 17,  191 => 12,  188 => 10,  152 => 54,  148 => 10,  23 => 3,  233 => 6,  223 => 28,  215 => 82,  213 => 80,  210 => 79,  207 => 78,  202 => 6,  200 => 19,  197 => 18,  194 => 17,  186 => 129,  181 => 68,  165 => 121,  161 => 120,  153 => 117,  146 => 113,  90 => 25,  65 => 45,  124 => 38,  114 => 141,  77 => 21,  70 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 139,  177 => 127,  169 => 17,  140 => 50,  132 => 51,  128 => 40,  107 => 140,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 9,  240 => 8,  238 => 85,  235 => 7,  230 => 92,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 8,  204 => 20,  179 => 69,  159 => 112,  143 => 43,  135 => 53,  119 => 42,  102 => 49,  71 => 20,  67 => 19,  63 => 17,  59 => 14,  38 => 17,  94 => 34,  89 => 38,  85 => 30,  75 => 24,  68 => 24,  56 => 18,  87 => 25,  21 => 1,  26 => 12,  93 => 28,  88 => 42,  78 => 26,  46 => 10,  27 => 4,  44 => 9,  31 => 4,  28 => 6,  201 => 92,  196 => 38,  183 => 27,  171 => 65,  166 => 16,  163 => 62,  158 => 67,  156 => 12,  151 => 47,  142 => 73,  138 => 49,  136 => 65,  121 => 75,  117 => 74,  105 => 51,  91 => 33,  62 => 25,  49 => 13,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 25,  69 => 22,  47 => 13,  40 => 22,  37 => 7,  22 => 3,  246 => 90,  157 => 118,  145 => 14,  139 => 45,  131 => 46,  123 => 43,  120 => 57,  115 => 43,  111 => 52,  108 => 38,  101 => 30,  98 => 43,  96 => 29,  83 => 34,  74 => 21,  66 => 21,  55 => 18,  52 => 19,  50 => 15,  43 => 12,  41 => 9,  35 => 7,  32 => 10,  29 => 3,  209 => 137,  203 => 136,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 126,  168 => 19,  164 => 59,  162 => 17,  154 => 58,  149 => 84,  147 => 58,  144 => 158,  141 => 48,  133 => 78,  130 => 80,  125 => 44,  122 => 143,  116 => 41,  112 => 34,  109 => 33,  106 => 32,  103 => 49,  99 => 135,  95 => 34,  92 => 26,  86 => 23,  82 => 22,  80 => 28,  73 => 28,  64 => 18,  60 => 53,  57 => 16,  54 => 14,  51 => 14,  48 => 14,  45 => 11,  42 => 16,  39 => 15,  36 => 7,  33 => 6,  30 => 11,);
    }
}
