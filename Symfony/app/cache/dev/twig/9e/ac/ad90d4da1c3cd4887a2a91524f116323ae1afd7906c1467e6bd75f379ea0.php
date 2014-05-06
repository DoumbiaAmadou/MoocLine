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
<exercice>    
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
        return array (  84 => 25,  260 => 20,  244 => 9,  232 => 6,  198 => 134,  195 => 133,  186 => 129,  161 => 120,  76 => 27,  58 => 21,  180 => 26,  160 => 13,  174 => 82,  170 => 81,  165 => 121,  148 => 10,  97 => 47,  152 => 85,  129 => 77,  153 => 117,  150 => 87,  146 => 113,  134 => 81,  126 => 144,  118 => 142,  113 => 143,  104 => 36,  100 => 71,  53 => 15,  34 => 6,  23 => 1,  256 => 19,  253 => 18,  250 => 17,  236 => 103,  233 => 102,  225 => 107,  223 => 101,  194 => 88,  188 => 85,  184 => 89,  172 => 18,  167 => 76,  127 => 101,  110 => 140,  65 => 45,  124 => 44,  114 => 141,  77 => 10,  70 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 139,  177 => 127,  169 => 17,  140 => 66,  132 => 46,  128 => 45,  107 => 140,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 103,  240 => 8,  238 => 105,  235 => 7,  230 => 101,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 99,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 15,  135 => 53,  119 => 42,  102 => 49,  71 => 21,  67 => 16,  63 => 20,  59 => 14,  38 => 17,  94 => 28,  89 => 42,  85 => 30,  75 => 28,  68 => 20,  56 => 18,  87 => 31,  21 => 1,  26 => 12,  93 => 29,  88 => 42,  78 => 24,  46 => 13,  27 => 5,  44 => 21,  31 => 4,  28 => 6,  201 => 92,  196 => 38,  183 => 27,  171 => 61,  166 => 16,  163 => 62,  158 => 67,  156 => 12,  151 => 11,  142 => 8,  138 => 49,  136 => 65,  121 => 75,  117 => 74,  105 => 40,  91 => 33,  62 => 21,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 25,  69 => 25,  47 => 13,  40 => 12,  37 => 7,  22 => 3,  246 => 104,  157 => 118,  145 => 14,  139 => 45,  131 => 63,  123 => 58,  120 => 40,  115 => 43,  111 => 71,  108 => 38,  101 => 52,  98 => 43,  96 => 24,  83 => 31,  74 => 51,  66 => 15,  55 => 26,  52 => 19,  50 => 15,  43 => 10,  41 => 20,  35 => 8,  32 => 7,  29 => 3,  209 => 137,  203 => 136,  199 => 90,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 20,  173 => 126,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 78,  130 => 80,  125 => 76,  122 => 143,  116 => 41,  112 => 42,  109 => 51,  106 => 50,  103 => 136,  99 => 135,  95 => 34,  92 => 46,  86 => 28,  82 => 20,  80 => 28,  73 => 18,  64 => 19,  60 => 17,  57 => 15,  54 => 16,  51 => 26,  48 => 14,  45 => 11,  42 => 16,  39 => 15,  36 => 7,  33 => 6,  30 => 11,);
    }
}
