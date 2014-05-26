<?php

/* mooclineCompteBundle:Dashboard:EtuDashboard.html.twig */
class __TwigTemplate_09d3131054c91e3ba7c1014194a13d5e22d5dd95ccc85c368f6d80cb0a758f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
  ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo " - DashBoard
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo " 
             <div class=\"container\">
        <div class=\"row centered-form\">
      <div class=\"col-xs-10 col-sm-5 col-md-8 col-sm-offset-3 col-md-offset-2\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
              <h2 class=\"panel-title\"> <strong>Tableau de bord Etudiant</strong> </small></h2>
          </div>
          <div class=\"panel-body\">

<form class=\"form-horizontal\" method=\"POST\" action=\"\">
<fieldset>
<section>
<aside>
\t        <div class=\"user\">
\t        \t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vue_Etudiant", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
        echo "</a>
\t        \t
\t        \t<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/student2.png"), "html", null, true);
        echo "\" alt=\"Photo de Gayllord\" />
\t        </div>
\t        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bulle.png"), "html", null, true);
        echo "\" alt=\"\" id=\"fleche_bulle\" />
\t        <span>
\t\t        <a href=\"https://www.facebook.com/\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\" /></a>
\t          \t<a href=\"https://www.twitter.com/\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\" /></a>
\t          \t<a href=\"https://vimeo.com/\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/vimeo.png"), "html", null, true);
        echo "\" alt=\"Vimeo\" /></a>
\t          \t
\t          \t<a href=\"#\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rss.png"), "html", null, true);
        echo "\" alt=\"RSS\" /></a>
          \t</span>
     </aside>

<article>
\t\t\t<div id=\"gestionc\">
\t          <h4>Gestion de cours</h4>
\t          <b>
\t            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("moocline_cours_list");
        echo "\">M'inscrire à un cours</a><br/>
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
                      ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cours"));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 62
            echo "\t            <a href=\"#\">";
            echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
            echo "</a><br/>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t          </b>
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
     </article>
     
\t


</section>


</fieldset>
</form>

          </div></div></div></div></div>
\t  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Dashboard:EtuDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 64,  118 => 47,  84 => 31,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 84,  194 => 78,  190 => 77,  185 => 75,  178 => 71,  174 => 70,  137 => 54,  126 => 49,  70 => 26,  58 => 14,  257 => 105,  251 => 103,  236 => 91,  233 => 96,  222 => 91,  212 => 80,  207 => 78,  197 => 74,  161 => 53,  146 => 57,  134 => 42,  127 => 38,  110 => 42,  81 => 11,  53 => 10,  34 => 5,  114 => 43,  195 => 81,  191 => 80,  186 => 69,  175 => 73,  170 => 71,  153 => 61,  124 => 36,  90 => 13,  77 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 66,  169 => 68,  140 => 55,  132 => 51,  128 => 50,  107 => 39,  61 => 13,  273 => 96,  269 => 94,  254 => 105,  243 => 91,  240 => 86,  238 => 98,  235 => 74,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 68,  204 => 72,  179 => 67,  159 => 61,  143 => 56,  135 => 61,  119 => 47,  102 => 37,  71 => 19,  67 => 20,  63 => 15,  59 => 14,  38 => 7,  94 => 35,  89 => 33,  85 => 31,  75 => 29,  68 => 23,  56 => 17,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 28,  46 => 7,  27 => 3,  44 => 10,  31 => 4,  28 => 4,  201 => 82,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 63,  156 => 66,  151 => 63,  142 => 56,  138 => 43,  136 => 55,  121 => 47,  117 => 28,  105 => 40,  91 => 27,  62 => 21,  49 => 11,  24 => 2,  25 => 1,  19 => 2,  79 => 18,  72 => 8,  69 => 18,  47 => 11,  40 => 11,  37 => 10,  22 => 3,  246 => 92,  157 => 52,  145 => 58,  139 => 62,  131 => 52,  123 => 37,  120 => 40,  115 => 43,  111 => 42,  108 => 29,  101 => 32,  98 => 36,  96 => 20,  83 => 22,  74 => 19,  66 => 22,  55 => 13,  52 => 17,  50 => 9,  43 => 8,  41 => 9,  35 => 6,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 64,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 57,  133 => 55,  130 => 50,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 32,  99 => 21,  95 => 28,  92 => 24,  86 => 12,  82 => 29,  80 => 19,  73 => 26,  64 => 19,  60 => 16,  57 => 19,  54 => 14,  51 => 15,  48 => 16,  45 => 14,  42 => 12,  39 => 7,  36 => 6,  33 => 6,  30 => 5,);
    }
}
