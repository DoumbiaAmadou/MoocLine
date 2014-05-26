<?php

/* mooclineCompteBundle:Admin:adminRegister.html.twig */
class __TwigTemplate_95e685fcb439cfb076c3a623cac59a8628de40494b9b1b5142b3d312899ec368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("mooclineCompteBundle::layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
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

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "
\t<fieldset>\t\t
\t\t<div class=\"row\">
\t\t  <div class=\"col-md-4 col-md-offset-4\"><legend>Mooc'Line Enseignant Inscription</legend></div>
\t\t</div>
\t\t<form class=\"form-horizontal\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">

\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
\t\t\t    
\t\t   \t<div class=\"form-group\">
\t\t    \t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Pseudo"));
        echo "
\t\t\t    <div class=\"col-md-4\">
\t\t\t    \t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t\t    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t    \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Prenom"));
        echo "
\t\t\t    <div class=\"col-md-4\">
\t\t\t    \t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t\t    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'errors');
        echo "
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t    \t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Nom"));
        echo "
\t\t\t    <div class=\"col-md-4\">
\t\t\t    \t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t\t    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'errors');
        echo "
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t    \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Email"));
        echo "
\t\t\t    <div class=\"col-md-4\">
\t\t\t    \t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t\t    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
\t\t\t    </div>
\t\t\t</div>
\t\t    
\t\t\t<div class=\"form-group\">
\t\t    \t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_naissance"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Date Naissance"));
        echo "
\t\t\t    <div class=\"col-md-4\">
\t\t\t    \t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_naissance"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_naissance"), 'errors');
        echo "
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t    \t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Niveau"));
        echo "
\t\t\t    <div class=\"col-md-4\">
\t\t\t    \t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau"), 'errors');
        echo "
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t    \t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Mot de passe"));
        echo "
\t\t\t    <div class=\"col-md-4\">
\t\t\t    \t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t\t    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'errors');
        echo "
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t    \t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Mot de passe (validation)"));
        echo "
\t\t\t    <div class=\"col-md-4\">
\t\t\t    \t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t\t    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'errors');
        echo "
\t\t\t    </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t    \t";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invitation"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Code Invitation"));
        echo "
\t\t\t    <div class=\"col-md-4\">
\t\t\t    \t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invitation"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t\t    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invitation"), 'errors');
        echo "
\t\t\t    </div>
\t\t\t</div>
\t\t    <div class=\"form-group\">
\t\t\t  \t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t\t<input class=\"btn btn-block btn-success\" type=\"submit\" value=\"Enregistrer\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 90
        echo "\t\t</form>
\t</fieldset>

";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Admin:adminRegister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 90,  193 => 81,  189 => 80,  184 => 78,  177 => 74,  173 => 73,  168 => 71,  160 => 66,  156 => 65,  151 => 63,  143 => 58,  139 => 57,  134 => 55,  126 => 50,  122 => 49,  117 => 47,  109 => 42,  105 => 41,  100 => 39,  92 => 34,  88 => 33,  83 => 31,  75 => 26,  71 => 25,  66 => 23,  58 => 18,  54 => 17,  49 => 15,  43 => 12,  38 => 10,  31 => 5,  28 => 4,);
    }
}
