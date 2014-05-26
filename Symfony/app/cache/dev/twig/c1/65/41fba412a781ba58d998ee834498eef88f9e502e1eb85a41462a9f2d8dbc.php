<?php

/* mooclineExoBundle:Create:apercuFEx.html.twig */
class __TwigTemplate_c16541fba412a781ba58d998ee834498eef88f9e502e1eb85a41462a9f2d8dbc extends Twig_Template
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
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "intitule"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "type"), "html", null, true);
            echo ")</h3><br/>

                ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "questions"));
            foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
                // line 28
                echo "
                    
                      ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "question"), "html", null, true);
                echo "<br/>
                    
                    ";
                // line 32
                if ((($this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "type") == "qcm") || ($this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "type") == "qrf"))) {
                    // line 33
                    echo "
                        <h4>Reponses</h4>

                        <ul class=\"Reponses\">
              
                            ";
                    // line 38
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "reponses"));
                    foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                        // line 39
                        echo "                                <li>
                                  ";
                        // line 40
                        if ((($this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "correct") == "true") && ($this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "type") == "qcm"))) {
                            echo "<div style=\"color:green\">
                                  ";
                        } elseif ((($this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "correct") == "false") && ($this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "type") == "qcm"))) {
                            // line 41
                            echo "<div style=\"color:red\">";
                        }
                        // line 42
                        echo "                                  ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "reponse"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t  ";
                        // line 43
                        if (($this->getAttribute((isset($context["ex"]) ? $context["ex"] : $this->getContext($context, "ex")), "type") == "qcm")) {
                            // line 44
                            echo "\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  ";
                        }
                        // line 46
                        echo "                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "                        </ul>
                    ";
                }
                // line 50
                echo "                    <hr/>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "  
                <br/>
                <hr/>
                
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "               <div class=\"col-md-2\" align=\"left\">
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_exo_create", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Retour</a>
               </div>
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
        return array (  158 => 58,  155 => 57,  144 => 51,  137 => 50,  133 => 48,  126 => 46,  122 => 44,  120 => 43,  115 => 42,  112 => 41,  107 => 40,  104 => 39,  100 => 38,  93 => 33,  91 => 32,  86 => 30,  82 => 28,  78 => 27,  71 => 25,  66 => 22,  62 => 21,  48 => 14,  40 => 8,  37 => 7,  29 => 3,);
    }
}
