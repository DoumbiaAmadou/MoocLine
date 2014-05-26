<?php

/* mooclineExoBundle:Create:chooseFEx.html.twig */
class __TwigTemplate_058957bb51d53ecb233007c2c189e967be28777b6f56b97509ff940f5338e6cf extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 
  Mooc'Line - Exercice - Enregistrer
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  
\t<div class=\"container\">
        <div class=\"row centered-form\">
\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t    \t\t<h2 class=\"panel-title\"> <strong> Choisir une feuille d'exercice </strong> </small></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<form  method=\"POST\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "feuilles"), 'label');
        echo "<br/>
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "feuilles"), 'widget');
        echo "<br/><br/>
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visible"), 'label');
        echo "<br/>
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visible"), 'widget');
        echo "
            <br/><br/>
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
           
\t\t\t\t\t  ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'row');
        echo " <br/>
\t\t\t\t\t  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "exporter"), 'row');
        echo " <br/>
          
          </form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Create:chooseFEx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  81 => 29,  76 => 27,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  54 => 20,  40 => 8,  37 => 7,  29 => 3,);
    }
}
