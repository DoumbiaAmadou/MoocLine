<?php

/* mooclineCompteBundle:Contact:qui_sommes_nous.html.twig */
class __TwigTemplate_9521211e42f727c517ad734555a3e94d5971dbe54363a6d7df73b0dbf47c3653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " 
    Qui sommes Nous
  ";
    }

    // line 10
    public function block_container($context, array $blocks = array())
    {
        // line 11
        echo "  \t<div class=\"row\">
  \t\t<div class=\"col-md-6 col-md-offset-3\">
  \t\t\t<h2>Qui sommes nous</h2>
  \t\t\t<p><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" style=\"heigh:20px ; width : 40px\"></a>'Line est un projet \tacadémique proposé par <a href=\"http://www.univ-paris-diderot.fr/\"> l'université Paris Diderot</a> dans le cadre de l'enseignement de l'UE <a href=\"http://upsilon.cc/~zack/teaching/1314/gla/\">Génie logiciel Avancé</a>. Elle se veut être une plateforme de cours en ligne est interactif est ouverte à tous, permettant ainsi à des utilisateurs différents horizons de s’instruire au travers des cours proposés sur la plateforme. L'un des principes de cette plateforme est de permettre à ces utilisateurs de valider les connaissances acquises dans un cours. Pour cela, <a href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" style=\"heigh:20px ; width : 40px\"></a>'Line est dotée d'un module qui assure l'évaluation automatique, l'évaluation entre différents utilisateurq, etc...
  \t\t\t</p>
  \t\t</div>
\t</div>
\t<div class=\"row\">
  \t\t<div class=\"col-md-6 col-md-offset-3\">
  \t\t\t<h2>Contexte</h2>
  \t\t\t<p>Le contexte premier de la plateforme sera exclusivement éducatif, le but étant de permettre à un maximum de personnes d'avoir la possibilité de s'instruire malgré les contraintes qui s'opposaient à eux.
Ce projet est à l’image du réseau « FUN - France Université Numérique », la plateforme française de cours en ligne, ouverte depuis le 16 janvier 2014. Plusieurs cours numériques ont été ouverts pour les 100 000 inscrits de la plateforme. Des plateformes similaires sont disponibles aux Etats Unis depuis 2010 et affichent un nombre d'inscrits de plus de 6 millions.</p>
  \t\t</div>
\t</div>
  ";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Contact:qui_sommes_nous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 84,  194 => 78,  190 => 77,  185 => 75,  178 => 71,  174 => 70,  137 => 54,  126 => 49,  70 => 26,  58 => 13,  257 => 105,  251 => 103,  236 => 91,  233 => 96,  222 => 91,  212 => 80,  207 => 78,  197 => 74,  161 => 53,  146 => 57,  134 => 42,  127 => 38,  110 => 42,  81 => 11,  53 => 10,  34 => 5,  114 => 43,  195 => 81,  191 => 80,  186 => 69,  175 => 73,  170 => 71,  153 => 61,  124 => 36,  90 => 13,  77 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 66,  169 => 68,  140 => 55,  132 => 51,  128 => 50,  107 => 41,  61 => 13,  273 => 96,  269 => 94,  254 => 105,  243 => 91,  240 => 86,  238 => 98,  235 => 74,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 68,  204 => 72,  179 => 67,  159 => 61,  143 => 56,  135 => 53,  119 => 47,  102 => 25,  71 => 19,  67 => 20,  63 => 15,  59 => 14,  38 => 7,  94 => 35,  89 => 33,  85 => 31,  75 => 17,  68 => 23,  56 => 17,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 28,  46 => 7,  27 => 3,  44 => 10,  31 => 4,  28 => 4,  201 => 82,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 63,  156 => 66,  151 => 63,  142 => 56,  138 => 43,  136 => 55,  121 => 47,  117 => 28,  105 => 40,  91 => 27,  62 => 21,  49 => 19,  24 => 2,  25 => 1,  19 => 2,  79 => 18,  72 => 8,  69 => 18,  47 => 11,  40 => 11,  37 => 10,  22 => 3,  246 => 92,  157 => 52,  145 => 58,  139 => 45,  131 => 52,  123 => 37,  120 => 40,  115 => 43,  111 => 42,  108 => 29,  101 => 32,  98 => 36,  96 => 20,  83 => 22,  74 => 19,  66 => 22,  55 => 96,  52 => 17,  50 => 9,  43 => 8,  41 => 15,  35 => 5,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 64,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 57,  133 => 55,  130 => 50,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 32,  99 => 21,  95 => 28,  92 => 24,  86 => 12,  82 => 29,  80 => 19,  73 => 26,  64 => 19,  60 => 16,  57 => 19,  54 => 14,  51 => 15,  48 => 16,  45 => 14,  42 => 12,  39 => 7,  36 => 6,  33 => 6,  30 => 7,);
    }
}
