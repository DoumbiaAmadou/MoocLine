<?php

/* mooclineExoBundle:Correction:resolveFEx.html.twig */
class __TwigTemplate_92e32ebd9cbdaf8c5cacaed4f95591a32189537c8eab4839389aeda215263f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'choice_widget' => array($this, 'block_choice_widget'),
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
  Mooc'Line - Exercice - Resolve Feuille
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
  <div class=\"container\" >
        <div class=\"row centered-form\">
      <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-4 col-md-offset-3\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
              <h2 class=\"panel-title\"> <strong>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["titreFEx"]) ? $context["titreFEx"] : $this->getContext($context, "titreFEx")), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo " </strong> </small></h2>
          </div>
          <div class=\"panel-body\">

      ";
        // line 19
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 53
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  
";
    }

    // line 19
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 20
        echo "         ";
        $context["i"] = 0;
        // line 21
        echo "  <form class=\"form-horizontal\" action=\"\"  method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
          ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "
          
            ";
            // line 25
            if (twig_in_filter((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")))) {
                // line 26
                echo "              <hr/>
              <h4>Exercice  ";
                // line 27
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
                echo " </h4>
              <hr/>
            ";
            }
            // line 30
            echo "          
            ";
            // line 31
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 32
            echo "               ";
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "block_prefixes"))) {
                // line 33
                echo "                   <li>
                   ";
                // line 34
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
                echo " <br/>
                   ";
                // line 35
                if (!twig_in_filter("choice", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "block_prefixes"))) {
                    // line 36
                    echo "                       ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
                    echo "
                   ";
                } elseif (twig_in_filter("choice", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "block_prefixes"))) {
                    // line 38
                    echo "                   ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 39
                        echo "                       ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
                        echo " 
                        ";
                        // line 40
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'label');
                        echo " <br/>
                    
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "                    ";
                }
                // line 44
                echo "                   </li>
                    <br/><hr/>
               ";
            }
            // line 47
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "              
             <input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\"> 
             <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\"> 
          </form>
      ";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Correction:resolveFEx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 48,  151 => 47,  146 => 44,  143 => 43,  134 => 40,  129 => 39,  124 => 38,  118 => 36,  116 => 35,  112 => 34,  109 => 33,  106 => 32,  104 => 31,  101 => 30,  95 => 27,  92 => 26,  90 => 25,  86 => 23,  82 => 22,  77 => 21,  74 => 20,  71 => 19,  60 => 53,  58 => 19,  49 => 15,  41 => 9,  38 => 8,  30 => 4,);
    }
}
