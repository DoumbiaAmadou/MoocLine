<?php

/* mooclineCompteBundle:Group:new_content.html.twig */
class __TwigTemplate_20efda2b883ce40f1c0e7819042e375ee289a17439827fc252b51c54745eda3d extends Twig_Template
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
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  256 => 116,  253 => 115,  250 => 114,  236 => 103,  233 => 102,  225 => 107,  223 => 101,  194 => 88,  188 => 85,  184 => 84,  172 => 78,  167 => 76,  127 => 39,  110 => 31,  65 => 118,  124 => 36,  114 => 27,  77 => 10,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 65,  169 => 77,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 103,  240 => 86,  238 => 105,  235 => 74,  230 => 101,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 99,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 37,  102 => 25,  71 => 8,  67 => 16,  63 => 114,  59 => 14,  38 => 6,  94 => 28,  89 => 13,  85 => 12,  75 => 17,  68 => 14,  56 => 109,  87 => 21,  21 => 2,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 10,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 35,  117 => 28,  105 => 40,  91 => 27,  62 => 32,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 25,  47 => 11,  40 => 10,  37 => 10,  22 => 3,  246 => 104,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 38,  120 => 40,  115 => 43,  111 => 37,  108 => 29,  101 => 32,  98 => 21,  96 => 24,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 93,  203 => 78,  199 => 90,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 79,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 32,  99 => 31,  95 => 20,  92 => 21,  86 => 28,  82 => 20,  80 => 11,  73 => 18,  64 => 17,  60 => 16,  57 => 15,  54 => 99,  51 => 98,  48 => 13,  45 => 17,  42 => 15,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
