<?php

/* mooclineCoursBundle:Cours:CreerCours.html.twig */
class __TwigTemplate_acb564c38debb60927cd395f39914fa8e7003a854f37e4435f73e9222718c3d5 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " 
  ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Cours
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<form class=\"form-horizontal\" action=\"\"  method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
  <fieldset>

  <div class=\"form-group\">
  <label class=\"col-md-5 control-label\">nom</label>  
  <div class=\"col-md-3\">
  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
  </div>
</div>
  <div class=\"form-group\">
  <label class=\"col-md-5 control-label\">categorie</label>  
  <div class=\"col-md-3\">
  ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'widget');
        echo "
  </div>
</div>
  
  ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation"), 'widget');
        echo "
  
 
  ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "<br>
  <div class=\"col-md-5\">
   <input type=\"submit\" class=\"btn btn-primary\" value=\"Sauvegarder\">   
  </div>

</fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "mooclineCoursBundle:Cours:CreerCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  69 => 25,  62 => 21,  53 => 15,  43 => 9,  40 => 8,  34 => 5,  29 => 4,);
    }
}
