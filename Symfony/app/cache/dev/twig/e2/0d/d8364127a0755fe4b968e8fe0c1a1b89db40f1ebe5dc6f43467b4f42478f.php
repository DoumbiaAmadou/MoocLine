<?php

/* mooclineCoursBundle:Cours:CreerCours.html.twig */
class __TwigTemplate_e20dd8364127a0755fe4b968e8fe0c1a1b89db40f1ebe5dc6f43467b4f42478f extends Twig_Template
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
        echo "    <div class=\"container\">
<form class=\"form-horizontal\" action=\"\"  method=\"POST\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
  <fieldset>
      <!-- Form Name -->
<legend style=\"\" align=\"center\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</legend>

  <div class=\"form-group\">
  <label class=\"col-md-5 control-label\">nom</label>  
  <div class=\"col-md-3\">
  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
  </div>
</div>
  <div class=\"form-group\">
  <label class=\"col-md-5 control-label\">categorie</label>  
  <div class=\"col-md-3\">
  ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'widget');
        echo "
  </div>
</div>
  <div class=\"form-group\">
  <label class=\"col-md-5 control-label\">date de début</label>  
  <div class=\"col-md-3\">
  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_debut"), 'widget');
        echo "
  </div>
</div>
  <div class=\"form-group\">
  <label class=\"col-md-5 control-label\">date de fin</label>  
  <div class=\"col-md-3\">
  ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_fin"), 'widget');
        echo "
  </div>
</div>
  
  ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation"), 'widget');
        echo "
  
  
  ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "<br>
  <div class=\"col-md-5\">
   <input type=\"submit\" class=\"btn btn-primary\" value=\"Sauvegarder\">   
  </div>

</fieldset>
</form>
    </div>
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
        return array (  100 => 43,  94 => 40,  87 => 36,  78 => 30,  69 => 24,  60 => 18,  52 => 13,  46 => 10,  43 => 9,  40 => 8,  34 => 5,  29 => 4,);
    }
}
