<?php

/* mooclineCompteBundle::layout.html.twig */
class __TwigTemplate_0e3f9a57d1b3f45742b83b0f8314aa220d06994c26623cb250b3d63b8a6b8f02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'compte_body' => array($this, 'block_compte_body'),
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
        // line 6
        echo "  \t\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  \t\t<h1>Gestion des Comptes</h1>
  \t\t<hr>

  \t\t";
        // line 14
        $this->displayBlock('compte_body', $context, $blocks);
        // line 17
        echo "
\t";
    }

    // line 14
    public function block_compte_body($context, array $blocks = array())
    {
        // line 15
        echo "  
  \t\t";
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
        return array (  59 => 15,  56 => 14,  51 => 17,  49 => 14,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  48 => 12,  44 => 11,  39 => 8,  36 => 7,  29 => 5,);
    }
}
