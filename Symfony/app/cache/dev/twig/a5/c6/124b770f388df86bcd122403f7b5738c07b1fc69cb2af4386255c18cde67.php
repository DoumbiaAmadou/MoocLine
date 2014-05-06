<?php

/* mooclineCompteBundle:Registration:register_content.html.twig */
class __TwigTemplate_a5c6124b770f388df86bcd122403f7b5738c07b1fc69cb2af4386255c18cde67 extends Twig_Template
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

";
        // line 11
        echo "
<form class=\"form-horizontal fos_user_registration_register\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">

\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
\t<fieldset>
\t\t
\t\t<legend>Mooc'Line Connexion</legend>

\t    ";
        // line 20
        echo "

\t   <div class=\"form-group\">
\t    \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Pseudo"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Prenom"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Nom"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Email"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
\t\t    </div>
\t\t</div>
\t    
\t\t<div class=\"form-group\">
\t    \t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_naissance"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Date Naissance"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_naissance"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_naissance"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Niveau"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Mot de passe"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t    \t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Mot de passe (validation)"));
        echo "
\t\t    <div class=\"col-md-4\">
\t\t    \t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
\t\t\t    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t    <div class=\"form-group\">
\t\t\t<label class=\"col-md-4 control-label\" for=\"checkboxes\"></label>
\t\t  \t<div class=\"col-md-4\">
\t\t\t\t<input class=\"btn btn-block btn-success\" type=\"submit\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t</fieldset>

</form>";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 82,  170 => 81,  165 => 79,  148 => 71,  97 => 47,  152 => 85,  129 => 77,  153 => 73,  150 => 87,  146 => 16,  134 => 81,  126 => 79,  118 => 77,  113 => 61,  104 => 72,  100 => 71,  53 => 19,  34 => 8,  23 => 11,  256 => 116,  253 => 115,  250 => 114,  236 => 103,  233 => 102,  225 => 107,  223 => 101,  194 => 88,  188 => 85,  184 => 89,  172 => 78,  167 => 76,  127 => 39,  110 => 31,  65 => 118,  124 => 36,  114 => 55,  77 => 10,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 100,  214 => 69,  177 => 65,  169 => 77,  140 => 66,  132 => 51,  128 => 49,  107 => 70,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 103,  240 => 86,  238 => 105,  235 => 74,  230 => 101,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 99,  208 => 68,  204 => 91,  179 => 69,  159 => 61,  143 => 15,  135 => 53,  119 => 57,  102 => 49,  71 => 31,  67 => 16,  63 => 31,  59 => 14,  38 => 8,  94 => 28,  89 => 42,  85 => 41,  75 => 17,  68 => 33,  56 => 20,  87 => 21,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 21,  46 => 23,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 13,  138 => 54,  136 => 65,  121 => 75,  117 => 74,  105 => 40,  91 => 27,  62 => 25,  49 => 15,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 34,  69 => 25,  47 => 13,  40 => 10,  37 => 10,  22 => 2,  246 => 104,  157 => 74,  145 => 14,  139 => 45,  131 => 63,  123 => 58,  120 => 40,  115 => 43,  111 => 71,  108 => 73,  101 => 52,  98 => 21,  96 => 24,  83 => 40,  74 => 14,  66 => 15,  55 => 26,  52 => 19,  50 => 10,  43 => 8,  41 => 20,  35 => 8,  32 => 6,  29 => 5,  209 => 93,  203 => 78,  199 => 90,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 79,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 84,  147 => 58,  144 => 49,  141 => 48,  133 => 78,  130 => 80,  125 => 76,  122 => 67,  116 => 41,  112 => 42,  109 => 34,  106 => 50,  103 => 69,  99 => 68,  95 => 20,  92 => 46,  86 => 28,  82 => 20,  80 => 39,  73 => 18,  64 => 17,  60 => 16,  57 => 15,  54 => 99,  51 => 25,  48 => 12,  45 => 17,  42 => 9,  39 => 7,  36 => 7,  33 => 14,  30 => 2,);
    }
}
