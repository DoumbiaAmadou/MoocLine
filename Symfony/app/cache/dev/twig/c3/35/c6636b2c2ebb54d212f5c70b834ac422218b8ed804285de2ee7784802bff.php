<?php

/* mooclineCompteBundle:Profile:show_content.html.twig */
class __TwigTemplate_c335c6636b2c2ebb54d212f5c70b834ac422218b8ed804285de2ee7784802bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
\t";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "

\t";
        // line 24
        echo "  \t<section>
     \t<article>
\t        <h3><img class=\"ico_categorie\" />BIENVENUE SUR ESPACE ETUDIANT</h3>
\t        <div id=\"gestionc\">
\t          <h4>Gestion de cours</h4>
\t          <b>
\t            <a href=\"#\">M'inscrire à un cours</a><br/>
\t            <a href=\"#\">Me désinscrire à un cours</a>
\t          </b>
\t        </div>
\t        <div id=\"notif\">
\t          <h4>Notifications</h4>
\t          <b>
\t            <a href=\"#\"><font color=\"\">Devoirs corrigés</font></a><br/>
\t            <a href=\"#\"><font color=\"\">Devoirs en attente</font></a><br/>
\t          </b>
\t        </div>
\t        <div id=\"cours\">
\t          <h4>Mes cours</h4>  
\t          <b>
\t            <a href=\"#\">Cours de Réseaux et Télécommunication</a><br/>
\t            <a href=\"#\">Cours de Bases de données</a><br/>
\t            <a href=\"#\">Cours d' Interfaces graphiques</a><br/>
\t            <a href=\"#\">Cours de Java</a><br/>
\t          </b>
\t        </div>
\t        <div id=\"devoirs\">
\t          <h4>Devoirs</h4>
\t          <br/>
\t          <b>Devoirs commencés</b>
\t          <br/>
\t          <ul>
\t            <li><a href=\"#\">Devoir Mindstorm</a></li>
\t            <li><a href=\"#\">Devoir Dazibao</a></li>
\t          </ul>
\t          <b>Nouveaux Devoirs</b>
\t          <br/>
\t          <ul>
\t            <li><a href=\"#\">Devoir Socket</a></li>
\t            <li><a href=\"#\">Devoir Génie Logiciel</a></li>
\t          </ul>
\t        </div>
     \t</article>
      \t<aside>
\t        <h4><a href=\"#\"> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</a></h4>
\t        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bulle.png"), "html", null, true);
        echo "\" alt=\"\" id=\"fleche_bulle\" />
\t        <p id=\"photo_gayllord\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/student2.png"), "html", null, true);
        echo "\" alt=\"Photo de Gayllord\" /></p>
\t        <a href=\"#\">Email: ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</a>
\t        <p></p>
\t        <p>
\t        \t<a href=\"https://www.facebook.com/\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\" /></a>
\t          \t<a href=\"https://www.twitter.com/\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\" /></a>
\t          \t<a href=\"https://vimeo.com/\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/vimeo.png"), "html", null, true);
        echo "\" alt=\"Vimeo\" /></a>
\t          \t<a href=\"https://www.flickr.com/\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flickr.png"), "html", null, true);
        echo "\" alt=\"Flickr\" /></a>
\t          \t<img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rss.png"), "html", null, true);
        echo "\" alt=\"RSS\" />
\t        </p>
      \t</aside>
    </section>
";
    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 14
        echo "\t";
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        // line 85
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 77,  113 => 75,  104 => 72,  100 => 71,  76 => 33,  232 => 20,  228 => 19,  225 => 18,  205 => 7,  202 => 6,  155 => 120,  65 => 43,  263 => 20,  259 => 19,  256 => 18,  253 => 17,  239 => 8,  172 => 20,  165 => 18,  184 => 9,  180 => 8,  150 => 87,  292 => 85,  223 => 28,  216 => 10,  200 => 19,  188 => 10,  152 => 85,  23 => 4,  148 => 8,  118 => 77,  84 => 29,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 17,  190 => 77,  185 => 75,  178 => 71,  174 => 6,  137 => 54,  126 => 79,  70 => 26,  58 => 14,  257 => 105,  251 => 103,  236 => 7,  233 => 6,  222 => 17,  212 => 9,  207 => 78,  197 => 18,  161 => 53,  146 => 16,  134 => 81,  127 => 28,  110 => 53,  81 => 11,  53 => 24,  34 => 8,  114 => 43,  195 => 81,  191 => 12,  186 => 69,  175 => 73,  170 => 71,  153 => 88,  124 => 36,  90 => 32,  77 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 68,  140 => 55,  132 => 51,  128 => 50,  107 => 70,  61 => 12,  273 => 96,  269 => 94,  254 => 105,  243 => 9,  240 => 86,  238 => 98,  235 => 74,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 8,  204 => 20,  179 => 67,  159 => 112,  143 => 15,  135 => 61,  119 => 47,  102 => 50,  71 => 105,  67 => 104,  63 => 103,  59 => 14,  38 => 6,  94 => 34,  89 => 43,  85 => 31,  75 => 29,  68 => 23,  56 => 11,  87 => 115,  21 => 1,  26 => 6,  93 => 28,  88 => 31,  78 => 26,  46 => 7,  27 => 4,  44 => 12,  31 => 7,  28 => 4,  201 => 82,  196 => 13,  183 => 140,  171 => 61,  166 => 128,  163 => 62,  158 => 63,  156 => 10,  151 => 63,  142 => 13,  138 => 157,  136 => 68,  121 => 75,  117 => 74,  105 => 51,  91 => 27,  62 => 21,  49 => 15,  24 => 2,  25 => 1,  19 => 2,  79 => 18,  72 => 8,  69 => 18,  47 => 13,  40 => 9,  37 => 17,  22 => 3,  246 => 92,  157 => 162,  145 => 14,  139 => 62,  131 => 52,  123 => 37,  120 => 57,  115 => 43,  111 => 71,  108 => 73,  101 => 32,  98 => 49,  96 => 117,  83 => 114,  74 => 19,  66 => 26,  55 => 36,  52 => 27,  50 => 9,  43 => 10,  41 => 11,  35 => 6,  32 => 9,  29 => 4,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 64,  173 => 65,  168 => 19,  164 => 59,  162 => 17,  154 => 58,  149 => 84,  147 => 58,  144 => 158,  141 => 57,  133 => 78,  130 => 80,  125 => 76,  122 => 78,  116 => 41,  112 => 42,  109 => 34,  106 => 81,  103 => 69,  99 => 68,  95 => 28,  92 => 24,  86 => 12,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 16,  57 => 19,  54 => 19,  51 => 15,  48 => 16,  45 => 22,  42 => 12,  39 => 22,  36 => 4,  33 => 6,  30 => 12,);
    }
}
