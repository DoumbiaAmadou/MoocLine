<?php

/* mooclineExoBundle:Create:creationEx.html.twig */
class __TwigTemplate_90f9fea4d2140140a30320078d5aea8efb018e8d140d75cec6b1719fe759a78a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
  Mooc'Line - Exercice - Création ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["ctype"]) ? $context["ctype"] : $this->getContext($context, "ctype")), "html", null, true);
        echo " n° ";
        echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  
\t<div class=\"container\">
        <div class=\"row centered-form\">
\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t    \t\t<h2 class=\"panel-title\"> <strong> ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["ctype"]) ? $context["ctype"] : $this->getContext($context, "ctype")), "html", null, true);
        echo " n° ";
        echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
        echo " </strong> </small></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<form  method=\"POST\" ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question"), 'label');
        echo "
                                                 <span class=\"col-md-offset-6\"> ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "point"), 'widget', array("attr" => array("maxlength" => 5, "size" => 3)));
        echo " points </span> 
                                                 <br/><br/>
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question"), 'widget', array("attr" => array("rows" => 2, "cols" => 40)));
        echo "
                    
            
            ";
        // line 31
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "qcm") || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "qrf"))) {
            // line 32
            echo "\t\t\t\t\t\t<h4>Reponses</h4>
\t\t\t\t\t\t<ul class=\"Reponses\" data-prototype=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Reponses"), "vars"), "prototype"), 'widget'));
            echo "\" >
\t\t\t\t\t\t\t";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Reponses"));
            foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                // line 35
                echo "\t\t\t\t\t\t\t\t<li class=\"RAW\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), 'row');
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </ul>
              

             ";
        } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "p")) {
            // line 41
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'row');
            echo "<br/>
            <h5>Un exercice de type programme ne peut contenir qu'une seule question.</h5><br/>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
           
            ";
        // line 47
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "p")) {
            // line 48
            echo "\t\t\t\t\t     <br/><br/>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'row');
            echo " <br/>
            ";
        }
        // line 50
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauvegarder"), 'row');
        echo " <br/>
            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_exo_apercu", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\">Aperçu</a><br/>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("moocline_exo_create");
        echo "\">Quitter sans sauvegarder</a>
          
          </form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t 

  ";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script>
          var collectionHolder = \$('ul.Reponses');

          var \$addReponseLink = \$('<a href=\"#\" class=\"add_reponse_link\">Ajouter une reponse</a>');
          var \$newLinkLi = \$('<li></li>').append(\$addReponseLink);

          jQuery(document).ready(function() {
              
              collectionHolder.find('li.RAW').each(function() {
                addReponseFormDeleteLink(\$(this));
              });

              collectionHolder.append(\$newLinkLi);

              \$addReponseLink.on('click', function(e) {

                e.preventDefault();

                addReponseForm(collectionHolder, \$newLinkLi);
              });
          });

          function addReponseForm(collectionHolder, \$newLinkLi) {

              var prototype = collectionHolder.attr('data-prototype');

              var newForm = prototype.replace(/__name__/g, collectionHolder.children().length);

              var \$newFormLi = \$('<li></li>').append(newForm);
              \$newLinkLi.before(\$newFormLi);
              addReponseFormDeleteLink(\$newFormLi);
          }


          function addReponseFormDeleteLink(\$tagFormLi) {
            var \$removeFormA = \$('<a href=\"#\">Supprimer cette reponse</a><br/><br/>');
            \$tagFormLi.append(\$removeFormA);

            \$removeFormA.on('click', function(e) {

                e.preventDefault();

                \$tagFormLi.remove();
            });
          }



    </script>
";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Create:creationEx.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 68,  168 => 67,  165 => 66,  162 => 65,  146 => 52,  142 => 51,  137 => 50,  131 => 48,  129 => 47,  124 => 45,  121 => 44,  114 => 41,  108 => 37,  99 => 35,  95 => 34,  91 => 33,  88 => 32,  86 => 31,  80 => 28,  75 => 26,  71 => 25,  66 => 23,  55 => 17,  46 => 10,  43 => 9,  35 => 4,  30 => 3,);
    }
}
