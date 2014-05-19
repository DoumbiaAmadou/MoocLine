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
        return array (  170 => 81,  97 => 47,  129 => 77,  113 => 61,  104 => 72,  100 => 71,  34 => 8,  127 => 28,  110 => 53,  84 => 29,  76 => 33,  53 => 19,  232 => 20,  228 => 19,  225 => 18,  222 => 17,  205 => 7,  155 => 120,  263 => 20,  259 => 19,  256 => 18,  253 => 17,  239 => 8,  172 => 20,  118 => 77,  184 => 89,  180 => 8,  174 => 82,  150 => 87,  134 => 81,  126 => 79,  292 => 85,  236 => 7,  216 => 10,  212 => 9,  206 => 17,  191 => 12,  188 => 10,  152 => 85,  148 => 71,  23 => 11,  233 => 6,  223 => 28,  215 => 82,  213 => 80,  210 => 79,  207 => 78,  202 => 6,  200 => 19,  197 => 18,  194 => 17,  186 => 70,  181 => 68,  165 => 79,  161 => 61,  153 => 73,  146 => 16,  90 => 32,  65 => 43,  124 => 39,  114 => 55,  77 => 10,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 69,  177 => 7,  169 => 60,  140 => 66,  132 => 51,  128 => 40,  107 => 70,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 9,  240 => 86,  238 => 85,  235 => 74,  230 => 92,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 8,  204 => 20,  179 => 69,  159 => 112,  143 => 15,  135 => 53,  119 => 57,  102 => 49,  71 => 31,  67 => 104,  63 => 31,  59 => 14,  38 => 8,  94 => 34,  89 => 42,  85 => 41,  75 => 17,  68 => 33,  56 => 20,  87 => 115,  21 => 1,  26 => 12,  93 => 28,  88 => 31,  78 => 26,  46 => 23,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 13,  183 => 140,  171 => 65,  166 => 128,  163 => 62,  158 => 67,  156 => 10,  151 => 63,  142 => 13,  138 => 157,  136 => 65,  121 => 75,  117 => 74,  105 => 51,  91 => 27,  62 => 25,  49 => 15,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 34,  69 => 25,  47 => 13,  40 => 9,  37 => 17,  22 => 2,  246 => 90,  157 => 74,  145 => 14,  139 => 45,  131 => 63,  123 => 58,  120 => 57,  115 => 43,  111 => 71,  108 => 73,  101 => 52,  98 => 49,  96 => 117,  83 => 40,  74 => 14,  66 => 26,  55 => 26,  52 => 19,  50 => 10,  43 => 10,  41 => 20,  35 => 8,  32 => 6,  29 => 5,  209 => 18,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 67,  173 => 65,  168 => 19,  164 => 59,  162 => 17,  154 => 58,  149 => 84,  147 => 58,  144 => 158,  141 => 48,  133 => 78,  130 => 80,  125 => 76,  122 => 67,  116 => 41,  112 => 42,  109 => 34,  106 => 50,  103 => 69,  99 => 68,  95 => 28,  92 => 46,  86 => 13,  82 => 28,  80 => 39,  73 => 16,  64 => 13,  60 => 16,  57 => 15,  54 => 19,  51 => 25,  48 => 12,  45 => 22,  42 => 9,  39 => 7,  36 => 7,  33 => 14,  30 => 2,);
    }
}
