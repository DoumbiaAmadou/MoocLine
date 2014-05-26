<?php

/* mooclineExoBundle:Create:apercuEx.html.twig */
class __TwigTemplate_46406a3ded940c8a2626c9ac0d1e80ab0d56d1adb9ca6adc0c4a43ec505a679c extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 
  Mooc'Line - Exercice - Apercu 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"container\">
        <div class=\"row centered-form\">
      <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
              <h2 class=\"panel-title\"> <strong>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["nomEx"]) ? $context["nomEx"] : $this->getContext($context, "nomEx")), "html", null, true);
        echo " type : ";
        echo twig_escape_filter($this->env, (isset($context["ctype"]) ? $context["ctype"] : $this->getContext($context, "ctype")), "html", null, true);
        echo " <br/>nombre de Questions : ";
        echo twig_escape_filter($this->env, (isset($context["numbQuestion"]) ? $context["numbQuestion"] : $this->getContext($context, "numbQuestion")), "html", null, true);
        echo " </strong> </small></h2>
          </div>
          <div class=\"panel-body\">
            


            <form  method=\"POST\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            


            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Questions"));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 25
            echo "

            ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "question"), 'label');
            echo "
                                                 <span class=\"col-md-offset-6\"> ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "point"), 'widget', array("attr" => array("maxlength" => 5, "size" => 3)));
            echo " points </span> 
                                                 <br/><br/>
            ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "question"), 'widget', array("attr" => array("rows" => 2, "cols" => 40)));
            echo "

            ";
            // line 32
            if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "qcm") || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "qrf"))) {
                // line 33
                echo "                <h4>Reponses</h4>
                <ul class=\"Reponses\">
                ";
                // line 35
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "Reponses"));
                foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                    // line 36
                    echo "                   <li>";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), 'row');
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                </ul>
            ";
            }
            // line 40
            echo "            <br/>
            <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
           ";
        // line 45
        if ((!(isset($context["import"]) ? $context["import"] : $this->getContext($context, "import")))) {
            // line 46
            echo "\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'row');
            echo " <br/>
           ";
        }
        // line 48
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauvegarder"), 'row');
        echo " <br/>

            </form>
\t\t\t";
        // line 51
        if ((isset($context["import"]) ? $context["import"] : $this->getContext($context, "import"))) {
            // line 52
            echo "\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("moocline_exo_create");
            echo "\">Retour</a>
\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_exo_createExercice", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
            echo "\">Reprendre</a>
\t\t\t";
        }
        // line 56
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
  
";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Create:apercuEx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  151 => 54,  145 => 52,  143 => 51,  136 => 48,  130 => 46,  128 => 45,  124 => 44,  121 => 43,  113 => 40,  109 => 38,  100 => 36,  96 => 35,  92 => 33,  90 => 32,  85 => 30,  80 => 28,  76 => 27,  72 => 25,  68 => 24,  61 => 20,  48 => 14,  40 => 8,  37 => 7,  29 => 3,);
    }
}
