<?php

/* mooclineExoBundle:Create:creationTypeEx.html.twig */
class __TwigTemplate_3d654dac89d1f40f3bca7320fb42987e32bbcfd0976a79707979903a5134c9e3 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => "qcm"));
        echo "\">Créer un Exercice Type QCM</a><br/>
\t\t\t\t\t    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => "qrf"));
        echo "\">Créer un Exercice Type QRF</a><br/>
\t\t\t\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => "p"));
        echo "\">Créer un Exercice Type Programme</a><br/>
\t\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => "l"));
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
