<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_22a54d668be4da80f5b848806fe1e37b6ee8ce4854f355f3498e15e55f9b0c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " 
  ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "    <div class=\"alert alert-error\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 13
        echo "
<form class=\"form-horizontal\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    
\t<fieldset>
\t\t
\t\t<legend>Mooc'Line Connexion</legend>
\t\t
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t
\t\t<div class=\"form-group\">
\t\t    <label class=\"col-md-4 control-label\" for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t    <div class=\"col-md-4\">
\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"pseudo ou email\" class=\"form-control input-md\" required=\"required\" />
\t\t\t    <span class=\"help-block\">obligatoire</span>
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    <label class=\"col-md-4 control-label\" for=\"password\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t    <div class=\"col-md-4\">
\t\t    \t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control input-md\" placeholder=\"mot de passe\" required=\"required\" />
\t\t    \t<span class=\"help-block\">obligatoire</span>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-4 control-label\" for=\"checkboxes\"></label>
\t\t  \t<div class=\"col-md-4\">
\t\t\t    <label class=\"checkbox-inline\" for=\"remember_me\">
\t\t\t\t   \t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t    \t";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t\t    \t</label>
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-4 control-label\" for=\"checkboxes\"></label>
\t\t  \t<div class=\"col-md-4\">
\t\t\t\t<input class=\"btn btn-block btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t</fieldset>

</form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  98 => 43,  83 => 31,  74 => 25,  69 => 23,  63 => 20,  54 => 14,  51 => 13,  45 => 11,  43 => 10,  40 => 9,  34 => 6,  29 => 5,);
    }
}
