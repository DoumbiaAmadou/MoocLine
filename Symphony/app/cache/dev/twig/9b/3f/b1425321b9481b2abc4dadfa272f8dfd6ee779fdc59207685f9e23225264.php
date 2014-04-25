<?php

/* mooclineCompteBundle:Register:index.html.twig */
class __TwigTemplate_9b3fb1425321b9481b2abc4dadfa272f8dfd6ee779fdc59207685f9e23225264 extends Twig_Template
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
<!DOCTYPE html>
<html>
  <head>
    <title>Page Test</title>
  </head>
  <body>
    <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "!</h1>

    <p>
      Bonjour ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo ", voici votre pseudo : ";
        echo twig_escape_filter($this->env, (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo")), "html", null, true);
        echo "
    </p>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Register:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 12,  28 => 9,  19 => 2,);
    }
}
