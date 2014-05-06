<?php

/* mooclineCompteBundle:Profile:show.html.twig */
class __TwigTemplate_a8944dc6a0ebb5baf9320896c23f02e9c91c61e444dd4c367ca8e42f99175cf7 extends Twig_Template
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

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
\t";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "

\t";
        // line 26
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
\t        <div class=\"user\">
\t        \t<a href=\"#\"> ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</a><br>
\t        \t<a href=\"#\">Email: ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</a>
\t        \t<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/student2.png"), "html", null, true);
        echo "\" alt=\"Photo de Gayllord\" />
\t        </div>
\t        <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bulle.png"), "html", null, true);
        echo "\" alt=\"\" id=\"fleche_bulle\" />
\t        <span>
\t\t        <a href=\"https://www.facebook.com/\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\" /></a>
\t          \t<a href=\"https://www.twitter.com/\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\" /></a>
\t          \t<a href=\"https://vimeo.com/\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/vimeo.png"), "html", null, true);
        echo "\" alt=\"Vimeo\" /></a>
\t          \t<a href=\"https://www.flickr.com/\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flickr.png"), "html", null, true);
        echo "\" alt=\"Flickr\" /></a>
\t          \t<a href=\"#\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rss.png"), "html", null, true);
        echo "\" alt=\"RSS\" /></a>
          \t</span>
      \t</aside>
    </section>
";
    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 16
        echo "\t";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 88,  150 => 87,  146 => 16,  134 => 81,  126 => 79,  118 => 77,  113 => 75,  104 => 72,  100 => 71,  53 => 26,  34 => 10,  23 => 4,  256 => 116,  253 => 115,  250 => 114,  236 => 103,  233 => 102,  225 => 107,  223 => 101,  194 => 88,  188 => 85,  184 => 84,  172 => 78,  167 => 76,  127 => 39,  110 => 31,  65 => 118,  124 => 36,  114 => 27,  77 => 10,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 65,  169 => 77,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 103,  240 => 86,  238 => 105,  235 => 74,  230 => 101,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 99,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 15,  135 => 53,  119 => 37,  102 => 25,  71 => 8,  67 => 16,  63 => 114,  59 => 14,  38 => 6,  94 => 28,  89 => 13,  85 => 12,  75 => 17,  68 => 14,  56 => 109,  87 => 21,  21 => 2,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 14,  31 => 9,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 35,  117 => 28,  105 => 40,  91 => 27,  62 => 32,  49 => 17,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 25,  47 => 15,  40 => 10,  37 => 10,  22 => 3,  246 => 104,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 38,  120 => 40,  115 => 43,  111 => 37,  108 => 73,  101 => 32,  98 => 21,  96 => 24,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 13,  35 => 8,  32 => 4,  29 => 3,  209 => 93,  203 => 78,  199 => 90,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 79,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 80,  125 => 44,  122 => 78,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 32,  99 => 31,  95 => 20,  92 => 21,  86 => 28,  82 => 20,  80 => 11,  73 => 18,  64 => 17,  60 => 16,  57 => 15,  54 => 99,  51 => 98,  48 => 13,  45 => 17,  42 => 15,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
