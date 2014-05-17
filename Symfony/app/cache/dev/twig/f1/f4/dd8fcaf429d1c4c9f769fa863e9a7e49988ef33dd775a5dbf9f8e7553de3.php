<?php

/* mooclineCompteBundle:Register:etuForm.html.twig */
class __TwigTemplate_f1f4dd8fcaf429d1c4c9f769fa863e9a7e49988ef33dd775a5dbf9f8e7553de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("mooclineCompteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'compte_body' => array($this, 'block_compte_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mooclineCompteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Inscription ";
    }

    // line 7
    public function block_compte_body($context, array $blocks = array())
    {
        // line 8
        echo "    
\t<div class=\"container\">
        <div class=\"row centered-form\">
        \t<div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        \t\t<div class=\"panel panel-default\">
        \t\t\t
        \t\t\t<div class=\"panel-heading\">
\t\t\t    \t\t<h3 class=\"panel-title\"><h3>Inscription <strong>MOOC</strong>'Line</h3>
\t\t\t \t\t</div>

\t\t\t \t\t<div class=\"panel-body\">
\t\t\t\t\t  <form method=\"post\" ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t\t    <input type=\"submit\" value=\"s'incrire\" class=\"btn btn-info btn-block\" />
\t\t\t\t\t  </form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Register:etuForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  52 => 19,  39 => 8,  36 => 7,  29 => 5,);
    }
}
