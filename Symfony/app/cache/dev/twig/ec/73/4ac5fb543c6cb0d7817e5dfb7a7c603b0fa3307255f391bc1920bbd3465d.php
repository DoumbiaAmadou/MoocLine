<?php

/* mooclineCompteBundle:Contact:contact.html.twig */
class __TwigTemplate_ec734ac5fb543c6cb0d7817e5dfb7a7c603b0fa3307255f391bc1920bbd3465d extends Twig_Template
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
    Contact
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
          <div class=\"col-md-4 col-md-offset-4\"><legend>Formulaire de Contact <strong>MOOC</strong>'Line</legend></div>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Email"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer votre adresse eamil")));
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujet"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Sujet"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujet"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "veuillez indiquer un sujet")));
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sujet"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Commentaire"));
        echo "
                <div class=\"col-md-4\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "votre message... ")));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"checkboxes\"></label>
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
        return "mooclineCompteBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  58 => 13,  257 => 105,  251 => 103,  236 => 91,  233 => 90,  222 => 83,  212 => 80,  207 => 78,  197 => 74,  161 => 53,  146 => 46,  134 => 42,  127 => 38,  110 => 30,  81 => 11,  53 => 10,  34 => 5,  114 => 31,  195 => 81,  191 => 80,  186 => 69,  175 => 73,  170 => 71,  153 => 51,  124 => 36,  90 => 13,  77 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 66,  169 => 60,  140 => 55,  132 => 51,  128 => 50,  107 => 41,  61 => 13,  273 => 96,  269 => 94,  254 => 104,  243 => 91,  240 => 86,  238 => 94,  235 => 74,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 81,  208 => 68,  204 => 72,  179 => 67,  159 => 61,  143 => 56,  135 => 53,  119 => 47,  102 => 25,  71 => 19,  67 => 20,  63 => 15,  59 => 14,  38 => 7,  94 => 35,  89 => 33,  85 => 31,  75 => 17,  68 => 23,  56 => 17,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 28,  46 => 7,  27 => 3,  44 => 10,  31 => 4,  28 => 4,  201 => 75,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 65,  156 => 66,  151 => 63,  142 => 44,  138 => 43,  136 => 55,  121 => 35,  117 => 28,  105 => 40,  91 => 27,  62 => 21,  49 => 19,  24 => 2,  25 => 1,  19 => 2,  79 => 18,  72 => 8,  69 => 18,  47 => 11,  40 => 11,  37 => 10,  22 => 3,  246 => 92,  157 => 52,  145 => 58,  139 => 45,  131 => 52,  123 => 37,  120 => 40,  115 => 43,  111 => 42,  108 => 29,  101 => 32,  98 => 36,  96 => 20,  83 => 22,  74 => 19,  66 => 22,  55 => 96,  52 => 17,  50 => 9,  43 => 8,  41 => 15,  35 => 5,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 66,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 57,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 27,  103 => 32,  99 => 21,  95 => 28,  92 => 24,  86 => 12,  82 => 29,  80 => 19,  73 => 26,  64 => 19,  60 => 16,  57 => 19,  54 => 14,  51 => 15,  48 => 16,  45 => 10,  42 => 12,  39 => 7,  36 => 6,  33 => 6,  30 => 7,);
    }
}
