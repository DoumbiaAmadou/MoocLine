<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_0f295ae1f2d00c960706f96ccd3902a34e30f12e90a032362e2e2daa2be2a7f5 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  262 => 98,  248 => 94,  226 => 84,  185 => 66,  178 => 66,  20 => 1,  279 => 23,  276 => 22,  267 => 101,  255 => 10,  234 => 184,  260 => 20,  250 => 17,  244 => 9,  198 => 134,  195 => 133,  81 => 23,  137 => 111,  58 => 19,  160 => 13,  170 => 81,  97 => 47,  129 => 47,  113 => 48,  104 => 26,  100 => 39,  34 => 4,  127 => 45,  110 => 39,  84 => 24,  76 => 31,  53 => 12,  232 => 6,  228 => 19,  225 => 18,  222 => 17,  205 => 7,  155 => 120,  263 => 12,  259 => 19,  256 => 96,  253 => 18,  239 => 8,  172 => 64,  118 => 49,  184 => 89,  180 => 26,  174 => 82,  150 => 55,  134 => 54,  126 => 144,  292 => 85,  236 => 7,  216 => 79,  212 => 9,  206 => 17,  191 => 67,  188 => 10,  152 => 117,  148 => 116,  23 => 3,  233 => 87,  223 => 28,  215 => 82,  213 => 78,  210 => 79,  207 => 75,  202 => 6,  200 => 72,  197 => 71,  194 => 70,  186 => 129,  181 => 65,  165 => 60,  161 => 63,  153 => 56,  146 => 52,  90 => 27,  65 => 45,  124 => 45,  114 => 41,  77 => 28,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 24,  278 => 106,  268 => 85,  264 => 84,  258 => 11,  252 => 80,  247 => 10,  241 => 90,  229 => 85,  220 => 81,  214 => 139,  177 => 127,  169 => 17,  140 => 58,  132 => 51,  128 => 40,  107 => 140,  61 => 20,  273 => 21,  269 => 94,  254 => 92,  243 => 9,  240 => 8,  238 => 85,  235 => 7,  230 => 183,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 8,  204 => 20,  179 => 69,  159 => 112,  143 => 50,  135 => 53,  119 => 40,  102 => 40,  71 => 25,  67 => 24,  63 => 20,  59 => 14,  38 => 6,  94 => 34,  89 => 30,  85 => 21,  75 => 26,  68 => 25,  56 => 14,  87 => 34,  21 => 1,  26 => 2,  93 => 28,  88 => 22,  78 => 55,  46 => 13,  27 => 3,  44 => 26,  31 => 4,  28 => 6,  201 => 92,  196 => 38,  183 => 27,  171 => 65,  166 => 16,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 113,  138 => 49,  136 => 65,  121 => 50,  117 => 74,  105 => 34,  91 => 33,  62 => 21,  49 => 14,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 13,  40 => 8,  37 => 7,  22 => 3,  246 => 93,  157 => 118,  145 => 14,  139 => 45,  131 => 48,  123 => 42,  120 => 57,  115 => 43,  111 => 47,  108 => 37,  101 => 25,  98 => 36,  96 => 37,  83 => 33,  74 => 21,  66 => 23,  55 => 16,  52 => 19,  50 => 15,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 3,  209 => 137,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 63,  173 => 126,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 84,  147 => 54,  144 => 158,  141 => 51,  133 => 78,  130 => 46,  125 => 51,  122 => 143,  116 => 39,  112 => 34,  109 => 33,  106 => 32,  103 => 49,  99 => 31,  95 => 34,  92 => 23,  86 => 31,  82 => 22,  80 => 32,  73 => 20,  64 => 23,  60 => 15,  57 => 16,  54 => 20,  51 => 12,  48 => 14,  45 => 10,  42 => 21,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
