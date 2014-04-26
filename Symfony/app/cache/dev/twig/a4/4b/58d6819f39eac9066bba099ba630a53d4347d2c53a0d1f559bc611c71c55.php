<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a44b58d6819f39eac9066bba099ba630a53d4347d2c53a0d1f559bc611c71c55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  300 => 13,  297 => 12,  213 => 186,  279 => 23,  276 => 22,  267 => 13,  263 => 12,  255 => 10,  234 => 184,  152 => 117,  137 => 111,  192 => 24,  188 => 23,  167 => 11,  34 => 15,  194 => 7,  191 => 6,  170 => 118,  290 => 19,  287 => 18,  284 => 17,  274 => 8,  266 => 6,  245 => 178,  237 => 176,  228 => 173,  172 => 12,  155 => 115,  231 => 20,  215 => 19,  211 => 8,  206 => 7,  185 => 22,  180 => 122,  150 => 111,  251 => 18,  248 => 17,  242 => 9,  233 => 175,  212 => 18,  207 => 183,  198 => 134,  195 => 133,  186 => 163,  165 => 120,  161 => 120,  153 => 113,  127 => 101,  65 => 45,  160 => 92,  148 => 116,  146 => 111,  134 => 108,  129 => 83,  124 => 81,  20 => 1,  77 => 24,  70 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 14,  298 => 91,  294 => 20,  285 => 89,  283 => 24,  278 => 9,  268 => 85,  264 => 84,  258 => 11,  252 => 80,  247 => 78,  241 => 177,  229 => 73,  220 => 70,  214 => 69,  177 => 127,  169 => 60,  140 => 55,  132 => 51,  128 => 102,  107 => 36,  61 => 22,  273 => 21,  269 => 7,  254 => 19,  243 => 88,  240 => 86,  238 => 8,  235 => 74,  230 => 183,  227 => 19,  224 => 18,  221 => 17,  219 => 20,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 116,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 23,  63 => 15,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 35,  56 => 20,  87 => 25,  21 => 1,  26 => 12,  93 => 28,  88 => 6,  78 => 55,  46 => 7,  27 => 4,  44 => 26,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 119,  166 => 117,  163 => 117,  158 => 115,  156 => 118,  151 => 63,  142 => 113,  138 => 109,  136 => 56,  121 => 46,  117 => 80,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 27,  69 => 49,  47 => 18,  40 => 22,  37 => 10,  22 => 2,  246 => 90,  157 => 118,  145 => 46,  139 => 108,  131 => 52,  123 => 47,  120 => 40,  115 => 79,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 51,  66 => 15,  55 => 15,  52 => 19,  50 => 10,  43 => 8,  41 => 9,  35 => 17,  32 => 10,  29 => 5,  209 => 17,  203 => 9,  199 => 8,  193 => 73,  189 => 71,  187 => 84,  182 => 162,  176 => 13,  173 => 126,  168 => 118,  164 => 10,  162 => 116,  154 => 113,  149 => 51,  147 => 58,  144 => 110,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 25,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 17,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
