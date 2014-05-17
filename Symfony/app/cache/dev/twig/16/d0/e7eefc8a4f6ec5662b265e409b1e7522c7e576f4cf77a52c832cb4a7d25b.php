<?php

/* mooclineCoursBundle:Cours:voirEtudiant.html.twig */
class __TwigTemplate_16d0e7eefc8a4f6ec5662b265e409b1e7522c7e576f4cf77a52c832cb4a7d25b extends Twig_Template
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

    <div class=\"container\">
        <div class=\"centered-form\">
            <div class=\"col-sm-offset-2 col-md-offset-2\">
            ";
        // line 15
        echo $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "presentation");
        echo "
            </div>
            <div class=\"col-md-2 col-md-offset-8\">
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_cours_inscription", array("id" => $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-block btn-lg btn-primary\">s'inscrire au cours</a>
        </div>
        </div>
        
         
    </div>
   

    
    ";
    }

    public function getTemplateName()
    {
        return "mooclineCoursBundle:Cours:voirEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  50 => 15,  43 => 10,  40 => 9,  34 => 6,  29 => 5,);
    }
}
