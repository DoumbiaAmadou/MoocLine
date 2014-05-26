<?php

/* mooclineCoursBundle:Chapitre:CreerChapitre.html.twig */
class __TwigTemplate_2a156374b702e66baebdbbd5f27e4052b8fb4855e6c090f9a69d4182b5eca38e extends Twig_Template
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

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"container\">
<form class=\"form-horizontal\" method=\"POST\" action=\"\">
<fieldset>

<!-- Form Name -->
<legend style=\"\" align=\"center\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</legend>

<div class=\"form-group\">
  <label class=\"col-md-5 control-label\" for=\"email\">titre</label>  
  <div class=\"col-md-3\">
  ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formb"]) ? $context["formb"] : $this->getContext($context, "formb")), "titre"), 'widget');
        echo "
  </div>
</div>

<!-- Text input-->

<div class=\"form-group\">
  <label class=\"col-md-5 control-label\" >Visibilité de la feuille</label>  
  <div class=\"col-md-3\">
  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formb"]) ? $context["formb"] : $this->getContext($context, "formb")), "visible"), 'widget');
        echo " 
  </div>
</div>
  
  <div class=\"form-group\">
  <label class=\"col-md-5 control-label\" >cours</label>  
  <div class=\"col-md-3\">
  ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formb"]) ? $context["formb"] : $this->getContext($context, "formb")), "cours"), 'widget');
        echo " 
  </div>
</div>

  <div class=\"well\">
  ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formb"]) ? $context["formb"] : $this->getContext($context, "formb")), "contenu"), 'widget');
        echo " 
</div>

 
";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formb"]) ? $context["formb"] : $this->getContext($context, "formb")), "_token"), 'widget');
        echo "

  <div class=\"col-md-2\" align=\"right\">
    <!-- <a href=\"#\" class=\"btn btn-lg btn-primary\">Sauver<span class=\"glyphicon glyphicon-chevron-right\"></span></a> -->
    <input type=\"submit\" class=\"btn btn-block btn-lg btn-primary\"  value=\"Enregistrer\"/>
  </div>
  


</fieldset>
</form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "mooclineCoursBundle:Chapitre:CreerChapitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 46,  88 => 42,  80 => 37,  70 => 30,  58 => 21,  50 => 16,  43 => 11,  40 => 10,  34 => 6,  29 => 5,);
    }
}
