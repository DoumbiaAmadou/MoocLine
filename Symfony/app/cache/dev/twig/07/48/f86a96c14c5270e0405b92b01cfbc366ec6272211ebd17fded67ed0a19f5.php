<?php

/* mooclineCoursBundle:Chapitre:voir.html.twig */
class __TwigTemplate_0748f86a96c14c5270e0405b92b01cfbc366ec6272211ebd17fded67ed0a19f5 extends Twig_Template
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
        echo " - Chapitre
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
        echo $this->getAttribute((isset($context["chapitre"]) ? $context["chapitre"] : $this->getContext($context, "chapitre")), "contenu");
        echo "
            </div>
        </div>
    </div>
   <form class=\"form-horizontal\" method=\"POST\" action=\"\">    
    <div class=\"form-group\">
        <div class=\"col-md-2\" align=\"left\">
        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_chapitre_edition", array("id" => $this->getAttribute((isset($context["chapitre"]) ? $context["chapitre"] : $this->getContext($context, "chapitre")), "id"))), "html", null, true);
        echo "\" class=\"btn  btn-primary\">Modifier</a>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard_Enseignant", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
        echo "\" class=\"btn  btn-primary\">retour</a>
        </div>
    </div>    
   </form>
        <br><br>
    
    
 
 ";
    }

    public function getTemplateName()
    {
        return "mooclineCoursBundle:Chapitre:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  60 => 22,  50 => 15,  43 => 10,  40 => 9,  34 => 6,  29 => 5,);
    }
}
