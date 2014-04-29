<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_a61f231e99cba27cc9d0592cd377ec5d5dc0db93f18cbd297d7272b5de845d9f extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 13,  297 => 12,  213 => 186,  20 => 1,  279 => 23,  276 => 22,  267 => 13,  263 => 12,  255 => 10,  137 => 111,  188 => 23,  134 => 108,  194 => 7,  191 => 6,  290 => 19,  287 => 18,  284 => 17,  274 => 8,  266 => 6,  245 => 178,  228 => 173,  155 => 115,  231 => 20,  211 => 8,  206 => 7,  185 => 22,  150 => 111,  251 => 18,  248 => 17,  242 => 9,  233 => 175,  212 => 18,  198 => 134,  195 => 133,  161 => 120,  153 => 113,  146 => 111,  127 => 101,  65 => 45,  114 => 141,  110 => 140,  180 => 122,  172 => 12,  160 => 13,  148 => 116,  23 => 4,  113 => 143,  152 => 117,  129 => 77,  237 => 176,  234 => 184,  226 => 99,  218 => 99,  215 => 19,  207 => 183,  202 => 90,  197 => 89,  192 => 24,  186 => 163,  174 => 78,  170 => 118,  167 => 11,  165 => 120,  126 => 144,  118 => 142,  97 => 21,  84 => 12,  76 => 10,  70 => 8,  53 => 91,  90 => 30,  77 => 28,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 14,  298 => 91,  294 => 20,  285 => 89,  283 => 24,  278 => 9,  268 => 85,  264 => 84,  258 => 11,  252 => 80,  247 => 78,  241 => 177,  229 => 100,  220 => 70,  214 => 69,  177 => 127,  169 => 17,  140 => 55,  132 => 51,  128 => 102,  107 => 140,  61 => 13,  273 => 21,  269 => 7,  254 => 19,  243 => 88,  240 => 111,  238 => 8,  235 => 74,  230 => 183,  227 => 19,  224 => 18,  221 => 17,  219 => 20,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 116,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 31,  67 => 15,  63 => 15,  59 => 14,  38 => 8,  94 => 20,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 20,  87 => 29,  21 => 1,  26 => 12,  93 => 28,  88 => 13,  78 => 55,  46 => 7,  27 => 5,  44 => 26,  31 => 4,  28 => 3,  201 => 92,  196 => 38,  183 => 27,  171 => 119,  166 => 117,  163 => 117,  158 => 115,  156 => 118,  151 => 11,  142 => 113,  138 => 109,  136 => 56,  121 => 75,  117 => 74,  105 => 40,  91 => 27,  62 => 25,  49 => 15,  24 => 7,  25 => 1,  19 => 2,  79 => 11,  72 => 16,  69 => 49,  47 => 13,  40 => 22,  37 => 10,  22 => 3,  246 => 90,  157 => 118,  145 => 14,  139 => 108,  131 => 73,  123 => 47,  120 => 40,  115 => 43,  111 => 71,  108 => 36,  101 => 52,  98 => 36,  96 => 31,  83 => 40,  74 => 51,  66 => 15,  55 => 104,  52 => 19,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 10,  29 => 6,  209 => 17,  203 => 9,  199 => 8,  193 => 73,  189 => 71,  187 => 84,  182 => 162,  176 => 13,  173 => 126,  168 => 118,  164 => 10,  162 => 116,  154 => 113,  149 => 84,  147 => 58,  144 => 110,  141 => 48,  133 => 78,  130 => 41,  125 => 76,  122 => 143,  116 => 41,  112 => 42,  109 => 31,  106 => 36,  103 => 136,  99 => 135,  95 => 35,  92 => 46,  86 => 28,  82 => 32,  80 => 29,  73 => 19,  64 => 113,  60 => 6,  57 => 23,  54 => 10,  51 => 26,  48 => 12,  45 => 20,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
