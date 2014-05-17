<?php

/* mooclineCompteBundle:Modification:Modification.html.twig */
class __TwigTemplate_21377a4a161d22d9a936abd5c09427317ecec5d5f2d243ee24975cd5c9c55422 extends Twig_Template
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
        echo " - Profil
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo " <div class=\"container\">
        <div class=\"row centered-form\">
      <div class=\"col-xs-10 col-sm-5 col-md-8 col-sm-offset-4 col-md-offset-2\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
              <h2 class=\"panel-title\"> <strong>Mon compte</strong> </small></h2>
          </div>
          <div class=\"panel-body\">

<form class=\"form-horizontal\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modification_Etudiant", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\"  method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">



<div class=\"form-group\">
  <label class=\"col-md-5 control-label\">Nom</label>  
  <div class=\"col-md-3\">
  ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo " <p>(max 25 caractères)</p>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-5 control-label\">Prenom</label>  
  <div class=\"col-md-3\">
  ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
        echo " <p>(max 25 caractères)</p>
  </div>
</div>




  <div class=\"form-group\">
  <label class=\"col-md-5 control-label\">Date de naissance</label>  
  <div class=\"col-md-3\">
  ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_naissance"), 'widget');
        echo "
  </div>  
</div>

<div class=\"form-group\">
    
    ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 50
            echo "        <div class=\"form-group\">
        <label class=\"col-md-5 control-label\">";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
            echo "</label>
        <div class=\"col-md-3\">
        ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
        </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "



";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
  <div class=\"col-md-5\">
   <input type=\"submit\" class=\"btn btn-primary\" value=\"Sauvegarder\">   
  </div>

<!--   <fieldset>
  <legend style=\"\" align=\"center\">Mon compte</legend>
  ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\" class=\"btn btn-primary\" value=\"Sauvegarder\">
</fieldset> -->

</fieldset>
</form>


</div>    
</div>
</div>
</div>
        </div>




\t  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    ";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Modification:Modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 68,  126 => 61,  120 => 57,  110 => 53,  105 => 51,  102 => 50,  98 => 49,  89 => 43,  76 => 33,  66 => 26,  54 => 19,  43 => 10,  40 => 9,  34 => 5,  29 => 4,);
    }
}
