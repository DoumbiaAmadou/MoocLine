<?php

/* mooclineCompteBundle:Group:edit_content.html.twig */
class __TwigTemplate_7b84b62cf2a778ab542d371ce91e28c1020f79026770522431796ceef5b1bfc9 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 9,  180 => 8,  174 => 6,  150 => 110,  134 => 100,  126 => 98,  292 => 85,  236 => 39,  216 => 21,  212 => 19,  206 => 17,  191 => 12,  188 => 10,  152 => 160,  148 => 159,  23 => 1,  233 => 93,  223 => 28,  215 => 82,  213 => 80,  210 => 79,  207 => 78,  202 => 84,  200 => 19,  197 => 18,  194 => 17,  186 => 70,  181 => 68,  165 => 62,  161 => 61,  153 => 56,  146 => 109,  90 => 14,  65 => 95,  124 => 39,  114 => 27,  77 => 10,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 60,  140 => 55,  132 => 51,  128 => 40,  107 => 82,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 20,  179 => 69,  159 => 112,  143 => 56,  135 => 53,  119 => 42,  102 => 25,  71 => 105,  67 => 104,  63 => 103,  59 => 14,  38 => 11,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 86,  87 => 115,  21 => 1,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 10,  31 => 4,  28 => 4,  201 => 92,  196 => 13,  183 => 82,  171 => 65,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 157,  136 => 56,  121 => 35,  117 => 28,  105 => 40,  91 => 27,  62 => 32,  49 => 21,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 25,  47 => 11,  40 => 16,  37 => 17,  22 => 3,  246 => 90,  157 => 162,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 38,  115 => 43,  111 => 32,  108 => 29,  101 => 32,  98 => 31,  96 => 117,  83 => 114,  74 => 14,  66 => 15,  55 => 36,  52 => 27,  50 => 10,  43 => 17,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 67,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 55,  147 => 58,  144 => 158,  141 => 48,  133 => 55,  130 => 99,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 32,  99 => 22,  95 => 28,  92 => 21,  86 => 13,  82 => 20,  80 => 11,  73 => 18,  64 => 42,  60 => 16,  57 => 15,  54 => 96,  51 => 75,  48 => 13,  45 => 22,  42 => 16,  39 => 22,  36 => 5,  33 => 6,  30 => 12,);
    }
}
