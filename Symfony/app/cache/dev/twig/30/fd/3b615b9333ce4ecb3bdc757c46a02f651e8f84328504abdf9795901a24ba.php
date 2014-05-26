<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_30fd3b615b9333ce4ecb3bdc757c46a02f651e8f84328504abdf9795901a24ba extends Twig_Template
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
   Connexion
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

<fieldset style=\"margin-top:5%;\">
\t<div class=\"row\">
  \t\t<div class=\"col-md-3 col-md-offset-4\"><legend>Mooc'Line Connexion</legend></div>
\t</div>
\t<form class=\"form-horizontal\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
   \t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t<div class=\"form-group\">
\t\t    <div class=\"col-md-3 col-md-offset-4\">
\t\t    \t<p><label class=\"control-label\" for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></p>
\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"pseudo ou email\" class=\"form-control input-md\" required=\"required\" />
\t\t\t    <!--<span class=\"help-block\">obligatoire</span>-->
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    <div class=\"col-md-3 col-md-offset-4\">
\t\t    \t<p><label class=\"control-label\" for=\"password\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></p>
\t\t    \t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control input-md\" placeholder=\"mot de passe\" required=\"required\" />
\t\t    \t<!--<span class=\"help-block\">obligatoire</span>-->
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\" style=\"margin-top:3%;\">
\t\t  \t<div class=\"col-md-3 col-md-offset-4\">
\t\t\t\t<input class=\"btn btn-block btn-info\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\" style=\"margin-top:3%;\">
\t\t  \t<div class=\"col-md-3 col-md-offset-4\">
\t\t\t    <label class=\"checkbox-inline\" for=\"remember_me\">
\t\t\t\t   \t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t    \t";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t\t    \t</label>
\t\t    \t<span style=\"margin-left:7%;\">
\t\t    \t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">pas encore inscrire ?</a>
\t\t    \t</span>
\t\t    </div>
\t\t</div>
\t</form>
</fieldset>

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
        return array (  106 => 48,  100 => 45,  90 => 38,  80 => 31,  70 => 24,  66 => 23,  60 => 20,  56 => 19,  48 => 13,  42 => 11,  40 => 10,  37 => 9,  29 => 5,);
    }
}
