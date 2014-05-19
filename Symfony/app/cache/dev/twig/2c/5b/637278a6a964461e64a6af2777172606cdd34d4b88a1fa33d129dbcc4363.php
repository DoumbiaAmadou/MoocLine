<?php

/* mooclineCompteBundle:Dashboard:EtuDashboard.html.twig */
class __TwigTemplate_2c5b637278a6a964461e64a6af2777172606cdd34d4b88a1fa33d129dbcc4363 extends Twig_Template
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
        return array (  148 => 64,  139 => 62,  135 => 61,  118 => 47,  107 => 39,  102 => 37,  98 => 36,  94 => 35,  89 => 33,  84 => 31,  75 => 29,  58 => 14,  55 => 13,  49 => 11,  44 => 10,  41 => 9,  35 => 6,  30 => 5,);
    }
}
