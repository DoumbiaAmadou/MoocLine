<?php

/* mooclineCompteBundle:Modification:layout.html.twig */
class __TwigTemplate_ad6e3758a81d5602fa1402be973f44dabed17a8fae9f611abf0cecf8287ce9e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Modification:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  232 => 20,  228 => 19,  225 => 18,  205 => 7,  202 => 6,  155 => 120,  65 => 43,  263 => 20,  259 => 19,  256 => 18,  253 => 17,  239 => 8,  172 => 20,  165 => 18,  184 => 9,  180 => 8,  150 => 110,  292 => 85,  223 => 28,  216 => 10,  200 => 19,  188 => 10,  152 => 9,  23 => 4,  148 => 8,  118 => 96,  84 => 29,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 17,  190 => 77,  185 => 75,  178 => 71,  174 => 6,  137 => 54,  126 => 99,  70 => 26,  58 => 14,  257 => 105,  251 => 103,  236 => 7,  233 => 6,  222 => 17,  212 => 9,  207 => 78,  197 => 18,  161 => 53,  146 => 109,  134 => 100,  127 => 28,  110 => 22,  81 => 11,  53 => 10,  34 => 5,  114 => 43,  195 => 81,  191 => 12,  186 => 69,  175 => 73,  170 => 71,  153 => 61,  124 => 36,  90 => 32,  77 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 68,  140 => 55,  132 => 51,  128 => 50,  107 => 82,  61 => 12,  273 => 96,  269 => 94,  254 => 105,  243 => 9,  240 => 86,  238 => 98,  235 => 74,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 8,  204 => 20,  179 => 67,  159 => 112,  143 => 56,  135 => 61,  119 => 47,  102 => 17,  71 => 105,  67 => 104,  63 => 103,  59 => 14,  38 => 6,  94 => 34,  89 => 33,  85 => 31,  75 => 29,  68 => 23,  56 => 11,  87 => 115,  21 => 1,  26 => 6,  93 => 28,  88 => 31,  78 => 26,  46 => 7,  27 => 4,  44 => 10,  31 => 4,  28 => 6,  201 => 82,  196 => 13,  183 => 140,  171 => 61,  166 => 128,  163 => 62,  158 => 63,  156 => 10,  151 => 63,  142 => 110,  138 => 157,  136 => 55,  121 => 47,  117 => 19,  105 => 18,  91 => 27,  62 => 21,  49 => 11,  24 => 2,  25 => 1,  19 => 2,  79 => 18,  72 => 8,  69 => 18,  47 => 8,  40 => 16,  37 => 17,  22 => 3,  246 => 92,  157 => 162,  145 => 7,  139 => 62,  131 => 52,  123 => 37,  120 => 20,  115 => 43,  111 => 42,  108 => 19,  101 => 32,  98 => 36,  96 => 117,  83 => 114,  74 => 19,  66 => 22,  55 => 36,  52 => 27,  50 => 9,  43 => 17,  41 => 5,  35 => 6,  32 => 9,  29 => 5,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 64,  173 => 65,  168 => 19,  164 => 59,  162 => 17,  154 => 58,  149 => 51,  147 => 58,  144 => 158,  141 => 57,  133 => 55,  130 => 99,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 81,  103 => 81,  99 => 21,  95 => 28,  92 => 24,  86 => 12,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 16,  57 => 19,  54 => 96,  51 => 15,  48 => 16,  45 => 22,  42 => 12,  39 => 22,  36 => 4,  33 => 3,  30 => 12,);
    }
}
