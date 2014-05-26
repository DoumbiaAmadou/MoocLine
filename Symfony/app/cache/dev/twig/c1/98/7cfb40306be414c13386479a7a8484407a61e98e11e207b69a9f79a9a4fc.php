<?php

/* mooclineCompteBundle:Contact:contact_ecole.html.twig */
class __TwigTemplate_c1987cfb40306be414c13386479a7a8484407a61e98e11e207b69a9f79a9a4fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
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
    Contact Ecole & Partenaire
  ";
    }

    // line 10
    public function block_container($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        // line 12
        echo "<fieldset>
        <div class=\"row\">
          <div class=\"col-md-4 col-md-offset-4\"><legend>Ecole & Partenaire <strong>MOOC</strong>'Line</legend></div>
        </div>
        <form class=\"form-horizontal\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
             <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomAdmin"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Nom"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomAdmin"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer votre nom")));
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomAdmin"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomAdmin"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Prenom"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomAdmin"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer votre prenom")));
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomAdmin"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomOrganisation"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Nom Organisation"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomOrganisation"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer le nom de votre organisation")));
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomOrganisation"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Email"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer votre adresse email")));
        echo "
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
\t\t    \t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Type Organisation"));
        echo "
\t\t\t    <div class=\"col-md-4\">
\t\t\t    \t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "
\t\t\t    </div>
\t\t\t</div>
\t\t\t <div class=\"form-group\">
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Taille"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer la taille de votre Organisation (valeur appromaxiive acceptée)")));
        echo "
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Telephone"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer votre telephone")));
        echo "
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujet"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Sujet"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujet"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer un sujet")));
        echo "
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujet"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Commentaire"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "votre message... ")));
        echo "
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Pays"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays"), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Ville"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer votre ville")));
        echo "
                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Adresse"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer votre adresse")));
        echo "
                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Code Postal"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer votre code postal")));
        echo "
                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal"), 'errors');
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-md-4\"></div>
                <div class=\"col-md-4\">
                        <input class=\"btn btn-block btn-success\" type=\"submit\" value=\"valider\" />
                </div>
            </div>\t
        </form>
    </fieldset>
    ";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Contact:contact_ecole.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 106,  254 => 105,  249 => 103,  242 => 99,  238 => 98,  233 => 96,  226 => 92,  222 => 91,  217 => 89,  210 => 85,  206 => 84,  201 => 82,  194 => 78,  190 => 77,  185 => 75,  178 => 71,  174 => 70,  169 => 68,  162 => 64,  158 => 63,  153 => 61,  146 => 57,  142 => 56,  137 => 54,  130 => 50,  126 => 49,  121 => 47,  114 => 43,  110 => 42,  105 => 40,  98 => 36,  94 => 35,  89 => 33,  82 => 29,  78 => 28,  73 => 26,  66 => 22,  62 => 21,  57 => 19,  52 => 17,  48 => 16,  42 => 12,  40 => 11,  37 => 10,  29 => 5,);
    }
}
