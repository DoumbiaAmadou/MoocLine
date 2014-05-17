<?php

/* mooclineExoBundle:Create:creationTypeEx.html.twig */
class __TwigTemplate_3c76a5e19e5e469711c1fa4854a8e4feaa29259c749ca5e61f0fe1caf41d5baf extends Twig_Template
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
  Mooc'Line - Exercice - Création
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
\t\t\t    \t\t<h2 class=\"panel-title\"> <strong>Création d'Exercice</strong></small></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => "QCM"));
        echo "\">Créer un Exercice Type QCM</a><br/>
\t\t\t\t\t    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => "QRF"));
        echo "\">Créer un Exercice Type QRF</a><br/>
\t\t\t\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => "QP"));
        echo "\">Créer un Exercice Type Programme</a><br/>
\t\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => "QL"));
        echo "\">Créer un Exercice Type Libre</a><br/>
            \t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("moocline_exo_importExercice");
        echo "\"> Importer un Exercice</a></br>
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
        return "mooclineExoBundle:Create:creationTypeEx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  63 => 20,  59 => 19,  55 => 18,  51 => 17,  40 => 8,  37 => 7,  29 => 3,);
    }
}
