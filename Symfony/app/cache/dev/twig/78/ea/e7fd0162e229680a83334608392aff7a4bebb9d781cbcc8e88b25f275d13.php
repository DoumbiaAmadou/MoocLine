<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_78eae7fd0162e229680a83334608392aff7a4bebb9d781cbcc8e88b25f275d13 extends Twig_Template
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
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  300 => 13,  297 => 12,  213 => 186,  279 => 23,  276 => 22,  267 => 13,  263 => 12,  255 => 10,  234 => 184,  152 => 117,  137 => 111,  192 => 24,  188 => 23,  167 => 11,  34 => 15,  194 => 7,  191 => 6,  170 => 118,  290 => 19,  287 => 18,  284 => 17,  274 => 8,  266 => 6,  245 => 178,  237 => 176,  228 => 173,  172 => 12,  155 => 115,  231 => 20,  215 => 19,  211 => 8,  206 => 7,  185 => 22,  180 => 122,  150 => 111,  251 => 18,  248 => 17,  242 => 9,  233 => 175,  212 => 18,  207 => 183,  198 => 134,  195 => 133,  186 => 163,  165 => 120,  161 => 120,  153 => 113,  127 => 101,  65 => 45,  160 => 92,  148 => 116,  146 => 111,  134 => 108,  129 => 83,  124 => 81,  20 => 1,  77 => 24,  70 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 14,  298 => 91,  294 => 20,  285 => 89,  283 => 24,  278 => 9,  268 => 85,  264 => 84,  258 => 11,  252 => 80,  247 => 78,  241 => 177,  229 => 73,  220 => 70,  214 => 69,  177 => 127,  169 => 60,  140 => 55,  132 => 51,  128 => 102,  107 => 36,  61 => 22,  273 => 21,  269 => 7,  254 => 19,  243 => 88,  240 => 86,  238 => 8,  235 => 74,  230 => 183,  227 => 19,  224 => 18,  221 => 17,  219 => 20,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 116,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 23,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 35,  56 => 20,  87 => 25,  21 => 1,  26 => 6,  93 => 28,  88 => 6,  78 => 55,  46 => 7,  27 => 4,  44 => 26,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 119,  166 => 117,  163 => 117,  158 => 115,  156 => 118,  151 => 63,  142 => 113,  138 => 109,  136 => 56,  121 => 46,  117 => 80,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 27,  69 => 49,  47 => 18,  40 => 22,  37 => 10,  22 => 3,  246 => 90,  157 => 118,  145 => 46,  139 => 108,  131 => 52,  123 => 47,  120 => 40,  115 => 79,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 51,  66 => 15,  55 => 15,  52 => 19,  50 => 10,  43 => 8,  41 => 7,  35 => 17,  32 => 10,  29 => 5,  209 => 17,  203 => 9,  199 => 8,  193 => 73,  189 => 71,  187 => 84,  182 => 162,  176 => 13,  173 => 126,  168 => 118,  164 => 10,  162 => 116,  154 => 113,  149 => 51,  147 => 58,  144 => 110,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 25,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 21,  39 => 9,  36 => 7,  33 => 6,  30 => 11,);
    }
}
