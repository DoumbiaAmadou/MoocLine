<?php

/* mooclineCompteBundle:Register:formInscEns.html.twig */
class __TwigTemplate_8ed3c0d16ce554d42b5a7b6911a0e1f6624b7aaa5d120c2b5c15c85ee3ab8a19 extends Twig_Template
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
  <div class=\"container\">
    <div class=\"row centered-form\">
      <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        <div class=\"panel panel-default\">
              
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><h3>Inscription <strong>MOOC</strong>'Line</h3>
          </div>

          <div class=\"panel-body\">
            <form method=\"post\" ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formb"]) ? $context["formb"] : $this->getContext($context, "formb")), 'enctype');
        echo ">
              ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formb"]) ? $context["formb"] : $this->getContext($context, "formb")), 'widget');
        echo "
              <input type=\"submit\" value=\"s'incrire\" class=\"btn btn-info btn-block\" />
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Register:formInscEns.html.twig";
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
