<?php

/* mooclineCoursBundle:Cours:voir.html.twig */
class __TwigTemplate_0775d9c56fa816d978996d52d7226b2dbd7c67c02b9b8bb9e2ff3ba36e2f0ca6 extends Twig_Template
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
    <div class=\"form-group\">
        <div class=\"col-md-2\" align=\"left\">
        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_cours_edition", array("id" => $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-block btn-lg btn-primary\">Modifier</a>
        </div>
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
        return array (  60 => 22,  50 => 15,  43 => 10,  40 => 9,  34 => 6,  29 => 5,);
    }
}
