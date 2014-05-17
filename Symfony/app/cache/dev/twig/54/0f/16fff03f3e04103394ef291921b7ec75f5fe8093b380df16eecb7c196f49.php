<?php

/* mooclineCoursBundle:Cours:list.html.twig */
class __TwigTemplate_540f16fff03f3e04103394ef291921b7ec75f5fe8093b380df16eecb7c196f49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " 
  ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Cours
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/cours.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"container\">
        <div class=\"moocline-full-canvas moocline-catalog\">
            <div data-affix=\"data-affix\" class=\"row-fluid moocline-catalog-toolbar\">
                <div class=\"span12\"><div class=\"moocline-catalog-toolbar-body\">
                      <form class=\"form-horizontal\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("moocline_cours_list");
        echo "\"  method=\"POST\" >
                        <label for=\"moocline-catalog-search-id\" style=\"display:none;\">Rechercher par nom du cours, catégorie, université ou enseignant</label>
                        <input id=\"moocline-catalog-search-id\" type=\"search\" placeholder=\"Rechercher par nom du cours, catégorie, université ou enseignant\" name=\"search\" class=\"moocline-catalog-search input-large search-query\">
                       </form>
                    </div>
                        
                </div>
                    
            </div>
<div class=\"span9\">
   </div>
 <div style=\"\" class=\"moocline-catalog-container moocline-catalog-listings-courses-container\">
     <h2>Cours</h2>
     
     
     <div class=\"moocline-catalog-listings\">
         ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 35
            echo "         <div data-topic-id=\"1\" class=\"moocline-catalog-course-listing-box\">
             <div class=\"row-fluid\">
                 
                 <div class=\"span2\">
                     <img src=\"\" class=\"moocline-catalog-listing-thumbnail\">
                 </div>
                 <div class=\"span7\">
                     <div class=\"moocline-catalog-listing-text\">
                         <div class=\"moocline-catalog-listing-primary\">
                             <span class=\"moocline-catalog-listing-university\"> 
                                <a href=\"\" class=\"moocline-catalog-listing-secondary-link internal-home\"> Université Paris Diderot
                                  <span class=\"moocline-catalog-listing-secondary-link-target\"></span>
                                </a><span> </span></span>
                             <span class=\"moocline-catalog-listing-coursename\">
                                 <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_cours_vueEtu", array("id" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id"))), "html", null, true);
            echo "\" class=\"internal-home moocline-catalog-listing-secondary-link\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nom"), "html", null, true);
            echo " </a>
                                     <span class=\"moocline-catalog-listing-course-link-box\"></span></a></span>
                              <span class=\"moocline-catalog-listing-instructor\">avec 
                                  <a href=\"\" class=\"internal-home moocline-catalog-listing-secondary-link\"> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "user"), "nom"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "user"), "prenom"), "html", null, true);
            echo "
                                     <span class=\"moocline-catalog-listing-secondary-link-target\"></span></a><span></span></span>
                         </div>
                     </div>
                 </div>
                 <div class=\"span3\">
                     <div class=\"moocline-catalog-listing-secondary\"><span class=\"moocline-catalog-listing-secondary-item\">avr. 30 2014</span>
                         <span class=\"moocline-catalog-listing-secondary-item\">5 weeks long</span>
                </div>
                </div>
                  
                                     <span></span>
                                   
           
                 </div>
                 
             </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                    
         </div>
                        <span></span>
                         ";
        // line 73
        $this->env->loadTemplate("mooclineCoursBundle:Default:pagination.html.twig")->display($context);
        echo " 
     </div>
 </div>
        </div>
    </div>
           
       
";
    }

    public function getTemplateName()
    {
        return "mooclineCoursBundle:Cours:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 73,  137 => 70,  111 => 52,  103 => 49,  87 => 35,  83 => 34,  64 => 18,  58 => 14,  55 => 13,  49 => 10,  44 => 9,  41 => 8,  35 => 5,  30 => 4,);
    }
}
