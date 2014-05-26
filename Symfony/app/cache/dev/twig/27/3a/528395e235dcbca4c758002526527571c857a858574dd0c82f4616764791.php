<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_273a528395e235dcbca4c758002526527571c857a858574dd0c82f4616764791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<fieldset>
\t\t
\t\t
<div class=\"row\">
  <div class=\"col-md-4 col-md-offset-4\"><legend>Mooc'Line Inscription</legend></div>
</div>

<form class=\"form-horizontal fos_user_registration_register\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">

\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
\t

\t    ";
        // line 16
        echo "

\t   <div class=\"form-group\">
\t    \t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Pseudo"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Prenom"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Nom"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Email"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
\t\t    </div>
\t\t</div>
\t    
\t\t<div class=\"form-group\">
\t    \t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_naissance"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Date Naissance"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_naissance"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_naissance"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Niveau"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Mot de passe"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Mot de passe (validation)"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t    <div class=\"form-group\">
\t\t\t<label class=\"col-md-4 control-label\" for=\"checkboxes\"></label>
\t\t  \t<div class=\"col-md-4\">
\t\t\t\t<input class=\"btn btn-block btn-success\" type=\"submit\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t

</form>
</fieldset>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 85,  175 => 78,  171 => 77,  166 => 75,  158 => 70,  154 => 69,  149 => 67,  141 => 62,  137 => 61,  132 => 59,  124 => 54,  120 => 53,  115 => 51,  107 => 46,  103 => 45,  98 => 43,  90 => 38,  86 => 37,  81 => 35,  73 => 30,  69 => 29,  64 => 27,  56 => 22,  52 => 21,  47 => 19,  42 => 16,  36 => 12,  29 => 10,  19 => 2,  31 => 4,  28 => 3,);
    }
}
