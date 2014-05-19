<?php

/* mooclineExoBundle:Create:apercuFEx.html.twig */
class __TwigTemplate_d10d12fcbad701ae49e1a0c7526a14fbc16e7d39036815597d3c8a69f22c5488 extends Twig_Template
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
  Mooc'Line - Exercice - Apercu Feuille
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"container\" >
        <div class=\"row centered-form\">
      <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-4 col-md-offset-3\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
              <h2 class=\"panel-title\"> <strong>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["titreFEx"]) ? $context["titreFEx"] : $this->getContext($context, "titreFEx")), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo " <br/>nombre d'Exercices : ";
        echo twig_escape_filter($this->env, (isset($context["numbEx"]) ? $context["numbEx"] : $this->getContext($context, "numbEx")), "html", null, true);
        echo " </strong> </small></h2>
          </div>
          <div class=\"panel-body\">
            
            


            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) ? $context["exercices"] : $this->getContext($context, "exercices")));
        foreach ($context['_seq'] as $context["_key"] => $context["ex"]) {
            // line 22
            echo "
                <h3>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "intitule"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "type"), "html", null, true);
            echo ")</h3><br/>

                ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "questions"));
            foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
                // line 26
                echo "
                    
                      ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "question"), "html", null, true);
                echo "<br/>
                    
                    ";
                // line 30
                if ((($this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "type") == "qcm") || ($this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "type") == "qrf"))) {
                    // line 31
                    echo "
                        <h4>Reponses</h4>

                        <ul class=\"Reponses\">
              
                            ";
                    // line 36
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "reponses"));
                    foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                        // line 37
                        echo "                                <li>
                                  ";
                        // line 38
                        if (($this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "correct") == "true")) {
                            echo "<div style=\"color:green\">
                                  ";
                        } else {
                            // line 39
                            echo "<div style=\"color:red\">";
                        }
                        // line 40
                        echo "                                  ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "reponse"), "html", null, true);
                        echo "</div>
                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "                        </ul>
                    ";
                }
                // line 45
                echo "                    <hr/>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "  
                <br/>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_exo_create", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\">Retour</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Create:apercuFEx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 51,  143 => 50,  134 => 46,  127 => 45,  123 => 43,  113 => 40,  110 => 39,  105 => 38,  102 => 37,  98 => 36,  91 => 31,  89 => 30,  84 => 28,  80 => 26,  76 => 25,  69 => 23,  66 => 22,  62 => 21,  48 => 14,  40 => 8,  37 => 7,  29 => 3,);
    }
}
