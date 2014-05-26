<?php

/* mooclineCoursBundle:Cours:voir.html.twig */
class __TwigTemplate_90cc904981fc3a3f986cc7055e709e2e63d01458a2157be73f845a29b0ad6912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo " - Cours
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    
    <div class=\"container-fluid well\">
        
         <div class=\"panel panel-default\">
            <div class=\"span4 offset1\">
            ";
        // line 15
        echo $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "presentation");
        echo "
            </div>
        </div>
    </div>
   <form class=\"form-horizontal\" method=\"POST\" action=\"\">    
        <div class=\"col-md-2 col-md-offset-3\">
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_cours_edition", array("id" => $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Modifier</a>
        </div>
        <div class=\"col-md-2\">
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("moocline_cours_chapitre");
        echo "\" class=\"btn btn-primary btn-block\">créer chapitre</a>
        </div>
        <div class=\"col-md-2\">
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Enseignant", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">retour</a>
        </div> 
   </form>
        <br><br>
    
    
 
 ";
    }

    public function getTemplateName()
    {
        return "mooclineCoursBundle:Cours:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  65 => 24,  59 => 21,  50 => 15,  43 => 10,  40 => 9,  34 => 6,  29 => 5,);
    }
}
