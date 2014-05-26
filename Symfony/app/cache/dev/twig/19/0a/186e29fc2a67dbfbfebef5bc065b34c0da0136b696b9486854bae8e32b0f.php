<?php

/* mooclineCompteBundle::layout.html.twig */
class __TwigTemplate_190a186e29fc2a67dbfbfebef5bc065b34c0da0136b696b9486854bae8e32b0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " 
  ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Compte
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
  ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 17
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
          ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
  ";
        // line 24
        $this->displayBlock('container', $context, $blocks);
        // line 32
        echo "
";
    }

    // line 24
    public function block_container($context, array $blocks = array())
    {
        // line 25
        echo "
    <div>
      ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "    </div>

  ";
    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 28
        echo "      ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  117 => 28,  114 => 27,  108 => 29,  106 => 27,  99 => 24,  92 => 24,  89 => 23,  83 => 22,  74 => 19,  69 => 18,  64 => 17,  57 => 15,  54 => 14,  47 => 11,  44 => 10,  33 => 6,  195 => 81,  191 => 80,  186 => 78,  179 => 74,  175 => 73,  170 => 71,  162 => 66,  158 => 65,  153 => 63,  145 => 58,  141 => 57,  136 => 55,  128 => 50,  124 => 36,  119 => 47,  111 => 42,  107 => 41,  102 => 25,  94 => 32,  90 => 33,  85 => 31,  77 => 26,  73 => 25,  68 => 23,  60 => 16,  56 => 17,  51 => 15,  45 => 12,  38 => 7,  31 => 5,  28 => 4,);
    }
}
